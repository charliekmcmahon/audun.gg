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

function check(username){
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null){
alert ("Browser does not support HTTP Request")
return
}

var url="includes/check.php?username="+username
xmlHttp.open("GET",url,true)
xmlHttp.onreadystatechange = function () {
if (xmlHttp.readyState == 4) {
document.getElementById("results").innerHTML = xmlHttp.responseText;
}
};
xmlHttp.send(null);
}


function toggle(id){
var el=document.getElementById(id);
el.style.display=el.style.display=='none'? 'block' : 'block';
}

function o2c(id){
var el=document.getElementById(id);
el.style.display=el.style.display=='none'? 'block' : 'none';
}

function showhide(id){
if (document.getElementById){
obj = document.getElementById(id);
if (obj.style.display == "none"){
obj.style.display = "";
} else {
obj.style.display = "none";
}
}
}
var persistmenu="yes" //"yes" or "no". Make sure each SPAN content contains an incrementing ID starting at 1 (id="sub1", id="sub2", etc)
var persisttype="sitewide" //enter "sitewide" for menu to persist across site, "local" for this page only

if (document.getElementById){ //DynamicDrive.com change
document.write('<style type="text/css">\n')
document.write('.submenu{display: none;}\n')
document.write('</style>\n')
}

function SwitchMenu(obj){
	if(document.getElementById){
	var el = document.getElementById(obj);
	var ar = document.getElementById("masterdiv").getElementsByTagName("span"); //DynamicDrive.com change
		if(el.style.display != "block"){ //DynamicDrive.com change
			for (var i=0; i<ar.length; i++){
				if (ar[i].className=="submenu") //DynamicDrive.com change
				ar[i].style.display = "none";
			}
			el.style.display = "block";
		}else{
			el.style.display = "none";
		}
	}
}


function get_cookie(Name) { 
var search = Name + "="
var returnvalue = "";
if (document.cookie.length > 0) {
offset = document.cookie.indexOf(search)
if (offset != -1) { 
offset += search.length
end = document.cookie.indexOf(";", offset);
if (end == -1) end = document.cookie.length;
returnvalue=unescape(document.cookie.substring(offset, end))
}
}
return returnvalue;
}

function onloadfunction(){
if (persistmenu=="yes"){
var cookiename=(persisttype=="sitewide")? "switchmenu" : window.location.pathname
var cookievalue=get_cookie(cookiename)
if (cookievalue!="")
document.getElementById(cookievalue).style.display="block"
}
}

function savemenustate(){
var inc=1, blockid=""
while (document.getElementById("sub"+inc)){
if (document.getElementById("sub"+inc).style.display=="block"){
blockid="sub"+inc
break
}
inc++
}
var cookiename=(persisttype=="sitewide")? "switchmenu" : window.location.pathname
var cookievalue=(persisttype=="sitewide")? blockid+";path=/" : blockid
document.cookie=cookiename+"="+cookievalue
}

if (window.addEventListener)
window.addEventListener("load", onloadfunction, false)
else if (window.attachEvent)
window.attachEvent("onload", onloadfunction)
else if (document.getElementById)
window.onload=onloadfunction

if (persistmenu=="yes" && document.getElementById)
window.onunload=savemenustate

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_jumpMenuGo(selName,targ,restore){ //v3.0
  var selObj = MM_findObj(selName); if (selObj) MM_jumpMenu(targ,selObj,restore);
}

var bustcachevar=1 
var loadedobjects=""
var rootdomain="http://"+window.location.hostname
var bustcacheparameter=""

function dopage(url, containerid){
    document.getElementById("content").innerHTML = '<div align="center"><br><font size="1" color="black" face="verdana"><b>Loading</b>...</font></div>';
var page_request = false
if (window.XMLHttpRequest) 
page_request = new XMLHttpRequest()
else if (window.ActiveXObject){ 
try {
page_request = new ActiveXObject("Msxml2.XMLHTTP")
} 
catch (e){
try{
page_request = new ActiveXObject("Microsoft.XMLHTTP")
}
catch (e){}
}
}
else
return false
page_request.onreadystatechange=function(){
loadpage(page_request, containerid)
}
if (bustcachevar) 
bustcacheparameter=(url.indexOf("?")!=-1)? "&"+new Date().getTime() : "?"+new Date().getTime()
page_request.open('GET', url+bustcacheparameter, true)
page_request.send(null)
}

