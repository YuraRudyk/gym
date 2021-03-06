lib.language = COA
lib.language {
    20 = HMENU
    20 {
        special = language
        special.value = 0,1,2
        special.normalWhenNoLanguage = 0
        wrap =
        1 = TMENU
        1 {
            noBlur = 1
            NO = 1
            NO {
                doNotLinkIt = 1
                linkWrap = <li>|</li>
                stdWrap.override = УКР || ENG || РУС
                stdWrap {
                    typolink {
                        parameter.data = page:uid
                        additionalParams = &L=0 || &L=1 || &L=2
                        ATagParams = hreflang="uk_UA" || hreflang="en-En" || hreflang="ru-RU"
                        addQueryString = 1
                        addQueryString.exclude = L,id,no_cache
                        addQueryString.method = GET
                        no_cache = 0
                    }
                }
            }
            ACT < .NO
            ACT = 1
            ACT.doNotLinkIt = 1
            ACT.linkWrap = <li style="display:none;">|</li>
            USERDEF1 < .NO
            USERDEF1 {
                linkWrap = <li class="text-muted">|</li>
                stdWrap.typolink >
            }

            USERDEF2 < .ACT
            USERDEF2 {
                linkWrap = <li class="text-muted">|</li>
                stdWrap.typolink >
            }
        }
    }
    wrap = <ul data-uk-dropdown="mode: click" class="uk-dropdown">|</ul>
}