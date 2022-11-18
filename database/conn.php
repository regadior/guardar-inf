<?php
function conexion()
{
    $user = 'root';
    $password = '1234';
    $host = 'localhost';
    $dbName = 'usuarios';

    $db = null;
    try {
        $db = mysqli_connect($host, $user, $password, $dbName);
    } catch (Exception $e) {
        echo "Error al conectarse a la base de datos:  " . $e->getMessage();
        die();
    }
    return $db;
}
?>