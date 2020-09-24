<?php 
	
    include "../database/database.php";	
    

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>MANEJATE | Aprendiz</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro-icons.min.css">
    <link rel="stylesheet" href="../assets/css/Aprendiz_style.css">
    <link rel="shortcuit icon" href="../assets/images/logo_manejate.png" />

<body>
    <div id="hero">  
        <div class="container">
            <span class="mif-chevron-left mif-3x boton"></span>
            <nav>
                <img src="../assets\Images\logo_manejate.png" class="responsive-img bouncing" alt="logo">
                <ul id="menu_principal">
                    <li><a href="../controllers/logout.php"><b>Cerrar Sesión</b></a></li>
                </ul>
            </nav>
        </div>
        <center>
        <table>
            <br>
            <br>
            <br>
            <tr>
            <th>
                <span class="codigo"> <form action="Aprendiz.php" method="post">
                <a href="#"><input type=image src="../assets/Images/Calendario.png" width="200px" height="200px"><br>Horario</a></form></span>
            </th>
            <th>
                <span class="codigo"> <form action="#modal_clase" method="post">
                <a href="../controllers/actualizar_datos.php?id=
					<?php 
					$query = mysqli_query($conection,"SELECT idusuario FROM usuario");
					$data = mysqli_fetch_array($query);
					echo $data["idusuario"]; 
					?>"><input type=image src="../assets/Images/Persona.png"height="150px" width="150px" ><br>Perfil</a></form></span>
            </th>
            </tr>
            <tr>
            <th>
                <span class="codigo"><a href=""> <form action="Crud_clase.php" method="post">
                <a href="Crud_clase.php"><input type=image src="../assets/Images/Birrete.png"height="150px" width="150px" ><br>Clases</a></form></span>           
            </th>
            </tr>
        </table>
        </center>
        </section>
        <script src="../assets\js\main.js"></script>
    </div>


</body>

</html>