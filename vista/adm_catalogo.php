<?php
session_start();
if($_SESSION['us_tipo']==1){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
<body>
    <h1>Hola administrador</h1>
    <a href="../controlador/Logout.php">Cerrar sesion</a>
    
</body>
</html>
<?php
}
?>