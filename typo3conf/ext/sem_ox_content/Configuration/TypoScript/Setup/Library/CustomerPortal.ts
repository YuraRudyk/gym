lib.customerPortal = USER_INT
lib.customerPortal {
    userFunc   = TYPO3\CMS\Felogin\Controller\FrontendLoginController->main
    storagePid = 42
    recursive  =

    templateFile = EXT:sem_ox_content/Resources/Private/Templates/Plugin/Felogin/FrontendLogin.html

    # baseURL for the link generation
    feloginBaseURL = {$serverProtocol}://{$domain}/

    # should a wrapper class be set for this content element
    wrapContentInBaseClass = 0

    # typolink-configuration for links / urls
    # parameter and additionalParams are set by extension
    linkConfig {
        target     =
        ATagParams = rel="nofollow"
    }

    # preserve GET vars - define "all" or comma separated list of GET-vars that should be included by link generation
    preserveGETvars = all

    # additional fields
    showForgotPasswordLink =
    showPermaLogin =

    # time in hours how long the link for forget password is valid
    forgotLinkHashValidTime = 12

    # when setting a new password, this is the minimum amount of characters
    newPasswordMinLength = 6

    welcomeHeader_stdWrap {
        wrap = <p>|</p>
        htmlSpecialChars = 1
    }
    welcomeMessage_stdWrap {
        wrap = <div>|</div>
        htmlSpecialChars = 1
    }

    successHeader_stdWrap {
        wrap = <p>|</p>
        htmlSpecialChars = 1
    }
    successMessage_stdWrap {
        wrap = <div>|</div>
        htmlSpecialChars = 1
    }

    logoutHeader_stdWrap {
        wrap = <p>|</p>
        htmlSpecialChars = 1
    }
    logoutMessage_stdWrap {
        wrap = <div>|</div>
        htmlSpecialChars = 1
    }

    errorHeader_stdWrap {
        wrap = <p>|</p>
        htmlSpecialChars = 1
    }
    errorMessage_stdWrap {
        wrap = <li>|</li>
        htmlSpecialChars = 1
    }

    forgotHeader_stdWrap {
        wrap = <h3>|</h3>
        htmlSpecialChars = 1
    }
    forgotMessage_stdWrap {
        wrap = <div>|</div>
        htmlSpecialChars = 1
    }
    forgotErrorMessage_stdWrap {
        wrap = <div>|</div>
        htmlSpecialChars = 1
    }
    forgotResetMessageEmailSentMessage_stdWrap {
        wrap = <div>|</div>
        htmlSpecialChars = 1
    }
    changePasswordNotValidMessage_stdWrap {
        wrap = <div>|</div>
        htmlSpecialChars = 1
    }
    changePasswordTooShortMessage_stdWrap {
        wrap = <div>|</div>
        htmlSpecialChars = 1
    }
    changePasswordNotEqualMessage_stdWrap {
        wrap = <div>|</div>
        htmlSpecialChars = 1
    }

    changePasswordHeader_stdWrap {
        wrap = <h3>|</h3>
        htmlSpecialChars = 1
    }
    changePasswordMessage_stdWrap {
        wrap = <div>|</div>
        htmlSpecialChars = 1
    }
    changePasswordDoneMessage_stdWrap {
        wrap = <div>|</div>
        htmlSpecialChars = 1
    }

    cookieWarning_stdWrap {
        wrap = <p style="color:red; font-weight:bold;">|</p>
        htmlSpecialChars = 1
    }

    # stdWrap for fe_users fields used in Messages
    userfields {
        username {
            htmlSpecialChars = 1
            wrap = <strong>|</strong>
        }
    }

    # redirect options
    redirectMode = groupLogin, userLogin
    redirectFirstMethod = 1
    redirectPageLogin =
    redirectPageLoginError =
    redirectPageLogout =

    # disable redirect with one switch
    redirectDisable =

    email_from =
    email_fromName =
    replyTo =

    # Allowed Referrer-Redirect-Domains:
    domains =

    # Show logout form direct after login
    showLogoutFormAfterLogin =

    dateFormat = Y-m-d H:i

    # Expose the information on whether or not the account for which a new password was requested exists. By default, that information is not disclosed for privacy reasons.
    exposeNonexistentUserInForgotPasswordDialog = 0
}

# Adjustments when user is not logged in.
[loginUser = ]
    # Customer-Portal form trigger in header navigation
#    lib.headerNavigation.1 {
#        NO.wrapItemAndSub.cObject {
#            41       = TEXT
#            41.value = <li id="customer-portal"><a href="#">|</a></li>
#        }
#
#
#        NO.doNotLinkIt = 1
#        NO.doNotLinkIt.if {
#            equals.field = uid
#            value        = 41
#        }
#    }

    # Prepend form in main navigation
#    lib.mainNavigation.10 < lib.customerPortal
[global]