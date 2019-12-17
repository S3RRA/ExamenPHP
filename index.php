<!DOCTYPE html>
<!--
Autor: Pablo Serrano.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Envía</title>
    </head>
    <body>
        <?php $nombre = 'PabloSerrano' ?>
        <form method='post' action='hoja2.php?nombre=<?php echo $nombre ?>'>
            <input type='text' placeholder='Usuario:' name='user'><br>
            <input type='password' placeholder='Contraseña:' name='pass'><br>
            <input type='reset' value='Borrar'>
            <input type='submit' value='Enviar'>           
        </form>
    </body>
</html>
