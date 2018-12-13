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
            <script>
                window._tiConfig = window._tiConfig || {
                    tiDomain: 'responder.wt-safetag.com',
                    tiId: '427096606843090',
                    // customDomain: 'sub.domain.tld',
                    // customPath: 'js/container_script.js',
                    option: {}
                };

                /** start TagIntegration loader  */
                (function(d,c,a,f){d.wts=d.wts||[];var g=function(b){var a="";b.customDomain&&b.customPath?a=b.customDomain+"/"+b.customPath:b.tiDomain&&b.tiId&&(a=b.tiDomain+"/resp/api/get/"+b.tiId+"?url="+encodeURIComponent(d.location.href)+"&v=5");if(b.option)for(var c in b.option)a+="&"+c+"="+encodeURIComponent(b.option[c]);return a};if(-1===c.cookie.indexOf("wt_r=1")){var e=c.getElementsByTagName(a)[0];a=c.createElement(a);a.async=!0;a.onload=function(){if("undefined"!==typeof d.wt_r&&!isNaN(d.wt_r)){var b=
                new Date,a=b.getTime()+1E3*parseInt(d.wt_r);b.setTime(a);c.cookie="wt_r=1;path=/;expires="+b.toUTCString()}};a.src="//"+g(f);e.parentNode.insertBefore(a,e)}})(window,document,"script",_tiConfig);
                /** end TagIntegration loader */
            </script>
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

#    includeCSS {
#        bootstrap = EXT:ex_template/Resources/Public/Styles/bootstrap.css
#        font = https://fonts.googleapis.com/icon?family=Material+Icons
#        style = EXT:ex_template/Resources/Public/Styles/style.css
#    }
#
#    includeJSFooter {
#        ajax = https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js
#        bootstrap = EXT:ex_template/Resources/Public/JavaScript/bootstrap.js
#        myjs = EXT:ex_template/Resources/Public/JavaScript/script.js
#        button = EXT:ex_template/Resources/Public/JavaScript/button.js
#        select_build = EXT:ex_template/Resources/Public/JavaScript/select_build.js
#
#    }

}
