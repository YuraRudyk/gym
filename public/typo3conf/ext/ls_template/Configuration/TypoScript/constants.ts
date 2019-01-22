
plugin.tx_lstemplate_subscription {
    view {
        # cat=plugin.tx_lstemplate_subscription/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:ls_template/Resources/Private/Templates/
        # cat=plugin.tx_lstemplate_subscription/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:ls_template/Resources/Private/Partials/
        # cat=plugin.tx_lstemplate_subscription/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:ls_template/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_lstemplate_subscription//a; type=string; label=Default storage PID
        storagePid =
    }
}
