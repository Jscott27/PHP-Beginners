<?php
class BankAccount {
 public $balance = 0;
 
 
 public function DepositBalance($amount){
 return $this->balance = $this->balance + $amount;
 }
 
 public function DisplayBalance(){
 return $this->balance;
 }
 public $type = '18-25';
 public function SetType($input){
 $this->type = $input;
 }
 
 }

class SavingBankAccount extends BankAccount{
 public $type = 'Supersaver';
 }
 
 $user1 = new BankAccount;
 $user2 = new SavingBankAccount;

 $user1->SetType('Silver');
 
 $user1->DepositBalance(3000);
 $user2->DepositBalance(1000);

 echo $user1->type." Has Balance: ".$user1->DisplayBalance()."<br/>";
 echo $user2->type." Has Balance: ".$user2->DisplayBalance();

?>