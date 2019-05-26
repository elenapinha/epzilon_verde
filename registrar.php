<?php
include 'cn.php';
//Recibir los datos y almacenarlos en variables
$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$telefono= $_POST["telefono"];
$mensaje= $_POST["mensaje"];
// Consulta para insertar
$insertar = "INSERT INTO usuarios(nombre, correo, telefono, mensaje)VALUES ('$nombre', '$correo', '$telefono', '$mensaje')";
// Ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado){
    echo 'Error al registrarse';
       }
else {
    echo '<script>
    alert("Usuario registrado exitosamente");
     window.history.go(-1);
     </script>';
    }
// Cerrar conexion
mysqli_close ($conexion);
