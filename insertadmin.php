<?php 
	include 'Admin.php';
	// session_start();
	$email=$_POST['email'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$pass=$_POST['pass'];

	$admin1 = new Admin($fname,$lname,$email,$pass);
	$admin1->Admininfo();
?>