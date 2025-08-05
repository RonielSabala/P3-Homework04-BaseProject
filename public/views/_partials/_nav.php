<?php

use App\Utils\GeneralUtils;

$uri = GeneralUtils::getURI();
$route = GeneralUtils::splitURI($uri)[0];
?>

<div class="divMenu">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a id="home-nav" class="<?= GeneralUtils::getActiveClass('home'); ?>"
                href="/home.php">Inicio</a>
        </li>
        <li class="nav-item">
            <a id="departments-nav" class="<?= GeneralUtils::getActiveClass('departments'); ?>"
                href="/departments/home.php">Departamentos</a>
        </li>
        <?= GeneralUtils::setLogoutButton(); ?>
    </ul>
</div>
<div class="view-content">
    <!-- View content here -->