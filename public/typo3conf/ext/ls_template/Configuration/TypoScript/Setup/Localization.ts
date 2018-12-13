# Localization:
config {
    sys_language_mode = content_fallback

    # Language settings
    linkVars             = L(0-20)
    sys_language_mode    = strict
    sys_language_overlay = hideNonTranslated
    sys_language_uid     = 0
    language             = ua
    locale_all           = ru_UA.utf8
    htmlTag_langKey      = ua
}

[globalVar = GP:L = 2]
    config {
        sys_language_uid = 2
        language         = ru
        locale_all       = ru_RU.utf8
        htmlTag_langKey  = ru
    }
[global]

[globalVar = GP:L = 1]
    config {
        sys_language_uid = 1
        language         = en
        locale_all       = en_EN.utf-8
        htmlTag_langKey  = en
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