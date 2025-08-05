<div class="container center-screen pt-2">
    <div class="card shadow-sm entity-card w-100">
        <div class="card-header bg-danger text-white">
            <h3 class="mb-0">Delete Department</h3>
        </div>
        <div class="card-body">
            <div class="delete-warning">
                <h5>
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    Are you sure you want to delete this <strong>department</strong>?
                </h5>
            </div>

            <form method="post">
                <dl class="row">
                    <div class="fields-grid">
                        <div class="field-item">
                            <label for="dept_name" class="field-label">Dept. Name</label>
                            <div id="dept_name" name="dept_name" class="field-value"><?= htmlspecialchars($dept['dept_name']); ?></div>
                        </div>
                        <div class="field-item">
                            <label for="faculty_head" class="field-label">Faculty Head</label>
                            <div id="faculty_head" name="faculty_head" class="field-value"><?= htmlspecialchars($dept['faculty_head']); ?></div>
                        </div>
                        <div class="field-item">
                            <label for="email" class="field-label">Email</label>
                            <div id="email" name="email" class="field-value"><?= htmlspecialchars($dept['email']); ?></div>
                        </div>
                    </div>
                </dl>

                <div class="d-flex justify-content-between align-items-center mt-4 action-buttons">
                    <button type="submit" id="btn-delete" class="btn btn-lg btn-danger">
                        <i class="bi bi-trash3-fill me-2"></i> Delete
                    </button>
                    <a id="btn-return" class="btn btn-outline-secondary btn-lg" href="home.php">
                        <i class="bi bi-arrow-left-circle me-2"></i> Back to List
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>