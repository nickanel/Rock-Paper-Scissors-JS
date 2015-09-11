<?php 
	require("./db.class.php"); 
	require("./params.php"); 
	
	$sql="select * from users where 1";
	$results = $db->query($sql);
	
	while($user = $db->fetchNextObject($results)){
		echo $user->name; 
		echo '<br>';		
	}
?>

<!DOCTYPE>
<html>
<head>
    
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
  <title>Rock - Paper - Scissors</title>

  
</head><body style="color: rgb(0, 0, 0); background-color: rgb(37, 135, 50);" alink="#000099" link="#000099" vlink="#990099">
<ul>

  <li><big style="font-weight: bold;"><big>Welcome</big></big></li>
</ul>

<br>
	
<script src="game.js"></script>	

<span style="font-style: italic;"></span><br>


<div style="text-align: center;"><a href="index.php">HOME</a><br>
</div>

<br>

<br>

<div style="text-align: center;">
	<a href="http://www.cs.aueb.gr/">
		<img style="border: 0px solid ; width: 200px; height: 75px;" alt="logo CS AUEB" src="cs_aueb_logo.png">
		</a>
	<br>
</div>

</body></html>
