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
 * SubscriptionController
 */
class SubscriptionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * subscriptionRepository
     *
     * @var \Rudyk\LsTemplate\Domain\Repository\SubscriptionRepository
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
        $this->view->assign('subscriptions', $subscriptions);
    }

    /**
     * action show
     *
     * @param \Rudyk\LsTemplate\Domain\Model\Subscription $subscription
     * @return void
     */
    public function showAction(\Rudyk\LsTemplate\Domain\Model\Subscription $subscription)
    {
        $this->view->assign('subscription', $subscription);
    }
}
