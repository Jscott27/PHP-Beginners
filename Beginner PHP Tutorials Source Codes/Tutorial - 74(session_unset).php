<?php
session_start();
unset($_SESSION['name']);
echo 'Session Has Been Stopped!';
?>