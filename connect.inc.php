<?php
$host = 'localhost';
$id = 'root';
$password = '';
$database = 'user_registration';

$link = mysqli_connect($host,$id,$password,$database) or die("Error connection to database");
if($link){
	session_start();
	if(isset($_SESSION["id"])){
		$query="SELECT `firstname` FROM `user_registration` WHERE `id`='".$_SESSION["id"]."'";
		$result=mysqli_query($link,$query);
		$result=mysqli_fetch_assoc($result);
		$result=$result['firstname'];
	}

	#	echo '<b>'.'Connected'.'</b>';
}else{
	echo ' There\'s some problem with our system.Try again later';
}
?>