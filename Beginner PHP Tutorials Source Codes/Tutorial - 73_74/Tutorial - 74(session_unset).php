<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['age']);
echo 'Session Has Been Stopped!';
?>