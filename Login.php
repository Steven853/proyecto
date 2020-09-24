<?php 
	
$alert = '';
session_start();
if(!empty($_SESSION['active']))
{
	header('location: Admin/lista_usuarios.php');
}else{

	if(!empty($_POST))
	{
		if(empty($_POST['usuario']) || empty($_POST['clave']))
		{
			$alert = 'Ingrese su usuario y su calve';
		}else{

			require_once "database/database.php";

			$user = mysqli_real_escape_string($conection,$_POST['usuario']);
			$pass = md5(mysqli_real_escape_string($conection,$_POST['clave']));

			$query = mysqli_query($conection,"SELECT * FROM usuario WHERE usuario= '$user' AND password = '$pass'");
			mysqli_close($conection);
			$result = mysqli_num_rows($query);

			if($result > 0)
			{
				$data = mysqli_fetch_array($query);
				$_SESSION['active'] = true;
				$_SESSION['idUser'] = $data['idusuario'];
				$_SESSION['nombre'] = $data['nombre'];
				$_SESSION['email']  = $data['email'];
				$_SESSION['user']   = $data['usuario'];
				$_SESSION['rol']    = $data['rol'];

				header('location: Admin/lista_usuarios.php');
			}else{
				$alert = 'El usuario o la clave son incorrectos';
				session_destroy();
			}


		}

	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcuit icon" href="assets/images/logo_manejate.png" />
	<title>Login | Manejate</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style_login.css">
</head>
<body>

	<section class="body">
		<div class="grad"></div>
              <div class="header">
                <br>
                <div>MANEJATE</div>
              </div>
		<section id="container">
		<div class="login">
		<form action="" method="post">
			
			<img src="assets/Images/login.png" alt="Login">

			<input type="text" name="usuario" placeholder="Usuario">
			<script>
				function mostrarContrasena(){
					var tipo = document.getElementById("password");
					if(tipo.type == "password"){
						tipo.type = "text";
					}else{
						tipo.type = "password";
					}
				}
			</script>
			<input type="password" name="clave" id="password" placeholder="Contraseña">
			<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
			<input type="submit" value="INGRESAR">
			<div class="col">
			<button class="btn btn-primary" type="button" onclick="mostrarContrasena()">Mostrar Contraseña</button>
			</div>
			

		</form>
		</div>
	</section>

	
</body>
</html>