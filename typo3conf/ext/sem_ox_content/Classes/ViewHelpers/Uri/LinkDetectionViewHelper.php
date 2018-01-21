<?php
namespace Media711\SemOxContent\ViewHelpers\Uri;

use TYPO3\CMS\Core\Messaging\FlashMessage;
use TYPO3\CMS\Core\Messaging\FlashMessageService;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractConditionViewHelper;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * ViewHelper class checks if url linked to file or page
 *
 * Class LinkDetectionViewHelper
 * @package Media711\SemOxContent\ViewHelpers\Uri
 */
class LinkDetectionViewHelper extends AbstractConditionViewHelper
{
    const PAGE_CONTENT_TYPE = 'text/html;';

    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('url', 'string', 'URL to check');
    }

    /**
     * checks if url is linked to page or file, if linked to page then return false
     * @return string
     */
    public function render()
    {
        $url = $GLOBALS['TSFE']->cObj->typoLink_URL(
            [
                'parameter'        => $this->arguments['url'],
                'forceAbsoluteUrl' => true
            ]
        );

        try {
            return strpos($this->detectLinkContentType($url), self::PAGE_CONTENT_TYPE) === false ? $this->renderThenChild() : $this->renderElseChild();
        } catch (\Exception $e) {
            $flashMessage = GeneralUtility::makeInstance(FlashMessage::class, NULL, NULL, FlashMessage::NOTICE);
            $flashMessage->setMessage($e->getMessage());

            $flashMessageService = GeneralUtility::makeInstance(FlashMessageService::class);
            $flashMessageService->getMessageQueueByIdentifier()->addMessage($flashMessage);
        }

        return $this->renderElseChild();
    }

    /**
     * @param $url
     * @return mixed
     * @throws \Exception
     */
    protected function detectLinkContentType($url)
    {
        if(!function_exists('getallheaders')) return self::PAGE_CONTENT_TYPE;

        $allHeaders = @getallheaders();

        if (isset($allHeaders['Authorization'])) {
            $defaultHeaders = stream_context_get_options(stream_context_get_default());

            stream_context_set_default(
                [
                    'http' => [
                        'method' => 'HEAD',
                        'header' => 'Authorization: ' . $allHeaders['Authorization']
                    ]
                ]
            );
        }

        if (!is_array(($headers = @get_headers($url, 1)))) {
            throw new \Exception(
                'Cannot get headers data of url.'
            );
        }

        if (isset($allHeaders['Authorization'])) {
            stream_context_set_default($defaultHeaders);
        }

        return is_array($headers['Content-Type']) ? end($headers['Content-Type']) : $headers['Content-Type'];
    }
}