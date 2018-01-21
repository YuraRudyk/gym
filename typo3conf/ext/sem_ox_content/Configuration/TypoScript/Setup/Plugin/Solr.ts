plugin.tx_solr {
    enabled = 1

    solr {
        scheme = http
        host   = 172.20.80.12
        port   = 8080
        path   = /solr/ox_website_en/
    }

    index {
        fieldProcessingInstructions {
            datetime_dateS = timestampToIsoDate
        }

        queue {
            pages = 1
            pages {
                allowedPageTypes      = 1,7
                additionalWhereClause = (doktype = 1 OR (doktype=7 AND mount_pid_ol=0)) AND no_search = 0

                fields {
                    title = title

                    content         = SOLR_CONTENT
                    content.cObject = CONTENT
                    content.cObject {
                        table = tt_content
                        select {
                            selectFields    = bodytext
                            pidInList.field = uid
                            orderBy         = sorting
                        }

                        renderObj            = SOLR_CONTENT
                        renderObj.field      = bodytext
                        renderObj.noTrimWrap = || |
                    }
                }
            }

            news = 1
            news {
                table = tx_news_domain_model_news

                fields {
                    title = title

                    content       = SOLR_CONTENT
                    content.field = teaser

                    datetime_dateS       = TEXT
                    datetime_dateS.field = datetime

                    author              = author
                    authorEmail_stringS = author_email

                    url       = TEXT
                    url.field = externalurl
                }
            }

            jobs = 1
            jobs {
                table = tx_semoxjobs_domain_model_job

                fields {
                    title = title

                    teaser_textM       = SOLR_CONTENT
                    teaser_textM.field = teaser

                    content       = SOLR_CONTENT
                    content.field = bodytext

                    location_stringS         = SOLR_CONTENT
                    location_stringS.cObject = SOLR_RELATION
                    location_stringS.cObject {
                        localField = location
                    }

                    city_stringS = city

                    identifier_stringS = identifier

                    url = TEXT
                    url {
                        typolink {
                            parameter        = 24
                            additionalParams = &L={field:__solr_index_language}&tx_semoxjobs_pi1[controller]=Job&tx_semoxjobs_pi1[action]=show&tx_semoxjobs_pi1[job]={field:uid}
                            additionalParams.insertData = 1

                            useCacheHash = 1
                            returnLast   = url
                        }
                    }
                }
            }

            management = 1
            management {
                table = tx_semoxstaff_domain_model_employee

                fields {
                    title            = TEXT
                    title.value      = {field:first_name} {field:last_name}
                    title.insertData = 1

                    content       = SOLR_CONTENT
                    content.field = bodytext

                    position_stringS = position

                    url = TEXT
                    url {
                        typolink {
                            parameter        = 25
                            additionalParams = &L={field:__solr_index_language}
                            additionalParams.insertData = 1

                            useCacheHash = 1
                            returnLast   = url
                        }
                    }

                    fileReferenceUid = FILES
                    fileReferenceUid {
                        maxItems = 1
                        begin    = 2

                        references {
                            table     = tx_semoxstaff_domain_model_employee
                            uid.data  = field:uid
                            fieldName = images
                        }

                        # Fetch uid of attached file reference
                        renderObj        = TEXT
                        renderObj.data   = file:current:uid
                        renderObj.intval = 1
                    }
                }
            }
        }
    }

    search {
        query {
            queryFields (
                content^40.0, teaser^10.0, teaser_textM^10.0, identifier_stringS^10.0, title^5.0, author^5.0,
                authorEmail_stringS^5.0, location_stringS^5.0, position_stringS^5.0, city_stringS^5.0, tagsH1^5.0,
                tagsH2H3^3.0, tagsH4H5H6^2.0, keywords^2.0, tagsInline^1.0
            )
        }

        results {
            # Highlighting component
            resultsHighlighting = 1
            resultsHighlighting {
                fragmentSize      = 185
                fragmentSeparator = ...
                wrap              = <strong>|</strong>
            }

            pagebrowser {
                pagesBefore = 2
                pagesAfetr  = 2
            }
        }
    }
}

plugin.tx_solr.index.queue.pages.indexer.authorization.username = ox-staging
plugin.tx_solr.index.queue.pages.indexer.authorization.password = Juvwap8yNiwKZbGR

[globalString = IENV:HTTP_HOST = staging.open-xchange.com]
    plugin.tx_solr.solr.path = /solr/ox_website_staging_en/
[global]

[globalString = IENV:HTTP_HOST = open-xchange.lh]
    plugin.tx_solr.solr.host = 172.20.80.12
[global]
