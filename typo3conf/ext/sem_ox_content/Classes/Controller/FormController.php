<?php
namespace Media711\SemOxContent\Controller;

use In2code\Powermail\Domain\Model\Field;
use In2code\Powermail\Domain\Model\Mail;
use Media711\SemOxContent\Hook\PowermailHook;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Property\TypeConverter\PersistentObjectConverter;

/**
 * Extended controller for powermail forms
 */
class FormController extends \In2code\Powermail\Controller\FormController
{
    /**
     * Action create entry
     *
     * @param Mail $mail
     * @param string $hash
     * @validate $mail In2code\Powermail\Domain\Validator\UploadValidator
     * @validate $mail In2code\Powermail\Domain\Validator\InputValidator
     * @validate $mail In2code\Powermail\Domain\Validator\PasswordValidator
     * @validate $mail In2code\Powermail\Domain\Validator\CaptchaValidator
     * @validate $mail In2code\Powermail\Domain\Validator\SpamShieldValidator
     * @validate $mail In2code\Powermail\Domain\Validator\UniqueValidator
     * @validate $mail In2code\Powermail\Domain\Validator\ForeignValidator
     * @validate $mail In2code\Powermail\Domain\Validator\CustomValidator
     * @required $mail
     * @return void
     */
    public function createAction(Mail $mail, $hash = null)
    {
        // Sent mail to receiver
        $this->settings['receiver']['enable'] = !$this->objectManager->get(PowermailHook::class)->sendCrmRequest($mail);
        parent::createAction($mail, $hash);
    }

    /**
     * Reformat array for createAction
     *
     * @return void
     */
    protected function reformatParamsForAction()
    {
        $this->uploadService->preflight($this->settings);
        $arguments = $this->request->getArguments();

        if (!isset($arguments['field'])) {
            return;
        }

        $newArguments = [
            'mail' => $arguments['mail']
        ];

        // allow subvalues in new property mapper
        $mailMvcArgument = $this->arguments->getArgument('mail');
        $propertyMapping = $mailMvcArgument->getPropertyMappingConfiguration();
        $propertyMapping->allowProperties('answers');
        $propertyMapping->allowCreationForSubProperty('answers');
        $propertyMapping->allowModificationForSubProperty('answers');
        $propertyMapping->allowProperties('form');
        $propertyMapping->allowCreationForSubProperty('form');
        $propertyMapping->allowModificationForSubProperty('form');

        // allow creation of new objects (for validation)
        $propertyMapping->setTypeConverterOptions(
            PersistentObjectConverter::class,
            [
                PersistentObjectConverter::CONFIGURATION_CREATION_ALLOWED => true,
                PersistentObjectConverter::CONFIGURATION_MODIFICATION_ALLOWED => true
            ]
        );

        $iteration = 0;

        foreach ((array)$arguments['field'] as $marker => $value) {
            // ignore internal fields (honeypod)
            if (substr($marker, 0, 2) === '__') {
                continue;
            }

            $fieldUid = $this->fieldRepository->getFieldUidFromMarker($marker, $arguments['mail']['form']);

            // Skip fields without Uid (secondary password, upload)
            if ($fieldUid === 0) {
                continue;
            }

            // allow subvalues in new property mapper
            $propertyMapping->forProperty('answers')->allowProperties($iteration);
            $propertyMapping->forProperty('answers.' . $iteration)->allowAllProperties();
            $propertyMapping->allowCreationForSubProperty('answers.' . $iteration);
            $propertyMapping->allowModificationForSubProperty('answers.' . $iteration);

            /** @var Field $field */
            $field     = $this->fieldRepository->findByUid($fieldUid);
            $valueType = $field->dataTypeFromFieldType(
                $this->fieldRepository->getFieldTypeFromMarker($marker, $arguments['mail']['form'])
            );

            if ($valueType === 3 && is_array($value)) {
                $value = $this->uploadService->getNewFileNamesByMarker($marker);
            }

            if (is_array($value)) {
                if (empty($value)) {
                    $value = '';
                } else {
                    $value = json_encode($value);
                }
            }

            $newArguments['mail']['answers'][$iteration] = [
                'field'     => strval($fieldUid),
                'value'     => htmlspecialchars(strip_tags(GeneralUtility::removeXSS($value))),
                'valueType' => $valueType
            ];

            // edit form: add answer id
            if (!empty($arguments['field']['__identity'])) {
                $answer = $this->answerRepository->findByFieldAndMail($fieldUid, $arguments['field']['__identity']);

                if ($answer !== null) {
                    $newArguments['mail']['answers'][$iteration]['__identity'] = $answer->getUid();
                }
            }

            $iteration++;
        }

        // edit form: add mail id
        if (!empty($arguments['field']['__identity'])) {
            $newArguments['mail']['__identity'] = $arguments['field']['__identity'];
        }

        $this->request->setArguments($newArguments);
        $this->request->setArgument('field', null);
    }
}
