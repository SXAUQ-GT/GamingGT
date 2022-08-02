<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GROWTOPIA</title>
	<style type="text/css">
		body{
			background-color: #6bdfff;
			overflow-y: hidden;
			font-family: sans-serif;
		}
		h1{
			text-align: left;
			margin-left: 1%; 
			color: black; 
			-webkit-text-stroke: 1px white;
		}
		#logo{
			max-width: 20%;
			position: absolute;
			left: 8%; top: 10%;
		}
		#sxauq{
			width: 20%;
			top: 22%; left: 7.5%;
			position: absolute;
		}
		#mascot{
			width: 20%;
			position: absolute;
			top: 87%; left: 10%;
			z-index: 5;
		}
		#txtinmascot{
			color: white;
			font-size: 3vw;
			-webkit-text-stroke: 0.1px black;
			position: absolute;
			left: 25%; top: -35px;
		}
		#bg{
			width: 14.5%;
			height: 12.6%;
			position: absolute;
			top: 85%; left: 9.1%;
			z-index: 1;
			opacity: 0.6;
			border-radius: 10px;
		}
		#line{
			width: 26%;
			position: absolute;
			top: 30%; left: 5%;
			border-bottom: solid 2px whitesmoke;
		}
		#boxbox{
			background-image: url(boxbox.png);
			background-repeat: no-repeat;
			background-size: 100% 100%;
			width: 60%; height: 490px;
			position: absolute;
			right: 4%; top: 10%;
			border-radius: 20px;
			border: solid;
			border-color: white;
			box-shadow: 10px 10px 5px #666666;
		}
		#realtext{
			font-size: 4vw;
			color: cyan;
			-webkit-text-stroke: 1px lightblue;
			margin-left: 5%; margin-top: -0.1%;
		}
	</style>
</head>
<body>
		<img src="GT logoname.png" id="logo">
		<img src="SXAUQ SET.png" id="sxauq">
		<div id="mascot"><img src="GUILD MASCOT.png" style="width: 20%; position: absolute; left: 0;"><p id="txtinmascot">sxauq</p></div>
		<img src="Yellow bg.png" id="bg">
		<div id="line">
		</div>
	<br>
	<div id="boxbox">
		<h1>SXAUQ - GT</h1>
		<p id="realtext">Sample Website<br>Sample Website<br>Sample Website<br>Sample Website<br>Sample Website<br>Sample Website</p>
	</div>
</body>
</html>