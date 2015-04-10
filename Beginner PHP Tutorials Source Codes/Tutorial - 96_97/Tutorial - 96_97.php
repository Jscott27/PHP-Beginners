<?php 

if(isset($_POST['pass']) && !empty($_POST['pass'])){
$filename = 'hash.txt';
$pass = md5($_POST['pass']); 

$handle = fopen($filename, 'r');
$pass_hash = fread($handle, filesize($filename)); // $pass_hash is containing hashcode for string 'password'
if($pass_hash == $pass){
  echo '<strong>Login Successful</strong>';
  } else {
  echo '<strong>Incorrect Password</strong>';
  }
} else {
echo 'Please Type Something';
}

?>

<form action="#" method="POST">
<input type="text" name="pass">
<input type="submit" value="Login">
</form>