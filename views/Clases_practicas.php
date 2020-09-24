<?php
    require '../database/database.php';
    if(!empty($_POST))
	{
		$alert='';
		if(empty($_POST['Fecha_clase']) ||empty($_POST['Tipo_clase']) || empty($_POST['tematica']) )
		{
			$alert='<p class="msg_error">Todos los campos son obligatorios.</p>';
		}else{
			$fecha = $_POST['Fecha_clase'];
			$tipo = $_POST['Tipo_clase'];
			$tematica  = $_POST['tematica'];

			if($result > 0){
				$alert='<p class="msg_error">El correo o el usuario ya existe.</p>';
			}else{

				$query_insert = mysqli_query($conection,"INSERT INTO clase(Fecha_clase,Tipo_clase,tematica,)
																	VALUES('$fecha','$tipo','$tematica')");
				if($query_insert){
					$alert='<p class="msg_save">Usuario creado correctamente.</p>';
				}else{
					$alert='<p class="msg_error">Error al crear el usuario.</p>';
				}
			}
		}
	}
    

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MANEJATE | Clases Practica </title>
        <link rel="shortcuit icon" href="../assets/images/logo_manejate.png" />
        <link rel="stylesheet" href="../assets\css\style_clases.css">
    </head>
    <body>
    <section class="body">
        <?php if(!empty($message)):?>
            <p><?php $messge?></p>
            <?php endif ?>
            </section>
            <form action="Clases_practicas.php" method="post">
                <h1>Clases Practicas</h1>
                <div class="inset">
                    <label for="text">Hora de la clase</label>
                    <input type="text" name="Fecha_clase" placeholder="Ingrese el Id de la clase" required="true">
                    <label for="email">Tipo Clase</label>
                    <input type="text" name="Tipo_clase" placeholder="Ingrese el Id de la clase" required="true">
                    <label for="email">Tematica</label>
                    <input type="number" name="tematica" placeholder="Ingrese el Id de la clase" required="true">
                </div>
                <input type="submit" value="Asignar Clase Practica">
                <a class="boton_personalizado" href="../Admin/lista_usuarios.php">Atras</a>
                
            </form>
    </body>
</html>