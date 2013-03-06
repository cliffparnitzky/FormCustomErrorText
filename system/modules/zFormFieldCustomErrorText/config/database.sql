-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************

-- 
-- Table `tl_form_field`
-- 

CREATE TABLE `tl_form_field` (
  `customErrorTextActive` char(1) NOT NULL default '',
  `customErrorTextCss` varchar(255) NOT NULL default '',
  `customErrorTextValues` blob NULL,
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
