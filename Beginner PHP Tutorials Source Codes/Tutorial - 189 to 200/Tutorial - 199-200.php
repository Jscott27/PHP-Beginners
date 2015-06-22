<?php
 class DatabaseConnect{
 public function __construct($db_host,$db_username,$db_password){
 if(@$this->Connect($db_host,$db_username,$db_password)){
 echo 'Connected';
 } else {
  echo 'Not Connected';
  }
 }

 public function Connect($db_host,$db_username,$db_password){
 if(mysql_connect($db_host,$db_username,$db_password)){
 return true;
 } else {
 return false;
 }
 }

}

$connect = new DatabaseConnect('localhost','root','');
?>