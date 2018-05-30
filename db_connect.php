<?php
/*подключение к базе данных*/

$host = "localhost"; // в 90% случаев это менять не надо
$password = "123456";
$username = "root";
$databasename = "revcom_base";

global $db;
$db = mysqli_connect($host,$username,$password) or die("error: Failed_connect_database");

mysqli_select_db($databasename, $db) or die("error:Database not selected witch mysql_select_db");

mysqli_query('SET NAMES utf8',$db);
mysqli_query('SET CHARACTER SET utf8',$db );
mysqli_query('SET COLLATION_CONNECTION="utf8_general_ci"',$db );
setlocale(LC_ALL,"ru_RU.UTF8");