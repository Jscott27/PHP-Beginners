<html>
<head></head>
<body>
<form method="POST" action="#">
Enter The Amount To Transfer: <input type="text" name="withdraw_amount" required>$<br>
<input type="submit" name="submit" value="Transfer">
</form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
$amount = $_POST['withdraw_amount'];
class BankAccount {
 public $balance = 1000;
 public function DisplayBalance(){
 return $this->balance;
 }
 
 public function WithdrawFunds($amount){
 if($this->balance < $amount){
   echo 'Sorry ! Not Sufficient Balance';
   die();
  } else {
   $this->balance = $this->balance - $amount;
  }
 }
}
$account = new BankAccount;
$account->WithdrawFunds($amount);
echo 'Transferred Successfully ! Your Current Balance is :'.$account->DisplayBalance().'$';
}
?>