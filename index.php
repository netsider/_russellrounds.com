<html><head>
<title>It worked!</title>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head><body>
<style>
body{
	background: #000000;
}
#box{
	border-style: solid;
	border-width: 0px;
	width: 60%;
	height: 75%;
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
}
</style>
  <div id="box">
  
  <div class="innerbox border">
  <h2>Welcome to RussellRounds.com</h2>
    <div class="row">
  <div class="col-sm-4 border">.col-sm-4</div>
  <div class="col-sm-4  border">.col-sm-4</div>
  <div class="col-sm-4  border">.col-sm-4</div>
</div>
  
  
  </div>  
  </div>
  


 <script>
$(window).resize(function(){
	$('#box').css({
		position:'fixed',
		left: ($(window).width() - $('#box').outerWidth())/2,
		top: ($(window).height() - $('#box').outerHeight())/2
	});
});

$(window).resize();
</script>
</body></html>