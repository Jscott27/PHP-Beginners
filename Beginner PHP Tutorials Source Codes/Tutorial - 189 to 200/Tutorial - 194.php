<?php
class Circle{
 const pi = 3.14;
 
 public function Area($radius){
 return self::pi *($radius*$radius);
 }
}
$get = new Circle;
echo $get->Area(5);
?>