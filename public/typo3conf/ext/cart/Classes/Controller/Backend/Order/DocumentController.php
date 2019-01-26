<?php

namespace Extcode\Cart\Controller\Backend\Order;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

/**
 * Document Controller
 *
 * @author Daniel Lorenz <ext.cart@extco.de>
 */
class DocumentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * Persistence Manager
     *
     * @var \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager
     */
    protected $persistenceManager;

    /**
     * Order Item Repository
     *
     * @var \Extcode\Cart\Domain\Repository\Order\ItemRepository
     */
    protected $itemRepository;

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager $persistenceManager
     */
    public function injectPersistenceManager(
        \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager $persistenceManager
    ) {
        $this->persistenceManager = $persistenceManager;
    }

    /**
     * @param \Extcode\Cart\Domain\Repository\Order\ItemRepository $itemRepository
     */
    public function injectItemRepository(
        \Extcode\Cart\Domain\Repository\Order\ItemRepository $itemRepository
    ) {
        $this->itemRepository = $itemRepository;
    }

    /**
     * Create Action
     *
     * @param \Extcode\Cart\Domain\Model\Order\Item $orderItem
     * @param string $pdfType
     */
    public function createAction(\Extcode\Cart\Domain\Model\Order\Item $orderItem, $pdfType)
    {
        if ($pdfType == 'invoice' && !$orderItem->getInvoiceNumber()) {
            $invoiceNumber = $this->generateNumber($orderItem, $pdfType);
            $orderItem->setInvoiceNumber($invoiceNumber);
            $orderItem->setInvoiceDate(new \DateTime());

            $msg = LocalizationUtility::translate(
                'tx_cart.controller.order.action.generate_number_action.' . $pdfType . '.success',
                $this->extensionName,
                [
                    0 => $invoiceNumber,
                ]
            );

            $this->addFlashMessage($msg);

            $this->itemRepository->update($orderItem);

            $this->persistenceManager->persistAll();
        }

        $this->generatePdfDocument($orderItem, $pdfType);

        $this->itemRepository->update($orderItem);
        $this->persistenceManager->persistAll();

        $msg = ucfirst($pdfType) . '-PDF-Document was generated.';
        $this->addFlashMessage($msg);

        $this->redirect('show', 'Backend\Order\Order', null, ['orderItem' => $orderItem]);
    }

    /**
     * Download Action
     *
     * @param \Extcode\Cart\Domain\Model\Order\Item $orderItem
     * @param string $pdfType
     */
    public function downloadAction(\Extcode\Cart\Domain\Model\Order\Item $orderItem, $pdfType)
    {
        $getter = 'get' . ucfirst($pdfType) . 'Pdfs';
        $pdfs = $orderItem->$getter();
        $originalPdf = end($pdfs->toArray())->getOriginalResource();
        $file = PATH_site . $originalPdf->getPublicUrl();

        $fileName = $originalPdf->getName();

        if (is_file($file)) {
            $fileLen = filesize($file);

            $headers = [
                'Pragma' => 'public',
                'Expires' => 0,
                'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
                'Content-Description' => 'File Transfer',
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
                'Content-Transfer-Encoding' => 'binary',
                'Content-Length' => $fileLen
            ];

            foreach ($headers as $header => $data) {
                $this->response->setHeader($header, $data);
            }

            $this->response->sendHeaders();
            @readfile($file);
        }
    }

    /**
     * Generate Pdf Document
     *
     * @param \Extcode\Cart\Domain\Model\Order\Item $orderItem
     * @param string $pdfType
     */
    protected function generatePdfDocument(\Extcode\Cart\Domain\Model\Order\Item $orderItem, $pdfType)
    {
        $extensionManagerUtility = $this->objectManager->get(
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::class
        );

        if ($extensionManagerUtility->isLoaded('cart_pdf')) {
            $pdfService = $this->objectManager->get(
                \Extcode\CartPdf\Service\PdfService::class
            );

            $pdfService->createPdf($orderItem, $pdfType);
        }
    }
}
