mod.wizards.newContentElement.wizardItems {
    common.show := removeFromList(bullets)


    forms.show =

    special {
        elements {
            semoxcontent_videos {
                iconIdentifier = semoxcontent_videos
                title          = LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:videos
                description    = LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:videos.description
                icon           = EXT:sem_ox_content/Resources/Public/Icons/Videos.svg

                tt_content_defValues {
                    CType = semoxcontent_videos
                }
            }

            semoxcontent_custom_slider {
                iconIdentifier  = semoxcontent_custom_slider
                title          = LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:customSlider.label
                description    = LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:customSlider.description
                icon           = EXT:sem_ox_content/Resources/Public/Icons/CustomSlider.svg

                tt_content_defValues {
                    CType = semoxcontent_custom_slider
                }
            }
        }

        show := addToList(semoxcontent_videos, semoxcontent_custom_slider)
    }

    openxchange {
        header = LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:tabs.openxchange
        elements {
            semoxcontent_product_teaser {
                iconIdentifier = semoxcontent_product_teaser
                title          = LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:product_teaser
                description    = LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:product_teaser.description
                icon           = EXT:sem_ox_content/Resources/Public/Icons/Standard.svg

                tt_content_defValues {
                    CType = semoxcontent_product_teaser
                }
            }

            semoxcontent_sponsors {
                conIdentifier  = semoxcontent_sponsors
                title          = LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:sponsors.label
                description    = LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:sponsors.description
                icon           = EXT:sem_ox_content/Resources/Public/Icons/Sponsors.svg

                tt_content_defValues {
                    CType = semoxcontent_sponsors
                }
            }

            semoxcontent_micro_banners {
                iconIdentifier = semoxcontent_micro_banners
                title          = LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:micro_banner.label
                description    = LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:micro_banner.description
                icon           = EXT:sem_ox_content/Resources/Public/Icons/MicroBanners.svg

                tt_content_defValues {
                    CType = semoxcontent_micro_banners
                }
            }

            semoxcontent_mood_image {
                iconIdentifier = semoxcontent_mood_image
                title          = LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:mood_image.label
                description    = LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:mood_image.description
                icon           = EXT:sem_ox_content/Resources/Public/Icons/MoodImage.svg

                tt_content_defValues {
                    CType = semoxcontent_mood_image
                }
            }

            semoxcontent_background_video {
                iconIdentifier = background_video
                title          = LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:background_video
                description    = LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:background_video.description
                icon           = EXT:sem_ox_content/Resources/Public/Icons/BackgroundVideo.svg

                tt_content_defValues {
                    CType = semoxcontent_background_video
                }
            }
        }

        show := addToList(semoxcontent_product_teaser, semoxcontent_sponsors, semoxcontent_micro_banners, semoxcontent_mood_image, semoxcontent_background_video)
    }
}
