plugin.tx_cwtwitter {
    view {
        templateRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Templates/Plugin/CwTwitter/
        }
    }

    parsers {
        urls.field = url
        mentions.typolink >
        hashtags.typolink >
    }
}