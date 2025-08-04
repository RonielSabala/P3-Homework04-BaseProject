<?php

namespace App\Controllers\Departments;

use App\Core\Template;
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
