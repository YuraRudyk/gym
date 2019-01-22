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
        4 = TEXT
        4.value (
#            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
#            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
#            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
#            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        )
    }

    10 = FLUIDTEMPLATE
    10 {
        templateName = Main
#        templateName = TEXT
#        templateName.stdWrap {
#            cObject = CASE
#            cObject {
#                key.field = backend_layout
#                key.ifEmpty.data = levelfield:-2, backend_layout_next_level, slide
#                default = TEXT
#                default.value = Main
#            }
#        }

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
        font = https://fonts.googleapis.com/icon?family=Material+Icons
        style = EXT:ls_template/Resources/Public/Css/Main.css
    }

    includeJSFooter {
#        ajax = https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js
#        bootstrap = EXT:ex_template/Resources/Public/JavaScript/bootstrap.js
        mainJs = EXT:ls_template/Resources/Public/JavaScript/Main.js
    }

}


// remove jQuery from the bottom of the page
page.includeJSFooterlibs.jquery >
// insert jQuery on the top of the page
page.includeJSLibs.jquery = EXT:bootstrap_package/Resources/Public/JavaScript/Libs/jquery.min.js