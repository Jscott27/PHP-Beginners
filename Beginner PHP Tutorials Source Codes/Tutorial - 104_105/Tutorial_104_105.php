<?php
$xml = simplexml_load_file('example.xml') or die('Unable To Read File');
echo $xml -> producer[0] -> name.' Is '.$xml -> producer[0] -> age;
?>