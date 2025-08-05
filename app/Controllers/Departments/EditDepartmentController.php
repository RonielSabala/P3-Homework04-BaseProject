<?php

namespace App\Controllers\Departments;

use App\Core\Template;
use App\Utils\GeneralUtils;
use App\Utils\Entities\DepartmentUtils;

class EditDepartmentController
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

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Datos del departamento
            $dept['dept_name'] = $_POST['dept_name'];
            $dept['faculty_head'] = $_POST['faculty_head'];
            $dept['email'] = $_POST['email'];
            $fields = [
                $dept['dept_name'],
                $dept['faculty_head'],
                $dept['email'],
                $id,
            ];

            // Validar datos
            $error_msg = '';
            $other_dept = DepartmentUtils::getByName($fields[0]);
            if (strlen($fields[0]) > 50) {
                $error_msg = 'El nombre del departamento no puede tener más de 50 caracteres!';
            } elseif (strlen($fields[1]) > 50) {
                $error_msg = 'El nombre del jefe de facultad no puede tener más de 50 caracteres!';
            } elseif (strlen($fields[2]) > 50) {
                $error_msg = 'El email no puede tener más de 50 caracteres!';
            } elseif ($other_dept && $other_dept['id'] != $id) {
                $error_msg = 'Ya existe un departamento con ese nombre!';
            }

            // Mostrar error
            if ($error_msg) {
                $template->apply(['dept' => $dept]);
                GeneralUtils::showAlert($error_msg, 'danger', showReturn: false);
                exit;
            }

            // Actualizar departamento
            $success = DepartmentUtils::update($fields);
            if ($success) {
                // Redirigir
                header('Location: home.php');
            }

            exit;
        }

        $template->apply(['dept' => $dept]);
    }
}
