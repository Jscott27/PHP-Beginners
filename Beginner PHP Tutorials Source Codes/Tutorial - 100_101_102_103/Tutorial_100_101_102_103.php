<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

 if(!empty($name) && !empty($email) && !empty($message)){ 
   if(strlen($name) > 25 || strlen($email) > 50 || strlen($message) > 500){
    echo 'Maximum Length For Some Fields Exceeded.. Please Fill All The Fields Properly';   
   } else {
 $to = 'Email Address Of The Person You Want TO Send Mail';
 $subject = 'This Is An Just Testing Email';
 $body = $name."\n".$message;
 $header = 'From : <'.$name.'>'.$email;

  if(mail($to, $subject, $body, $header)){
     echo 'Thanks For Contacting Us .. We\'ll Contact you Soon ';
  } else {
     echo 'Oops! There Was Problem In Sending Mail';
   }
 } 
} else {
 echo 'All Fields Are Required';
 }
}

?>

<hr>

<form action="#" method="POST">
Name : <input type="text" name="name" placeholder="Maximum Length 25"><br><br>
Email : <input type="email" name="email" placeholder="Maximum Length 50"><br><br>
Message : <br> <textarea name="message" rows="6" cols="30" placeholder="Maximum Length 500"></textarea><br><br>
<input type="submit" value="Send">
</form>