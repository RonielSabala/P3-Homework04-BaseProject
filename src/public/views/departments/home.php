<h2>Departments</h2>
<div class="d-flex justify-content-end mb-3">
    <a id="btn-create" href="create.php" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Create New
    </a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Dept. Name</th>
            <th>Faculty Head</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($departments as $dept) {
        ?>
            <tr>
                <td><?= $i++ ?></td>
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

<?php if (!$departments): ?>
    <div id="noData" class="no-data">
        <i class="bi bi-inbox-fill fs-1 mb-2"></i>
        <div>No departments found.</div>
    </div>
<?php endif; ?>