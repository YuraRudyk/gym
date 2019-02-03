<?php
namespace Simulators\LsSimulators\Controller;

use TYPO3\CMS\Extbase\Domain\Repository\CategoryRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
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
     * @var \TYPO3\CMS\Extbase\Domain\Repository\CategoryRepository
     */
    protected $categoryRepository;

    /**
     * @param \TYPO3\CMS\Extbase\Domain\Repository\CategoryRepository
     */
    public function injectSomeRepository(\TYPO3\CMS\Extbase\Domain\Repository\CategoryRepository $categoryRepository) {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $simulators = $this->simulatorsRepository->findAll();
        $simulatorsCategories = $this->categoryRepository->findByParent($this->settings['categories']['simulators']);
        $typesOfTraining = $this->categoryRepository->findByParent($this->settings['categories']['typeOfTraining']);
        $this->view->assignMultiple([
            'simulators' => $simulators,
            'simulatorsCategories' => $simulatorsCategories,
            'typesOfTraining' => $typesOfTraining,
        ]);
    }

    /**
     * action show
     *
     * @param \Simulators\LsSimulators\Domain\Model\Simulators $simulators
     * @return void
     */
    public function showAction(\Simulators\LsSimulators\Domain\Model\Simulators $simulators)
    {
        $similar = null;
        if ($simulators->getCategories()->count()) {
            foreach ($simulators->getCategories() as $category) {
                if ($category->getParent()->getUid() == 4) {
                    $similar = $this->simulatorsRepository->findByCategories($category->getUid(), 15);
                }
            }
        }


        $this->view->assignMultiple([
            'simulators' => $simulators,
            'similar' => $similar
        ]);
    }

    /**
     * action slider
     *
     * @return void
     */
    public function sliderAction()
    {
        $simulators = $this->simulatorsRepository->findByCategories(3);
        $this->view->assignMultiple([
            'simulators' => $simulators
        ]);
    }
}
