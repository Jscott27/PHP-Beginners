<?php
error_reporting (~E_NOTICE);
$http_client_ip = $_SERVER['http_client_ip'];
$http_x_forwarded_for = $_SERVER['http_x_forwarded_for'];
$remote_addr = $_SERVER['REMOTE_ADDR'];

if(!empty($http_client_ip)){
echo $ip_address = $http_client_ip;
}
else if(!empty($http_x_forwarded_for)){
echo $ip_address = $http_x_forwarded_for;
}
else echo $ip_address = $remote_addr;

?>