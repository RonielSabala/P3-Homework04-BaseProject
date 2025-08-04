<?php

namespace App\Controllers\Auth;

use App\Core\Template;


class LogoutController
{
    public function handle(Template $template)
    {
        // Cerrar sesión y redirigir al login
        session_destroy();
        header('location: /auth/login.php');
    }
}
