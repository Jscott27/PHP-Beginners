<?php

$string = 'Mayank Singh Bisen';

if(preg_match('/Mayank Singh/',$string)){
  echo '<strong>Match Found</strong>';
  }
else 
  echo '<strong>Match Not Found</strong>';

?>