var flipShown = false; 
var animation = {duration:0, starttime:0, to:1.0, now:0.0, from:0.0, firstElement:null, timer:null}; 

var phpVersionSaved = 0;

var timer = null;
var progressIndicatorBusy = 0;

window.onfocus = focus; 
window.onblur = blur; 

if (window.widget) 
{ 
	widget.onshow = onshow; 
	widget.onhide = onhide; 
}

function onshow () { 
	if (timer == null) { 
		updateView(); 
		timer = setInterval("updateView();", 2000); 
	} 
}

function onhide () { 
	if (timer != null) { 
		clearInterval(timer); 
		timer = null; 
	} 
}

function init() {

}

function updateView(){

	document.getElementById('done').innerHTML = getLocalizedString("done");

	if (mampPlugin) {
		var apacheIsRunning = mampPlugin.serverIsRunning("/Applications/MAMP/bin/apache2/logs/httpd.pid");
		var mySqlIsRunning = mampPlugin.serverIsRunning("/Applications//MAMP/tmp/mysql/mysql.pid");
		if (apacheIsRunning) {
			document.getElementById("apacheLED").src = "images/greenLED.png";
		} else {
			document.getElementById("apacheLED").src = "images/grayLED.png";
		}

		if (mySqlIsRunning) {
			document.getElementById("mySqlLED").src = "images/greenLED.png";
		} else {
			document.getElementById("mySqlLED").src = "images/grayLED.png";
		}
		
		var serversAreRunning = 
			(document.getElementById("apacheLED").src.indexOf("images/greenLED.png") > -1 &&
			document.getElementById("mySqlLED").src.indexOf("images/greenLED.png") > -1);
		var bothServersNotRunning = 
			(document.getElementById("apacheLED").src.indexOf("images/grayLED.png") > -1 &&
			document.getElementById("mySqlLED").src.indexOf("images/grayLED.png") > -1);
		
		if ((progressIndicatorBusy == 1 && bothServersNotRunning) || (progressIndicatorBusy == 2 && serversAreRunning)){
			document.getElementById("indicator").style.display="none"; 
			progressIndicatorBusy = 0;
		}
		
		if (serversAreRunning || bothServersNotRunning) {
			document.getElementById("startServerButton").innerHTML = 
				serversAreRunning ? 
					getLocalizedString("stopServerButtonText") : 
					getLocalizedString("startServerButtonText");
			document.getElementById("startpageButton").innerHTML = 
				getLocalizedString("startpageButtonText");
		}
	}
}

function startStopServers() {
	if (mampPlugin) {
		document.getElementById("indicator").style.display="block"; 
		var serversAreRunning = 
			(document.getElementById("apacheLED").src.indexOf("images/greenLED.png") > -1 &&
			document.getElementById("mySqlLED").src.indexOf("images/greenLED.png") > -1);
		progressIndicatorBusy = serversAreRunning ? 1 : 2;
		mampPlugin.startStopServers(!serversAreRunning);
		updateView();
	}
}

function openStartpage() {
	if (mampPlugin && window.widget) {
		var startPage = widget.system("/usr/bin/defaults read de.appsolute.MAMP startPage",null).outputString.replace(/[\r\n]/,"");
		var apachePort = mampPlugin.getApachePort();
		
		var isMAMPStartPage = false;
		
		if (startPage.length >= 5) {
			isMAMPStartPage = (startPage.substring(0,5) == "/MAMP");
		}else if(startPage == "/MAMP/"){
			isMAMPStartPage = true;
		}
		var noQuestionMarkInString = (startPage.indexOf("?") == -1);
		var url = "";
		if(isMAMPStartPage && noQuestionMarkInString){
			url = "http://localhost:"+apachePort + startPage + "?language=" + getLocalizedString("language");
		}else{
			url = "http://localhost:"+apachePort + startPage;
		}
		widget.openURL(url);

	}

}

