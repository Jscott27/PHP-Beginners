<?php
class Example{

   public function __construct(){
    $this->DefaultFunction();
   }

   public function DefaultFunction(){
    echo '<strong>This is a Constructor Class</strong>';
   }
}
$example = new Example();
?>
