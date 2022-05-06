<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php 
    if(isset($data["error"])){ ?> 
        <p>Usuario o contraseña no valida</p>
    <?php } ?>
    <div class="container">
        <form action="index.php" method="post">
            <label for="text">Usuario</label><br>
            <input type="text" name="user"><br>
            <label for="passwd">Contraseña</label><br>
            <input type="password" name="passw" id="1"><br>
            <input type="submit" value="Ingresar">
        </form>
    </div>
</body>
</html>