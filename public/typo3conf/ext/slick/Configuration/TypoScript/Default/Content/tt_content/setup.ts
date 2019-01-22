tt_content.slickcontent >

tt_content.slickcontent =< lib.contentElement
tt_content.slickcontent {
	templateName = Slickcontent
	dataProcessing {
		10 = Netzmacher\Slick\DataProcessing\FlexFormProcessor
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