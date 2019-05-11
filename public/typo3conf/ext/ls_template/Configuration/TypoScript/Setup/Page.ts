page = PAGE
page {
    typeNum = 0

    bodyTag = <body class="body-div">

    # Favicon

    #    shortcutIcon = typo3conf/ext/commerzreal_template/Resources/Public/dist/images/favicon.ico

    # Meta tags
    meta {
        X-UA-Compatible = IE=edge
        viewport        = width=device-width, initial-scale=1

        keywords.field    = keywords
        abstract.field    = abstract

        description.field = description
        description.stdWrap.stripHtml = 1
    }

    headerData {
        10 = TEXT
        10.value (
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700" rel="stylesheet">

            <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js"></script><![endif]-->
        )
    }

    10 = FLUIDTEMPLATE
    10 {
        templateName = TEXT
        templateName.stdWrap {
            cObject = CASE
            cObject {
                key.field = backend_layout
                key.ifEmpty.data = levelfield:-2, backend_layout_next_level, slide
                default = TEXT
                default.value = Main
            }
        }

        partialRootPaths {
            0 = EXT:ls_template/Resources/Private/Partials/
        }

        templateRootPaths {
            0 = EXT:ls_template/Resources/Private/Templates/Page/
        }

        layoutRootPaths {
            0 = EXT:ls_template/Resources/Private/Layouts/
        }
    }

    includeCSS {
        bootstrap = EXT:ls_template/Resources/Public/markup/css/bootstrap/bootstrap.css
#        font = https://fonts.googleapis.com/icon?family=Material+Icons
#        style = EXT:ex_template/Resources/Public/markup/css/styles.css
        style = EXT:ls_template/Resources/Public/markup/css/styles.css
    }
#
    includeJSFooter {
#        ajax = https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js
#        bootstrap = EXT:ex_template/Resources/Public/JavaScript/bootstrap.js
#        myjs = EXT:ls_template/Resources/Public/markup/js/scripts.js

        js1 = EXT:ls_template/Resources/Public/markup/js/jquery-3.3.1.min.js
        js2 = EXT:ls_template/Resources/Public/markup/js/bootstrap.bundle.min.js
        js3 = EXT:ls_template/Resources/Public/markup/js/bootstrap.min.js
        js4 = EXT:ls_template/Resources/Public/markup/js/slick.min.js
        js5 = EXT:ls_template/Resources/Public/markup/js/uikit.min.js
        js6 = EXT:ls_template/Resources/Public/markup/js/jquery.matchHeight-min.js
        js7 = EXT:ls_template/Resources/Public/markup/js/jquery-ui.min.js
        js8 = EXT:ls_template/Resources/Public/markup/js/scripts.js
    }

}
