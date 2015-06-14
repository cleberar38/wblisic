<?php
defined('SITEACTIVATION') ?null:define("SITEACTIVATION", "OK1");
include_once("setting.php");

#remove the directory path we don'ingt want
echo "<pre>"; print_r($GLOBALS["WBL"]); echo"</pre>";
echo phpinfo();
?>