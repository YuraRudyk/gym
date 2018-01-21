<?php
namespace Media711\SemOxContent\Eid;

use TYPO3\CMS\Core\Mail\Mailer;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class SendMailEid
 * @package Media711\SemOxContent\Eid
 */
class SendMailEid
{
    /**
     * increment viewed field in news table
     *
     * @return void
     */
    public function processRequest()
    {
        $email = GeneralUtility::_GP('email');

        if ($this->sendMail($email)) {
            echo json_encode(['action' => 'send_mail', 'success' => true]);
        } else {
           echo json_encode(['action' => 'send_mail', 'success' => false]);
        }
    }

    /**
     * Send mail by request
     *
     * @param string $email
     * @return int

     */
    protected function sendMail($email)
    {
        $mailer = GeneralUtility::makeInstance(Mailer::class);

        return $mailer->send(
            $mailer
                ->createMessage()
                ->setFrom($email)
                ->setTo('info@open-xchange.com')
                ->setBody(
                    '<html><head></head>' .
                    '<p>The customer with email' . $email . 'has forgotten his password</p>' .
                    '</body></html>',
                    'text/html'
                )
        );
    }
}
