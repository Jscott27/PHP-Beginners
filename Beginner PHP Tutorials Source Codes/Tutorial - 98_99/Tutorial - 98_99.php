<?php
$to = 'Email Address Of The Person You Want TO Send Mail';
$subject = 'This An Email';
$body = 'Testing Email'."\n\n".'Hope You\'ve Got It';
$header = 'From : Testing Email <your_email_address_here>';

if(mail($to, $subject, $body, $header)){
echo 'Email Sent Successfully';
} else {
echo 'There Was Problem In Sending Mail';
}
?>