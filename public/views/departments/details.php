<div class="container center-screen pt-2">
    <div class="card shadow-sm entity-card w-100" style="max-width: 1000px;">
        <div class="card-header bg-info text-black">
            <h3 class="mb-0">Department Details</h3>
        </div>
        <div class="card-body">
            <h5 class="text-secondary mb-3">Fields</h5>
            <hr />

            <dl class="row">
                <div class="fields-grid">
                    <div class="field-item">
                        <label for="dept_name" class="field-label">Dept. Name</label>
                        <div id="dept_name" class="field-value"><?= htmlspecialchars($dept['dept_name']); ?></div>
                    </div>
                    <div class="field-item">
                        <label for="faculty_head" class="field-label">Faculty Head</label>
                        <div id="faculty_head" class="field-value"><?= htmlspecialchars($dept['faculty_head']); ?></div>
                    </div>
                    <div class="field-item">
                        <label for="email" class="field-label">Email</label>
                        <div id="email" class="field-value"><?= htmlspecialchars($dept['email']); ?></div>
                    </div>
                </div>
            </dl>

            <div class="d-flex justify-content-end mt-4 action-buttons">
                <a href="home.php" class="btn btn-outline-secondary btn-lg">
                    <i class="bi bi-arrow-left-circle me-2"></i> Back to List
                </a>
            </div>
        </div>
    </div>
</div>