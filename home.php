<?php
//Inicio la sesion o reanuda la que ya exista
session_start();
    //Si se inicio sesion de forma exitosa nos muestra la pagina de home
if(isset($_SESSION['id']) && isset($_SESSION['email'])) {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Styles.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>
<body>
    
    <div class="Welcome">
        <div>
            <img src="img/logo_welcome.png" alt="logo ues">
        </div>
        <div class="texts">
            <h1>Portal personal</h1>
        </div>
        <div class="texts t-right">
            <!-- Muestra el nombre del usuario -->
            <h1>Bienvenid@, <?php echo $_SESSION['name']; ?></h1>
            <!-- Cierra la sesion del usuario -->
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <!-- Botones -->
    <nav>
        <ul class="menu">
            <li><a href="">Home</a></li>
            <li><a href="">Servicios</a>
                <ul>
                    <li><a href="">submenu1</a></li>
                    <li><a href="">submenu2</a></li>
                </ul>
            </li>
        </ul>
        
        <!-- Crea un boton para el admin con la funcion de crear nuevos usuarios -->
        <?php
            if($_SESSION['id']==5) {
        ?>
        <button class="btn btn-light"  onclick="window.location.href='register.php'" >Registro</button>
        <?php
        }
        ?>
    </nav>
    <script src="script.js"></script>
</body>

<footer>
</footer>

</html>
<?php
}else{ 
    //si no se encuentra al usuario o la contraseña es incorrecta nos regresa al login
    header("Location: index.php");
    exit();
}
?>