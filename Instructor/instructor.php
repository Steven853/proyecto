<?php 
	session_start();
	if($_SESSION['rol'] != 2)
	{
		header("location: ./");
	}
	
	include "../database/database.php";	

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>MANEJATE | Instructor</title>
	<link rel="shortcuit icon" href="../assets/images/logo_manejate.png" />
</head>
<body>
	<?php include "includes/header.php"; ?>
	<section>
	</section>
</body>
</html>