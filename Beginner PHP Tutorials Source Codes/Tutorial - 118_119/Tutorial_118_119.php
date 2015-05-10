
<?php
//Please Note : This Program Is Vulnerable to MYSQL INJECTION
require 'Tutorial_113.php';
?>

<form method="GET" action="#">
Select Food: <select name="type">
  <option value="h">Healthy</option>
  <option value="u">Unhealthy</option>
</select>
<input type="submit" value="Show">
</form>
<hr>

<?php
if(isset($_GET['type']) && !empty($_GET['type'])){
$type = strtolower($_GET['type']);

if($type == 'u' || $type == 'h'){
$sql_query = "SELECT `food`,`calories` FROM `food` WHERE `healthy_unhealthy`='$type' ORDER BY `id` DESC ";

if($query = mysql_query($sql_query)){
 
 if(mysql_num_rows($query) == NULL ){  
 
 echo 'No Data Found Inside Columns';
 
 } else {
  
  while($query_result = mysql_fetch_assoc($query)){
   $food = $query_result['food'];
   $calories = $query_result['calories'];
 
   echo $food.' Has <strong><i><u>'.$calories.' Calories</strong></i></u><br>';

   }

 }


} else {
  echo 'QUERY FAILED<br>'.mysql_error();
  }
} else {
 echo 'Not a Valid Category. Select From Above List';
 }
}
?>