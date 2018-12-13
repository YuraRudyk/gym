lib.menu = COA
lib.menu {
    wrap = <div class="menu_left menu_ul">|</div>
    10 = HMENU
    10 {
        entryLevel = 0
        excludeUidList = 30
        1 = TMENU
        1 {
            wrap = <div class="menu_1"><ul>|</ul></div>
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
#        2 = TMENU
#        2 {
#            expAll = 0
#            wrap = <div class="menu_2"><ul>|</ul></div>
#            target = _top
#            NO {
#                wrapItemAndSub = <li>|</li>
#            }
#            ACT < .NO
#            ACT = 1
#            CUR < .NO
#            CUR = 1
#            CUR {
#                allWrap = <div class="menu_act">|</div>
#            }
#        }
#        3 = TMENU
#        3 {
#            expAll = 1
#            wrap = <div class="menu_3"><ul>|</ul></div>
#            target = _top
#            NO {
#                wrapItemAndSub = <li>|</li>
#            }
#            ACT < .NO
#            ACT = 1
#            CUR < .NO
#            CUR = 1
#            CUR {
#                allWrap = <div class="menu_act">|</div>
#            }
#        }
    }

    20 = HMENU
    20 {
        special       = list
        special.value = 30

        1 = TMENU
        1 {
            expAll = 1


            NO {
                ATagParams = class="footer-link"

                # Replace menu item text with image if defined in page tab "Resources"-->"Media"
                stdWrap.override.cObject = COA
                stdWrap.override.cObject{
                    10 = IMAGE
                    10.file = {$plugin.tx_general.settings.basket}
#                    10.file.width = 50
                }
                wrapItemAndSub = <li>|</li>
            }

            ACT < .NO
            ACT = 1

            CUR < .NO
            CUR = 1
            CUR {
                wrapItemAndSub = <li class="menu_act">|</li>
            }
        }
    }

}