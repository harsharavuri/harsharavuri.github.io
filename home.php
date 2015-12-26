<?php
	
	require 'connect.inc.php';
	if(!isset($_SESSION["id"])){
		$url='index.php';
		header('Location: '.$url);
	}
	#if($isstart!=1)session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--<script src="script.js"></script>-->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<style>
body{
	background-color:#85adad;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
	border: 1px groove white;
	text-align:center;
	width: 20%;
    float: left;
}

a li {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
	text-decoration: none;
}

a li:hover {
    background-color: #111;
}
#heading{
	text-shadow: 1px 1px #003366;
	width:100%;
	text-align:center;
	height:11%;
	font-size:230%;
	font-family: "Times New Roman", Times, serif;
}
#heading_span{
	float:right;
}
.welcome{
	float:right;
	padding:2px 10px;
	font-size:110%;
	text-decoration:none;
	
}

</style>
</head>
<body>
<div id="heading" class="well"> <b><p><font color="#003366">Spring Spree 2016<span id="heading_span">NIT Warangal</span></font></p></b></div>

<ul>
  <a class="active" href="index.php"><li>Home</li></a>
  <a href="#profile"><li>Profile</li></a>
  <a href="#events"><li>Events</li></a>
  <a href="#accomodation"><li>Accomodation</li></a>
  <a href="signout.php"><li>Signout</li></a>
</ul>
<div><p class="welcome">Welcome, <?php echo "<strong>".$result."</strong>";echo ' &nbsp;&nbsp;&nbsp;<a href="signout.php">Signout</a>';?></p></div>;
</body>
</html>