<?php
session_start();

 if(isset($_SESSION['name']) && isset($_SESSION['age'])){
  echo 'Welcome <strong>'.$_SESSION['name'].',</strong>Your Age Is : <strong>'.$_SESSION['age'];
}
  else {
 echo 'Please LOG IN ';

}
?>