<?php
	$conn = mysqli_connect("localhost","root","","life_sound");
	mysqli_set_charset($conn,'utf8');
	session_start();
	if(mysqli_connect_error()){
		echo "Chê!!";
	}
?>