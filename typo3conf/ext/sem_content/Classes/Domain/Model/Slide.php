<?php
namespace Media711\SemContent\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Represents single slide
 *
 * @package sem_content
 * @subpackage Media711\SemContent\Domain\Model
 * @author Andrii Valkiv
 */
class Slide extends AbstractEntity
{
    /**
     * @var string
     */
    protected $header;

    /**
     * @var string
     */
    protected $subheader;

    /**
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $image;

    /**
     * @var string
     */
    protected $bodytext;

    /**
     * @var string
     */
    protected $link;

    /**
     * @var string
     */
    protected $linkText;

    /**
     * @var \Media711\SemContent\Domain\Model\Row
     * @lazy
     */
    protected $slider;

    /**
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param string $header
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }

    /**
     * @return string
     */
    public function getSubheader()
    {
        return $this->subheader;
    }

    /**
     * @param string $subheader
     */
    public function setSubheader($subheader)
    {
        $this->subheader = $subheader;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function setImage($image)
    {
        $this->image = $image;
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

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getLinkText()
    {
        return $this->linkText;
    }

    /**
     * @param string $linkText
     */
    public function setLinkText($linkText)
    {
        $this->linkText = $linkText;
    }

    /**
     * @return \Media711\SemContent\Domain\Model\Row
     */
    public function getSlider()
    {
        return $this->slider;
    }

    /**
     * @param \Media711\SemContent\Domain\Model\Row $slider
     */
    public function setSlider($slider)
    {
        $this->slider = $slider;
    }
}
