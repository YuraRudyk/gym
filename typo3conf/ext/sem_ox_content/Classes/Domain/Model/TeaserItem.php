<?php
namespace Media711\SemOxContent\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Class TeaserItem
 * @package Media711\SemOxContent\Domain\Model
 */
class TeaserItem extends AbstractEntity
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $subtitle;

    /**
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $image;

    /**
     * @var string
     */
    protected $link;

    /**
     * @var string
     */
    protected $linkText;

    /**
     * @var \Media711\SemOxContent\Domain\Model\Record
     */
    protected $teaser;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * @param string $subtitle
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
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
     * @return \Media711\SemOxContent\Domain\Model\Record
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * @param \Media711\SemOxContent\Domain\Model\Record $teaser
     */
    public function setTeaser($teaser)
    {
        $this->teaser = $teaser;
    }
}