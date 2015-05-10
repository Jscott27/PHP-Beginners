<?php
$scriptname = $_SERVER['SCRIPT_NAME'];
?>
<body>
<form method="POST" action="<?php echo $scriptname;?>">
<input type="submit" name="submit" value="Click Me To Get Your Page ID">
</form>
</body>
<?php
if(isset($_POST['submit'])){
echo 'You are on page id ='.$scriptname;
}
?>
