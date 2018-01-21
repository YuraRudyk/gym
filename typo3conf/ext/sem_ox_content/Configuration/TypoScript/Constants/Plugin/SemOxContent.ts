plugin.tx_semoxcontent {
    settings {
        footerLogoPath = EXT:sem_ox_content/Resources/Public/Images/ox-logo-footer.png
        pageUid {
            headerNavigation        = 8
            headerProfile           = 43
            headerCustomerPortal    = 41
            customerPortal          = 33
            search                  = 31
            contact                 = 10
            customerPortalChangePwd = 131
            registrationRedirect    = 139
            passwordChangeRedirect  = 140
            blogPid                 = 141
            blogStorage             = 216
            pressReleaseStorage     = 26
            releasePid              = 149
            career                  = 146
        }
        categoryBlogUid = 10
    }
}


# Override footer page uid
plugin.tx_semsitepackage.settings.pageUid.footer = 5

# Override logo
plugin.tx_semsitepackage.settings.logo = EXT:sem_ox_content/Resources/Public/Images/ox-logo.png

# Pages UIDs configuration for Production Application Context
[globalString = IENV:HTTP_HOST = testing.open-xchange.com]
plugin.tx_semoxcontent.settings {
    pageUid {
        headerNavigation        = 8
        headerProfile           = 43
        headerCustomerPortal    = 41
        customerPortal          = 33
        search                  = 31
        contact                 = 10
        customerPortalChangePwd = 147
        registrationRedirect    = 148
        passwordChangeRedirect  = 149

        blogPid                 = 211
        blogStorage             = 216
#        pressReleaseStorage     =
        releasePid              = 213
        career                  = 251
    }

    categoryBlogUid = 10
}
[global]


[globalString = IENV:HTTP_HOST = www.open-xchange.com]
    plugin.tx_semoxcontent.settings {
        pageUid {
            headerNavigation        = 8
            headerProfile           = 43
            headerCustomerPortal    = 41
            customerPortal          = 33
            search                  = 31
            contact                 = 10
            customerPortalChangePwd = 147
            registrationRedirect    = 148
            passwordChangeRedirect  = 149
            blogPid                 = 211
            blogStorage             = 216
#            pressReleaseStorage     =
            releasePid              = 213
            career                  = 251
        }

        categoryBlogUid = 10
    }
[global]
