
<html>
<head>
  <title>Sign Up page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  

<style>

#sign_up{
	position:absolute;
	top:7%;
	left:25%;
#	background-color:#D4D4D4;
	width:50%;
	border-radius:20px;
	padding:5px;
}
h1{
	
	position:relative;
	bottom:40%;
	left:37%;
}
.sign_up_form{
	float:center;
	position:relative;
	bottom:40%;
	left:20%;
	}

</style>
<script>


</script>
</head>
<body>
<?php
			
			require 'connect.inc.php';
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
				#if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password_1']))
				$username=$_POST['username'];$password=md5($_POST['password']);$password_1=md5($_POST['password_1']);$email=$_POST['email'];
				$firstname=$_POST['firstname'];$lastname=$_POST['lastname'];
				if($username!='' && $password!='' && $password_1!='' && $email!='' && $firstname!='' && $lastname!=''){
					$query = "SELECT * FROM `user_registration` WHERE `username` ='".mysqli_real_escape_string($link,$username)."' ORDER BY `username`"	;
					#echo $query;
					$queryrun= mysqli_query($link,$query);
					#echo $queryrun.' b';
					if($queryrun==true){
						
						$queryrows=mysqli_num_rows($queryrun);
						if($queryrows==1)
						echo 'Sorry the requested username alredy exists,try a different one';
					
					else{
						if($password!=$password_1){
							echo 'Passwords do not match. Fill them again';
						}else{
						# All the variables must be converted using mysql_real_escape_string;
						$a= mysqli_real_escape_string($link,$firstname);$b= mysqli_real_escape_string($link,$lastname);$c= mysqli_real_escape_string($link,$email);
						$d= mysqli_real_escape_string($link,$username);$e= mysqli_real_escape_string($link,$password);
						$query = "INSERT INTO `user_registration` VALUES('','".$a."','".$b."','".$c."','".$d."','".$e."')";
						$queryrun=mysqli_query($link,$query);
						if($queryrun)echo ' Created Successfully ';
						else{
							echo 'Sorry for the inconvenience, Account cannot be created right now as the limit exceeded. Try again later. ';
						}
					}
				}
			}else{
				echo 'aSorry for the inconvenience, Account cannot be created right now as the limit exceeded. Try again later. ';
			}
			}else{
				echo ' Requred fields must not be empty';
			}
		}
?>
<div class="container" id="sign_up">
	<header>
		<h1>Sign Up</h1>
	</header>
		
	
		<h3><p id="ida"></p></h3>
		<form class="sign_up_form" method="post" action="signup.php" id="form1" name="form1">
			<div class="form-group col-lg-7">
				<label for="Full Name">First Name</label><span> * </span>
				<input type="text" class="form-control " name="firstname" id="first_name" placeholder="First name" required>
			</div>
	
			<div class="form-group col-lg-7">
				<label for="lastname">Last Name</label><span> * </span>
				<input type="text" class="form-control " id="lastname" name="lastname" placeholder="Last Name" >
			</div>
			<div class="form-group col-lg-7">
				<label for="email">Email</label><span> * </span>
				<input type="email" class="form-control " id="email" name="email" placeholder="Email" required>
			</div>
			<div class="form-group col-lg-7">
				<label for="username">Username</label><span> * </span>
				<input type="text" class="form-control " id="username" name="username" placeholder="Username" required>
			</div>
			<div class="form-group col-lg-7">
				<label for="password">Password</label><span> * </span>
				<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
			</div>
			<div class="form-group col-lg-7">
				<label for="password_1">Confirm Password</label><span> * </span>
				<input type="password" class="form-control " name="password_1" id="password_1" placeholder="password" required>
			</div>
			
			
			<div class="form-group col-lg-7">
				<button type="submit" class="btn btn-info" name="sign_up" width="50px" style="position:relative;left:40%;">Register</button>
			</div>

			
		</form>
		
		
		
		
</div>	
</body>
</html>