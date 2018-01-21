lib.gridelements.defaultGridSetup {
    cObject = FLUIDTEMPLATE
    cObject {
        layoutRootPaths {
            0 = EXT:sem_content/Resources/Private/Layouts/
        }

        partialRootPaths {
            0 = EXT:sem_content/Resources/Private/Partials/
        }

        templateRootPaths {
            0 = EXT:sem_content/Resources/Private/Grids/
        }
    }
}

tt_content.gridelements_pi1.20.10.setup {
    ## Grid 100%
    1 < lib.gridelements.defaultGridSetup
    1 {
        cObject.templateName = 100
    }

    ## Grid 75%/25%
    2 < lib.gridelements.defaultGridSetup
    2 {
        cObject.templateName = 75_25
    }

    ## Grid 67%/33%
    3 < lib.gridelements.defaultGridSetup
    3.cObject.templateName = 67_33

    ## Grid 50%/50%
    4 < lib.gridelements.defaultGridSetup
    4 {
        cObject.templateName = 50_50
    }

    ## Grid 33%/67%
    5 < lib.gridelements.defaultGridSetup
    5 {
        cObject.templateName = 33_67
    }

    ## Grid 33%/33%/33%
    6 < lib.gridelements.defaultGridSetup
    6 {
        cObject.templateName = 33_33_33
    }

    ## Grid 25%/75%
    7 < lib.gridelements.defaultGridSetup
    7 {
        cObject.templateName = 25_75
    }

    ## Grid 25%/25%/25%/25%
    8 < lib.gridelements.defaultGridSetup
    8 {
        cObject.templateName = 25_25_25_25
    }
}
