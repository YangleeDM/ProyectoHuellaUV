<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/beabe071bb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Registro de Correo</title>
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

            <div class="formulario">
                <h2>Ingresa tu dirección de correo electrónico</h2>
                <br>
                <form action="codigoExterno.php" method="post">
      
                    <div class="correo-input" action="pruebaExterno.php" method="post"> 

                        <input type="text" class="input-nip" name="correoExterno" size="25" placeholder="tucorreo@ejemplo.gmail" required="">
                        

                    </div>

                   <input type="submit" value="Enviar" class="button">
                </form>

                <br>

                <a href="index.php" class="reenviar">Continuar con mi correo insitucional</a></p>
            </div>
        </main>
    </div>
    
    <?php

    include ("correoExterno.php");

    ?>

    


</body>
</html>
