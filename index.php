<?php
$previus_array = (file_get_contents('file_of_array.php') != '') 
    ? (file_get_contents('file_of_array.php') ?? [])
    : [];
$funciones = [];

$array = 
    (isset($_POST['type']))
    ?   
        (
            ($_POST['type'] == 'create_account') 
            ? 
                array_merge($previus_array, [
                    'user'          => $_POST['user'], 
                    'password_id'   => $_POST['password_id'],
                ])
            : $previus_array
        )
    : [];

$login = (
    fn() :bool => 
        array_reduce(
            $array, 
            fn($carry, $item) : bool => 
                ($carry == false)
                    ?
                        ($item['user']           == $_POST['user'] && 
                        $item['password_id']    == $_POST['password_id'])
                    : $carry,
            false
        )
    )();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php print(
        ($login)
        ? "Sesión iniciada"
        : 'Aún no se ha iniciado sessión'
    );?></h1>
    <h2>Iniciar sesión</h2>
    <form action="" method="post">
        <input type="hidden" name="type" value="login">
        <label for="user_id" >Usuario</label>
        <input type="text" id="user_id" name="user">
        <label for="password_id">Contraseña</label>
        <input type="password" name="" id="password_id">
        <input type="submit">
    </form>
    <h2>Crear cuenta</h2>
    <form action="/" method="post">
        <input type="hidden" name="type" value="create_account">
        <label for="user_id" >Usuario</label>
        <input type="text" id="user_id" name="user">
        <label for="password_id">Contraseña</label>
        <input type="password" name="" id="password_id">
        <input type="submit">
    </form>
</body>
</html>