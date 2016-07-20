<html><head>
<title>RussellRounds.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head><body>
<style>
@media (max-width: 4000px) {
  #box {
    width: 40%;
	height: 80%;
  }
}
@media (max-width: 1000px) {
  #box {
    width: 90%;
	height: 80%;
  }
}
body{
	background: #054a7b;
}
#box{
	border-radius: 25px;
	background: #FFFFFF;
}
.border{
	border-style: solid;
	border-width: 1px;
	box-shadow: 0px 0px 1px #000000;
}
#innerbox{ 
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
#footerbox{
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
	width:60%;
	height:auto;
	position: relative;
	top: 10%;
}
#sideColumn{
	width:35%;
	float:left;
	height:40%;
	line-height: 200%;
}
#firstColumn{
	width: 65%;
	float:left;
	height: 40%;
	overflow: hidden;
}
#bottomRow{
	width:100%;
	float:left;
	height:50%;
	text-align: center;
	padding: 2px;
}
.mainText{
	position: relative;
}
</style>
  <div id="box" class="border">
  
	<div id="innerbox">&nbsp</div>  
	<div id="firstColumn"><div class="sixteen-nine"><img src="russsuit.jpg" id="myphoto" class="center img-rounded"></div></div><div id="sideColumn"><div id="menu" class="">Menu:<br/><a href="#" onclick="showHome()">Home</a><br/><a href="#" onclick="showContact()">Contact</a><br/><a href="#" onclick="showLinks()">Links</a><br/><br/>
	
	
	</div>
	
	</div><br/>
	<div id="bottomRow" style="width:100%;float:left;height:50%;">
	<p class="mainText" id="homeText">Welcome to my website.  Please use the links above to navigate content.</p>
	<p class="mainText" id="contactText">Contact me:<br/><br/><strong>Email:</strong> <a href="mailto:netside@protonmail.com">netside@protonmail.com</a><br/><strong>Facebook:</strong> <a href="http://facebook.com/russellrounds">http://facebook.com/russellrounds</a></p>
	<p class="mainText" id="linkText">Links:<br/><br/><strong>Github:</strong> <a href="https://github.com/netsider">https://github.com/netsider</a></p></div>
	
	
	
	<br/><div id="footerbox">Created by <a href="mailto:netside@protonmail.com">Russell Rounds</a>. &copy; 2016</div>  
  </div>
  


 <script>
$(window).resize(function(){
	$('#box').css({
		position:'absolute',
		left: ($(window).width() - $('#box').outerWidth())/2,
		top: ($(window).height() - $('#box').outerHeight())/2
	});
	showHome()
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
</script>
</body></html>