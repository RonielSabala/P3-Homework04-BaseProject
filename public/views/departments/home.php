<h2>Listado</h2>
<div class="d-flex justify-content-end mb-3">
    <a href="edit.php" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Crear
    </a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Dept. Name</th>
            <th>Faculty Head</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($departments as $dept) {
        ?>
            <tr>
                <td><?= htmlspecialchars($dept['id']) ?></td>
                <td><?= htmlspecialchars($dept['dept_name']) ?></td>
                <td><?= htmlspecialchars($dept['faculty_head']) ?></td>
                <td><?= htmlspecialchars($dept['email']) ?></td>
                <td>
                    <div class="d-flex gap-1">
                        <a href="details.php?id=<?= $dept['id'] ?>" class="btn btn-outline-action btn-detail" title="Detalles">
                            <i class="bi bi-info-circle"></i>
                        </a>
                        <a href="edit.php?id=<?= $dept['id'] ?>" class="btn btn-outline-action btn-warning" title="Editar">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="delete.php?id=<?= $dept['id'] ?>" class="btn btn-outline-action btn-danger" title="Eliminar">
                            <i class="bi bi-trash"></i>
                        </a>
                    </div>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>