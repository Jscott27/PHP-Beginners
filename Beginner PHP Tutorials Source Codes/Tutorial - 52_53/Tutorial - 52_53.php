<?php
if(isset($_POST['txtarea']) && !empty($_POST['txtarea'])){
$string = $_POST['txtarea'];
$find = array('fuck','suck');
$replace = array('****','****');
$new_str = str_ireplace($find,$replace,$string);
echo $new_str;
}
?>

<hr>
<hr>

<html>
<title>Word Censoring</title>
<body>
<form action="#" method="POST">
<textarea rows="7" cols="30" name="txtarea"> <?php ob_start(); echo $string; ob_end_clean();?> </textarea> <br><br>
<input type="submit" value="Submit">
</form>
</body>
</html>