<?php
//To Check This Program First Create a File 'Tutorial - 86.txt' In Same Location Where You Have Originally Saved This Program

$filename = 'Tutorial - 86.txt';
$rand = rand(9999,99999);
if(file_exists($filename)){
if(rename($filename,$rand.'.txt')){
echo 'File Has Been Successfully Renamed As :<strong> '.$rand.'.txt</strong>';
 } else {
 echo 'Error Occured While Renaming';
 }
} else {
 echo 'File Doesn\'t Exists';
}
?>