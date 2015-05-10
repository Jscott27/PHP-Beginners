<?php
//error_reporting (!E_NOTICE);
require 'connection.php';
require 'core.inc.php';

if(!loggedin()){

if(isset($_POST['username'])&& isset($_POST['pass'])&& isset($_POST['pass1'])&& isset($_POST['fname'])&& isset($_POST['lname'])){

$username = $_POST['username'];
$password = $_POST['pass'];
$password_again = $_POST['pass1'];
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$password_hash = md5($password);

 if(!empty($username) &&!empty($password) &&!empty($password_again) &&!empty($firstname) &&!empty($lastname)){
  if($password!=$password_again){
  echo 'Password Do Not Match';
  } else {
  $query = "SELECT `username` FROM `users` WHERE `username` = '$username'";
  $query_run = mysql_query($query);
  if(mysql_num_rows($query_run) == 1){
  echo '<strong>Sorry ! Username :\''.$username.'\'Already Exists With Us</strong>';
  } else {
   $query = "INSERT INTO `users` VALUES('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password_hash)."','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($lastname)."')";
   if($query_run = mysql_query($query)){
   header('Location: success.html');
   } else {
   echo 'Registration Failed .. Try Again Later';
   }
  }
 }
} else {
 echo 'All Fields Are Required';
 }
}
?>
<hr>
<form method="POST" action="register.php">
Username : <input type="text" name="username" maxlength="30" value="<?php if(isset($username)){echo $username;} ?>"><br><br>
Password : <input type="password" name="pass"><br><br>
Re-Enter Password : <input type="password" name="pass1"><br><br>
First Name : <input type="text" name="fname" maxlength="40" value="<?php if(isset($firstname)){echo $firstname;} ?>"><br><br>
Lastname : <input type="text" name="lname" maxlength="40" value="<?php if(isset($lastname)){echo $lastname;} ?>"><br><br>
<input type="submit" value="Register">
</form> 
<hr>
<?php
} else if(loggedin()){
echo 'You\'re Already Logged In, First <a href="logout.php">LOGOUT</a> Yourself';
} else {
  echo 'Ooops! Something Went Wrong';
  }
?>