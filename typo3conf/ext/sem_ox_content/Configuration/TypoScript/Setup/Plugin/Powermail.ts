plugin.tx_powermail {
    view {
        layoutRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Layouts/Powermail/
        }

        templateRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Templates/Plugin/Powermail/
        }

        partialRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Partials/Plugin/Powermail/
        }
    }

    # Use captcha extension
    settings.setup.captcha.use = captcha

    # Disable session method spamshield
    settings.setup.spamshield._enable           = 0
    settings.setup.spamshield.methods.3._enable = 0
    settings.setup.spamshield.methods.4._enable = 0
    settings.setup.spamshield.methods.5._enable = 0
}
