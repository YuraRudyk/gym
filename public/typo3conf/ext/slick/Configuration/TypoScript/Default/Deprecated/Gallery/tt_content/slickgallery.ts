tt_content.slickgallery >
tt_content.slickgallery2 >
tt_content.slickgallery3 >

tt_content.slickgallery =< lib.contentElement
tt_content.slickgallery {
	templateName = Slickgallery
	dataProcessing {
		10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
		10 {
			references.fieldName = image
		}
		20 = TYPO3\CMS\Frontend\DataProcessing\GalleryProcessor
		20 {
			maxGalleryWidth = {$styles.content.textmedia.maxW}
			maxGalleryWidthInText = {$styles.content.textmedia.maxWInText}
			columnSpacing = {$styles.content.textmedia.columnSpacing}
			borderWidth = {$styles.content.textmedia.borderWidth}
			borderPadding = {$styles.content.textmedia.borderPadding}
		}
	}
	settings {
		slickgalleryid = slickgallery1
	}
	stdWrap {
		editIcons = tt_content : image [imageorient|imagewidth|imageheight], [imagecols|imageborder], image_zoom
		editIcons {
			iconTitle.data = LLL:EXT:fluid_styled_content/Resources/Private/Language/FrontendEditing.xlf:editIcon.image
		}
	}
}

tt_content.slickgallery2 =< tt_content.slickgallery
tt_content.slickgallery2 {
	settings {
		slickgalleryid = slickgallery2
	}
}

tt_content.slickgallery3 =< tt_content.slickgallery
tt_content.slickgallery3 {
	settings {
		slickgalleryid = slickgallery3
	}
}