function loadpage(page_request, containerid){
    document.getElementById("content").innerHTML = '<div align="center"><br><font size="1" color="black" face="verdana"><b>Loading</b>...</font></div>';
if (page_request.readyState == 4 && (page_request.status==200 || window.location.href.indexOf("http")==-1))
document.getElementById(containerid).innerHTML=page_request.responseText
}

function loadobjs(){
if (!document.getElementById)
return
for (i=0; i<arguments.length; i++){
var file=arguments[i]
var fileref=""
if (loadedobjects.indexOf(file)==-1){ 
if (file.indexOf(".js")!=-1){ 
fileref=document.createElement('script')
fileref.setAttribute("type","text/javascript");
fileref.setAttribute("src", file);
}
else if (file.indexOf(".css")!=-1){ 
fileref=document.createElement("link")
fileref.setAttribute("rel", "stylesheet");
fileref.setAttribute("type", "text/css");
fileref.setAttribute("href", file);
}
}
if (fileref!=""){
document.getElementsByTagName("head").item(0).appendChild(fileref)
loadedobjects+=file+" " 
}
}
}

function doupdate(update)
{
var title = document.getElementById('title');
title.innerHTML = update;
}
function setActiveStyleSheet(title)

{

	var i, a, main;

	for(i=0; (a = document.getElementsByTagName("link")[i]); i++)

	{

		if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title"))

		{

			a.disabled = true;

			if(a.getAttribute("title") == title) a.disabled = false;

		}

	}

}



function getActiveStyleSheet()

{

	var i, a;

	for(i=0; (a = document.getElementsByTagName("link")[i]); i++)

	{

		if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title") && !a.disabled) return a.getAttribute("title");

	}

	return null;

}



function getPreferredStyleSheet()

{

	var i, a;

	for(i=0; (a = document.getElementsByTagName("link")[i]); i++)

	{

		if(a.getAttribute("rel").indexOf("style") != -1

		&& a.getAttribute("rel").indexOf("alt") == -1

		&& a.getAttribute("title")

		) return a.getAttribute("title");

	}

	return null;

}



function createCookie(name,value,days)

{

	if (days)

	{

		var date = new Date();

		date.setTime(date.getTime()+(days*24*60*60*1000));

		var expires = "; expires="+date.toGMTString();

	}

	else expires = "";

	document.cookie = name+"="+value+expires+"; path=/";

}

function alert(rofl){ // This function we will use to check to see if a username is taken or not.
xmlHttp=GetXmlHttpObject() // Creates a new Xmlhttp object.
if (xmlHttp==null){ // If it cannot create a new Xmlhttp object.
alert ("Browser does not support HTTP Request") // Alert Them!
return // Returns.
} // End If.

var url="frontend/alerts.php" // Url that we will use to check the username.
xmlHttp.open("GET",url,true) // Opens the URL using GET
xmlHttp.onreadystatechange = function () { // This is the most important piece of the puzzle, if onreadystatechange is equal to 4 than that means the request is done.
if (xmlHttp.readyState == 4) { // If the onreadystatechange is equal to 4 lets show the response text.
document.getElementById("lol").innerHTML = xmlHttp.responseText; // Updates the div with the response text from check.php
setTimeout(alert, 100);
} // End If.
}; // Close Function
xmlHttp.send(null); // Sends NULL instead of sending data.
} // Close Function.

/* SOME OF THIS JS HAS BEEN CREATED BY OTHER SOURCES - WE TAKE NO CREDIT FOR THE CODE IN THIS DOCUMENT, IT IS JUST A COMPILED CODE SHEET */