<!DOCTYPE html>
<html>
<head>
<script> 
function getIp() {
	
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {

	}
}

	xhttp.open('GET', 'http://ip.jsontest.com/', true);
	xhttp.send();


</script>

</head>
<body>
<p id=”id”></p>
<button type="button" onclick="getIp()">Click me to get your ip address.</button>
</body>
</html>
