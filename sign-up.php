<?php
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
    <h1>Registrace</h1>
    <form action="sign-up-a.php" method="post">
        <label>Křestní jméno: <input type="text" name="first_name" id="first_name" required></label><br>
        <label>Příjmení: <input type="text" name="last_name" id="last_name" required></label><br>
        <label>Přihlašovací jméno: <input type="text" name="login_name" id="login_name" required></label><br>
        <label>Heslo: <input type="password" name="password" id="password" required></label><br>
        <label>Ověření hesla: <input type="password" name="password-check" id="password-check" required></label><br>

        <button type="submit">Odeslat</button>
    </form>

    <script>
        document.querySelector("form").addEventListener("submit", (e) => {
            if (e.target["password-check"].value === e.target["password"].value) {
                return;
            } else {
                e.preventDefault();
                alert("Ověření hesla nesouhlasí.");
            }
        })
    </script>

</body>

</html>