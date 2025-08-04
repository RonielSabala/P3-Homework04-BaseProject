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
            $user = UserUtils::getUserPassByName($username);

            // Validar usuario
            if (!$user || $password != $user->password) {
                $template->apply();
                GeneralUtils::showAlert("Contraseña incorrecta!", "danger",  showReturn: false);
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
