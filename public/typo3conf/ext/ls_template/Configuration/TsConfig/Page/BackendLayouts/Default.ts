#mod.web_layout.BackendLayouts {
#    onetest {
#        title = default backend layout
#        config {
#            backend_layout {
#                colCount = 1
#                rowCount = 1
#                rows {
#                    1 {
#                        columns {
#                            1 {
#                                name   = Main
#                                colPos = 0
#                            }
#                        }
#                    }
#                }
#            }
#        }
##        icon = EXT:sem_ex_content/Resources/Public/Icons/ext_icon.svg
#    }
#}

mod {
    web_layout {
        BackendLayouts {
            mainSection {
                title = new test
                config {
                    backend_layout {
                        colCount = 1
                        rowCount = 1
                        rows {
                            1 {
                                columns {
                                    1 {
                                        name = LLL:EXT:helios_uws_templates/Resources/Private/Language/backend.xlf:backend_layout.column.normal
#                                        allowed = html
#                                        allowed := addToList(mask_standort-panel,mask_quality-number-panel,mask_blockquote,mask_infobox-panel,mask_patient-information-panel,mask_person-contactpanel,mask_statistic-panel,mask_carousel-gallery,mask_certificate-panel)
#                                        allowed := addToList(mask_featured-news-events-panel,mask_departments-panel,mask_directory-panel,mask_download-panel,mask_experts-panel)
#                                        allowed := addToList(tx_heliosuwsuicomponents_teaserpanel,tx_heliosuwsuicomponents_linklistpanel,gridelements_pi1,list)
                                        colPos = 0
                                    }
                                }
                            }
                        }
                    }
                }
                icon = EXT:helios_uws_templates/Resources/Public/Icons/BackendLayouts/mainSection.gif
            }
        }
    }
}