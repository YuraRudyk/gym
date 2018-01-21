<?php
namespace Media711\SemContent\Domain\Model\ContentType;

/**
 * Contains slider properties
 *
 * @package sem_content
 * @subpackage Media711\SemContent\Domain\Model
 * @author Andrii Valkiv
 */
trait SliderTrait
{
    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Media711\SemContent\Domain\Model\Slide>
     */
    protected $slides;

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getSlides()
    {
        return $this->slides;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $slides
     */
    public function setSlides($slides)
    {
        $this->slides = $slides;
    }
}
