<?php

namespace App\Controllers\Departments;

use App\Core\Template;


class EditDepartmentController
{
    public function handle(Template $template)
    {
        if ($_POST) {
            header('Location: /home.php');
            exit;
        }

        $template->apply();
    }
}
