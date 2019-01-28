<?php
namespace Simulators\LsSimulators\Controller;

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
 * SimulatorsController
 */
class SimulatorsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * simulatorsRepository
     *
     * @var \Simulators\LsSimulators\Domain\Repository\SimulatorsRepository
     * @inject
     */
    protected $simulatorsRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $simulators = $this->simulatorsRepository->findAll();
//        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($simulators);exit;
        $this->view->assign('simulators', $simulators);
    }

    /**
     * action show
     *
     * @param \Simulators\LsSimulators\Domain\Model\Simulators $simulators
     * @return void
     */
    public function showAction(\Simulators\LsSimulators\Domain\Model\Simulators $simulators)
    {
        $this->view->assign('simulators', $simulators);
        var_dump('test');
    }
}
