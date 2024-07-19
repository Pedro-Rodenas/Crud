<?php
    include ("conexion.php");
    $con = connection();

    $id_usuarios = $_GET['id_usuarios'];

    $sql = "SELECT * FROM usuario WHERE id_usuarios = '$id_usuarios'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
    <form action="edit_user.php" method="POST">
        <h1>Editar Usuarios</h1>

        <input type="hidden" name="id_usuarios" value="<?=$row['id_usuarios'] ?>">
        <input type="text" name="nombre_usuarios" value="<?=$row['nombre_usuarios'] ?>">
        <input type="text" name="apellido_usuarios" value="<?=$row['apellido_usuarios'] ?>">
        <input type="text" name="usuario_usuarios" value="<?=$row['usuario_usuarios'] ?>">
        <input type="text" name="clave_usuarios" value="<?=$row['clave_usuarios'] ?>">
        <input type="email" name="email_usuarios" value="<?=$row['email_usuarios'] ?>">

        <input type="submit" value="Actualizar Información">

    </form>
</body>
</html>