<?php
namespace Media711\SemOxContent\Hook;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class implements hooks of powermail extension
 *
 * @package Media711\SemOxContent\Hook
 * @author Andrii Valkiv
 */
class PowermailHook
{
    /**
     * URL to Open-Xchange CRM
     *
     * @var string
     */
    protected $crmUrl = 'https://crm.open-xchange.com/leads/collector.php';

    /**
     * Sends data to CRM system
     *
     * @param \In2code\Powermail\Domain\Model\Mail $mail
     * @return bool
     */
    public function sendCrmRequest($mail)
    {
        $fields = $this->getCrmFields($mail);

        if (function_exists('curl_init') && !empty($fields)) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->crmUrl);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, implode('&', $fields));
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($httpCode >= 200 && $httpCode < 300) {
                GeneralUtility::devLog(strip_tags(html_entity_decode($response)), 'Contact CRM', -1);
                return true;
            }
        }

        // Warning that something went wrong when post data to CRM
        GeneralUtility::devLog('Ooups! Something went wrong when trying to post data to CRM', 'Contact CRM', 2);
        return false;
    }

    /**
     * Gets CRM fields
     *
     * @param \In2code\Powermail\Domain\Model\Mail $mail
     * @return array
     */
    protected function getCrmFields($mail)
    {
        $mailFields = [];
        $crmFields  = [];

        $answers = $mail->getAnswers();
        $mapping = [
            'company'   => 'opportunity_name_c',
            'firstname' => 'first_name',
            'lastname'  => 'last_name',
            'email'     => 'webtolead_email1',
            'phone'     => 'phone_work',
            'country'   => 'primary_address_country',
            'message'   => 'message_c'
        ];

        if ($answers->count()) {
            /** @var \In2code\Powermail\Domain\Model\Answer $answer */
            foreach ($answers as $answer) { 
                $mailFields[$answer->getField()->getMarker()] = $answer->getStringValue();
                unset($value);
            }
        }

        foreach ($mailFields as $field => $value) {
            if (isset($mapping[$field])) {
                $crmFields[] = $mapping[$field] . '=' . $value;
            }
        }

        return $crmFields;
    }
}
