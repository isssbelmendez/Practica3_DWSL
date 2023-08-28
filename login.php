<?php
session_start();

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$userdb = 'isa07';
$passdb = '123';

if(($username != '' || $password != '')
    && $userdb == $username && $passdb == $password
){
        $_SESSION['username'] = $username;
        header('Location: index2.php');
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Practica 3</title>
</head>
<body>
    <div class="row container">
        <form action="login.php" method="post">
            <div class="col-md-6 mt-2">
                <label for="username">Escribe tu usuario</label>
                <input class="form-control" type="text" name="username" ide="">
        </div>
            <div class="col-md-6 mt-2">
                <label for="password">Escribe tu contraseña</label>
                <input class="form-control" type="password" name="password" id="">
            </div>
            <div class="col-md-6 mt-2">
                <button type="submit" class="btn btn-primary">Logearse</button>
            </div>
            </form>
        </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>