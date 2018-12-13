lib.language = COA
lib.language {
    20 = HMENU
    20 {
        special = language
        special.value = 0,1,2
        special.normalWhenNoLanguage = 0
        addQueryString = 1

        1 = TMENU
        1 {
            NO {
                linkWrap = <li>|</li>
                stdWrap.override = UA ||| EN ||| RU
                
            }

            ACT < .NO
            ACT = 1
            ACT.linkWrap = <li class="current_language_item">|</li>
        }
    }

    wrap = <ul class="lang_nav">|</ul>
}

lib.language.20 >
lib.language.20 = HMENU
lib.language.20 {
   special = language
   special.value = 0,1,2
   special.normalWhenNoLanguage = 1
   1 = GMENU
   1.NO {
       XY = [5.w]+4, [5.h]+4
       backColor = black
       5 = IMAGE
       5.file = fileadmin/user_upload/images/ukr.png || fileadmin/user_upload/images/eng.png || fileadmin/user_upload/images/rus.png
       5.offset = 2,2
   }

   1.ACT < .1.NO
   1.ACT = 1
   1.ACT.backColor = white

   
}