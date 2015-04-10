<?php
$time = time();
$actual_time = date('H:i:s d M Y',$time);
$time_modified = date('H:i:s d M Y ',strtotime('+ 5 hours 30 minutes'));
echo '<strong>GMT Time :'.$actual_time.'<br>Indian Time :'.$time_modified;
?>