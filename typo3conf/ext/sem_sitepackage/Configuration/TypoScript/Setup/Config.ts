config {
    baseURL      = http://legion.lh/
    absRefPrefix = /

    # Enable realurl
    tx_realurl_enable       = 0
    simulateStaticDocuments = 0

    # Enable cross domains functionality to resolve domains
    typolinkCheckRootline            = 1
    typolinkEnableLinksAcrossDomains = 1
    prefixLocalAnchors               = all

    # Head comment
    headerComment (
    _________________________________________

_________________________________________
    )

    # Optimizing settings
    xhtml_cleaning       = all
    sendCacheHeaders     = 1
    inlineStyle2TempFile = 1
    removeDefaultJS      = external
    compressJs           = 1
    compressCss          = 1
    concatenateJs        = 1
    concatenateCss       = 1
    prefixComments       = 0
    disablePrefixComment = 1

    # Admin Panel disable
    admPanel = 0

    # Caching
    no_cache                  = 0
    cache_period              = 604800
    cache_clearAtMidnight     = 0
    sendCacheHeaders          = 1
    enableContentLengthHeader = 1

    # Language settings
    linkVars             = L(0-20)
    sys_language_mode    = strict
    sys_language_overlay = hideNonTranslated
    sys_language_uid     = 0
    language             = en
    locale_all           = en_EN.utf-8
    htmlTag_langKey      = en
}

[globalVar = GP:L = 1]
    config {
        sys_language_uid = 1
        language         = de
        locale_all       = de_DE.utf-8
        htmlTag_langKey  = de
    }
[global]

# Additional configuration for Development Application Context
[applicationContext = Development*]
    config {
        # Show error messages
        contentObjectExceptionHandler = 0

        # Disable cache
        no_cache = 1

        # Do not compress assets
        compressJs     = 0
        compressCss    = 0
        concatenateJs  = 0
        concatenateCss = 0
    }
[global]