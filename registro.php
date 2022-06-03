<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/pez.png" type="image/x-icon">
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2? family = Open + Sans & display = swap " rel=" stylesheet ">
    <title>Registro</title>
</head>

<body>
    
<header>
    <nav>
        <a href="index.html">Inicio</a>
        <a href="slideshow.html">Slideshow</a>
        <a href="about-us.html">Quienes somos</a>
        <a href="Form.html">Formulario</a>
        <a href="login.php">Inicia sesion</a>
    </nav>
</header>

<div id="registro">
                <form action="s_c.php" method="POST" class="formulario">
                    

                    <h1>Registrate</h1>
                    <div class="contenedor">

                        <div class="input-contenedor">
                            <i class="fas fa-user icon"></i>
                            <input name="nombre" type="text" id="nombre" placeholder="Escribe tú nombre" required>

                        </div>

                        <div class="input-contenedor">
                            <i class="fas fa-user icon"></i>
                            <input name="apellido" type="text" id="apellido" placeholder="Escribe tu apellido" required>
                        </div>

                        <div class="input-contenedor">
                            <label for="sexo">Sexo:</label>
                            <select name="sexo" id="sexo">
                                <option value="hombre">Hombre</option>
                                <option value="mujer">Mujer</option>
                            </select>
                        </div>

                        <div class="input-contenedor">
                            <i class="fas fa-envelope icon"></i>
                            <input name="correo" type="email" id="correo" placeholder="email@gmail.com" required>
                        </div>

                        <div class="input-contenedor">
                            <label for="poblacion">Población:</label>
                            <select name="poblacion" id="poblacion">
                                <option value="Guadalajara">Guadalajara</option>
                                <option value="Zapopan">Zapopan</option>
                                <option value="Tonala">Tonala</option>
                                <option value="Tlajomulco">Tlajomulco</option>
                            </select>
                        </div>

                        <input type="submit" value="Enviar" class="button">
                        <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
                        <p>¿Ya tienes una cuenta?<a class="link" href="login.php">Iniciar Sesion</a></p>
                    </div>
                    <hr>
                </form>
            </div>

</body>

</html>
