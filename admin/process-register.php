<?php
            require_once '../database.php';

            if ($_POST) {
                if (isset($_POST["register"])) {
                    // Validar si el usuario ya está registrado
                    $validateUsername = $database->select("tb_users", "*", [
                        "username" => $_POST["username"]
                    ]);

                    if (count($validateUsername) > 0) {
                        echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            modalSignUp();
                        });
                    </script>";
                    } else {
                        // Hash de la contraseña
                        $pass = password_hash($_POST["password"], PASSWORD_DEFAULT, ['cost' => 12]);

                        $database->insert("tb_users", [
                            "fullname" => $_POST["fullname"],
                            "username" => $_POST["username"],
                            "password" => $pass,
                            "email" => $_POST["email"]
                        ]);

                        // Redirigir al usuario después del registro
                        header("location: ../home.php?id=" . $_POST["register"]);
                        exit(); // ¡Es importante salir del script después de redirigir!
                    }
                }
            }
            ?>