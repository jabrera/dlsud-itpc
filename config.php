<?php
ini_set('display_errors', 0);
error_reporting(0);
$mysql_host = "localhost";
$mysql_database = "test";
$mysql_user = "root";
$mysql_password = "";

mysql_connect($mysql_host, $mysql_user, $mysql_password);
mysql_select_db($mysql_database);
/*
$mysql_host = "mysql5.000webhost.com";
$mysql_database = "a5582405_jap";
$mysql_user = "a5582405_jap";
$mysql_password = "j4U10v1A9r96";

mysql_connect($mysql_host, $mysql_user, $mysql_password);
mysql_select_db($mysql_database);*/

$websiteTitle = "";
?>