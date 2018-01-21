<?php
namespace Media711\SemOxContent\ViewHelpers\Media\Video;

use TYPO3\CMS\Core\Messaging\FlashMessage;
use TYPO3\CMS\Core\Messaging\FlashMessageService;
use TYPO3\CMS\Core\Resource\File;
use TYPO3\CMS\Core\Resource\FileReference;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\Generic\Exception\NotImplementedException;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class DurationViewHelper
 * @package Media711\SemOxContent\ViewHelpers\Media\Video
 */
class DurationViewHelper extends AbstractViewHelper
{
    const VIMEO_VIDEO_EXTENSION = 'vimeo';

    /**
     * Initialize arguments
     */
    public function initializeArguments()
    {
        $this->registerArgument('video', 'mixed', 'Video object');
    }

    /**
     * Renders view helper contents
     *
     * @return string|null
     */
    public function render()
    {
        $video = $this->arguments['video'];

        if (!$video) {
            $video = $this->renderChildren();
        }

        if (($video instanceof File || $video instanceof FileReference) && $video->getType() === File::FILETYPE_VIDEO) {
            try {
                return $this->obtainVideoDuration($video);
            } catch (NotImplementedException $e) {
                $flashMessage = GeneralUtility::makeInstance(FlashMessage::class, NULL, NULL, FlashMessage::NOTICE);
                $flashMessage->setMessage($e->getMessage());

                $flashMessageService = GeneralUtility::makeInstance(FlashMessageService::class);
                $flashMessageService->getMessageQueueByIdentifier()->addMessage($flashMessage);
            }
        }

        return null;
    }

    /**
     * Obtain video duration
     *
     * @param File|FileReference $video
     *
     * @return string
     * @throws NotImplementedException
     */
    protected function obtainVideoDuration($video)
    {
        $videoExtension = $video->getExtension();

        if ($videoExtension !== self::VIMEO_VIDEO_EXTENSION) {
            throw new NotImplementedException(
                'Fetching of video duration for ' . $videoExtension . ' extension is not implemented yet.'
            );
        }

        return $this->getVimeoVideoDuration($video);
    }

    /**
     * @param File|FileReference $video
     * @return string
     */
    protected function getVimeoVideoDuration($video)
    {
        $format = null;

        if (function_exists('curl_init')) {
            $videoId = (int) substr(parse_url($video->getPublicUrl(), PHP_URL_PATH), 1);
            $apiUrl  = 'http://vimeo.com/api/v2/video/' . $videoId . '.xml';

            $ch = \curl_init($apiUrl);

            \curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            \curl_setopt($ch, CURLOPT_HEADER, 0);

            $data = \curl_exec($ch);
            \curl_close($ch);

            $data = new \SimpleXmlElement($data, LIBXML_NOCDATA);

            if (isset($data->video->duration)) {
                $duration = (int) $data->video->duration;
                $hours    = floor($duration / 3600);
                $minutes  = floor($duration / 60 % 60);
                $seconds  = floor($duration % 60);

                $format = ($hours > 0 ? $hours . ':' : '') . $minutes . ':' . $seconds;
            }
        }

        return $format;
    }
}