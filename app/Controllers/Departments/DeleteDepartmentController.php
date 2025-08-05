<?php

namespace App\Controllers\Departments;

use App\Core\Template;
use App\Utils\GeneralUtils;
use App\Utils\Entities\DepartmentUtils;


class DeleteDepartmentController
{
    public function handle(Template $template)
    {
        if (!isset($_GET['id'])) {
            GeneralUtils::showAlert('No se especificó el departamento.', 'danger');
            exit;
        }

        $id = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Eliminar departamento
            $success = DepartmentUtils::delete($id);
            if ($success) {
                // Redirigir
                header('Location: home.php');
            }

            exit;
        }

        // Obtener departamento
        $dept = DepartmentUtils::get($id);
        if (!$dept) {
            exit;
        }

        $template->apply(['dept' => $dept]);
    }
}
