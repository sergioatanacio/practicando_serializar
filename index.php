<?php
$previus_array = (file_get_contents('/file_of_array') != '') 
    ? (file_get_contents('/file_of_array') ?? [])
    : [];

$dd = 
(function()
{
    
})($_POST['type'], $_POST['user'], $_POST['password_id']);

$array = $_POST['type'] == 'login' 
    ? array_merge($previus_array, )
    : $previus_array;
isset($_POST);

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