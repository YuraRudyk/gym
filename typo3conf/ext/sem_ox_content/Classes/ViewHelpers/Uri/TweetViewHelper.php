<?php
namespace Media711\SemOxContent\ViewHelpers\Uri;

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class TweetViewHelper
 * @package Media711\SemOxContent\ViewHelpers\Uri
 */
class TweetViewHelper extends AbstractViewHelper
{
    /**
     * @var string
     */
    protected $baseUrl = 'https://twitter.com/';

    /**
     * @var string
     */
    protected $path = '{user}/status/{id_str}';

    /**
     * Render a specific actionlink uri (favorite, reply, retweet, show) to a tweet
     *
     * @param \stdClass $tweet
     * @return string
     */
    public function render($tweet)
    {
        $path = str_replace(
            ['{id}', '{id_str}', '{user}'],
            [$tweet->id, $tweet->id_str, $tweet->user->screen_name],
            $this->path
        );

        return $this->baseUrl . $path;
    }
}