<?php
require 'connection.php';
require 'core.inc.php';

if(loggedin()){
$fname = getuserfield('firstname');
$lname = getuserfield('lastname');
echo 'Welcome,<strong>'.$fname." ".$lname.'</strong> You\'re Successfully Logged In <br> <a href="logout.php">LOGOUT</a>';
} else {
include 'loginform.inc.php';
}

?>