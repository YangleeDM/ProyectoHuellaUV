<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/beabe071bb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Validar codigo</title>
</head>
<body>
    <div class="contenedor">
        <main class="registro-correo">
            <div class="presentacion">
                <div class="contenido-presentacion">
                    <img src="img/logo.png" alt="Logo de la UV">
                    <h1>Universidad Veracruzana</h1>
                </div>
            </div>

            <div class="formulario" method="post">
                <P class="mensaje">Envíamos instrucciones a tu correo electrónico</P>
                <p class="mensaje" method="post"><?php 
                @$correoExterno= $_POST['correoExterno'];
                echo $correoExterno;?></p>
                <form action="" method="post">

                        <label class="label-codigo" for="codigo">
                             <p class="codigo">Por favor ingresa a tu corrreo electrónico para continuar con el registro</p>
                        </label>



                        <p class="texto">¿No recibiste el código? <a href="index.php" class="reenviar"> Haz click aquí para reenviar </a></p>

                </form>
            </div>
        </main>
    </div>

    <?php

    include ("pruebaExterno.php");

    ?>

</body>
</html>
