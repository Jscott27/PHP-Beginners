<?php
if(isset($_POST['username']) && isset($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];
$password_hash = md5($password); //Hash_Password Contains Hash Of String 'password'
 if(!empty($username) && !empty($password)){
 $query = "SELECT `id`,`firstname` FROM `users` WHERE `username` = '".mysql_real_escape_string($username)."' AND `password` = '".mysql_real_escape_string($password_hash)."'";
 if($query_run = mysql_query($query)){
 $query_num_rows = mysql_num_rows($query_run);
 if($query_num_rows == 0){
 echo 'Invalid Username Or Password';
  } else if($query_num_rows == 1){
		 $user_id = mysql_result($query_run,0,'id');
		 $_SESSION['user_id']= $user_id;
		 header('Location: index.php');
		}
  }
 }
}
?>

<html>
<form action="<?php $file_name;?>" method="POST">
Username : <input type="text" name="username" required> 
Password : <input type="password" name="password" required> 
<input type="submit" value="Log In" name="submit">
</form>
NOT Registered Yet? <a href="register.php"> Click Here To Register</a>
</html>	

<hr>