function showPrefs() 
{
	if (mampPlugin) {
		phpVersionSaved = mampPlugin.getPHPVersion();
		if (phpVersionSaved == 4) {
			document.getElementById("php4").checked=true;
		} else {
			document.getElementById("php5").checked=true;
		}
	}	
	var front = document.getElementById("front"); 
	var back = document.getElementById("back"); 
	if (window.widget) {
		widget.prepareForTransition("ToBack");
	}
	onhide();
	front.style.display="none"; 
	back.style.display="block"; 
	if (window.widget) {
		setTimeout ("widget.performTransition();", 0);
	}
	document.getElementById("fliprollie").style.display = "none";
}

function hidePrefs() 
{
	
	var front = document.getElementById("front"); 
	var back = document.getElementById("back"); 
	if (window.widget) {
		widget.prepareForTransition("ToFront");
	}
	back.style.display="none"; 
	front.style.display="block"; 
	setTimeout ('flipitback();', 0);
	onshow();
	var newPHPVersion = document.getElementById("php4").checked ? 4 : 5;
	if (newPHPVersion != phpVersionSaved) {
		if (mampPlugin) {
			document.getElementById("indicator").style.display="block"; 
			mampPlugin.startStopServers(false);
			mampPlugin.setPHPVersion(newPHPVersion);
			mampPlugin.startStopServers(true);
			progressIndicatorBusy = 2;
			updateView();
		}
	}
}

function flipitback()
{
	updateView();
	if (window.widget) {
		setTimeout("widget.performTransition();", 0);
	}
}
function mousemove (event) 
{ 
	if (!flipShown) 
	{ 
		if (animation.timer != null) { 
			clearInterval (animation.timer); 
			animation.timer  = null; 
		} 
		var starttime = (new Date).getTime() - 13; 
		animation.duration = 500; 
		animation.starttime = starttime; 
		animation.firstElement = document.getElementById ('flip'); 
		animation.timer = setInterval ("animate();", 13); 
		animation.from = animation.now; 
		animation.to = 1.0; 
		animate(); 
		flipShown = true; 
	} 
} 
function mouseexit (event) 
{ 
	if (flipShown) { 
		// fade in the info button 
		if (animation.timer != null) { 
			clearInterval (animation.timer); 
			animation.timer  = null; 
		} 
		var starttime = (new Date).getTime() - 13; 
		animation.duration = 500; 
		animation.starttime = starttime; 
		animation.firstElement = document.getElementById ('flip'); 
		animation.timer = setInterval ("animate();", 13); 
		animation.from = animation.now; 
		animation.to = 0.0; 
		animate(); 
		flipShown = false; 
	} 
}

function animate() 
{ 
	var T; 
	var ease; 
	var time = (new Date).getTime(); 
	T = limit_3(time-animation.starttime, 0, animation.duration); 
	if (T >= animation.duration) { 
		clearInterval (animation.timer); 
		animation.timer = null; 
		animation.now = animation.to; 
	} else { 
		ease = 0.5 - (0.5 * Math.cos(Math.PI * T / animation.duration)); 
		animation.now = computeNextFloat (animation.from, animation.to, ease); 
	} 
	animation.firstElement.style.opacity = animation.now; 
}

function limit_3 (a, b, c) 
{ 
	return a < b ? b : (a > c ? c : a); 
} 
function computeNextFloat (from, to, ease) 
{ 
	return from + (to - from) * ease; 
}

function enterflip(event)
{
	document.getElementById('fliprollie').style.display = 'block';
}

function exitflip(event)
{
	document.getElementById('fliprollie').style.display = 'none';
}

function getLocalizedString (key) 
{ 
	try { 
		var ret = localizedStrings[key]; 
		if (ret == undefined) {
			ret = key;
		}
		return ret; 
	} catch (ex) {} 
	return key; 
}

function buttonPressed(b) {
	b.className = "buttonPressed";
}

function buttonUp(b) {
	b.className = "buttonNormal";
}

function doneButtonPressed(b) {
	b.className = "doneButtonPressed";
}

function doneButtonUp(b) {
	b.className = "doneButtonNormal";
}

function focus() {
	document.getElementById("background").src = "images/background.png";
}

function blur() {
	document.getElementById("background").src = "images/backgroundDark.png";
}

function openAppsolute() {
	widget.openURL("http://www.appsolute.de");
}

