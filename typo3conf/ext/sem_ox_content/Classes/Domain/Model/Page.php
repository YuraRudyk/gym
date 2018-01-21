<?php

namespace Media711\SemOxContent\Domain\Model;

use \TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Page extends AbstractEntity
{

    /**
     * @var tinyint
     */
    protected $noIndex;
    
    /**
     * @return tinyint
     */
    public function getNoIndex()
    {
        return $this->noIndex;
    }

    /**
     * @param $noIndex
     * @return void
     */
    public function setNoIndex($NoIndex)
    {
        $this->NoIndex = $NoIndex;
    }
}