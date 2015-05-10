<?php
error_reporting(~E_NOTICE);
$name = $_FILES['file']['name'];
$tmp_loc = $_FILES['file']['tmp_name'];
$location = 'Tutorial - 87_88/';
 if(isset($name)){ 
  if(!empty($name)){
   if(move_uploaded_file($tmp_loc,$location.$name)){
   echo 'File Uploaded Successfully';
   } else {
   echo 'There Was An Error';
   }
   } else {
   echo 'Please Select a File';
   }
}
?>

<form action="#" method="POST" enctype="multipart/form-data">
<input type="file" name="file"><br><br>
<input type="submit" value="Upload">
</form>