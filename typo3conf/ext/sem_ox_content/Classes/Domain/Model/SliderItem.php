<?php
namespace Media711\SemOxContent\Domain\Model;

/**
 * Class SliderItem
 * @package Media711\SemOxContent\Domain\Model
 */
class SliderItem extends \Media711\SemContent\Domain\Model\SliderItem
{
    /**
     * @var string $author
     */
    protected $author = '';

    /**
     * @var string $posture
     */
    protected $posture = '';

    /**
     * @var string $bodytext
     */
    protected $bodytext = '';

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getPosture()
    {
        return $this->posture;
    }

    /**
     * @param string $posture
     */
    public function setPosture($posture)
    {
        $this->posture = $posture;
    }

    /**
     * @return string
     */
    public function getBodytext()
    {
        return $this->bodytext;
    }

    /**
     * @param string $bodytext
     */
    public function setBodytext($bodytext)
    {
        $this->bodytext = $bodytext;
    }

}
