mod.wizards.newContentElement.wizardItems.special {
    elements {
        semcontent_slider {
            title          = LLL:EXT:sem_content/Resources/Private/Language/locallang_be.xlf:tt_content.CType.semcontent_slider
            description    = LLL:EXT:sem_content/Resources/Private/Language/locallang_be.xlf:tt_content.CType.semcontent_slider.description
            iconIdentifier = semcontent-slider

            tt_content_defValues {
                CType = semcontent_slider
            }
        }
    }

    show := addToList(semcontent_slider)
}

# preview
mod.web_layout.tt_content.preview.semcontent_slider = EXT:sem_content/Resources/Private/Preview/Slider.html
