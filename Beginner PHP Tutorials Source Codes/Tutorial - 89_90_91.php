<?php
error_reporting(~E_NOTICE);

$name = $_FILES['file']['name'];
$extension = strtolower(substr($name,strpos($name,'.')+1));
$tmp_loc = $_FILES['file']['tmp_name'];
$type = $_FILES['file']['type'];
$location = 'Tutorial - 89_90_91/';
$size = $_FILES['file']['size'];
$max_size = 200000;
 if(isset($name)){ 
  if(!empty($name)){
    if(($extension == 'jpg' || $extension == 'jpeg') && ($type == 'image/jpeg' || $type == 'image/jpg')&& $size <=$max_size){
   if(move_uploaded_file($tmp_loc,$location.$name)){
   echo '<strong>File Uploaded Successfully</strong>';
   } else {
   echo '<strong>There Was An Error In Uploading</strong>';
   }
   } else {
    echo '<strong>File Must Be Jpg/Jpeg And Must Be Less Than 200KB</strong>';
   }
   } else {
   echo '<strong>Please Select a File</strong>';
   }
}
?>
<hr>
<br>
<br>
<form action="#" method="POST" enctype="multipart/form-data">
<input type="file" name="file"><br><br>
<input type="submit" value="Upload">
</form>