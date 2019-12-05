<html>
<head>
<title>DJ Profile</title>
<script type="text/javascript" src="../../includes/prototype.js"></script>
<script type="text/javascript" src="../../includes/scriptaculous.js"></script>
<script type="text/javascript" language="javascript">
var xmlHttp

function GetXmlHttpObject(){
	var objXMLHttp=null
	if (window.XMLHttpRequest){
		objXMLHttp=new XMLHttpRequest()
	}else if (window.ActiveXObject){
		objXMLHttp=new ActiveXObject("Microsoft.XMLHTTP")
	}
	return objXMLHttp
}

function GetSlots(day){
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null){
alert ("Browser does not support HTTP Request")
return
}

var url="time.php?day="+day
xmlHttp.open("GET",url,true)
xmlHttp.onreadystatechange = function () {
if (xmlHttp.readyState == 4) {
document.getElementById("timetable").innerHTML = xmlHttp.responseText;
}
};
xmlHttp.send(null);
}

////////////>
</script>
<link href="../../css/inside.css" rel="stylesheet" type="text/css" />
</head>
<body style="margin: 10px;">
		<div id="content_title">
		Timetable
		</div>
		<div id="content" style="text-align: center">
		<br />
		<a onClick="GetSlots('monday')" style="cursor: pointer">Monday</a> | <a onClick="GetSlots('tuesday')" style="cursor: pointer">Tuesday</a> | <a onClick="GetSlots('wednesday')" style="cursor: pointer">Wednesday</a> | <a onClick="GetSlots('thursday')" style="cursor: pointer">Thursday</a> | <a onClick="GetSlots('friday')" style="cursor: pointer">Friday</a> | <a onClick="GetSlots('saturday')" style="cursor: pointer">Saturday</a> | <a onClick="GetSlots('sunday')" style="cursor: pointer">Sunday</a>
<div id="timetable" style="text-align: center"></div>	
		</div>
</body>
</html>