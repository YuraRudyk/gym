tt_content.slickimage >

tt_content.slickimage =< lib.contentElement
tt_content.slickimage {
	templateName = Slickimage
	dataProcessing {
		10 = Netzmacher\Slick\DataProcessing\FlexFormProcessor
		20 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
		20 {
			references.fieldName = image
		}
		30 = TYPO3\CMS\Frontend\DataProcessing\GalleryProcessor
		30 {
			maxGalleryWidth = {$styles.content.textmedia.maxW}
			maxGalleryWidthInText = {$styles.content.textmedia.maxWInText}
			columnSpacing = {$styles.content.textmedia.columnSpacing}
			borderWidth = {$styles.content.textmedia.borderWidth}
			borderPadding = {$styles.content.textmedia.borderPadding}
		}
	}
	stdWrap {
		editIcons = tt_content : image [imageorient|imagewidth|imageheight], [imagecols|imageborder], image_zoom
		editIcons {
			iconTitle.data = LLL:EXT:fluid_styled_content/Resources/Private/Language/FrontendEditing.xlf:editIcon.image
		}
	}
}