tt_content.slickcarousel >
tt_content.slickcarousel2 >
tt_content.slickcarousel3 >

	// Should be near by tt_content.shortcut
tt_content.slickcarousel = COA
tt_content.slickcarousel {
		// needed by gridelements
	5 = LOAD_REGISTER
	5 {
		tt_content_shortcut_recursive {
			field = recursive
		}
	}
		// Copied from tt_content.shortcut.20
	20 = RECORDS
	20 {
		source.field = records
		tables = {$content.shortcut.tables}
		stdWrap {
			editIcons = tt_content: records
			editIcons.iconTitle.data = LLL:EXT:css_styled_content/Resources/Private/Language/locallang.xlf:eIcon.recordList

			prefixComment = 2 | Inclusion of other records (by reference):
		}
	}
		// needed by gridelements
	30 = RESTORE_REGISTER	
  wrap = <div id="slickcarousel1" class="{$plugin.slick.carousel.css.class}">|</div>
}

tt_content.slickcarousel2 < tt_content.slickcarousel
tt_content.slickcarousel2 {
  wrap = <div id="slickcarousel2" class="{$plugin.slick.carousel.css.class}">|</div>
}
tt_content.slickcarousel3 < tt_content.slickcarousel
tt_content.slickcarousel3 {
  wrap = <div id="slickcarousel3" class="{$plugin.slick.carousel.css.class}">|</div>
}