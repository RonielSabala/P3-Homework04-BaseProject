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

            // Validar usuario

            $msg = '';
            $error = false;
            if (!$error && strlen($username) > 50) {
                $error = true;
                $msg = 'La nombre de usuario no puede tener mas 50 caracteres!';
            }

            if (!$error && strlen($password) > 50) {
                $error = true;
                $msg = 'La contraseña no puede tener mas 50 caracteres!';
            }

            if (!$error && !$user) {
                $error = true;
                $msg = 'El usuario proporcionado no existe!';
            }

            if (!$error && $password != $user->password) {
                $error = true;
                $msg = 'Contraseña incorrecta!';
            }

            // Mostrar error
            if ($error) {
                $template->apply();
                GeneralUtils::showAlert($msg, 'danger',  showReturn: false);
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
