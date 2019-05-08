<?php
$pass = $_POST("login-input6")
$email = $_POST("login-input5")
$real = 'test@test'
$real2 = 12345

if (($real2 == $pass) && ($real == $email)){header("location:page.html")}
else 
	header("location:index")
?>