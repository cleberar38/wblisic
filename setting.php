<?php
/**
 * Created by PhpStorm.
 * User: lenjen
 */
if (SITEACTIVATION != "OK") {
    exit('You have no rights to this page');
}

$WBL = array();
$WBL["SETTING"]["SITE_URL"]             =   "http://licensing.ultraedit.com"; //URL ON SITE
$WBL["SETTING"]["MAPPING"]["LIB"]       =   $WBL["SETTING"]["SITE_URL"]."/php/Library";
$WBL["SETTING"]["MAPPING"]["FUN"]       =   $WBL["SETTING"]["SITE_URL"]."/php/Function";
$WBL["SETTING"]["MAPPING"]["MOD"]       =   $WBL["SETTING"]["SITE_URL"]."/php/Models";
$WBL["SETTING"]["MAPPING"]["PIC"]       =   $WBL["SETTING"]["SITE_URL"]."/php/Picture";
$WBL["SETTING"]["MAPPING"]["PUB"]       =   $WBL["SETTING"]["SITE_URL"]."/php/public";
$WBL["SETTING"]["MAPPING"]["PIV"]       =   $WBL["SETTING"]["SITE_URL"]."/php/Private";
$WBL["SETTING"]["MAPPING"]["TMP"]       =   $WBL["SETTING"]["SITE_URL"]."/php/Temple";
include("");

$WBL["DATABASE"]["DB_TYPE"]             =   "mysql"; // DATABASE TYPE
$WBL["DATABASE"]["DB_HOST"]             =   "localhost"; // DATABASE HOST
$WBL["DATABASE"]["DB_NAME"]             =   "WBL"; // DATABASE TABLE
$WBL["DATABASE"]["DB_USER"]             =   "root"; // DATABASE USER
$WBL["DATABASE"]["DB_PASSWORD"]         =   "lenjen"; // DB PASSWORD


define("DIR_MAPP", $_SERVER["SCRIPT_NAME"]);
define("DIR_ROOT", $_SERVER["DOCUMENT_ROOT"]);
define("URL_STRING", $_SERVER["QUERY_STRING"]);
define("URL_REQUEST", $_SERVER["REQUEST_URI"]);

define('DIR_FUNCTION',$_SERVER["DOCUMENT_ROOT"]. DIRECTORY_SEPARATOR . 'catalog' . DIRECTORY_SEPARATOR);
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));


//require_once(modification(DIR_LIB . HOST.'/Library/'));
//require_once(modification(DIR_MOD . HOST .'/Models/'));
//require_once(modification(DIR_PIC . HOST .'/Picture/'));
//require_once(modification(DIR_PRI . HOST . '/Private/'));
//require_once(modification(DIR_PUB .HOST . '/Public/'));
//require_once(modification(DIR_TEM . HOST.'/Temple/'));




$GLOBALS["WBL"] = $WBL;