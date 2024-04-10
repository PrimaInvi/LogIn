<?php

function conectarBD(){
$dbname='login';
$host= 'localhost';
$user= 'root';
$password ='';
$port= 3306;



$conn = mysqli_connect($host, $user, $password, $dbname, $port);
    if (!$conn) {
    die ("Error al conectar a la base de datos". mysqli_connect_error());
    

}
    return $conn;
    
}
?>