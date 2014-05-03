<!DOCTYPE HTML>
<html>


<head>
<title>ajax</title>
<meta charset="utf-8" />
<script type="text/javascript">
function loadXMLDoc()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	 {// code for IE7+, Firefox, Chrome, Opera, Safari
	  	xmlhttp=new XMLHttpRequest();
	 }
	else
	{// code for IE6, IE5
	  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
  	{
  		if (xmlhttp.readyState==4 && xmlhttp.status==200)
    	{
    		document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    	}
  	}
	xmlhttp.open("POST", <?=base_url('test.txt')?>, true);
	xmlhttp.send();
}
</script>


</head>

<body>

<div id="myDiv"><h3>Let AJAX change this text</h3></div>
<button type="button" onclick="loadXMLDoc()">Change Content</button>

</body>


</html>