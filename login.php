<?php
require 'connect.inc.php';

if(isset($_SESSION["id"])){
	$url = 'index.php';
	header('Location: '.$url);
	}
?>
<!DOCTYPE html>
<html>
<head>
<title> SpringSpree </title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body id="body">
	<?php
		/* Prepared statements can be used
		   $mysqli = new mysqli('localhost','root','','user_registration');  This can be include in the connect.inc.php directly
		   $sql = "SELECT `id` FROM `user_registration` WHERE `username`=? and `password`=?";
		   $stmt = $mysqli->prepare($sql);
		   $stmt->bind_param("ss",$username,$password);
		   $username = $_POST['username'];
		   $password = $_POST['password'];
		   $stmt->execute();
		   $stmt->close();
		   $mysqli->close();    */
		
		if($_SERVER['REQUEST_METHOD']=='POST'){
			#echo $_POST['loginid'];
			if(isset($_POST['loginid'])&&isset($_POST['password'])){
					#echo 'entered';
					$a=$_POST['loginid'];$b=$_POST['password'];
					if($a!=''&&$b!=''){
						$a=mysqli_real_escape_string($link,$a);
						$b=mysqli_real_escape_string($link,$b);
						$query="SELECT * FROM `user_registration` WHERE `username`='".$a."' and `password`='".md5($b)."' ORDER BY `username`";
						$queryrun= mysqli_query($link,$query);
						if($queryrun)
							$queryrow=mysqli_num_rows($queryrun);
						else
							echo 'Problem with log in system, try again later';
						if($queryrow==1){
							$url='index.php';
							
							$result=mysqli_fetch_assoc($queryrun);
						#	session_start();
						#	$isstart=1;
							$_SESSION["id"]=$result["id"];
							$_SESSION["firstname"]=$result["firstname"];
							$_SESSION["lastname"]=$result["lastname"];
							header('Location: '.$url);
							die();
						}else{
							echo'Invalid Credentials';
						}
					}else{
						echo 'ID and password must not be empty';
					}
			}
		}
	?>
	<div id="headerbox" id="heading"	>
		<h1 id="head1"> SpringSpree </h1>
		<!--<img src="headimage.jpg" id="headimage"></img>-->
	</div>
	<div id="login_box">
		<form action="login.php" method="post" id="sign_up_form">
			<div class="form-group">
				<label for="loginid">Login Id:</label>
				 
				<input type="text" class="form-control" name="loginid" placeholder="Login Id" required>
			</div>	<br />
			<div class="form-group">	
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" placeholder="password" required>
			</div><br />
			<div id="submit_btn">
				<button type="submit" class="btn btn-default" id="submitbtn" name="submit">Log In</button>
			</div>
			<hr width="100%" color="black">
			
		</form>
		<div id="sign_up">
				<a href="signup.php"><button class="btn btn-default" id="signup" name="signup">Signup</button></a>
			</div>
	</div>
	
	<script src="js/bootstrap.min.js"></script>
</body>
</html>