lib.menu = COA
lib.menu {
    10 = HMENU
    10 {
        wrap = <div class="menu_left menu_ul">|</div>
        entryLevel = 0
        1 = TMENU
        1 {
            wrap = <div class="menu_1"><ul>|</ul></div>
            target = _top
            NO {
                wrapItemAndSub = <li>|</li>|*|<li>|</li>|*|<li class="last">|</li>
            }


            ACT < .NO
            ACT = 1
            CUR < .NO
            CUR = 1
            CUR {
                allWrap = <div class="menu_act">|</div>
            }
        }
        2 = TMENU
        2 {
            expAll = 0
            wrap = <div class="menu_2"><ul>|</ul></div>
            target = _top
            NO {
                wrapItemAndSub = <li>|</li>
            }
            ACT < .NO
            ACT = 1
            CUR < .NO
            CUR = 1
            CUR {
                allWrap = <div class="menu_act">|</div>
            }
        }
        3 = TMENU
        3 {
            expAll = 1
            wrap = <div class="menu_3"><ul>|</ul></div>
            target = _top
            NO {
                wrapItemAndSub = <li>|</li>
            }
            ACT < .NO
            ACT = 1
            CUR < .NO
            CUR = 1
            CUR {
                allWrap = <div class="menu_act">|</div>
            }
        }
    }
}