<?php
$conexion= mysqli_connect("localhost","root","","bd_prueba");
if (!$conexion){
echo 'Error al conectar ala base de datos';
}
else {
    echo 'Conectado a la base de datos';
    }
