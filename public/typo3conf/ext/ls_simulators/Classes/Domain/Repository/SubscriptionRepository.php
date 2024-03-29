<?php
namespace Simulators\LsSimulators\Domain\Repository;

/***
 *
 * This file is part of the "Simulators" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019
 *
 ***/

/**
 * The repository for Subscriptions
 */
class SubscriptionRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
/**
* Initializes the repository.
*
* @return void
*/
    public function initializeObject()
    {
        /** @var $querySettings \TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings */
        $querySettings = $this->objectManager->get(\TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings::class);
        $querySettings->setRespectStoragePage(false);
        $this->setDefaultQuerySettings($querySettings);
    }
}
