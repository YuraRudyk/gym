config.tx_extbase {
    persistence {
        classes {
            Media711\SemOxContent\Domain\Model\Record {
                mapping {
                    tableName  = tt_content
                    columns {
                        tx_semoxcontent_teaser.mapOnProperty         = productTeaser
                        tx_semoxcontent_banner.mapOnProperty         = microBanner
                        tx_semcontent_link.mapOnProperty             = link
                        tx_semcontent_linktext.mapOnProperty         = linkText
                        tx_semcontent_background_color.mapOnProperty = backgroundColor
                        tx_oxcontent_accordionitems.mapOnProperty    = accordionSections
                    }
                }
            }

            Media711\SemOxContent\Domain\Model\TeaserItem {
                mapping {
                    tableName = tx_semoxcontent_domain_model_teaser_item
                }
            }

            Media711\SemOxContent\Domain\Model\MicroBannerItem {
                mapping {
                    tableName = tx_semoxcontent_domain_model_microbanner_item
                }
            }

            Media711\SemOxContent\Domain\Model\SliderItem {
                mapping {
                    tableName = tx_semcontent_domain_model_slideritem
                }
            }
        }
    }

    objects {
        In2code\Powermail\Domain\Validator\CaptchaValidator.className    = Media711\SemOxContent\Domain\Validator\CaptchaValidator
        Media711\SemContent\Domain\Repository\RecordRepository.className = Media711\SemOxContent\Domain\Repository\RecordRepository
    }
}


