mod {
    SHARED {
        defaultLanguageFlag  = gb
        defaultLanguageLabel = English
    }

    web_list {
        enableDisplayBigControlPanel = activated
        enableLocalizationView       = activated
        enableClipBoard              = activated
    }

    wizards {
        newContentElement {
            wizardItems {
                common.show := removeFromList(text,textpic,image)
            }
        }
    }
}
