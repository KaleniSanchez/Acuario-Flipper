<?php
error_reporting(0);
include('database2.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT id FROM Usuarios WHERE nombre = '$myusername' and apellido = '$mypassword'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        $_SESSION['login_user'] = $myusername;
        $_SESSION['logeado'] == 1;
        header("location: home.php");
    } else {
        $error = "Nombre o apellido incorrectos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/pez.png" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
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
        <a href="login.html">Inicia sesion</a>
    </nav>
</header>  
                
                <form action="" method="post" class="formulario">
                    <h1>Login</h1>
                    <div class="contenedor">
                    <div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
                        <div class="input-contenedor">
                            <i class="fas fa-user icon"></i>
                            <input name="username" type="text" id="username" placeholder="Nombre" required>
                        </div>
                        <div class="input-contenedor">
                            <i class="fas fa-user icon"></i>
                            <input name="password" type="text" id="password" placeholder="Apellido" required>
                        </div>
                        <input type="submit" value="Login" class="button">
                        <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
                        <p>¿No tienes una cuenta? <a class="link" href="registro.php">Registrate </a></p>
                    </div>
                </form>
            </div>
</body>

</html>