<?php
namespace Media711\SemContent\Hooks\PageLayoutView;

use Media711\SemContent\Domain\Repository\RowRepository;
use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Backend\View\PageLayoutView;
use TYPO3\CMS\Backend\View\PageLayoutViewDrawItemHookInterface;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Fluid\View\StandaloneView;

/**
 * Class SliderPreviewRenderer
 *
 * @package semcontent
 * @subpackage Media711\SemContent\Hooks\PageLayoutView
 * @author Andrii Valkiv
 */
class SliderPreviewRenderer implements PageLayoutViewDrawItemHookInterface
{
    /**
     * @var \TYPO3\CMS\Extbase\Object\ObjectManager
     */
    protected $objectManager;

    /**
     * @var \TYPO3\CMS\Fluid\View\TemplateView
     */
    protected $view;

    /**
     * SliderPreviewRenderer constructor.
     */
    public function __construct()
    {
        $this->objectManager = GeneralUtility::makeInstance(ObjectManager::class);
        $this->view          = $this->objectManager->get(StandaloneView::class);
        
        $modSettings  = BackendUtility::getModTSconfig(0, 'mod');
        $templatePath = $modSettings['properties']['web_layout.']['tt_content.']['preview.']['semcontent_slider'];

        $this->view->setTemplatePathAndFilename(GeneralUtility::getFileAbsFileName($templatePath));
    }

    /**
     * Preprocesses the preview rendering of a content element of type "semcontent_slider"
     *
     * @param \TYPO3\CMS\Backend\View\PageLayoutView $parentObject Calling parent object
     * @param bool $drawItem Whether to draw the item using the default functionality
     * @param string $headerContent Header content
     * @param string $itemContent Item content
     * @param array $row Record row of tt_content
     */
    public function preProcess(
        PageLayoutView &$parentObject,
        &$drawItem,
        &$headerContent,
        &$itemContent,
        array &$row
    ) {
        if ($row['CType'] == 'semcontent_slider') {
            /** @var \Media711\SemContent\Domain\Model\Row $record */
            $record = $this->objectManager->get(RowRepository::class)->findOneByRow($row, true);
            $slides = $record ? $record->getSlides() : [];

            $this->view->assignMultiple([
                'slides' => $slides,
                'data'   => $row
            ]);

            $itemContent .= $this->view->render();
            $drawItem     = false;
        }
    }
}
