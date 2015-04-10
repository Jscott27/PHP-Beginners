<?php
$string = "My Name Is Mayank Singh";
$find = array('Mayank','Singh');
$replace = array('Singh','Nikhil');
$new_str = str_replace($find,$replace,$string);
echo $new_str;
?>