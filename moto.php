<!DOCTYPE html>
<!--
Autor:PabloSerrano
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Array asociativo:
            if(isset($_POST['nombre'])){
                $clasificacion[$_POST['nombre']] = $_POST['puntos'];
            }
            $clasificacion['ROSSI'] = 312;
            $clasificacion['LORENZO'] = 305;
            $clasificacion['MARQUEZ'] = 222;
            $clasificacion['PEDROSA'] = 190;
        //Imprimmos el array:
            while(list($piloto,$puntuacion) = each($clasificacion)){
                echo "El piloto ".$piloto." tiene una puntuación de ".$puntuacion."<br>";
            }
        ?>
        <form method='post' action='moto.php'>
            <input type='text' placeholder='Nombre piloto:' name='nombre'><br>
            <input type='text' placeholder='Puntos:' name='puntos'><br>
            <input type='reset' value='Borrar'>
            <input type='submit' value='Enviar'>
        </form>
        <br>
        <a href='Ejercicio3.php'>Ejercicio3</a>
    </body>
</html>
