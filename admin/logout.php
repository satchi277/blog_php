<?php
session_start();

if(isset($_POST['logout_btn']))
{
	session_destroy();
	$_SESSION['username'];
	header('Location: login.php');
}

?>