<?php
function dbconnect() {
    $db_host = "localhost";
    $db_user = "user";
    $db_password = "userheslo";
    $db_name = "login_system";

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if ($conn->errno) {
        die($conn->error);
    }

    $conn->set_charset("utf8mb4");

    return $conn;
}
