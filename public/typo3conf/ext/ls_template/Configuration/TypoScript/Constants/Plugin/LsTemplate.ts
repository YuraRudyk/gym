plugin.ls_template {
    settings {
        headerLogoPath = EXT:ls_template/Resources/Public/markup/images/logo.png
        sitetitle = Legion Sport

        cartImage = EXT:ls_template/Resources/Public/markup/images/ico-shopping-basket.svg
        cartImageTitle = Cart

        pageUid {
            home = 3
            cart = 7
        }
    }

    pageUid {
        cart {
            # cat=plugin.ls_template/pages; type=string; label= Page uid of Cart
            value =
        }
    }
    categories {
        simulators {
            # cat=plugin.ls_template/categories; type=string; label= Uid of Simulators category
            value =
        }
        typeOfTraining {
            # cat=plugin.ls_template/categories; type=string; label= Uid of "Type of training" category
            value =
        }
    }
}