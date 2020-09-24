<?php 
	session_start();
	if($_SESSION['rol'] != 3)
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
	<title>MANEJATE | Aprendiz</title>
	<link rel="shortcuit icon" href="../assets/images/logo_manejate.png" />
</head>
<body>
	<?php include "includes/header.php"; ?>
	<section id="container">
		
		<h1>Clases Programadas</h1>		

		<table>
			<tr>
				<th>Identificación</th>
				<th>Fecha y Hora de la Clase</th>
				<th>Tipo de la Clase</th>
				<th>Tematica</th>
				<th>Acciones</th>
			</tr>
		<?php 
			//Paginador
			$sql_registe = mysqli_query($conection,"SELECT COUNT(*) as total_registro FROM usuario");
			$result_register = mysqli_fetch_array($sql_registe);
			$total_registro = $result_register['total_registro'];

			$por_pagina = 15;

			if(empty($_GET['pagina']))
			{
				$pagina = 1;
			}else{
				$pagina = $_GET['pagina'];
			}

			$desde = ($pagina-1) * $por_pagina;
			$total_paginas = ceil($total_registro / $por_pagina);

			$query = mysqli_query($conection,"SELECT u.ID_clase, u.Fecha, u.Tipo, u.Tematica from clase u INNER JOIN tematica r ON u.Tematica = r.ID_tematica ORDER BY u.ID_clase");

			mysqli_close($conection);

			$result = mysqli_num_rows($query);
			if($result > 0){

				while ($data = mysqli_fetch_array($query)) {
					
			?>
				<tr>
					<td><?php echo $data["ID_clase"]; ?></td>
					<td><?php echo $data["Fecha"]; ?></td>
					<td><?php echo $data["Tipo"]; ?></td>
					<td><?php echo $data["Tematica"]; ?></td>
					<td>
						<a class="link_edit" href="#">Inscribirse</a>
					</td>
				</tr>
			
		<?php 
				}

			}
		 ?>


		</table>
		<div class="paginador">
			<ul>
			<?php 
				if($pagina != 1)
				{
			 ?>
				<li><a href="?pagina=<?php echo 1; ?>">|<</a></li>
				<li><a href="?pagina=<?php echo $pagina-1; ?>"><<</a></li>
			<?php 
				}
				for ($i=1; $i <= $total_paginas; $i++) { 
					# code...
					if($i == $pagina)
					{
						echo '<li class="pageSelected">'.$i.'</li>';
					}else{
						echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
					}
				}

				if($pagina != $total_paginas)
				{
			 ?>
				<li><a href="?pagina=<?php echo $pagina + 1; ?>">>></a></li>
				<li><a href="?pagina=<?php echo $total_paginas; ?> ">>|</a></li>
			<?php } ?>
			</ul>
		</div>


	</section>
</body>
</html>