<?php
$ip_add = $_SERVER['REMOTE_ADDR'];
$ip_block = array('255.255.0.0','169.254.143.242');

foreach($ip_block as $ipadd){
if($ipadd==$ip_add){
die('Blocked');
}
}
echo 'Welcome, You are not blocked';
?>