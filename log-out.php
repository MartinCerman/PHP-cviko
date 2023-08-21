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
    <?php menu() ?>
    <h1>Odhlásit</h1>
    <?php
    if (!isset($_SESSION["login_name"]) && empty($_SESSION["login_name"])) {
        echo 'Nejste přihlášen. <a href="index.php">Přihlášení</a>';
    } else {
        $_SESSION["login_name"] = null;
        echo 'Odhlášení úspěšné. <a href="index.php">Přihlášení</a>';
    }

    ?>
</body>

</html>