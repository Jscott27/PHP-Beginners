<?php
//To Check This Program First Create a File 'Tutorial - 85.txt' In Same Location Where You Have Originally Saved This Program
$filename = 'Tutorial - 85.txt';
if(!file_exists($filename)){
echo 'File Doesn\'t Exist';
} else {
unlink($filename);
echo 'File Has Been Deleted Successfully!';
}
?>