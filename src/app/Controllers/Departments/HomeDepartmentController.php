<?php

namespace App\Controllers\Departments;

use App\Core\Template;
use App\Utils\Entities\DepartmentUtils;

class HomeDepartmentController
{
    public function handle(Template $template)
    {
        $template->apply(["departments" => DepartmentUtils::getAll()]);
    }
}
