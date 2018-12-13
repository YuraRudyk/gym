<?php
if (!getenv('TYPO3_ACTIVE_FRAMEWORK_EXTENSIONS')) {
    putenv('TYPO3_ACTIVE_FRAMEWORK_EXTENSIONS=' . 'about,backend,belog,beuser,context_help,core,cshmanual,documentation,extbase,extensionmanager,felogin,filelist,fluid,fluid_styled_content,form,frontend,func,impexp,info,info_pagetsconfig,install,lang,recordlist,rte_ckeditor,saltedpasswords,scheduler,setup,sv,sys_note,t3editor,tstemplate,viewpage,wizard_crpages,wizard_sortpages');
}
