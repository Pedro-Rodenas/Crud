<?php
    include ("conexion.php");
    $con = connection();

    $id_usuarios = $_GET['id_usuarios'];

    $sql = "DELETE FROM usuario WHERE id_usuarios=$id_usuarios";
    
    $query = mysqli_query($con,  $sql);

    if ($query) {
        Header("Location:index.php");
    };

?>