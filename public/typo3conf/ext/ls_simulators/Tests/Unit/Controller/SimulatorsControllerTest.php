<?php
namespace Simulators\LsSimulators\Tests\Unit\Controller;

/**
 * Test case.
 */
class SimulatorsControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Simulators\LsSimulators\Controller\SimulatorsController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Simulators\LsSimulators\Controller\SimulatorsController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllSimulatorssFromRepositoryAndAssignsThemToView()
    {

        $allSimulatorss = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $simulatorsRepository = $this->getMockBuilder(\Simulators\LsSimulators\Domain\Repository\SimulatorsRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $simulatorsRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSimulatorss));
        $this->inject($this->subject, 'simulatorsRepository', $simulatorsRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('simulatorss', $allSimulatorss);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenSimulatorsToView()
    {
        $simulators = new \Simulators\LsSimulators\Domain\Model\Simulators();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('simulators', $simulators);

        $this->subject->showAction($simulators);
    }
}
