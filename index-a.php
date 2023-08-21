<?php
session_start();

require_once "menu.php";
require_once "db-login.php";

$msg = "";
if (isset($_POST["login_name"]) && isset($_POST["password"])) {
    $conn = dbconnect();


    $sql = "SELECT login_name, password
            FROM user
            WHERE
            login_name = '" . addslashes($_POST["login_name"]) . "' " . 
                "AND password = '" . addslashes($_POST["password"]) . "'";

    if ($conn->query($sql)->fetch_assoc()) {
        $_SESSION["login_name"] = addslashes($_POST["login_name"]);
        $msg = 'Přihlášení úspěšné. Pokračujte do sekce <a href="member-area.php">Pro registrované</a>';
    } else {
        $msg = "Chyba přihlášení uživatele: Neexistující uživatel nebo špatné heslo.";
    }
} else {
    $msg = "Chyba při zpracování formuláře.";
}
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
    <?php echo $msg ?>
</body>

</html>