<?php
return array (
  'helhum/typo3-console' => 
  array (
    '_dummy' => 
    array (
      'vendor' => 'typo3_console',
      'replace' => 
      array (
        0 => 'extbase:_core_command',
        1 => 'extbase:_extbase_help',
        2 => 'extbase:help:error',
        3 => 'typo3_console:_dummy',
      ),
    ),
    'backend:createadmin' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\BackendCommandController',
      'controllerCommandName' => 'createAdmin',
    ),
    'backend:lock' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\BackendCommandController',
      'controllerCommandName' => 'lock',
      'replace' => 
      array (
        0 => 'backend:backend:lock',
      ),
    ),
    'backend:lockforeditors' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\BackendCommandController',
      'controllerCommandName' => 'lockForEditors',
    ),
    'backend:unlock' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\BackendCommandController',
      'controllerCommandName' => 'unlock',
      'replace' => 
      array (
        0 => 'backend:backend:unlock',
      ),
    ),
    'backend:unlockforeditors' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\BackendCommandController',
      'controllerCommandName' => 'unlockForEditors',
    ),
    'cache:flush' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\CacheCommandController',
      'controllerCommandName' => 'flush',
      'runLevel' => 'buildCompiletimeSequence',
    ),
    'cache:flushcomplete' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\CacheCommandController',
      'controllerCommandName' => 'flushComplete',
      'runLevel' => 'buildBasicRuntimeSequence',
    ),
    'cache:flushgroups' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\CacheCommandController',
      'controllerCommandName' => 'flushGroups',
    ),
    'cache:flushtags' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\CacheCommandController',
      'controllerCommandName' => 'flushTags',
    ),
    'cache:listgroups' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\CacheCommandController',
      'controllerCommandName' => 'listGroups',
    ),
    'cleanup:updatereferenceindex' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\CleanupCommandController',
      'controllerCommandName' => 'updateReferenceIndex',
      'replace' => 
      array (
        0 => 'backend:referenceindex:update',
      ),
      'aliases' => 
      array (
        0 => 'backend:referenceindex:update',
        1 => 'referenceindex:update',
      ),
    ),
    'configuration:remove' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\ConfigurationCommandController',
      'controllerCommandName' => 'remove',
      'runLevel' => 'buildBasicRuntimeSequence',
    ),
    'configuration:set' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\ConfigurationCommandController',
      'controllerCommandName' => 'set',
      'runLevel' => 'buildBasicRuntimeSequence',
    ),
    'configuration:show' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\ConfigurationCommandController',
      'controllerCommandName' => 'show',
    ),
    'configuration:showactive' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\ConfigurationCommandController',
      'controllerCommandName' => 'showActive',
    ),
    'configuration:showlocal' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\ConfigurationCommandController',
      'controllerCommandName' => 'showLocal',
      'runLevel' => 'buildBasicRuntimeSequence',
    ),
    'database:export' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\DatabaseCommandController',
      'controllerCommandName' => 'export',
    ),
    'database:import' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\DatabaseCommandController',
      'controllerCommandName' => 'import',
      'runLevel' => 'buildBasicRuntimeSequence',
    ),
    'database:updateschema' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\DatabaseCommandController',
      'controllerCommandName' => 'updateSchema',
      'runLevel' => 'buildBasicRuntimeSequence',
      'bootingSteps' => 
      array (
        0 => 'helhum.typo3console:database',
        1 => 'helhum.typo3console:persistence',
      ),
    ),
    'documentation:generatexsd' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\DocumentationCommandController',
      'controllerCommandName' => 'generateXsd',
    ),
    'extension:activate' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\ExtensionCommandController',
      'controllerCommandName' => 'activate',
      'replace' => 
      array (
        0 => 'extensionmanager:extension:install',
      ),
      'aliases' => 
      array (
        0 => 'extension:install',
        1 => 'extensionmanager:extension:install',
      ),
    ),
    'extension:deactivate' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\ExtensionCommandController',
      'controllerCommandName' => 'deactivate',
      'replace' => 
      array (
        0 => 'extensionmanager:extension:uninstall',
      ),
      'aliases' => 
      array (
        0 => 'extension:uninstall',
        1 => 'extensionmanager:extension:uninstall',
      ),
    ),
    'extension:dumpautoload' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\ExtensionCommandController',
      'controllerCommandName' => 'dumpAutoload',
      'runLevel' => 'buildCompiletimeSequence',
      'replace' => 
      array (
        0 => 'extensionmanager:extension:dumpclassloadinginformation',
      ),
      'aliases' => 
      array (
        0 => 'extension:dumpclassloadinginformation',
        1 => 'extensionmanager:extension:dumpclassloadinginformation',
      ),
    ),
    'extension:list' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\ExtensionCommandController',
      'controllerCommandName' => 'list',
    ),
    'extension:removeinactive' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\ExtensionCommandController',
      'controllerCommandName' => 'removeInactive',
    ),
    'extension:setup' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\ExtensionCommandController',
      'controllerCommandName' => 'setup',
    ),
    'extension:setupactive' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\ExtensionCommandController',
      'controllerCommandName' => 'setupActive',
    ),
    'frontend:request' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\FrontendCommandController',
      'controllerCommandName' => 'request',
    ),
    'install:setup' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\InstallCommandController',
      'controllerCommandName' => 'setup',
      'runLevel' => 'buildCompiletimeSequence',
    ),
    'install:generatepackagestates' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\InstallCommandController',
      'controllerCommandName' => 'generatePackageStates',
      'runLevel' => 'buildCompiletimeSequence',
    ),
    'install:fixfolderstructure' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\InstallCommandController',
      'controllerCommandName' => 'fixFolderStructure',
      'runLevel' => 'buildCompiletimeSequence',
    ),
    'install:extensionsetupifpossible' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\InstallCommandController',
      'controllerCommandName' => 'extensionSetupIfPossible',
      'runLevel' => 'buildCompiletimeSequence',
    ),
    'install:environmentandfolders' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\InstallCommandController',
      'controllerCommandName' => 'environmentAndFolders',
      'runLevel' => 'buildCompiletimeSequence',
    ),
    'install:databaseconnect' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\InstallCommandController',
      'controllerCommandName' => 'databaseConnect',
      'runLevel' => 'buildCompiletimeSequence',
    ),
    'install:databaseselect' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\InstallCommandController',
      'controllerCommandName' => 'databaseSelect',
      'runLevel' => 'buildCompiletimeSequence',
    ),
    'install:databasedata' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\InstallCommandController',
      'controllerCommandName' => 'databaseData',
      'runLevel' => 'buildBasicRuntimeSequence',
      'bootingSteps' => 
      array (
        0 => 'helhum.typo3console:database',
        1 => 'helhum.typo3console:persistence',
      ),
    ),
    'install:defaultconfiguration' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\InstallCommandController',
      'controllerCommandName' => 'defaultConfiguration',
      'runLevel' => 'buildBasicRuntimeSequence',
      'bootingSteps' => 
      array (
        0 => 'helhum.typo3console:database',
        1 => 'helhum.typo3console:persistence',
      ),
    ),
    'install:actionneedsexecution' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\InstallCommandController',
      'controllerCommandName' => 'actionNeedsExecution',
      'runLevel' => 'buildCompiletimeSequence',
    ),
    'scheduler:run' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\SchedulerCommandController',
      'controllerCommandName' => 'run',
      'replace' => 
      array (
        0 => 'scheduler:scheduler:run',
      ),
    ),
    'upgrade:all' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\UpgradeCommandController',
      'controllerCommandName' => 'all',
      'runLevel' => 'buildCompiletimeSequence',
    ),
    'upgrade:checkextensionconstraints' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\UpgradeCommandController',
      'controllerCommandName' => 'checkExtensionConstraints',
      'runLevel' => 'buildCompiletimeSequence',
    ),
    'upgrade:list' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\UpgradeCommandController',
      'controllerCommandName' => 'list',
      'runLevel' => 'buildCompiletimeSequence',
    ),
    'upgrade:wizard' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\UpgradeCommandController',
      'controllerCommandName' => 'wizard',
      'runLevel' => 'buildCompiletimeSequence',
    ),
    'upgrade:subprocess' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\UpgradeCommandController',
      'controllerCommandName' => 'subProcess',
    ),
    'upgrade:checkextensioncompatibility' => 
    array (
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\UpgradeCommandController',
      'controllerCommandName' => 'checkExtensionCompatibility',
      'runLevel' => 'buildCompiletimeSequence',
    ),
  ),
);