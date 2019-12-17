<!DOCTYPE html>
<!--
Autor: Pablo Serrano.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Recibe</title>
    </head>
    <body>
        <?php
            $usuario = $_POST['user'];
            $contraseña = $_POST['pass'];
            $miNombre = $_GET['nombre'];
            echo "Credenciales de ".$miNombre."<br>"."Usuario: ".$usuario."<br>Contraseña: ".$contraseña;
        ?>
        <a href='moto.php'>Ejercicio2</a>
    </body>
</html>
