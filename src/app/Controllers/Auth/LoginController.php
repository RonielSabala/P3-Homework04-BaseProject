<?php

namespace App\Controllers\Auth;

use App\Core\Template;
use App\Utils\GeneralUtils;
use App\Utils\Entities\UserUtils;

class LoginController
{
    public function handle(Template $template)
    {
        if ($_POST) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $user = UserUtils::getUserByName($username);

            // Validar usuario y contraseña
            $error_msg = '';
            if (strlen($username) > 50) {
                $error_msg = 'El nombre de usuario no puede tener más de 50 caracteres!';
            } elseif (strlen($password) > 50) {
                $error_msg = 'La contraseña no puede tener más de 50 caracteres!';
            } elseif (!$user) {
                $error_msg = 'El usuario proporcionado no existe!';
            } elseif ($password != $user->password) {
                $error_msg = 'Contraseña incorrecta!';
            }

            // Mostrar error
            if ($error_msg) {
                $template->apply();
                GeneralUtils::showAlert($error_msg, 'danger', showReturn: false);
                exit;
            }

            // Guardar usuario en sesión
            $_SESSION['user'] = $username;
            header('Location: /home.php');
            exit;
        }

        $template->apply();
    }
}
