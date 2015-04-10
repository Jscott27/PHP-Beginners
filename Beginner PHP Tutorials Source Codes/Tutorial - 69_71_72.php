<?php
if(isset($_GET['day']) && isset($_GET['month']) && isset($_GET['year'])){
$date = htmlentities($_GET['day']);
$month = htmlentities($_GET['month']);
$year = htmlentities($_GET['year']);
if(!empty($date) && !empty($month) && !empty($year)){
 echo '<strong>Date Is : '.$date.'/'.$month.'/'.$year.'</strong>';
 }
else echo '<strong>Fill All The Fields First</strong>';
}
?>
<hr>
<form action="#" method="GET">
Day : <input type="text" name="day"><br>
Month : <input type="text" name="month"><br>
Year : <input type="text" name="year"><br>
<input type="submit" value="Submit">
</form>