# Background color field
TCEFORM.tt_content {
    CType {
        removeItems = bullets
    }

    # Layout select configuration
    layout.types.gridelements_pi1 {
        altLabels.0 = Please choose...
        removeItems = 1, 2, 3

        addItems {
            banner                      = Banner
            default-section             = Default Section
            no-padding                  = No Padding
            no-padding-bottom           = No Space At Bottom
            no-padding-top-bottom       = No Space At Top And Bottom
            home-hub                    = Home Hub
            news-column                 = News Area
            members-list                = Members List
            quote                       = Quotation
            blue-text-bg                = Blue Text (Mobile)
            parallax-bg                 = Parallax
            full-height-bg              = Key Visual Big
            split-text-image            = Split Responsive Text - Image
            split-text-text             = Split Responsive Text - Text
            split-image-text            = Split Responsive Image - Text
            split-image-responsive-html = Split Text - Responsive HTML
            split-image-image           = Split Responsive Image - Image
            speakers-grid               = Speakers-grid
            no-padding-on-mobile        = No padding on mobile
        }
    }

    layout.types.semoxcontent_videos {
        removeItems = 2, 3
        altLabels {
            0 = List of videos
            1 = Featured video
        }
    }

    layout.types.header {
        removeItems = 0, 1, 2, 3
        addItems {
            text-left   = Left
            text-center = Center
            text-right  = Right
        }
    }


    # Background colors
    tx_semcontent_background_color {
        altLabels.0 = Please Choose

        addItems {
            bg-grey                       = OX Grey
            bg-blue                       = OX Blue
            bg-dark-blue                  = OX Dark Blue
            bg-graphite-black             = OX Graphite Black
            bg-ice-blue                   = OX Ice-Blue
            bg-light-blue                 = OX Light Blue
            bg-lime-green                 = OX Lime
            bg-mandarin                   = OX Mandarin
            bg-mango                      = OX Mango
            bg-medium-blue                = OX Medium Blue
            bg-red-raspberry              = OX Red-Raspberry
            bg-silver-grey                = OX Silver Grey
            blue-gradient                 = OX Spotlight
            white-blue-gradient           = White / OX Medium Blue 1/3 Split
            split-jurney                  = OX Lime Green / OX Ice Blue Split
            split-white-limegreen         = White / OX Lime Green Split
            split-limegreen-graphiteblack = OX Lime Green / OX Graphite Black Split
            split-white-ox-light-blue     = White / OX Light Blue Split 2-1
            split-ox-ice-blue-ox-mango    = OX Ice Blue / OX Mango Split
            bg-dark-medium-blue           = OX Dark Blue / OX Medium Blue Split
        }

        types.tx_semcontent_slider {
            keepItems = 0, blue-gradient
        }
    }

    # Added new imageorient option for Position and Aligment field
    imageorient {
        addItems {
            50  = Top (Coin Image)
            51 = Bottom
            51.icon = EXT:sem_ox_content/Resources/Public/Icons/bottom_center.gif
            52 = Bottom Left
            52.icon = EXT:sem_ox_content/Resources/Public/Icons/bottom_left.png
            53 = Bottom Right
            53.icon = EXT:sem_ox_content/Resources/Public/Icons/bottom_right.png
        }
    }
    rowDescription.disabled = 1


    # Media Text CE configuration
    date.types.textmedia.disabled        = 1
    layout.types.textmedia.disabled      = 1
    imageborder.types.textmedia.disabled = 1
    linkToTop.types.textmedia.disabled   = 1
    subheader.types.textmedia.disabled   = 1

    # Plugins header palette configuration
    header_link.types.list.disabled   = 1
    date.types.list.disabled          = 1

    header_layout.types.semoxcontent_product_teaser.disabled = 1
    header_link.types.semoxcontent_product_teaser.disabled   = 1
    date.types.semoxcontent_product_teaser.disabled          = 1
}

TCEFORM.sys_file_reference.layout.addItems {
    img-circle = Circle Image
    img-mood   = Mood Image
}

TCEFORM.pages.exclude_from_sitemap.disabled = 1
