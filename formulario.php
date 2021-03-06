<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="https://kit.fontawesome.com/beabe071bb.js" crossorigin="anonymous"></script>
    <script src="js/form.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Registro de Correo</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body>
    <div class="contenedor fadeIn">
        <main class="registro-correo">
            <div class="presentacion">
                <div class="contenido-presentacion">
                    <img src="img/logo.png" alt="Logo de la UV">
                    <h1>Universidad Veracruzana</h1>
                </div>
            </div>

            <div class="formulario">
                <h1 class="titulo">Registrate</h1>
                <form action="conexion.php" method="POST" enctype="multipart/form-data">
                    <p class="texto-formulario">Ingresa tu matrícula</p>
                    <input class="input-form" type="text" name="matricula" required>
                    <br>
                    <p class="texto-formulario">Ingresa tu nombre</p>
                    <input class="input-form" type="text" name="nombre" required>
                    <br>
                    <p class="texto-formulario">Ingresa tu carrera</p>
                    <input class="input-form" type="text" name="carrera" required>
                    <br>
                    <label>Selecciona una imagen de tu rostro</label>
                    <input class="imagen" type="file" name="imagen" required>
                    <br>
                    <p class="texto-nip">Crea un NIP de 4 dígitos</p>
                    <div class="input-nip">
                        <input class="input-nip" type="password" maxlength="4" name="nip" id="nip" required> 
                        
                    </div>                    
                    <br>
                    <p class="texto-nip">Confirma tu NIP</p>
                    <div class="input-nip">
                        <input class="input-nip" type="password" maxlength="4" name="confnip" id="confnip" required>
                    </div>
                    
                    
                    <div class="btn-codigo">
                        <input type="submit" value="Enviar" class="button" id="registro" name="registrarse">
                    </div>

                </form>
            </div>
        </main>
    </div>
</body>


</html>