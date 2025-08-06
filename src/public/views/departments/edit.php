<div class="container center-screen pt-2 mb-3">
    <div class="card shadow-sm entity-card w-100" style="max-width: 1000px;">
        <div class="card-header bg-warning text-dark">
            <h3 class="mb-0">Edit Department</h3>
        </div>
        <div class="card-body">
            <h5 class="text-secondary mb-3">Update the necessary fields</h5>
            <hr>
            <form method="post">
                <div class="edit-grid">
                    <div class="edit-item">
                        <label for="dept_name" class="form-label">Dept. Name</label>
                        <input type="text" id="dept_name" name="dept_name" class="form-control" placeholder="Enter a department name" value="<?= htmlspecialchars($dept['dept_name']); ?>" required>
                    </div>
                    <div class="edit-item">
                        <label for="faculty_head" class="form-label">Faculty Head</label>
                        <input type="text" id="faculty_head" name="faculty_head" class="form-control" placeholder="Enter a faculty head" value="<?= htmlspecialchars($dept['faculty_head']); ?>" required>
                    </div>
                    <div class="edit-item">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter an email" value="<?= htmlspecialchars($dept['email']); ?>" required>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-4 action-buttons">
                    <button type="submit" id="btn-edit" class="btn btn-warning btn-lg text-black">
                        <i class="bi bi-pencil-square me-2"></i> Update
                    </button>
                    <a id="btn-return" class="btn btn-outline-secondary btn-lg" href="home.php">
                        <i class="bi bi-arrow-left-circle me-2"></i> Back to List
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>