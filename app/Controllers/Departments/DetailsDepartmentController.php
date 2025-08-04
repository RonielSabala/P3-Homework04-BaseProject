<?php

namespace App\Controllers\Departments;

use App\Core\Template;
use App\Utils\GeneralUtils;
use App\Utils\Entities\DepartmentUtils;


class DetailsDepartmentController
{
    public function handle(Template $template)
    {
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
