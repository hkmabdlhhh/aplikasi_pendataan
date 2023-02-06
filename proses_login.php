<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "hhh" && $password == "hhh"){
	$_session['username'] = username;
	header("location:home.php");
}else{
	header("location:form_login.php");
}
?>