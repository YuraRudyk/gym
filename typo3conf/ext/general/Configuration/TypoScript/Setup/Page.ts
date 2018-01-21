page = PAGE
page {
    typeNum = 0

    10 = FLUIDTEMPLATE
    10 {
        templateName = Default

        layoutRootPaths {
            10 = EXT:general/Resources/Private/Layouts/
        }

        partialRootPaths {
            10 = EXT:general/Resources/Private/Partials/
        }

        templateRootPaths {
            10 = EXT:general/Resources/Private/Templates/Page/
        }

        variables {
            content_main < styles.content.get
            content_main.select.where = colPos=0
        }
    }
}