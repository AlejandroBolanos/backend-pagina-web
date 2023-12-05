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
                $_SESSION["id_user"] = $user[0]["id_user"];
                


                if ($user[0]["type_user"] === 1) {
                    header("location: ./list-dish.php");
                } else {
                    header("location: ../home.php?id=" . $_POST["username"]);
                }
                exit(); // Termina el script después de redirigir para evitar ejecución adicional.
            } else {
                $messageLogin = "Wrong username or password";
                echo "<script> 
            window.alert('" . $messageLogin . "');     
            window.location.href = '../home.php';

            </script>";

            }
        } else {
            $messageLogin = "Wrong username or password";
            echo "<script> 
            window.alert('" . $messageLogin . "');  
            window.location.href = '../home.php';

            </script>";
        }
    }
}
?>