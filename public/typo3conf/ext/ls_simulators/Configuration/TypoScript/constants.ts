
plugin.tx_lssimulators_simulators {
    view {
        # cat=plugin.tx_lssimulators_simulators/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:ls_simulators/Resources/Private/Templates/
        # cat=plugin.tx_lssimulators_simulators/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:ls_simulators/Resources/Private/Partials/
        # cat=plugin.tx_lssimulators_simulators/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:ls_simulators/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_lssimulators_simulators//a; type=string; label=Default storage PID
        storagePid =
    }
}

plugin.tx_lssimulators_subscription {
    view {
        # cat=plugin.tx_lssimulators_subscription/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:ls_simulators/Resources/Private/Templates/
        # cat=plugin.tx_lssimulators_subscription/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:ls_simulators/Resources/Private/Partials/
        # cat=plugin.tx_lssimulators_subscription/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:ls_simulators/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_lssimulators_subscription//a; type=string; label=Default storage PID
        storagePid =
    }
}
