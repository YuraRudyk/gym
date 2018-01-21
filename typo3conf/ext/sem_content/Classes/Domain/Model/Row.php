<?php
namespace Media711\SemContent\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Represents single row in tt_content table.
 *
 * @package sem_content
 * @subpackage Media711\SemContent\Domain\Model
 * @author Andrii Valkiv
 */
class Row extends AbstractEntity
{
    use ContentType\SliderTrait;
}
