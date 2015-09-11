<?php
	require("./db.class.php"); 
	require("./params.php");
	
	
	$regUser = $_GET['username'];
	$regPass = $_GET['pass'];
	$regName = $_GET['name'];
	$regMail = $_GET['mail'];
	
	$sql1 = "INSERT INTO users ('username', 'pass', 'name', 'mail') VALUES ('$regUser', '$regPass', '$regName', '$regMail')";
	
	$db->execute($sql1);
	
	//header("Location: localhost/myGame/index.php?flag=1");

?>
