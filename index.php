<!DOCTYPE html>
<html><head>
<title>RussellRounds.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head><body onload="$(window).resize();">
<style>
@media (min-width: 1000px) {
  #mainBox {
    width: 40%;
	height: 80%;
  }
  #myphoto{
	  width:45%;
  }
}
@media (max-width: 1000px) {
  #mainBox {
    width: 90%;
	height: 80%;
  }
    #myphoto{
	  width:60%;
  }
}
body{
	background: #054a7b;
}
#mainBox{
	border-radius: 25px;
	background: #FFF;
}
.border{
	border-style: solid;
	border-width: 1px;
	box-shadow: 0px 0px 1px #000000;
}
#titleBar{ 
	border-radius: 25px 25px 0px 0px;
	text-align: center;
	padding: 1px;
	height: 5%;
	width: 100%;
}
.center{
	margin-left: auto;
    margin-right: auto;
	margin: 0, auto;
	justify-content: center;
	display: flex;
	align-items: center;
}
#footer{
	height: 5%;
	display: block;
	clear: left;
	border-radius: 0px 0px 25px 25px;
	text-align: center;
}
#menu{
	height:100%;
	width:75%;
	margin: 0 auto;
	text-align: center;
}
#myphoto{
	height:auto;
	position: relative;
	top: 10%;
	box-shadow: 1px 1px 5px 1px #000000;
}
#secondColumn{
	width:35%;
	float:left;
	height:30%;
	line-height: 200%;
}
#firstColumn{
	width: 65%;
	float:left;
	height: 30%;
	overflow: hidden;
}
#mainRow{
	width:100%;
	float:left;
	height:60%;
	text-align: center;
	padding: 2px;
}
.mainText{
	position: relative;
}
hr{
	border-top: 1px solid #054a7b;
}
</style>
  <div id="mainBox" class="border">
  
	<div id="titleBar">&nbsp</div>  
	<div id="firstColumn"><div><img src="russsuit.jpg" id="myphoto" class="center img-rounded"></div></div><div id="secondColumn"><div id="menu" class="">Menu<hr width="75%" size="3px" style="margin-top:0;margin-bottom:0;margin-top:-5px;"/><a href="#" onclick="showHome()">Home</a><br/><a href="#" onclick="showContact()">Contact</a><br/><a href="#" onclick="showLinks()">Links</a><br/><br/>
	
	
	</div>
	
	</div><br/>
	<div id="mainRow">
	<hr width="75%" size="3px" style="margin-bottom:0px;"/>
	<p><div class="mainText" id="homeText">Welcome to my website.  Please use the links above to navigate content.</p></div>
	<p><div class="mainText" id="contactText">Contact me:<br/><strong>Email:</strong> <a href="mailto:netside@protonmail.com">netside@protonmail.com</a><br/><strong>Facebook:</strong> <a href="http://facebook.com/russellrounds">http://facebook.com/russellrounds</a></p></div>
	<div class="mainText" id="linkText"><p>Links:<br/><strong>Github:</strong> <a href="https://github.com/netsider">https://github.com/netsider</a></p></div>
	
	
	</div>
	
	<br/><div id="footer">Created by <a href="mailto:russellrounds@gmail.com">Russell Rounds</a>. &copy; 2016</div>  
  </div>
  


 <script>
$(window).resize(function(){
	$('#mainBox').css({
		position:'absolute',
		left: ($(window).width() - $('#mainBox').outerWidth())/2,
		top: ($(window).height() - $('#mainBox').outerHeight())/2
	});
	showHome()
	console.log("Window Height: " + $(window).height());
	console.log("Window Width:: " + $(window).width());
});

$(window).resize();


function showHome(){
	$("#homeText").show();
	$("#contactText").hide();
	$("#linkText").hide();
}
function showLinks(){
	$("#homeText").hide();
	$("#contactText").hide();
	$("#linkText").show();
}
function showContact(){
	$("#homeText").hide();
	$("#contactText").show();
	$("#linkText").hide();
}

var utterance = new SpeechSynthesisUtterance('Hello, Who Ever You Are.  Welcome to my website');
window.speechSynthesis.speak(utterance);
</script>
</body></html>