<?php 

$db = new mysqli('localhost:3307','root','','renthouse');

if($db->connect_error){
	echo "Error connecting database";
}

 ?>