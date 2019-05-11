lib.parseFunc_RTE_subscription {
    externalBlocks := addToList(ul)
    externalBlocks {
        ul.stripNL = 1
        ul.callRecursive = 1
        ul.callRecursive.tagStdWrap.HTMLparser = 1
        ul.callRecursive.tagStdWrap.HTMLparser.tags.ul {
            fixAttrib.class.default = list
        }
    }
}

lib.parseFunc_RTE_simulator {
    externalBlocks := addToList(ul)
    externalBlocks {
        ul.stripNL = 1
        ul.callRecursive = 1
        ul.callRecursive.tagStdWrap.HTMLparser = 1
        ul.callRecursive.tagStdWrap.HTMLparser.tags.ul {
            fixAttrib.class.default = dots-list
        }
    }
}