<?php 
// $host = "localhost";
// $username = "root";
// $password = "Myjesusislord2";

$mysqli_connection = new mysqli("localhost","root","");

$sql_string = $mysqli_connection->query("CREATE DATABASE IF NOT EXISTS stephen2");

if($sql_string){
	echo "CREATED DATABASE";

 }else{
 	echo $mysqli_connection-> error;
 }
