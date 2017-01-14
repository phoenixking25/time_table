<!DOCTYPE html>
<html>
<head>
	<title>Time Table</title>
	<style type="text/css">
		html,body{
	height: 100%;
	width: 100%;
	overflow: hidden;
	
}
body{
	background:100%;

}
#container2{
	position: absolute;
	top: 0;
	background-color:#44d4f4;
	height: 100%;
	transition: left 1s ease;
	width: 100%;
	left:0%;
}

@font-face{
	font-family: myfont7;
	src:url(OgonekLight.ttf);
}
@font-face{
	font-family: myfont8;
	src:url(BreezePersonalUse.ttf);
}
#box{
	position: absolute;
	top: 47%;
	left: 17%;
	height: 10%;
	width: 64%;
	font-family: myfont7;
	border-radius: 20px;
	border: 5px solid white;
	color:black;
	font-size: 150%;
}
#text{
	font-size: 500%;
	width:auto;
	font-family: myfont7;
	color: white;
	text-align: center;
}
.button{
	background-color: #8ce587;
	height: 16%;
	width: 25%;
	border-radius: 5px solid white;
	position: absolute;
	top:68%;
	left:36%;
	font-family: myfont7;
	color: white;
	font-size: 200%;
	border-radius: 50px;
}
#button1{
		background-color: #44d4f4;
	}
@media only screen and (max-width: 500px) {
	.button{
		width: 43%;
		border-radius: 27px;
		left:24%;
	}
}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="container2">

		<form method="POST" action="section.php">
		<p id="text">YEAR</p><br>
		  <select name="YEAR" id="box">
		    <option value="1 YEAR">1st YEAR</option>
		    
		    <input type="submit" name="button" value="GO"  class="button" id="button" >
		</form>
	</div>
</body>
</html>