plugin.tx_sitemapgenerator {
    urlEntries {
        pages = 1
        pages {
            rootPageId = 1
            additionalWhere = doktype!=6 AND doktype!=254 AND hidden=0 AND (fe_group='' OR fe_group=0) AND no_index=0
        }
    }
}
