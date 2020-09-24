<?php 
	session_start();
	if($_SESSION['rol'] != 2)
	{
		header("location: ./");
	}
	
	include "../database/database.php";

    if(!empty($_POST))
	{
		$alert='';
		if(empty($_POST['Fecha']) ||empty($_POST['Tipo']) || empty($_POST['Tematica']) )
		{
			$alert='<p class="msg_error">Todos los campos son obligatorios.</p>';
		}else{
			$fecha = $_POST['Fecha'];
			$tipo = $_POST['Tipo'];
			$tematica  = $_POST['Tematica'];

            $query = mysqli_query($conection,"SELECT * FROM clase WHERE Fecha = '$fecha'");
			$result = mysqli_fetch_array($query);

			if($result > 0){
				$alert='<p class="msg_error">La clase ya fue programada.</p>';
			}else{

				$query_insert = mysqli_query($conection,"INSERT INTO clase(Fecha,Tipo,Tematica)
																	VALUES('$fecha','$tipo','$tematica')");
				if($query_insert){
					$alert='<p class="msg_save">Clase programada correctamente.</p>';
				}else{
					$alert='<p class="msg_error">Error al programar la clase.</p>';
				}
			}
		}
	}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcuit icon" href="../assets/images/logo_manejate.png" />
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Programar Clase</title>
</head>
<body>
	<?php include "includes/header.php"; ?>
	<section id="container">
		
		<div class="form_register">
			<h1>Programar Clase</h1>
			<hr>
			<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>

			<form action="" method="post">
				<label for="Fecha">Fecha de la Clase</label>
				<input type="datetime-local" name="Fecha" id="Fecha" placeholder="Fecha de la Clase">
				<label for="Tipo">Tipo de la Clase</label>
				<input type="text" name="Tipo" id="Tipo" placeholder="Tipo de la Clase">

				<label for="Tematica">Tematica de la Clase</label>
                <?php 

					$query_tematica = mysqli_query($conection,"SELECT * FROM tematica");
					mysqli_close($conection);
					$result_tematica = mysqli_num_rows($query_tematica);

				 ?>

				<select name="Tematica" id="Tematica">
					<?php 
						if($result_tematica > 0)
						{
							while ($tematica = mysqli_fetch_array($query_tematica)) {
					?>
							<option value="<?php echo $tematica["ID_tematica"]; ?>"><?php echo $tematica["Tema"] ?></option>
					<?php 

							}
							
						}
					 ?>
			
				
				</select>
				<input type="submit" value="Programar Clase" class="btn_save" name="enviar">

			</form>
			<?php

			?>
		</div>


	</section>
</body>
</html>