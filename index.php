<?php
require_once "menu.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php menu() ?>
    <h1>Přihlášení</h1>
    <form action="index-a.php" method="post">
        <label>Přihlašovací jméno: <input type="text" name="login_name" id="login_name" required></label><br>
        <label>Heslo: <input type="password" name="password" id="password" required></label><br>
        <button type="submit">Odeslat</button>
    </form>
    <a href="sign-up.php">Registrace</a>
</body>

</html>