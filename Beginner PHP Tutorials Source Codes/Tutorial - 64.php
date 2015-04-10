<?php ob_start(); ?>
<h1>Hello Google</h1>
<?php
$host = 'http://www.google.com';
$status = false;

if($status==true){
header('Location:'.$host);
}
ob_end_flush();
?> 
