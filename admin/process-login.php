<?php
require_once '../database.php';
$messageLogin = "";

if ($_POST) {

    if (isset($_POST["login"])) {
        $user = $database->select("tb_users", "*", [
            "username" => $_POST["username"]
        ]);

        if (count($user) > 0) {
            if (password_verify($_POST["password"], $user[0]["password"])) {
                session_start();
                $_SESSION["isLoggedIn"] = true;
                $_SESSION["fullname"] = $user[0]["fullname"];
                header("location: ../home.php?id=" . $_POST["login"]);
            } else {
                $messageLogin = "wrong username or password";
            }
        } else {
            $messageLogin = "wrong username or password";
        }

    }
}
?>