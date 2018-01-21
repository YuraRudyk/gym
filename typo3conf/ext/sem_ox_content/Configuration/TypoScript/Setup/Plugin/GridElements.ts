lib.gridelements.defaultGridSetup {
    cObject = FLUIDTEMPLATE
    cObject {
        layoutRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Layouts/
        }

        partialRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Partials/Content/
        }

        templateRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Templates/Plugin/Gridelements/
        }
    }
}

tt_content.gridelements_pi1.20.10.setup {
    ## Grid 100%
    1 < lib.gridelements.defaultGridSetup
    1 {
        cObject.templateName = uid1_100
    }

    2 < lib.gridelements.defaultGridSetup
    2 {
        cObject.templateName = uid2_75_25
    }

    ## Grid 66/33
    3 < lib.gridelements.defaultGridSetup
    3.cObject.templateName = uid3_66_33

    ## Grid 50%/50%
    4 < lib.gridelements.defaultGridSetup
    4 {
        cObject.templateName = uid4_50_50
    }

    5 < lib.gridelements.defaultGridSetup
    5 {
        cObject.templateName = uid5_33_66
    }

    6 < lib.gridelements.defaultGridSetup
    6 {
        cObject.templateName = uid6_33_33_33
    }

    7 < lib.gridelements.defaultGridSetup
    7 {
        cObject.templateName = uid7_25_75
    }

    8 < lib.gridelements.defaultGridSetup
    8 {
        cObject.templateName = uid8_25_25_25_25
    }

    ## Footer grid 20%/20%/20%/40%
    9 < lib.gridelements.defaultGridSetup
    9 {
        cObject.templateName = Footer
    }

    ## Custom grid 50%/25%/25%
    10 < lib.gridelements.defaultGridSetup
    10 {
        cObject.templateName = uid10_50_25_25
    }
}