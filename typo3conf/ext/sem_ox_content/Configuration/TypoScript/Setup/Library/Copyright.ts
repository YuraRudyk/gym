lib.copyright = COA
lib.copyright {

    5 = IMAGE
    5 {
        file = {$plugin.tx_semoxcontent.settings.footerLogoPath}
    }
    10 = COA
    10 {
        20 = TEXT
        20 {
            value = Ruthlessly open &copy; Open-Xchange
        }
        40 = TEXT
        40 {
            data       = date:U
            strftime   = %Y
            noTrimWrap = | ||
        }
        wrap  = <p>|</p>
    }

    wrap = <div class="copyright">|</div>
}