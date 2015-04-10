<?php

if(isset($_POST['name'])){
$name = $_POST['name'];
if(!empty($name)){
$fhandle = fopen('Tutorial - 78.txt','a');
fwrite($fhandle,$name."\n");
fclose($fhandle);
$readin = file("Tutorial - 78.txt");
$readin_count = count($readin);
echo 'There Are Total <strong>'.$readin_count.'</strong> Names In The Files As : ';
foreach($readin as $fname){
echo trim($fname);
$count = 1;
if($count<$readin_count){
echo ',';
  }
  $count++;
}
} else{
  echo 'Please Type Something';
  }
}
?>

<form action="#" method="POST">
Name: <input type="text" name="name">
<input type="submit" value="Submit">
</form>