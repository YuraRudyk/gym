RTE {
    colors {
        ox-black {
            name  = Black
            value = #000000
        }
        ox-white {
            name  = White
            value = #ffffff
        }
        ox-graphite-black {
            name  = Graphite-Black
            value = #2d2d2d
        }
        ox-raspberry-red {
            name  = Raspberry-Red
            value = #b42369
        }
    }

    classes {
        text-left {
            name = LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang_tooltips.xlf:justifyleft
        }

        text-center {
            name = LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang_tooltips.xlf:justifycenter
        }

        text-right {
            name = LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang_tooltips.xlf:justifyright
        }

        text-justify {
            name = Justify Align
        }

        checkmark {
            name = Check-Mark List (Green)
        }

        checkmark-blue {
            name = Check-Mark List (Blue)
        }

        standard-bullet-list {
            name = Standard Bullet List
        }

        list-subtext {
            name = List with subtext
        }

        subtitle {
            name = Subtitle
        }

        jumbotron {
            name = Looks like Jumbotron
        }
    }

    classesAnchor {
        buttonLink {
            class = button-link
        }

        externalLinkOxGrey {
            class = external-link-ox-grey
        }

        externalLinkOxIceBlue {
            class = external-link-ox-ice-blue
        }

        downloadOxIceBlue {
            class = download-ox-ice-blue
        }

        downloadOxGrey {
            class = download-ox-grey
        }

        buttonDefault {
            class = button-default
        }

        buttonDarkGrey {
            class = btn-dark-gray
        }

        buttonLimeGreen {
            class = btn-lime-green
        }

        buttonLargeOxgrey {
            class = btn-large-oxgrey
        }

        buttonDarkBlue {
            class = btn-dark-blue
        }

        buttonIceBlue {
            class = btn-ice-blue
        }

        buttonRedRaspberry {
            class = btn-red-raspberry
        }

        buttonMandarin {
            class = btn-mandarin
        }

        buttonMango {
            class = btn-mango
        }

        buttonBlue {
            class = btn-blue
        }

        socialTwitter {
            class = twitter
        }

        socialFacebook {
            class = facebook
        }

        socialGooglePlus {
            class = google
        }

        socialVimeo {
            class = vimeo
        }

        socialFlickr {
            class = flickr
        }

        socialYoutube {
            class = youtube
        }

        socialLinkedin {
            class = linkedin
        }

        socialRss {
            class = rss
        }

        share {
            class = share
        }

        saveTheDate {
            class = save-the-date
        }
    }

    default {
        contentCSS = EXT:sem_ox_content/Resources/Public/Styles/rte.css

        disableColorPicker = 1

        # Colors
        colors = ox-black, ox-white, ox-graphite-black, ox-raspberry-red

        # Convert all DIV to P tags
        proc.preserveDIVSections = 0

        # Allow span tag which doesn't contain any attributes
        proc.entryHTMLparser_db.tags.span.rmTagIfNoAttrib = 0

        proc.allowTags := addToList(hr, address)

        proc.allowedClasses (
            text-left, text-center, text-right, text-justify, button-link, button-default, btn-dark-gray, btn-lime-green,
            btn-large-oxgrey, btn-blue, btn-ice-blue, btn-dark-blue, btn-red-raspberry, btn-mandarin, btn-mango, checkmark, checkmark-blue,
            subtitle, download-ox-ice-blue, download-ox-grey, list-subtext, standard-bullet-list, external-link-ox-grey,
            external-link-ox-ice-blue, share, save-the-date, jumbotron
        )

        proc.allowTagsOutside := addToList(ul, div, a, br, hr, address)

        # Override interface buttons
        buttons {
            left.useClass        = text-left
            center.useClass      = text-center
            right.useClass       = text-right
            justifyfull.useClass = text-justify

            # Format block selector configuration
            formatblock.addItems    := addToList(address)
            formatblock.removeItems := addToList(article, aside, blockquote, footer, header, nav, section)

            # Block tags configuration
            blockstyle {
                # Do not show the classes which are not associated with tag name
                showTagFreeClasses = 0

                h1.allowedClasses  = text-left, text-center, text-right, text-justify, jumbotron
                h2.allowedClasses  = text-left, text-center, text-right, text-justify, jumbotron
                h3.allowedClasses  = text-left, text-center, text-right, text-justify, jumbotron
                h4.allowedClasses  = text-left, text-center, text-right, text-justify, jumbotron
                h5.allowedClasses  = text-left, text-center, text-right, text-justify, jumbotron
                h6.allowedClasses  = text-left, text-center, text-right, text-justify, jumbotron
                div.allowedClasses = text-left, text-center, text-right, text-justify
                p.allowedClasses   = text-left, text-center, text-right, text-justify, subtitle
                ul.allowedClasses  = text-left, text-center, text-right, text-justify, checkmark, checkmark-blue, list-subtext, standard-bullet-list
                ol.allowedClasses  = text-left, text-center, text-right, text-justify, checkmark, checkmark-blue, list-subtext, standard-bullet-list
            }

            # Do not show the classes which are not associated with inline html tag
            textstyle.showTagFreeClasses = 0

            # Configuration of links
            link {
                properties.class.allowedClasses (
                    button-link, button-default, btn-dark-gray, btn-lime-green, btn-large-oxgrey, btn-blue, btn-ice-blue,
                    btn-dark-blue, btn-red-raspberry, btn-mandarin, btn-mango, download-ox-ice-blue, download-ox-grey,
                    external-link-ox-grey, external-link-ox-ice-blue, share, save-the-date, arrow-up, arrow-down
                )

                page.properties.class.default >
                url.properties.class.default  >
                file.properties.class.default >
                mail.properties.class.default >
            }
        }

        showButtons (
            blockstylelabel, blockstyle, textstylelabel, textstyle, formatblock, bold, italic,
            orderedlist, unorderedlist, textindicator, insertcharacter, insertsofthyphen, link, unlink,
            findreplace, chMode, pastetoggle, removeformat, undo, redo, textcolor
        )
    }

    # Configure RTE for header field of "list" type
    config.tt_content.header.types.list {
        showButtons   = bold, italic, insertsofthyphen, chMode, removeformat, undo, redo
        showStatusBar = 0

        proc.allowTags                         = b, strong, i, em, span, br
        proc.allowTagsOutside                  = b, strong, i, em, span, br
        proc.entryHTMLparser_db.allowTags      = b, strong, i, em, span, br
        proc.entryHTMLparser_db.removeTags     = h1,h2,h3,h4,h5,h6,p,div,section,aside,img,ul,li
        proc.entryHTMLparser_db.stripEmptyTags = 1

        proc.entryHTMLparser_db.tags.h1      = 0
        proc.entryHTMLparser_db.tags.h2      = 0
        proc.entryHTMLparser_db.tags.h3      = 0
        proc.entryHTMLparser_db.tags.h4      = 0
        proc.entryHTMLparser_db.tags.h5      = 0
        proc.entryHTMLparser_db.tags.h6      = 0
        proc.entryHTMLparser_db.tags.p       = 0
        proc.entryHTMLparser_db.tags.div     = 0
        proc.entryHTMLparser_db.tags.section = 0
        proc.entryHTMLparser_db.tags.aside   = 0
        proc.entryHTMLparser_db.tags.img     = 0
        proc.entryHTMLparser_db.tags.ul      = 0
        proc.entryHTMLparser_db.tags.li      = 0

        # Specific case <span> tag. Must be allowed.
        proc.entryHTMLparser_db.tags.span = 1
        proc.entryHTMLparser_db.tags.span.rmTagIfNoAttrib = 0
        proc.entryHTMLparser_db.tags.span.allowedAttribs  = class, id

        RTEWidthOverride  = 600
        RTEHeightOverride = 80
    }

    config {
        # Special configuration for bodytext RTE field for micro banner item
        tx_semoxcontent_domain_model_microbanner_item.bodytext {
            showButtons (
                bold, italic, orderedlist, unorderedlist, link, unlink, pastetoggle, removeformat, undo, redo, chMode,
                textstyle
            )
            toolbarOrder (
               bold, italic, orderedlist, unorderedlist, link, unlink, pastetoggle, removeformat, undo, redo, chMode,
               textstyle
            )

            RTEWidthOverride  = 600
            RTEHeightOverride = 300
        }

        tt_content.header.types.semoxcontent_sponsors {
            RTEWidthOverride  = 600
            RTEHeightOverride = 250
        }

        tx_semoxagenda_domain_model_talk.alt_description {
            showButtons (
                bold, italic, undo, redo, chMode
            )

            RTEWidthOverride  = 600
            RTEHeightOverride = 150
        }
    }

}

# Special condition for textstyle classes only for Footer page
[PIDinRootline = 5]
    RTE.default {
        contentCSS = EXT:sem_ox_content/Resources/Public/Styles/rte-footer.css

        proc.allowedClasses (
            twitter, facebook, google, vimeo, flickr, youtube, linkedin, rss
        )

        buttons {
            link {
                properties.class.allowedClasses (
                    twitter, facebook, google, vimeo, flickr, youtube, linkedin, rss
                )
            }
        }
    }
[end]


RTE.default {
    showButtons := addToList(underline)
    proc {
        allowTags                     := addToList(u)
        allowTagsOutside              := addToList(u)
        entryHTMLparser_db.allowTags  := addToList(u)
        entryHTMLparser_db.removeTags := removeFromList(u)
    }
    removeTags := removeFromList(u)
}
