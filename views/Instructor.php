
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name=”viewport” content=”width=device-width; initial-scale=2“/>
    <title>MANEJATE | Instructor</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro-icons.min.css">
    <link rel="stylesheet" href="../assets/css/Instructor.css">
    <link rel="shortcuit icon" href="../assets\Images\logo_manejate.png" />
</head>

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
        <section>
        <center> 
        <table>
            <br>
            <br>
            <br>
            <br>
            <tr>
            <th>
                <a href="#"> 
                <input type=image  src="../assets/Images/Calendario.png" width="200px" height="200px"></a>
                <br>
                <label>Horario</label>
            </th>
            <th>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="codigo"> <form action="#modal_clase" method="post">
                <a href="#modal_clase"><input type=image src="../assets/Images/Persona.png"height="150px" width="150px" ><br><p>Perfil</p></a></form></span>
                <div id="modal_clase" class="modal">
                    <div class="modal-contenido ">
                    <a href="#close" type="button" data-dismiss="modal" title="Close" class="close">X</a>
                                <form ACTION="#" METHOD="post">
                                <table>
                                <div>
                                    <label for="first_name">Nombre:</label>
                                    <label>Steven</label>
                                </div>
                                    <br>
                                <div>
                                    <label>Apellido:</label>
                                    <label>Arias</label>             
                                </div>
                                    <br>
                                <div>
                                    <label>ID:</label>
                                    <label>1000643670</label>
                                </div>    
                                    <br>
                                <div>    
                                    <label>Correo:</label>
                                    <label>Steven7@gmail.com</label>
                                </div>    
                                    <br>
                                <div>
                                    <label>Telefono:</label>
                                    <label>+57 3432178245</label>
                                </div>    
                                <div class="modal-footer">
                                    <input type="reset" value="Actualizar Perfil">
                                    <a href="#"></a>
                                    <div class="underlay-photo"></div>
                                    <div class="underlay-black"></div>
                                </div>
                                </table>
                                </form>
                    </div>  
                </div> 
            </th>
            <th>
                <a href="Clases_teoricas.php">
                <input type=image src="../assets/Images/Birrete.png"height="150px" width="150px"> </a>
                <br>
                <label>Asignar Clase</label> 
            </th>
            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            <th>
                <a href="#">
                <input type=image src="../assets/Images/info_clase.png"height="150px" width="150px"> </a>
                <br>
                <label>Informacion Clase</label> 
            </th>
            </tr>
            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        </table>
        </center>
        </section>
    </div>
        <script src="../assets\js\main.js"></script>
    


</body>

</html>