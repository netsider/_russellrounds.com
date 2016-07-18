<html><head>
<title>It worked!</title>
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
	border-style: solid;
	border-width: 0px;
	border-radius: 25px;
	background: #FFFFFF;
	box-shadow: 0px 0px 1px #000000;
}
.border{
	border-style: solid;
	border-width: 1px;
}
.innerbox{ 
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
.footerbox{
	height: 5%;
	display: block;
	clear: left;
	border-radius: 0px 0px 25px 25px;
}
</style>
  <div id="box">
  
	<div class="innerbox border">Welcome!</div>  
	<div class="border" style="width: 65%;float:left;height: 40%;"><img src="russwater.jpg" height="50%" width="50%" class="centim"></div><div style="width:35%;float:left;height:40%;border-width: 0px 0px 1px 1px;border-style:solid;text-align:center;">Menu:<br/>
	</div><br/>
	<div style="width:35%;float:left;height:50%;border-width: 0px 0px 1px 1px;border-style:solid;">D</div><div class="border" style="width: 65%;float:left;height: 50%">C</div>
	<br/><div class="footerbox border">Goodbye!</div>  
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