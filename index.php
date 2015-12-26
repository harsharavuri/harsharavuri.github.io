<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="script.js"></script>
<!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
<script src="js/bootstrap.min.js"></script>
<?php
		
	require 'connect.inc.php';
	
	
?>
<style>
	<?php
	if(isset($_SESSION["id"])){
		echo "#acc,#signout{display:block;}"." "."#login,#register{display:none}";
		}else{
			echo "#acc,#signout{display:none;}"." "."#login,#register{display:block}";
		}
	?>
	

</style>
<script>

/*function check(){
	var login=document.getElementById("login");
	var signout=document.getElementById("signout");
	var acc=document.getElementById("acc");
	var register=document.getElementById("register");
	if(<?php if(isset($_SESSION["id"]))echo 'true'; else echo 'false'; ?>){
		acc.style.display="block";
		signout.style.display="block";
		login.style.display="none";
		register.style.display="none";	
	}else{
		
		acc.style.display="none";
		signout.style.display="none";
		login.style.display="block";
		register.style.display="block";	
	
	}
}*/
//var a=0;
/*function signout(){
	$_SESSION['id']=-1;
	//alert('sadas');
	<?php 
	if($_SESSION['id']==-1)
	{	$_SESSION['id']=0;
		echo 'require \'signout.php\'';
		$url = 'home.php';
		header('Location: '.$url);
	}
	?>
}*/
//document.onreadystatechange=check;
//check();
//window.onload=check;
</script>
 </head>
<body>
<p id="demo"></p>
<div id="main" >
 <div id="menu" class="side">
 <ul class="list-group" id="list">
	<br /><br /><br />
	
  <div id="acc" id="aj"> 
  <a href="home.php"><li  id="list-item"><span>Account</span></li></a>
  </div>
  <div id="aj">
  <li  id="list-item" onclick="ajax(0)"><span>Home</span></li>
  </div>
  <div id="aj">
  <li  id="list-item" onclick="ajax(2)"><span>Events</span></li>
  </div>
  <div id="aj">
 
  <!--<button type="button" class="btn btn-default side glyph" aria-label="Left Align">
  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
	</button>-->
	<li  id="list-item" onclick="ajax(3)"> <!--class="side1"--><span>Spotlights</span></li>
  </div>
  <div id="aj">
  <li  id="list-item" onclick="ajax(1)"><span>About</span></li>
  </div>
  <div id="aj">
  <li  id="list-item" onclick="ajax(4)"><span>Contact us</span></li>
  </div>
  <div id="register">
  <a href="signup.php"><li  id="list-item">Register</li></a>
  </div>
  <div id="login">
  <a href="login.php"><li  id="list-item">Login</li></a>
  </div>
  <div id="signout" onclick="signout()">
  <a href="signout.php"><li  id="list-item" >Sign Out</li></a>
  </div>
  <div>
  <a href="#"><li  id="list-item">FAQ</li></a>
  </div>
 </ul>
</div>
<div id="heading" class="well side" > <b><p><font color="#003366">Spring Spree 2016<span id="heading_span">NIT Warangal</span></font></p></b></div>
<p> <!--<strong><h2>What is Spree?</h2><strong> --> </p>
<div id="ajax_here">
<h2>Home Page</h2>
</div>
<?php
//session_unset(); 
//session_start();
if(isset($_SESSION['id'])){if($_SESSION['id']!='')echo 'true'; else echo 'false';}else echo 'false';
//echo $_SESSION['id'];

?>

</div>
<script>


</script>
</body>
</html>	