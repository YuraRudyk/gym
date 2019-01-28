lib.cart = IMAGE
lib.cart {
    file = {$plugin.ls_template.settings.cartImage}
    params = class="ico-svg"
    altText.data = {$plugin.ls_template.settings.cartImageTitle}
    stdWrap.typolink.parameter = {$plugin.ls_template.settings.pageUid.cart}
    stdWrap.typolink.ATagParams = class="ico-shop"
}