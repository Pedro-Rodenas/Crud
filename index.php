<?php
    include ("conexion.php");

    $con = connection();

    $sql = "SELECT * FROM  usuario";
    $query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="es-pe">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Usuarios Crud</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Gestión de Usuarios</h1> <!-- Título añadido aquí -->
    
    <div>
        <form action="insert_user.php" method="POST">
            <input name="nombre_usuarios" type="text" placeholder="Nombre">
            <input name="apellido_usuarios" type="text" placeholder="Apellido">
            <input name="usuario_usuarios" type="text" placeholder="Usuario">
            <input name="clave_usuarios" type="text" placeholder="Clave">
            <input name="email_usuarios" type="email" placeholder="Correo">

            <input type="submit" value="Agregar usuario">
        </form>
    </div>

    <div>
        <h2>Usuarios Registrados</h2>
        <table>

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Usuario</th>
                    <th>Clave</th>
                    <th>Correo</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)):?>
                <tr>
                    <th> <?=$row["id_usuarios"] ?> </th>
                    <th> <?=$row["nombre_usuarios"] ?> </th>
                    <th> <?=$row["apellido_usuarios"] ?> </th>
                    <th> <?=$row["usuario_usuarios"] ?> </th>
                    <th> <?=$row["clave_usuarios"] ?> </th>
                    <th> <?=$row["email_usuarios"] ?> </th>

                    <th><a href="update.php?id_usuarios=<?=$row["id_usuarios"] ?>">Editar</a></th>
                    <th><a href="delete.php?id_usuarios=<?=$row["id_usuarios"] ?>">Eliminar</a></th>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
</body>
</html>
