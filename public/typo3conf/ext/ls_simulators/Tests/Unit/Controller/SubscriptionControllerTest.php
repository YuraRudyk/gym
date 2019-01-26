<?php
namespace Simulators\LsSimulators\Tests\Unit\Controller;

/**
 * Test case.
 */
class SubscriptionControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Simulators\LsSimulators\Controller\SubscriptionController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Simulators\LsSimulators\Controller\SubscriptionController::class)
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
    public function listActionFetchesAllSubscriptionsFromRepositoryAndAssignsThemToView()
    {

        $allSubscriptions = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $subscriptionRepository = $this->getMockBuilder(\Simulators\LsSimulators\Domain\Repository\SubscriptionRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $subscriptionRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSubscriptions));
        $this->inject($this->subject, 'subscriptionRepository', $subscriptionRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('subscriptions', $allSubscriptions);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenSubscriptionToView()
    {
        $subscription = new \Simulators\LsSimulators\Domain\Model\Subscription();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('subscription', $subscription);

        $this->subject->showAction($subscription);
    }
}
