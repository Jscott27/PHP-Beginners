<html>

<head>
<script type="text/javascript">
function match(){
 if(window.XMLHttpRequest){
 xmlhttp = new XMLHttpRequest();
 } else {
 xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
 }
 
 xmlhttp.onreadystatechange = function(){
 if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
  document.getElementById('results').innerHTML = xmlhttp.responseText;
  }
 }
 
 xmlhttp.open("GET",'search.php?keyword='+document.search.keyword.value,true);
 xmlhttp.send();
}

</script>
</head>

<body> 

<form action="anotherpage.php" name="search">
Type Name : <input type="search" name="keyword" onkeyup="match();">
</form>
<div id="results"></div>

</body>
</html>
