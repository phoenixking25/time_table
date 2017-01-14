<!DOCTYPE html>
<html>
<head>
	<title>Time Table</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
			@media only screen and (max-width: 500px) {
	#button1{
		width: 43%;
		border-radius: 27px;
		left:24%;
	}
}
	html{
	height: 100%;
	width: 100%;
	overflow: hidden;
}
body{
	background:100%;

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

#container3{
	position: absolute;
	top: 0;
	height: 100%;
	left: 0%;
	transition: left 1s ease;
	z-index: 1;
	width: 100%;
	background-color:#8ce587;
}
@font-face{
	font-family: myfont7;
	src:url(OgonekLight.ttf);
}
@font-face{
	font-family: myfont8;
	src:url(BreezePersonalUse.ttf);
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
#text{
	font-size: 500%;
	width:auto;
	text-align: center;
	font-family: myfont7;
	color: white;
}

	</style>
</head>
<body>
	<div id="container3">
		<form action="table.php" method="POST">
		<p id="text">SECTION</p><br>
		  <select name="section" id="box">
		   
		    <option value="b">B</option>
		    
		    <input type="submit"  name="button" value="GO" class="button" id="button1">
		</form>
	</div>

</body>