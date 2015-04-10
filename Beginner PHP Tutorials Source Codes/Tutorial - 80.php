<?php
$filename = 'Tutorial - 80.txt';

$fhandle = fopen($filename,'r');

$data = fread($fhandle, filesize($filename));

$name_array = explode(',',$data);

foreach ($name_array as $fname){
echo $fname.'<br>';
}
?>