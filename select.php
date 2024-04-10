<?php 
// daniela lopez
// samuel lazaro
require_once 'login.php';
$conn = conectarBD();
session_start();
$nombre =$_POST['nombre'];
$passw = $_POST['pw'];


$query = "SELECT * FROM estudiante WHERE nombre='$nombre' AND pw='$passw'";
$consulta = mysqli_query($conn, $query);
$filas=mysqli_num_rows($consulta);
if ($filas) {
   header("location:home.php");
} else {
 echo 'Usuario o Contraseña incorrectos';
}

?>