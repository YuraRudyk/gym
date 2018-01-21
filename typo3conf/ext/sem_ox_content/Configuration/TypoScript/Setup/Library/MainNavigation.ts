#lib.mainNavigation = COA
#lib.mainNavigation {
#    # Collection of menus
#    20 = COA
#    20 {
#        10 = HMENU
#        10 {
#            #excludeUidList = 33
#            special        = directory
#            special.value  = {$plugin.tx_semsitepackage.settings.pageUid.home}
#
#            1 = TMENU
#            1 {
#                expAll = 1
#
#                #wrap = <ul class="menu-list">|</ul>
#                NO.wrapItemAndSub = <li>|</li>
#                NO.ATagParams     = class="menu-title"
#
#                CUR < .NO
#                CUR = 1
#                CUR.wrapItemAndSub = <li class="active">|</li>
#
#                ACT < .CUR
#            }
#
#            2 = TMENU
#            2 {
#                expAll = 1
#                wrap   = <ul class="Inset">|</ul>
#
#                NO = 1
#                NO.wrapItemAndSub  = <li>|</li>
#
#                CUR = 1
#                CUR.wrapItemAndSub = <li class="active">|</li>
#            }
#
#            3 = TMENU
#            3 {
#                expAll = 1
#                wrap   = <ul class="Inset">|</ul>
#
#                NO = 1
#                NO.wrapItemAndSub  = <li>|</li>
#
#                CUR = 1
#                CUR.wrapItemAndSub = <li class="active">|</li>
#            }
#        }
#
#        # Try Now page
#        20 = HMENU
#        20 {
#            special       = list
#            special.value = 9
#
#            1 = TMENU
#            1 {
#                NO.wrapItemAndSub = <li class="visible-xs"><ul class="Inset"><li style="background: #00a0e1;">|</li></ul></li>
#
#                CUR < .NO
#
#                CUR = 1
#                CUR.wrapItemAndSub = <li class="active visible-xs"><ul class="Inset"><li>|</li></ul></li>
#
#                ACT < .CUR
#            }
#        }
#
#        30 = TEXT
#        30.value (
#            <li class="menu-title contact-info"><b>Germany</b>
#                <p>
#                    Open-Xchange GmbH<br>
#                    Olper Hütte 5F<br>
#                    57462 Olpe<br>
#                    <a href="tel:+49276183850">Tel.: +49 2761-8385-0</a><br>
#                    Fax: +49 2761-8385-30
#                </p>
#            </li>
#            <li class="menu-title contact-info"><b>Germany</b>
#                <p>
#                    Open-Xchange AG<br>
#                    Rollnerstrasse 14<br>
#                    90408 Nuremberg<br>
#                    <a href="tel:+49276183850">Tel.: +49 2761-8385-0</a><br>
#                    Fax: +49 2761-8385-30
#                </p>
#            </li>
#            <li class="menu-title contact-info"><b>USA, California</b>
#                <p>
#                    Open-Xchange, Inc.<br>
#                    530 Lytton Avenue<br>
#                    Palo Alto, CA 94301<br>
#                    United States of America<br>
#                    <a href="tel:+14085000768">Tel.: +1-408-500-0768</a>
#                </p>
#            </li>
#        )
#
#        wrap = <ul class="menu-list">|</ul>
#    }
#
#    wrap = <nav id="menu"><div>|</div></nav>
#}
#
#[loginUser = *]
#    // Customer Portal link itself
#    lib.mainNavigation.20.5 = COA
#    lib.mainNavigation.20.5 {
#        // Customer portal
#        1 = HMENU
#        1 {
#            special       = list
#            special.value = 33
#
#            1 = TMENU
#            1 {
#                expAll = 1
#
#                NO.ATagParams = class="menu-title"
#
#                CUR < .NO
#                CUR = 1
#
#                ACT < .CUR
#            }
#        }
#        // Customer Portal subpages
#        2 = HMENU
#        2 {
#            special       = directory
#            special.value = 33
#
#            1 = TMENU
#            1 {
#                expAll = 1
#                wrap   = <ul class="Inset">|</ul>
#
#                NO.wrapItemAndSub  = <li>|</li>
#
#                IFSUB = 1
#                IFSUB.wrapItemAndSub = <li class="third-level">|</li>
#
#                CUR = 1
#                CUR.wrapItemAndSub = <li class="active">|</li>
#
#                CURIFSUB = 1
#                CURIFSUB.wrapItemAndSub = <li class="third-level active">|</li>
#
#                ACT < .CUR
#
#                ACTIFSUB < .CURIFSUB
#            }
#
#            2 = TMENU
#            2 {
#                expAll = 1
#                wrap   = <ul class="Inset">|</ul>
#
#                NO.wrapItemAndSub  = <li>|</li>
#
#                CUR = 1
#                CUR.wrapItemAndSub = <li class="active">|</li>
#
#                ACT < .CUR
#            }
#        }
#
#        wrap = <li class="login-form-outer">|</li>
#    }
#[global]