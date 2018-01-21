plugin.tx_powermail {
    settings {
        spamshield {
            emailSubject    = Open-Xchange - Spam in contact form is recognized
            email           = sales@open-xchange.com
            logfileLocation = typo3temp/logs/powermail_spam.log
        }

        addAdditionalJavaScript = 0

        validation {
            client = 0
            native = 0
        }
    }
}