<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body bgcolor="#52BE80">
    <center>
        <form action="./login.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="contraseña">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">
                <h4>Verificar</h4>
            </button>
        </form>
    </center>
    <script src="./bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$usuario1 = "admin@gmail.com";
$contraseña1 = "admin";
if ($contraseña == $contraseña1 && $usuario == $usuario1) {
    header('Location:menu.html');
} else {
    echo '<script>alert("El Usuario/Contraseña no es correcto,intente de nuevo")</script>';
}
?>