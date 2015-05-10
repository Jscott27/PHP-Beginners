<?php
require 'Tutorial_113.php';

$sql_query = "SELECT `role`,`email`,`credits` FROM `users` ORDER BY `user_id` DESC ";

if($query = mysql_query($sql_query)){
 
 if(mysql_num_rows($query) == NULL ){  
 
 echo 'No Data Found Inside Columns';
 
 } else {
  
  while($query_result = mysql_fetch_assoc($query)){
   $sender = $query_result['sender'];
   $status = $query_result['status'];
   $date = $query_result['date_sent'];
   echo $sender.' Has Status <strong><i><u>'.$status.'</strong></i></u> On '.$date.'<br>';

   }

 }

} else {
echo 'QUERY FAILED<br>'.mysql_error();
}
?>