tx_gridelements.setup {
    9 {
        title      = Footer
        icon       = EXT:sem_sitepackage/ext_icon.png
        flexformDS = FILE:EXT:sem_sitepackage/Configuration/FlexForms/GridElements/flexformDS.xml

        config {
            colCount = 5
            rowCount = 1

            rows {
                1 {
                    columns {
                        1 {
                            name   = Width: 20%
                            colPos = 100
                        }

                        2 {
                            name   = Width: 20%
                            colPos = 101
                        }

                        3 {
                            name   = Width: 20%
                            colPos = 102
                        }

                        4 {
                            name   = Width: 40%
                            colPos = 103
                            colspan = 2
                        }
                    }
                }
            }
        }
    }
}