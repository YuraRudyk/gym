tt_content.slickcarousel >
tt_content.slickcarousel2 >
tt_content.slickcarousel3 >

tt_content.slickcarousel =< lib.contentElement
tt_content.slickcarousel {
	templateName = Slickcarousel
	settings {
		slickcarouselid = slickcarousel1
	}
	stdWrap {
		editIcons = tt_content: header [header_layout], records
		editIcons {
			iconTitle.data = LLL:EXT:fluid_styled_content/Resources/Private/Language/FrontendEditing.xlf:editIcon.shortcut
		}
	}
	variables {
		shortcuts = RECORDS
		shortcuts {
			source.field = records
			tables = tt_content
		}
	}
}

tt_content.slickcarousel2 =< tt_content.slickcarousel
tt_content.slickcarousel2 {
	settings {
		slickcarouselid = slickcarousel2
	}
}

tt_content.slickcarousel3 =< tt_content.slickcarousel
tt_content.slickcarousel3 {
	settings {
		slickcarouselid = slickcarousel3
	}
}