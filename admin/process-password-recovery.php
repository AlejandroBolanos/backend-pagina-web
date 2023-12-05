<?php
require_once '../database.php';

if ($_POST) {
    if (isset($_POST["recoveryUsername"])) {
        // Validar si el usuario ya está registrado
        $validateUsername = $database->select("tb_users", "*", [
            "username" => $_POST["recoveryUsername"]
        ]);

        if (count($validateUsername) > 0) {


            $tempPass = generateTempPass();
            $pass = password_hash($tempPass, PASSWORD_DEFAULT, ['cost' => 12]);


            $database->update("tb_users", [
                "password" => $pass,

            ], [
                "id_user" => $validateUsername[0]["id_user"],
            ]);

            echo "<script> 
            window.alert('Your new password: " . $tempPass . "');     
            window.location.href = '../home.php';
            </script>";

        } else {

            echo "<script> 
            window.alert('Username doesnt exist'); 
            window.location.href = '../home.php';

            </script>";
        }
    }
}


function generateTempPass($longitud = 10)
{
    // Caracteres permitidos en la contraseña
    $caracteresPermitidos = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    // Obtener la longitud máxima de la cadena de caracteres permitidos
    $longitudCaracteres = strlen($caracteresPermitidos);

    // Inicializar la contraseña como una cadena vacía
    $contraseña = '';

    // Generar la contraseña aleatoria
    for ($i = 0; $i < $longitud; $i++) {
        $indiceAleatorio = rand(0, $longitudCaracteres - 1);
        $contraseña .= $caracteresPermitidos[$indiceAleatorio];
    }

    return $contraseña;
}

?>