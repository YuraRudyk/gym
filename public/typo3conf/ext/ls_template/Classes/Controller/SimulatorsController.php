<?php
namespace Rudyk\LsTemplate\Controller;

/***
 *
 * This file is part of the "LS Template" Extension for TYPO3 CMS.
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
     * @var \Rudyk\LsTemplate\Domain\Repository\SimulatorsRepository
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
        $this->view->assign('simulators', $simulators);
    }

    /**
     * action show
     *
     * @param \Rudyk\LsTemplate\Domain\Model\Simulators $simulators
     * @return void
     */
    public function showAction(\Rudyk\LsTemplate\Domain\Model\Simulators $simulators)
    {
        $this->view->assign('simulators', $simulators);
    }
}
