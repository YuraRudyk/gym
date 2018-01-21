[PIDinRootline = {$plugin.tx_semoxcontent.settings.pageUid.career}]
lib.careerNavigation      = COA
lib.careerNavigation.wrap = <div class="dropdown jobs-dropdown">|</div>
lib.careerNavigation.10   = TEXT
lib.careerNavigation.10 {
    data = LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:career.careerMenu
    wrap = <div id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">|</div>
}
lib.careerNavigation {
    20 = COA
    20 {
        10 = HMENU
        10 {
            special          = directory
            special.value    = {$plugin.tx_semoxcontent.settings.pageUid.career}
            includeNotInMenu = 1

            1 = TMENU
            1 {
                NO {
                    doNotLinkIt     = 1
                    wrapItemAndSub  = <li>|</li>
                    stdWrap.cObject = CASE
                    stdWrap.cObject {
                        key.field = doktype
                        # default
                        default = TEXT
                        default {
                            typolink.parameter.field = uid
                            field                    = nav_title
                            ifEmpty {
                                field = title
                            }
                        }

                        # external url
                        3 = TEXT
                        3 < .default
                        3.typolink{
                            parameter >
                            parameter                  = {$plugin.tx_semoxcontent.settings.pageUid.career}
                            section.field              = url
                            ATagParams.stdWrap.cObject = TEXT
                            ATagParams.stdWrap.cObject {
                                field = url
                                wrap  = data-id=|
                            }
                        }
                    }
                    stdWrap.cObject.default.typolink.ATagParams = |*| |*| class="go-to-jobs"
                }

                CUR < .NO
                CUR = 1
                CUR.stdWrap.cObject.default.typolink.ATagParams = class="active" |*| class="active" |*| class="go-to-jobs active"

                ACT< .CUR
            }
        }
        wrap = <ul class="dropdown-menu" aria-labelledby="dropdown2">|</ul>
    }

}

lib.careerNavigation >

lib.careerNavigation      = COA
lib.careerNavigation.wrap = <div id="jobs-pages"></div>

[global]
