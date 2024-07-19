<?php
    include ("conexion.php");
    $con = connection();    

    $id_usuarios = $_POST['id_usuarios'];
    $nombre_usuarios = $_POST['nombre_usuarios'];
    $apellido_usuarios = $_POST['apellido_usuarios'];
    $usuario_usuarios = $_POST['usuario_usuarios'];
    $clave_usuarios = $_POST['clave_usuarios'];
    $email_usuarios = $_POST['email_usuarios'];

    $sql = "UPDATE usuario SET nombre_usuarios='$nombre_usuarios', apellido_usuarios='$apellido_usuarios', 
    usuario_usuarios='$usuario_usuarios', clave_usuarios='$clave_usuarios', email_usuarios='$email_usuarios' WHERE id_usuarios=$id_usuarios";
    $query = mysqli_query($con, $sql);

    if ($query) {
        Header("Location:index.php");
    };
?>