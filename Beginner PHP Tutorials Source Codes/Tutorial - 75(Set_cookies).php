<?php
$time = time();
setcookie('username','Mayank',$time+30); // time is in seconds i.e. 30secs
echo 'Cookies Has Been Set For <strong>30 Seconds';

?>