<?php
    include ("conexion.php");
    $con = connection();

    $id = null;
    $nombre_usuarios = $_POST['nombre_usuarios'];
    $apellido_usuarios = $_POST['apellido_usuarios'];
    $usuario_usuarios = $_POST['usuario_usuarios'];
    $clave_usuarios = $_POST['clave_usuarios'];
    $email_usuarios = $_POST['email_usuarios'];

    $sql = "INSERT INTO usuario VALUE ('$id','$nombre_usuarios', '$usuario_usuarios', '$usuario_usuarios','$clave_usuarios','$email_usuarios')";
    $query = mysqli_query($con,  $sql);

    if ($query) {
        Header("Location:index.php");
    };
?>