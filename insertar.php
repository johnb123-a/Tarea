<?php

$user = "root";
$pass = "";
$host = "localhost";
 
$connection=mysqli_connect($host,$user,$pass);


$Cedula = $_POST['Cedula'];
$Nombres = $_POST['Nombres'];
$Correo = $_POST['Correo'];
$Repuesto = $_POST['Repuesto'];
$Cant = $_POST['Cant'];


$instruccion_SQL = "INSERT INTO usuario (Cedula,Nombre,Correo,Repuesto ,Cantidad)
VALUES ('$Cedula','$Nombres','$Correo','$Repuesto','$Cant')";

$query= mysqli_query($connection,$instruccion_SQL);

// if($query){
//     Header("Location: alumno.php");
// }else {
// }
?>