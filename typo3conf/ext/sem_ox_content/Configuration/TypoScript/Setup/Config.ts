config.baseURL      = {$serverProtocol}://{$domain}/
config.index_enable = 1
config.noPageTitle  = 1
config.headerComment >

# Remove language segment from URL
config.defaultGetVars.L >

# Disable FlashMessages queue
config.tx_extbase.legacy.enableLegacyFlashMessageHandling = 0

# Content-Security-Policy
config.additionalHeaders {
    10.header = Content-Security-Policy: default-src https:; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.googleapis.com https://fonts.gstatic.com; script-src 'self' 'unsafe-inline' https://open-xchange.piwikpro.com; form-action 'self' https://seu2.cleverreach.com https://portal.open-xchange.com; object-src 'self'; img-src 'self' data: https://open-xchange.piwikpro.com https://*.staticflickr.com https://*.vimeocdn.com; connect-src 'self';
}

# Spam protection
config.spamProtectEmailAddresses = 2
config.spamProtectEmailAddresses_atSubst = (at)

[globalString = IENV:HTTP_HOST = open-xchange.lh] || [globalString = IENV:HTTP_HOST = localhost]
    config.additionalHeaders {
        10.header = Content-Security-Policy: default-src https:; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.googleapis.com https://fonts.gstatic.com; script-src 'self' 'unsafe-inline' https://open-xchange.piwikpro.com; form-action 'self' https://seu2.cleverreach.com https://portal.open-xchange.com; object-src 'self'; img-src 'self' data: https://open-xchange.piwikpro.com https://*.staticflickr.com https://*.vimeocdn.com; connect-src 'self'; media-src 'self';
    }
[global]