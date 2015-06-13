<html>
<head>

<script type="text/javascript">
 function load(thefile){
 if(window.XMLHttpRequest){
 xmlhttp = new XMLHttpRequest();
 } else {
 xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
 }
 
 xmlhttp.onreadystatechange = function(){
 if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
  document.getElementById('A2').innerHTML = xmlhttp.status;
  document.getElementById('A1').innerHTML = xmlhttp.responseText;
  }
 }
 
 xmlhttp.open("GET",thefile,true);
 xmlhttp.send();
}
 </script>
</head>

<body>
<p>Comments :<b><span id="A1"></span></p></b>
<p>Status :<b><span id="A2"></span></p></b>
<input type="submit" onclick="load('include.inc.php');" value="Click To Get Data" ">
</body>
</html>