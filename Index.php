<?php 
  session_start();

  require 'database/database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT ID, Email, password FROM users');
    $records->bindParam(':ID', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script href="assets/js/fuction.js"></script>


    <!-- Style -->
    <link rel="stylesheet" href="assets/css/Index_style.css">


    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?familiy=Titillium+web:400,600" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcuit icon" href="assets/images/logo_manejate.png" />


    <title>MANEJATE | Inicio</title>
</head>

<!--El administrador es el unico que puede registrar usuarios profe, por eso no implemente el formulario de registro, entonces por eso esta la opcion de contactenos ya que se pondran en contacto con el y el los registrara y hara la compra del paquete deseado y asi instantaneamente queda inscritos a la clase-->

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="assets/images/menu.svg">
            </button>
            <div class="navbar">

                <a class="active" href="#hero"><i class="fa fa-fw fa-home"></i><b> Inicio</b></a>
                <a href="#team"><i class="fa fa-fw fa-search"></i><b> Nosotros</b></a>
                <a href="#modal2"><i class="fa fa-fw fa-envelope"></i><b> Contactenos</b></a>

                <div id="modal2" class="modalmask2">
                    <div class="modalbox2 resize">
                        <a href="#close" title="Close" class="close">X</a>
                        <form ACTION="#" METHOD="post">
                            <label for="last_name">Nombre</label> <input type="text" autofocus="true" required="true" placeholder="Nombre (Obligatorio)*" />
                            <label for="last_name">Apellido</label> <input type="text" autofocus="true" required="true" placeholder="Apellido (Obligatorio)*" />
                            <label for="last_name">Correo</label> <input type="email" autofocus="true" required="true" placeholder="Email (Obligatorio)*" />
                            <label for="telephone">Teléfono</label> <input type="tel" size=36 name="telephone" placeholder="Telefono (Opcional)*"></input>
                            <label for="message">Mensaje</label> <textarea rows=5 cols=30 name="message" required="true"></textarea>
                            <input type="reset" value="Borrar"> <input type="submit" value="Enviar">
                            <a href="#"></a>
                            <div class="underlay-photo"></div>
                            <div class="underlay-black"></div>
                        </form>
                    </div>
                </div>
                <a href="login.php"><b>Ingresar<b></a>
                </section>
            </div>
        </div>
        </div>
        </div>
    </nav>
    <section id="hero">
        <duv class="container">
            <div class="animated.infinite">
                <div class="content-center">
                    <img src="assets/images/logo_manejate.png" class="responsive-img bouncing" alt="logo">
                    <div class="container">
                        <div class="deconstructed">
                            MANEJATE
                            <div>MANEJATE</div>
                            <div>MANEJATE</div>
                            <div>MANEJATE</div>
                            <div>MANEJATE</div>
                        </div>
                    </div>
                </div>
        </duv>
    </section>
    <section id="team">
        <div class="container-fluid">
            <div class="content-center">
                <h2>Te ayudamos en la organizacion de tus Clases y el control de ellas</b>
                </h2>
                <p>Las academias de conducción, son la llave principal para formar profesionales en conducción, a fin de fijar destrezas, habilidades, aptitudes y actitudes que permiten mejorar aspectos referentes al tránsito, transporte y seguridad vial 
                con el objetivo de reducir el riesgo en la conducción y así aprender a conducir de forma segura y prudente, y alcanzar  la licencia de conducir sin algún problema, por eso, si piensa en adquirir la licencia de  conducción, 
                lo más recomendable es asistir a una academia en donde pueda tomar sus clases; tanto teóricas como prácticas y así tener una formación adecuada y eficaz.</p>
            </div>
            <br>
            <br>
        </div>
        </div>
    </section>
    <section id="pricing" class="bgLightGrey">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="pricing-container">
                        <div class="plans plan-light">
                            <h4><b>MISION</b></h4>
                            <h4>Comprometidos a formar conductores en Técnicas de Conducción, conscientes y
                                comprometidos con nuestra movilidad, contribuyendo, apoyando y respondiendo a las dinámicas en
                                Seguridad Vial, normativa vigente, buscando el mejoramiento continuo.</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pricing-container">
                        <div class="plans plan-light">
                            <h4><b>VISION</b></h4>
                            <h4>ser reconocidos como una de las mejores academias a nivel regional y certificar a
                                nuestros aprendices como unos excelentes conductores en seguridad vial.
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>|
    </section>
    <footer class="bgDark">
        <div class="container">
            <img src="assets/Images/logo_manejate.png" class="logo-brand" alt="logo">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#"><img src="assets/Images/instagram.svg" class="img-fluid"></a>
                </li>
                <li class="list-inline-item">
                    <a href="#"><img src="assets/Images/twitter.svg" class="img-fluid"></a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.youtube.com"><img src="assets/Images/youtube.svg" class="img-fluid"></a>
                </li>
                <li class="list-inline-item">
                    <a href="#"><img src="assets/Images/dribbble.svg" class="img-fluid"></a>
                </li>
                <li class="list-inline-item">
                    <a href="#"><img src="assets/Images/facebook.svg" class="img-fluid"></a>
                </li>
            </ul>
            <small>©2020 All Rights Reserved.<a href="https://themesbootstrap.com.mx/" class="font-weight-bold" target="_blank"
                         rel="noopener"></a></small>
        </div>
    </footer>
</body>

</html>