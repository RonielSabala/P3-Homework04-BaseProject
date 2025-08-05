<?php

namespace App\Controllers\Departments;

use App\Core\Template;
use App\Utils\GeneralUtils;
use App\Utils\Entities\DepartmentUtils;

class CreateDepartmentController
{
    public function handle(Template $template)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Datos del departamento
            $fields = [
                $_POST['dept_name'],
                $_POST['faculty_head'],
                $_POST['email'],
            ];

            // Validar datos
            $error_msg = '';
            if (strlen($fields[0]) > 50) {
                $error_msg = 'El nombre del departamento';
            } elseif (strlen($fields[1]) > 50) {
                $error_msg = 'El nombre del jefe de facultad';
            } elseif (strlen($fields[2]) > 50) {
                $error_msg = 'El email';
            }

            // Mostrar error
            if ($error_msg) {
                $template->apply();
                GeneralUtils::showAlert($error_msg . ' no puede tener más de 50 caracteres!', 'danger', showReturn: false);
                exit;
            }

            // Crear departamento
            $success = DepartmentUtils::create($fields);
            if ($success) {
                // Redirigir
                header('Location: home.php');
            }

            exit;
        }

        $template->apply();
    }
}
