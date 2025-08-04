<?php

namespace App\Controllers\Departments;

use App\Core\Template;
use App\Utils\GeneralUtils;
use App\Utils\Entities\DepartmentUtils;

class EditDepartmentController
{
    public function handle(Template $template)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Datos del departamento
            $fields = [
                $_POST['dept_name'],
                $_POST['faculty_head'],
                $_POST['email'],
                $_GET['id'],
            ];

            // Actualizar departamento
            DepartmentUtils::update($fields);

            // Redirigir
            header('Location: home.php');
            exit;
        }

        if (!isset($_GET['id'])) {
            GeneralUtils::showAlert('No se especificó el departamento.', 'danger');
            exit;
        }

        // Obtener departamento
        $id = $_GET['id'];
        $dept = DepartmentUtils::get($id);
        if (!$dept) {
            exit;
        }

        $template->apply(['dept' => $dept]);
    }
}
