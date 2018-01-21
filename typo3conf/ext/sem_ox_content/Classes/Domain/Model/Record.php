<?php
namespace Media711\SemOxContent\Domain\Model;

use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Class Record
 * @package Media711\SemOxContent\Domain\Model
 */
class Record extends \Media711\SemContent\Domain\Model\Record
{
    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Media711\SemOxContent\Domain\Model\TeaserItem>
     */
    protected $productTeaser;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Media711\SemOxContent\Domain\Model\MicroBannerItem>
     */

    protected $microBanner;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Media711\SemOxContent\Domain\Model\SliderItem>
     */
    protected $slider;


    /**
     * Record constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->productTeaser     = new ObjectStorage();
        $this->microBanner       = new ObjectStorage();
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getProductTeaser()
    {
        return $this->productTeaser;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $productTeaser
     */
    public function setProductTeaser($productTeaser)
    {
        $this->productTeaser = $productTeaser;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getMicroBanner()
    {
        return $this->microBanner;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $microBanner
     */
    public function setMicroBanner($microBanner)
    {
        $this->microBanner = $microBanner;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Media711\SemOxContent\Domain\Model\SliderItem>
     */
    public function getSlider()
    {
        return $this->slider;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Media711\SemOxContent\Domain\Model\SliderItem> $slider
     */
    public function setSlider($slider)
    {
        $this->slider = $slider;
    }
}
