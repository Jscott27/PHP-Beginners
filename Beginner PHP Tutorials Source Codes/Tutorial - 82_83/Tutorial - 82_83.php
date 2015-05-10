<?php
$directory = 'Tutorial - 82_83';

if($fhandle = opendir($directory.'/')){

echo 'Looking Inside Folder \''.$directory.'\'<br>';

while($file = readdir($fhandle)){
 if($file!="."&&$file!=".."){
 echo '<a href="'.$directory.'">'.$file.'</a><br>';
  } 
 }
}
?>