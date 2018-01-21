#change tag <b> to <strong> and <i> to <em>
lib.parseFunc_RTE.tags {
    b = TEXT
    b {
        current = 1
        wrap    = <strong>|</strong>
    }
    
    i = TEXT
    i {
        current = 1
        wrap    = <em>|</em>
    }
}

