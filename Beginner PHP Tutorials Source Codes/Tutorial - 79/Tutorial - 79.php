<?php

if(isset($_POST['name'])){
$name = htmlentities($_POST['name']);
if(!empty($name)){
$fhandle = fopen('Tutorial - 79.txt','a');
fwrite($fhandle,"\n".$name);
fclose($fhandle);
} else{
  echo 'Please Type Something';
  }
  }
?>

<form action="#" method="POST">
Name: <input type="text" name="name">
<input type="submit" value="Submit">
</form>
