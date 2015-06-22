<?php
class BankAccount {
 public $balance = 0;
 public function DisplayBalance($amount){
 return $this->balance + $amount;
 }
}
$user1 = new BankAccount;
$user2 = new BankAccount;
echo $user1->DisplayBalance(1000).'<br>';
echo $user1->DisplayBalance(3000);
?>