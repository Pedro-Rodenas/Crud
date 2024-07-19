<?php
function connection() {
    $host = "sql208.infinityfree.com";
    $user = "si0_36937023";
    $password = "kMb08CQhoMDSP";
    $bd = "if0_36937023_crud";

    // Establecer la conexión con la base de datos
    $connect = mysqli_connect($host, $user, $password, $bd);

    // Verificar la conexión
    return $connect;
}
?>
