<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Resultado</title>
    </head>
    <body>
        <?php
            //Variables para conexión:
            define("DB_HOST","localhost");
            define("DB_USER","root");
            define("DB_PASS","");
            define("DB_DATABASE","tienda");
            //Conexión:
            $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE) or die ("No se puede realizar la conexión");
                echo 'Conexión realizada <br>';
            if(isset($_POST['nombreProducto'])){
                //Consulta:
                $sql = "SELECT cliente.nombre FROM cliente,venta WHERE cliente.cod_cliente = venta.cliente AND venta.producto = "
                    . "(SELECT producto.cod_producto FROM producto,venta WHERE venta.producto = producto.cod_producto AND producto.nombre = ?)";
                //Variable de escapada
                $nombreProducto = mysqli_real_escape_string($con,$_POST['nombreProducto']);
                echo "Variable de escapada: ".$nombreProducto."<br>";
                //La hacemos preparada
                $stmt = mysqli_stmt_init($con);
                if(mysqli_stmt_prepare($stmt,$sql)){
                        mysqli_stmt_bind_param($stmt, "s", $nombreProducto);
                        mysqli_stmt_execute($stmt);                   
                        $resultado = "";
                        mysqli_stmt_bind_result($stmt, $resultado);
                        while(mysqli_stmt_fetch($stmt)){
                            echo $resultado;
                        }
                        mysqli_stmt_close($stmt);
                }
            }
        ?>
    </body>
</html>
