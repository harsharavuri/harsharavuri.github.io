<?php
$host = 'localhost';
$id = 'root';
$password = '';
$link = mysqli_connect($host,$id,$password) or die("Error connection to database");

$query = "CREATE DATABASE IF NOT EXISTS user_registration";
if(mysqli_query($link,$query)){
	$query = " CREATE TABLE IF NOT EXISTS user_registration(
   id   INT              NOT NULL,
   firstname VARCHAR (25)     NOT NULL,
   lastname  VARCHAR (25),
   email  VARCHAR (25) NOT NULL,
   username   VARCHAR (20) NOT NULL,
   password   VARCHAR (32) NOT NULL,   
   PRIMARY KEY (ID)
);";
$database='user_registration';
mysqli_close($link);//Check here..........................................
$link = mysqli_connect($host,$id,$password,$database) or die("Error connection to database");

   if(mysqli_query($link,$query)){
	   echo 'Successfully done. You can now use it';
   }else{
	   echo 'There is some error. Please try again later';
   }

}else{
	die('There seems to be problem, please try again later after resetting your system');
}

?>