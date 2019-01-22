mod.wizards.newContentElement.wizardItems.slick {
	header = Slick
	elements {
		carousel1 {
			icon = ../typo3conf/ext/slick/Resources/Public/Icons/6.2/typo3_slick_responsive_slider_carosuel_big.gif
			title = Slick Carousel 1
			description = Slick carousel is the container of the slick slider. You can enter items for sliding. The corresponding category in the Constant Editor of this carousel is [Slick Carousel 1].
			tt_content_defValues {
				CType = slickcarousel
				header = Slick Carousel 1
			}
		}
		carousel2 {
			icon = ../typo3conf/ext/slick/Resources/Public/Icons/6.2/typo3_slick_responsive_slider_carosuel_big.gif
			title = Slick Carousel 2
			description = Slick carousel is the container of the slick slider. You can enter items for sliding. The corresponding category in the Constant Editor of this carousel is [Slick Carousel 2].
			tt_content_defValues {
				CType = slickcarousel2
				header = Slick Carousel 2
			}
		}
		carousel3 {
			icon = ../typo3conf/ext/slick/Resources/Public/Icons/6.2/typo3_slick_responsive_slider_carosuel_big.gif
			title = Slick Carousel 3
			description = Slick carousel is the container of the slick slider. You can enter items for sliding. The corresponding category in the Constant Editor of this carousel is [Slick Carousel 3].
			tt_content_defValues {
				CType = slickcarousel3
				header = Slick Carousel 3
			}
		}
		item {
			icon = ../typo3conf/ext/slick/Resources/Public/Icons/6.2/typo3_slick_responsive_slider_carosuel_big.gif
			title = LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.item.header
			description = LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.item.description
			tt_content_defValues {
				CType = slickitem
				imagecols = 1
				imageorient = 0
				header = LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.item.header
			}
		}	
	}
	show := addToList(*)
}