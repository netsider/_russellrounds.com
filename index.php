<html><head>
<title>RussellRounds.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head><body>
<style>
@media (max-width: 2000px) {
  #box {
    width: 40%;
	height: 80%;
  }
}
@media (max-width: 700px) {
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
.centim{
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
}
</style>
  <div id="box" class="border">
  
	<div id="innerbox">Welcome!</div>  
	<div style="width: 65%;float:left;height: 40%;overflow: hidden;"><img src="russsuit.jpg" id="myphoto" class="centim img-circle" style="position: relative;top: 0%;"></div><div style="width:35%;float:left;height:40%;"><div id="menu" class="border">Menu:<br/></div>
	
	</div><br/>
	<div style="width:35%;float:left;height:50%;">D</div><div style="width: 65%;float:left;height: 50%"></div>
	<br/><div id="footerbox">Created by Russell Rounds.</div>  
  </div>
  


 <script>
$(window).resize(function(){
	$('#box').css({
		position:'absolute',
		left: ($(window).width() - $('#box').outerWidth())/2,
		top: ($(window).height() - $('#box').outerHeight())/2
	});
});

$(window).resize();
</script>
</body></html>