CREATE TABLE pages (
    no_index tinyint(4) unsigned DEFAULT '0' NOT NULL,
);

CREATE TABLE pages_language_overlay (
    no_index tinyint(4) unsigned DEFAULT '0' NOT NULL,
);

CREATE TABLE tt_content (
    tx_semoxcontent_assets_folder  text,
    tx_semoxcontent_teaser         int(11)       DEFAULT '0' NOT NULL,
    tx_semoxcontent_slider_speed   int(11)       DEFAULT '0' NOT NULL,
    tx_semoxcontent_section_frame  varchar(30)   DEFAULT ''  NOT NULL,
    tx_semoxcontent_banner         int(11)       DEFAULT '0' NOT NULL,
    tx_semoxcontent_slider_layout  varchar(30)   DEFAULT ''  NOT NULL,
    tx_semoxcontent_text           text,
    tx_semoxcontent_autoplay       tinyint(4)    DEFAULT '0' NOT NULL,
    tx_semoxcontent_height         varchar(30)   DEFAULT ''  NOT NULL,
);

CREATE TABLE tx_semcontent_domain_model_slideritem (
    author   varchar(100)   DEFAULT ''  NOT NULL,
    posture  varchar(100)   DEFAULT ''  NOT NULL,
    bodytext text,
);

CREATE TABLE tx_semoxcontent_domain_model_teaser_item (
    uid              int(11)      NOT NULL auto_increment,
    pid              int(11)      DEFAULT '0' NOT NULL,
    tstamp           int(11)      DEFAULT '0' NOT NULL,
    crdate           int(11)      DEFAULT '0' NOT NULL,
    cruser_id        int(11)      DEFAULT '0' NOT NULL,
    t3ver_oid        int(11)      DEFAULT '0' NOT NULL,
    t3ver_id         int(11)      DEFAULT '0' NOT NULL,
    t3ver_wsid       int(11)      DEFAULT '0' NOT NULL,
    t3ver_label      varchar(30)  DEFAULT ''  NOT NULL,
    t3ver_state      tinyint(4)   DEFAULT '0' NOT NULL,
    t3ver_stage      tinyint(4)   DEFAULT '0' NOT NULL,
    t3ver_count      int(11)      DEFAULT '0' NOT NULL,
    t3ver_tstamp     int(11)      DEFAULT '0' NOT NULL,
    t3ver_move_id    int(11)      DEFAULT '0' NOT NULL,
    t3_origuid       int(11)      DEFAULT '0' NOT NULL,
    editlock         tinyint(4)   DEFAULT '0' NOT NULL,
    sys_language_uid int(11)      DEFAULT '0' NOT NULL,
    l10n_parent      int(11)      DEFAULT '0' NOT NULL,
    l10n_diffsource  mediumtext,
    deleted          tinyint(4)   DEFAULT '0' NOT NULL,
    hidden           tinyint(4)   DEFAULT '0' NOT NULL,
    starttime        int(11)      DEFAULT '0' NOT NULL,
    endtime          int(11)      DEFAULT '0' NOT NULL,
    sorting          int(11)      DEFAULT '0' NOT NULL,
    fe_group         varchar(100) DEFAULT '0' NOT NULL,

    title            varchar(255) DEFAULT '' NOT NULL,
    subtitle         varchar(255) DEFAULT '' NOT NULL,
    image            int(11)      unsigned DEFAULT '0' NOT NULL,
    link_text        varchar(255) DEFAULT '' NOT NULL,
    link             varchar(255) DEFAULT '' NOT NULL,
    teaser           int(11)      DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
    KEY sys_language_uid_l10n_parent (sys_language_uid,l10n_parent),
    KEY teaser (teaser)
);

CREATE TABLE sys_file_reference (
    layout varchar(100) DEFAULT '0' NOT NULL
);

CREATE TABLE tx_semoxcontent_domain_model_microbanner_item (
    uid              int(11)      NOT NULL auto_increment,
    pid              int(11)      DEFAULT '0' NOT NULL,
    tstamp           int(11)      DEFAULT '0' NOT NULL,
    crdate           int(11)      DEFAULT '0' NOT NULL,
    cruser_id        int(11)      DEFAULT '0' NOT NULL,
    t3ver_oid        int(11)      DEFAULT '0' NOT NULL,
    t3ver_id         int(11)      DEFAULT '0' NOT NULL,
    t3ver_wsid       int(11)      DEFAULT '0' NOT NULL,
    t3ver_label      varchar(30)  DEFAULT ''  NOT NULL,
    t3ver_state      tinyint(4)   DEFAULT '0' NOT NULL,
    t3ver_stage      tinyint(4)   DEFAULT '0' NOT NULL,
    t3ver_count      int(11)      DEFAULT '0' NOT NULL,
    t3ver_tstamp     int(11)      DEFAULT '0' NOT NULL,
    t3ver_move_id    int(11)      DEFAULT '0' NOT NULL,
    t3_origuid       int(11)      DEFAULT '0' NOT NULL,
    editlock         tinyint(4)   DEFAULT '0' NOT NULL,
    sys_language_uid int(11)      DEFAULT '0' NOT NULL,
    l10n_parent      int(11)      DEFAULT '0' NOT NULL,
    l10n_diffsource  mediumtext,
    deleted          tinyint(4)   DEFAULT '0' NOT NULL,
    hidden           tinyint(4)   DEFAULT '0' NOT NULL,
    starttime        int(11)      DEFAULT '0' NOT NULL,
    endtime          int(11)      DEFAULT '0' NOT NULL,
    sorting          int(11)      DEFAULT '0' NOT NULL,
    fe_group         varchar(100) DEFAULT '0' NOT NULL,

    title            varchar(255) DEFAULT '' NOT NULL,
    image            int(11)      unsigned DEFAULT '0' NOT NULL,
    bodytext         text,
    background       varchar(40)  DEFAULT ''  NOT NULL,
    banner           int(11)      DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
    KEY sys_language_uid_l10n_parent (sys_language_uid,l10n_parent),
    KEY banner (banner)
);