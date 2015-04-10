<?php
$string = 'this is the string and it is the example';
$offset = 0;
$find = 'is';
$find_len = strlen($find);

while($string_pos = strpos($string,$find,$offset)){
echo '<strong>\''.$find.'\'</strong> Found @ Position:'.$string_pos.'<br>';
$offset = $string_pos + $find_len;
}
?>