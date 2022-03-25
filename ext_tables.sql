#
# Table structure for table 'pages'
#
CREATE TABLE pages (
  # @deprecated since v9 and will be removed in TYPO3 v11. Legacy connection UID field to pages_language_overlay table
  legacy_overlay_uid int(11) unsigned DEFAULT '0' NOT NULL,
);
