<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lojinha</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"> Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php if (isset($_SESSION['meu_id'])) { ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="/compra_coletiva/home.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./utils/sair.php">Sair</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="/compra_coletiva/">Login</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/compra_coletiva/register.php">Cadastrar-se</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>