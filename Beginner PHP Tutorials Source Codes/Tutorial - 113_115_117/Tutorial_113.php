<?php
$host = 'localhost';
$user = 'root';
$pass = 'password';
$error_msg = 'Failed To Connect To Database';
$db_name = 'test';
if(!mysql_connect($host, $user, $pass) || !mysql_select_db($db_name)){
die($error_msg);
}
?>