<?php
//Datos para la conexión
// 1. Create a database connection
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "963963";
$dbname = "proyectofinalweb";
$tablename= "usuario";
$linkBBDD = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Test if connection succeeded
if(mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")"
    );
}
?>