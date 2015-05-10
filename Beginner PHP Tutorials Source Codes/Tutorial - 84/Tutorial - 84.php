<?php
$filename = 'Tutorial - 84.txt';
if(file_exists($filename)){
 echo 'File Already Exist';
} else {
 $fhandle = fopen('Tutorial - 84.txt','w');
 fwrite($fhandle, 'Anything Blah Blah Blah :D');
 fclose($fhandle);
 echo 'File Has Been Created Successfully';
}
?>