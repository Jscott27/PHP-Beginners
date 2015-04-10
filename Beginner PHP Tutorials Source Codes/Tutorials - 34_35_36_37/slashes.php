<?php
$string = " Mayank Singh Bisen <img src='text.jpeg'> Is From Bhopal .";
$result =  htmlentities($string);
echo addslashes($result);
?>
