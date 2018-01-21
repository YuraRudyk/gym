lib.language = COA
lib.language {
    20 = HMENU
    20 {
        special = language
        special.value = 0,1
        special.normalWhenNoLanguage = 0
        addQueryString = 1

        1 = TMENU
        1 {
            NO {
                linkWrap = <li>|</li>
                stdWrap.override =  English || Deutsch
                ATagParams = style="color: #000;"
            }

            ACT < .NO
            ACT = 1
            ACT.linkWrap = <li class="active">|</li>
            ACT.ATagParams = style="color: #000; text-decoration: underline;"
        }
    }

    wrap = <ul class="list-unstyled lang_nav list-inline padding-bottom-default">|</ul>
}