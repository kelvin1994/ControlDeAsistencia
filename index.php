<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/estilos/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton+SC&display=swap" rel="stylesheet">
    
<!--font 2-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

<link href="public/pnotify/css/pnotify.css" rel="stylesheet" />
        <link href="public/pnotify/css/pnotify.buttons.css" rel="stylesheet" />
        <link href="public/pnotify/css/custom.min.css" rel="stylesheet" />
   <!-- pnotify -->
        <script src="public/pnotify/js/jquery.min.js">
        </script>
        <script src="public/pnotify/js/pnotify.js">
        </script>
        <script src="public/pnotify/js/pnotify.buttons.js">
        </script>

    <title>Control de Asistencia</title>
</head>
<body>
    <div class="todo">
        <?php 
        date_default_timezone_set("America/Lima");
        ?>
    <h1 class="titulo">Bienvenidos</h1>
    <h3 class="titulo2">REGISTRA TU ASISTENCIA</h3>
    <img src="public/images/logo-caritas.png" alt="">
    <h1 id="fecha"><?= date("d/m/Y, h:i:s") ?></h1>

    <?php
    include "modelo/conexion.php";
    include "controlador/controlador_registrar_asistencia.php";

    ?>

    <div class="container">
        <a class="titulo3" href="vista/login/login.php">Ingrese al Sistema</a>
        <p class="titulo4">Ingrese su DNI</p>
        <form action="" method="POST">
            <input class="" type="number" placeholder="Ingresa tu DNI" name="txtdni" id="txtdni">
            <div class="botones">

            <button class="entrada" type="submit" name="btnentrada" value="ok">ENTRADA</button>
            <button class="salida" type="submit" name="btnsalida" value="ok">SALIDA</button>
            </div>
        </form>

    </div>
    </div>


    <script>
        setInterval(() => {
            let fecha=new Date();
        let fechaHora= fecha.toLocaleString();
        document.getElementById("fecha").textContent=fechaHora;
        }, 1000);
    </script>

        <script>
            let dni=document.getElementById("txtdni");
            dni.addEventListener("input", function(){
                if (this.value.length > 8) {
                    this.value=this.value.slice(0,8)
                }
            })

        </script>

</body>

</html>