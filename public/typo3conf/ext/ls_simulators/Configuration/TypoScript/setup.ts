
plugin.tx_lssimulators_simulators {
    view {
        templateRootPaths.0 = EXT:ls_simulators/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_lssimulators_simulators.view.templateRootPath}
        partialRootPaths.0 = EXT:ls_simulators/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_lssimulators_simulators.view.partialRootPath}
        layoutRootPaths.0 = EXT:ls_simulators/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_lssimulators_simulators.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_lssimulators_simulators.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_lssimulators_subscription {
    view {
        templateRootPaths.0 = EXT:ls_simulators/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_lssimulators_subscription.view.templateRootPath}
        partialRootPaths.0 = EXT:ls_simulators/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_lssimulators_subscription.view.partialRootPath}
        layoutRootPaths.0 = EXT:ls_simulators/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_lssimulators_subscription.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_lssimulators_subscription.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

# these classes are only used in auto-generated templates
plugin.tx_lssimulators._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-ls-simulators table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-ls-simulators table th {
        font-weight:bold;
    }

    .tx-ls-simulators table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
