<?php

$xml = simplexml_load_file('example.xml')or die('Unable To Read File');

foreach ($xml->producer as $producer){
   echo '<br>-<strong>';
   echo $producer -> name.' </strong> Age Is <strong>'.$producer->age.'</strong><br>';
    foreach ($producer -> show as $show){
	echo '* Performed';
   echo $show -> showname.' on '.$show -> showdate.'<br>';
 }
}

?>