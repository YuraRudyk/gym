tt_content {

    # Override slider template
    tx_semcontent_slider {
        templateName = Slider

        dataProcessing {
            1000 = Media711\SemOxContent\DataProcessing\FlexFormDataProcessor
        }

        templateRootPaths {
            1000 = EXT:sem_ox_content/Resources/Private/Templates/Content/
        }

        partialRootPaths {
            1000 = EXT:sem_ox_content/Resources/Private/Partials/Content/
        }

        layoutRootPaths {
            1000 = EXT:sem_ox_content/Resources/Private/Layouts/
        }
    }

    # Override textmedia
    textmedia {
        settings {
            popup.image.maxW = {$styles.content.textmedia.maxW}
        }
    }

    semoxcontent_videos < lib.fluidContent
    semoxcontent_videos {
        templateName = Videos

        dataProcessing {
            1    = Media711\SemOxContent\DataProcessing\VideosDataProcessor
            1000 = Media711\SemOxContent\DataProcessing\FlexFormDataProcessor
        }

        templateRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Templates/Content/
        }

        partialRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Partials/Content/
        }

        layoutRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Layouts/
        }
    }

    semoxcontent_background_video < lib.fluidContent
    semoxcontent_background_video {
        templateName = BackgroundVideo

        dataProcessing {
            1    = Media711\SemOxContent\DataProcessing\BackgroundVideoDataProcessor
            1000 = Media711\SemOxContent\DataProcessing\FlexFormDataProcessor

        }

        templateRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Templates/Content/
        }

        partialRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Partials/Content/
        }

        layoutRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Layouts/
        }
    }

    semoxcontent_product_teaser < lib.fluidContent
    semoxcontent_product_teaser {
        templateName = ProductTeaser

        dataProcessing {
            1 = Media711\SemOxContent\DataProcessing\ProductTeaserDataProcessor
        }

        templateRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Templates/Content/
        }

        partialRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Partials/Content/
        }

        layoutRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Layouts/
        }
    }

    semoxcontent_custom_slider < lib.fluidContent
    semoxcontent_custom_slider {
        templateName = CustomSlider

        dataProcessing {
            10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
            10 {
                references.fieldName = assets
            }

            1000 = Media711\SemOxContent\DataProcessing\FlexFormDataProcessor
        }

        templateRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Templates/Content/
        }

        partialRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Partials/Content/
        }

        layoutRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Layouts/
        }
    }

    semoxcontent_sponsors < lib.fluidContent
    semoxcontent_sponsors {
        templateName = Sponsors

        dataProcessing {
            10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
            10 {
                references {
                    table     = tt_content
                    fieldName = image
                }
                as = images
            }
            20 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
            20 {
                references.fieldName = assets
            }
        }

        templateRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Templates/Content/
        }

        partialRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Partials/Content/
        }

        layoutRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Layouts/
        }
    }

    semoxcontent_micro_banners < lib.fluidContent
    semoxcontent_micro_banners {
        templateName = MicroBanners

        dataProcessing {
            1 = Media711\SemOxContent\DataProcessing\MicroBannersDataProcessor
        }

        templateRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Templates/Content/
        }

        partialRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Partials/Content/
        }

        layoutRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Layouts/
        }
    }

    semoxcontent_mood_image < lib.fluidContent
    semoxcontent_mood_image {
        templateName = MoodImage

        dataProcessing {
            10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
            10 {
                references {
                    table     = tt_content
                    fieldName = image
                }
                as = images
            }
        }

        templateRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Templates/Content/
        }

        partialRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Partials/Content/
        }

        layoutRootPaths {
            10 = EXT:sem_ox_content/Resources/Private/Layouts/
        }
    }
}
