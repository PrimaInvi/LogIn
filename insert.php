<?php

require_once 'login.php';
$conn = conectarBD();
session_start();
$nombre = $_POST['nombre'];
$passw = $_POST['pw'];

$query = "INSERT INTO estudiante (nombre, pw) VALUES ('$nombre', '$passw')";
$insert = mysqli_query($conn, $query);

if ($insert) {
    header("location: home.php");
} else {
    echo 'Error al crear la cuenta';
}

mysqli_close($conn);
?>