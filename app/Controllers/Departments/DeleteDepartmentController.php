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

        // Verificar que existe el departamento
        $id = $_GET['id'];
        $dept = DepartmentUtils::get($id);
        if (!$dept) {
            exit;
        }

        // Confirmar si se quieren eliminar los datos
        if (!($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirm']) && $_POST['confirm'] === 'yes')) {
            $template->apply();
            exit;
        }

        // Eliminar departamento
        DepartmentUtils::delete($id);
        header('Location: home.php');
    }
}
