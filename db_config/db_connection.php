<?php
$host = "localhost";

$port = "5432"; 

$dbname = "prueba";

$username = "postgres";

$password = "unicesmag";


$data_connection = "
host = $host
port = $port
dbname = $dbname
user = $username
password = $password";

$conn = pg_connect($data_connection);


    if (!$conn) {
        die("Connection failed: ". pg_last_error());
    }
    else {

    }
    
    
    //cerrar la conexion

    //pg_close($conn);

?>