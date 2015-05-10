<?php
require 'Tutorial_113.php';

$sql_query = "SELECT `sender`,`status`,`date_sent` FROM `messages` ORDER BY `id` DESC ";

if($query = mysql_query($sql_query)){
 while($query_result = mysql_fetch_assoc($query)){
   $sender = $query_result['sender'];
   $status = $query_result['status'];
   $date = $query_result['date_sent'];
   echo $sender.' Has Status <strong><i><u>'.$status.'</strong></i></u> On '.$date.'<br>';
  }
} else {
echo 'QUERY FAILED<br>'.mysql_error();
}
?>