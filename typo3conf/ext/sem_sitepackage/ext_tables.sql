CREATE TABLE pages (
    tx_semsitepackage_is_not_found tinyint(4) DEFAULT '0' NOT NULL,
);

CREATE TABLE tx_semsitepackage_not_found_pages (
   uid int(11) NOT NULL auto_increment,
   domain varchar(255) DEFAULT '' NOT NULL,
   not_found_page_id int(11) DEFAULT '0' NOT NULL,

   PRIMARY KEY (uid)
);