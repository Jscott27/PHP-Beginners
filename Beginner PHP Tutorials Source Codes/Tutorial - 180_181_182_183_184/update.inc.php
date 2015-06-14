<?php
require 'connect.inc.php';
if(isset($_POST['keyword'])){
$keyword = $_POST['keyword'];
if(!empty($keyword)){
$query = "INSERT INTO `data` VALUES('','".mysql_real_escape_string($keyword)."')";
if($query_run = mysql_query($query)){
 echo 'Data Inserted Successfully';
 } else {
 echo 'Failed To Insert Data';
 }
} else {
echo 'Please Type Something';
}
}
?>