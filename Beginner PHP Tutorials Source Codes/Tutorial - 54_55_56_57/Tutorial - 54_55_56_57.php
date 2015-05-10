<?php
 error_reporting (~E_WARNING);
 if( isset($_POST['txtarea']) && isset($_POST['searchf']) && isset($_POST['replacew'])  ){
 $string = $_POST['txtarea'];
 $find = $_POST['searchf'];
 $replace = $_POST['replacew'];
 $find_len = strlen($find);
 $offset = 0;
 if(!empty($string) && !empty($find) && !empty($replace)){
  while($stringpos = strpos($string,$find,$offset)){
 $offset = $stringpos + $find_len;
 $string = substr_replace($string,$replace,$stringpos,$find_len);
  }
  echo $string;
 } 
 else {
 echo 'Please Fill All The Fields Below';
 }
}
?>

<hr>
<hr>
<title>Word Censoring</title>
<body>
<form action="word_censoring_app.php" method="POST">
<textarea rows="7" cols="30" name="txtarea"></textarea> <br><br>
Search For : <input type="text" name="searchf" placeholder="Enter Text To Search For"><br><br>
Replace With : <input type="text" name="replacew" placeholder="Enter Text To Replace With"><br><br>
<input type="submit" value="Find & Replace">
</form>