<?php
require'connect.inc.php';

if(isset($_GET['keyword'])){
$keyword = $_GET['keyword'];
}

if(!empty($keyword)){
$query = "SELECT `name` FROM `names` WHERE `name` LIKE '".mysql_real_escape_string($keyword)."%'";
$query_run = mysql_query($query);

while($query_row = mysql_fetch_assoc($query_run)){
echo $names = '<strong>'.$query_row['name'].'</strong><br>';
}
}
?>