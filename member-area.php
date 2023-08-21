<?php
session_start();

require_once "menu.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($_SESSION["login_name"]) && empty($_SESSION["login_name"])) {
        die('Nejste přihlášen. <a href="index.php">Přihlášení</a></body></html>');
    }
    ?>
    <?php menu() ?>
    <h1>Pro registrované</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, architecto rerum. Autem excepturi cumque minus nulla velit recusandae aut vel qui maiores libero consequatur quidem, ut odio delectus aperiam dolor?</p>
