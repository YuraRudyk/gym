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
 * SubscriptionController
 */
class SubscriptionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * subscriptionRepository
     *
     * @var \Simulators\LsSimulators\Domain\Repository\SubscriptionRepository
     * @inject
     */
    protected $subscriptionRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $subscriptions = $this->subscriptionRepository->findAll();
        $items = [];
        foreach ($subscriptions->toArray() as $key => $value) {
            if ($key % 2 == 0) {
                $items[$key] = [
                    'white' => true,
                    'item' => $value
                ];
            } else {
                $items[$key] = [
                    'white' => false,
                    'item' => $value
                ];
            }
        }
        $this->view->assign('subscriptions', $items);
    }

    /**
     * action show
     *
     * @param \Simulators\LsSimulators\Domain\Model\Subscription $subscription
     * @return void
     */
    public function showAction(\Simulators\LsSimulators\Domain\Model\Subscription $subscription)
    {
        $this->view->assign('subscription', $subscription);
    }
}
