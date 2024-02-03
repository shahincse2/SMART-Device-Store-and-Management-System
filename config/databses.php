<?php 

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sdsms";

$connection =new mysqli($host, $user, $pass, $dbname);
if ($connection->connect_error){
	 echo "DB Connect Error: ".$connection->connect_error;
}else{
}
 ?>