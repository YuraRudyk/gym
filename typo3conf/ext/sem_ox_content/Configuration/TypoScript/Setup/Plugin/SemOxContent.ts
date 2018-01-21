plugin.tx_semoxcontent {
    view {
        templateRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/FluidContent/
        }

        partialRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Partials/
        }

        layoutRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Layouts/
        }
    }

    settings {
        #cat=plugin.tx_semoxcontent/content/001; type=string; label=LLL:EXT:sem_ox_content/Resources/Private/Language/locallang_ts.xlf:tx_semsitepackage.footerLogoPath
        footerLogoPath = {$plugin.tx_semoxcontent.settings.footerLogoPath}

        pageUid {
            #cat=plugin.tx_semoxcontent/content/002; type=string; label=LLL:EXT:sem_ox_content/Resources/Private/Language/locallang_ts.xlf:tx_semsitepackage.headerNavigation
            headerNavigation = {$plugin.tx_semoxcontent.settings.pageUid.headerNavigation}
        }

        categoryBlogUid = {$plugin.tx_semoxcontent.settings.categoryBlogUid}
    }
}