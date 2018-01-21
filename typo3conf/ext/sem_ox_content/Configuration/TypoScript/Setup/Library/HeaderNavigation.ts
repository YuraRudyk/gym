lib.headerNavigation = HMENU
lib.headerNavigation {
    excludeUidList = {$plugin.tx_semoxcontent.settings.pageUid.customerPortal}
#    special        = directory
#    special.value  = {$plugin.tx_semsitepackage.settings.pageUid.home}, {$plugin.tx_semoxcontent.settings.pageUid.headerNavigation}
    entryLevel     = 0

    1 = TMENU
    1 {
        expAll = 1

                #wrap = <ul class="menu-list">|</ul>
        NO {
            stdWrap.cObject = COA
            stdWrap.cObject {
                10 = TEXT
                10.if.isTrue.field = nav_title
                10.field = nav_title
                10.wrap = <span>|</span>

                15 = TEXT
                15.if.isFalse.field = nav_title
                15.field = title
                15.wrap = <span>|</span>

                20 = TEXT
                20.if.isTrue.field = subtitle
                20.field = subtitle
                20.wrap = <span class="subtitle">&nbsp;-&nbsp;|</span>
            }
            wrapItemAndSub.cObject = CASE
            wrapItemAndSub.cObject {
                key.field = uid

                9 = TEXT
                9.value = <li id="try-now">|</li>

                {$plugin.tx_semoxcontent.settings.pageUid.customerPortal} = TEXT
                {$plugin.tx_semoxcontent.settings.pageUid.customerPortal}.value = <li id="customer-portal">|</li>

                default       = TEXT
                default.value = <li>|</li>
            }
            ATagParams     = class="menu-title"
        }

        CUR < .NO
        CUR = 1
        CUR.wrapItemAndSub = <li class="active">|</li>
        CUR.ATagParams     = class="active"

        ACT < .CUR
    }

    2 = TMENU
    2 {
        expAll = 1
        wrap   = <ul class="Inset">|</ul>

        NO = 1
        NO {
            stdWrap.cObject = COA
            stdWrap.cObject {
                10 = TEXT
                10.if.isTrue.field = nav_title
                10.field = nav_title
                10.wrap = <span>|</span>

                15 = TEXT
                15.if.isFalse.field = nav_title
                15.field = title
                15.wrap = <span>|</span>

                20 = TEXT
                20.if.isTrue.field = subtitle
                20.field = subtitle
                20.wrap = <span class="subtitle">&nbsp;-&nbsp;|</span>
            }
            wrapItemAndSub = <li>|</li>
        }

        IFSUB < .NO
        IFSUB = 1
        IFSUB {
            doNotLinkIt = 1
        }

        CUR < .NO
        CUR = 1
        CUR.wrapItemAndSub = <li class="active">|</li>
        CUR.ATagParams     = class="active"
    }

    3 = TMENU
    3 {
        expAll = 1
        wrap   = <ul class="Inset">|</ul>

        NO = 1
        NO {
            stdWrap.cObject = COA
            stdWrap.cObject {
                10 = TEXT
                10.if.isTrue.field = nav_title
                10.field = nav_title
                10.wrap = <span>|</span>

                15 = TEXT
                15.if.isFalse.field = nav_title
                15.field = title
                15.wrap = <span>|</span>

                20 = TEXT
                20.if.isTrue.field = subtitle
                20.field = subtitle
                20.wrap = <span class="subtitle">&nbsp;-&nbsp;|</span>
            }
            wrapItemAndSub = <li>|</li>
        }

        CUR < .NO
        CUR = 1
        CUR.wrapItemAndSub = <li class="active">|</li>
        CUR.ATagParams     = class="active"
    }
}

[usergroup = *]
    lib.headerNavigation.excludeUidList >
[global]

lib.searchAnchor = TEXT
lib.searchAnchor {
    if.isFalse.data = DB:pages:{$plugin.tx_semoxcontent.settings.pageUid.search}:hidden
    wrap (
        <li class="search">
            <form name="tx-solr" method="get" class="tx-solr" action="/{$plugin.tx_semoxcontent.settings.pageUid.search}/" accept-charset="utf-8">
                <div class="form-group">
                    <input type="search" name="q" value="" class="form-control">
                </div>
            </form>
        </li>
    )
}

#[usergroup = *]
#    lib.headerNavigation {
#        1 {
#            NO {
#                ATagParams.override = class="briefcase"
#                ATagParams.override.if {
#                    value = {$plugin.tx_semoxcontent.settings.pageUid.headerCustomerPortal}
#                    equals.field = uid
#                }
#            }
#        }
#    }
#[end]
#
#lib.headerNavigationMobile = COA
#lib.headerNavigationMobile {
#    wrap = <ul class="visible-xs">|</ul>
#
#    1 = TEXT
#    1 {
#        if.isFalse.data = DB:pages:{$plugin.tx_semoxcontent.settings.pageUid.contact}:hidden
#
#        value = Contact
#        wrap = <li>|</li>
#        typolink {
#            parameter = {$plugin.tx_semoxcontent.settings.pageUid.contact}
#            ATagParams = class="contact"
#        }
#    }
#
#    2 = TEXT
#    2 {
#        if.isFalse.data = DB:pages:{$plugin.tx_semoxcontent.settings.pageUid.headerCustomerPortal}:hidden
#
#        value =
#        wrap = <li>|</li>
#        typolink {
#            parameter = {$plugin.tx_semoxcontent.settings.pageUid.headerCustomerPortal}
#            ATagParams = class="briefcase"
#        }
#    }
#
#    3 < lib.searchAnchor
#}
