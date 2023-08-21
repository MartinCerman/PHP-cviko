<?php
session_start();

require_once "menu.php";
require_once "db-login.php";

$msg = "";
if (isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["login_name"]) && isset($_POST["password"])) {
    $conn = dbconnect();

    $sql = "SELECT login_name
            FROM user
            WHERE
            login_name = '" . addslashes($_POST["login_name"]) . "'";

    if ($conn->query($sql)->fetch_assoc()) {
        $msg = "Uživatel " . htmlspecialchars($_POST["login_name"]) . " už existuje.";
    } else {
        $sql = "INSERT INTO user (first_name, last_name, login_name, password) VALUES ('" .
            addslashes($_POST["first_name"]) . "', '" .
            addslashes($_POST["last_name"]) . "', '" .
            addslashes($_POST["login_name"]) . "', '" .
            addslashes($_POST["password"]) . "')";

        $conn->query($sql);
        if (!$conn->errno) {
            $_SESSION["login_name"] = addslashes($_POST["login_name"]);
            $msg = 'Registrace úspěšná. Pokračujte do sekce <a href="member-area.php">Pro registrované</a>';
        } else {
            $msg = "Chyba při vytváření uživatele.";
        }
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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php menu() ?>
    <h1>Registrace</h1>
    <?php echo $msg ?>
</body>

</html>