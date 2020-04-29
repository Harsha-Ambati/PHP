<html>
<head>
<script>
		function findmatch(){
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			}else{
				xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');	
			//This is for microsoft browsers
			
			}
		     xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
					document.getElementById('rdiv').innerHTML = xmlhttp.responseText;	
					
				
				}
				
			 }
			
			xmlhttp.open('GET', 'search.php?s_text='+document.search.s_text.value , true);
			xmlhttp.send();
		}
</script>
</head>
<body>


<form name="search">
	Type Keyword : <input type="text" name="s_text" onkeyup="findmatch()">

</form>
<br>
<div id = "rdiv"></div>
</body>
</html>
