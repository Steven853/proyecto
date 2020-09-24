		<nav>
			<ul>
			<?php 
				if($_SESSION['rol'] == 1){
			 ?>
				<li class="principal">

					<a href="#">Usuarios</a>
					<ul>
						<li><a href="registro_usuario.php">Nuevo Usuario</a></li>
						<li><a href="lista_usuarios.php">Lista de Usuarios</a></li>
					</ul>
				</li>
			<?php } ?>
				<li class="principal">
					<a href="clases.php">Asignar Clase Practica</a>
				</li>
				<li class="principal">
					<a href="../Reportes/Calendario/Calendario/Index.html">Horario</a>
				</li>
				<li class="principal">
					<a href="">Pagos</a>
				</li>
				<li class="principal">
					<a href="">Actualizar Perfil</a>
				</li>
			</ul>
			<?php 			
				if($_SESSION['rol']==2){
					header('Location: ../Instructor/instructor.php');
				}elseif($_SESSION['rol']==3){
					header('Location: ../Aprendiz/Aprendiz.php');
				}
			?>
		</nav>