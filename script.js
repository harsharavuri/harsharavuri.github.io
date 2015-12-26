function ajax(x){
	var hr = new XMLHttpRequest();
	var doc = document.getElementById("ajax_here");
	hr.onreadystatechange = function(e){
		if(hr.readyState==4 && hr.status==200){
			doc.innerHTML = hr.responseText;
		}
	}
	var url = "about.php";
	switch(x){
		case 0:
		url = "hometext.php";break;
		case 1:
        url = "about.php";
        break;
    case 2:
        url = "events.php";
        break;
    case 3:
        url = "spotlights.php";
        break;
    case 4:
        url = "contact.php";
        break;
    default:
		url="about.php";
		
	}
	
	hr.open("POST",url,true);
	hr.setRequestHeader('Content-type', 'text/html');
	hr.send();
	doc.innerHTML = "processing...";
}