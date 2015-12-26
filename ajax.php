<html>
<head>
</head>
<script>
function ajax(){
	var hr = new XMLHttpRequest();
	var doc = document.getElementById("ajax_here");
	hr.onreadystatechange = function(e){
		if(hr.readyState==4 && hr.status==200){
			doc.innerHTML = hr.responseText;
		}
	}
	var url = "about.php";
	hr.open("POST",url,true);
	hr.setRequestHeader('Content-type', 'text/html');
	hr.send();
	doc.innerHTML = "processing...";
}
</script>
<body>
<p onclick="ajax()">Click here for something awesome</p>
<p id="ajax_here"></p>