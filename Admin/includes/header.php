<?php 

	if(empty($_SESSION['active']))
	{
		header('location: ../');
	}
 ?>
	<header>
		<div class="header">
			
			<h1>MANEJATE | Admin</h1>
			<div class="optionsBar">
				<p><?php echo fechaC(); ?></p>
				<span>|</span>
				<span class="user"><?php echo $_SESSION['user'].' - '.'Admin' ?></span>
				<a href="../controllers/salir.php"><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>

			</div>
		</div>
		<?php include "nav.php"; ?>
	</header>