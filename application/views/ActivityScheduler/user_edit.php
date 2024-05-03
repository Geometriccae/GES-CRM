
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                   
                    <h4 class="card-title">Edit Activity</h4>
                <p class="card-title-desc">Provide the required information for creating a new activity.</p>
                    <!-- Bootstrap Validation Form -->
                    <form method="post" action="<?php echo base_url('ActivityController/useredit/' . $activity->ActivityID); ?>"
      class="row g-3 needs-validation" novalidate>

    <!-- Type of Activity -->
    <div class="col-md-4">
        <label for="TypeOfActivity" class="form-label">Type of Activity:</label>
        <input type="text" class="form-control" id="TypeOfActivity" name="TypeOfActivity"
               value="<?= $activity->TypeOfActivity ?>" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>

    <!-- Project -->
    <div class="col-md-4">
        <label for="Project" class="form-label">Project:</label>
        <input type="text" class="form-control" id="Project" name="Project"
               value="<?= $activity->Project ?>" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>

    <!-- Assigned To -->
    <div class="col-md-4">
        <label for="AssignedTo" class="form-label">Assigned To:</label>
        <input type="text" class="form-control" id="AssignedTo" name="AssignedTo"
               value="<?= $activity->AssignedTo ?>" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>

    <!-- Priority -->
    <div class="col-md-4">
        <label for="Priority" class="form-label">Priority:</label>
        <select class="form-select" id="Priority" name="Priority">
            <option value="High" <?php if ($activity->Priority === 'High') echo 'selected'; ?>>High</option>
            <option value="Medium" <?php if ($activity->Priority === 'Medium') echo 'selected'; ?>>Medium</option>
            <option value="Low" <?php if ($activity->Priority === 'Low') echo 'selected'; ?>>Low</option>
        </select>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>

    <!-- Status -->
    <div class="col-md-4">
        <label for="Status" class="form-label">Status:</label>
        <select class="form-select" id="Status" name="Status">
            <option value="Pending" <?php if ($activity->Status === 'Pending') echo 'selected'; ?>>Pending</option>
            <option value="In Progress" <?php if ($activity->Status === 'In Progress') echo 'selected'; ?>>In Progress</option>
            <option value="Completed" <?php if ($activity->Status === 'Completed') echo 'selected'; ?>>Completed</option>
        </select>
    </div>

    <!-- Start Date -->
    <div class="col-md-4">
        <label for="StartDate" class="form-label">Start Date:</label>
        <input type="date" class="form-control" id="StartDate" name="StartDate"
               value="<?= $activity->StartDate ?>" required>
    </div>

    <!-- End Date -->
    <div class="col-md-4">
        <label for="EndDate" class="form-label">End Date:</label>
        <input type="date" class="form-control" id="EndDate" name="EndDate"
               value="<?= $activity->EndDate ?>" required>
    </div>

    <!-- Description -->
    <div class="col-md-8">
        <label for="Description" class="form-label">Description:</label>
        <textarea class="form-control" id="Description" name="Description"><?= $activity->Description ?></textarea>
    </div>

    <!-- Links -->
    <div class="col-md-4">
        <label for="Links" class="form-label">Links:</label>
        <input type="text" class="form-control" id="Links" name="Links" value="<?= $activity->Links ?>">
    </div>

    <!-- Submit Button -->
    <div class="col-12 mt-3">
        <button class="btn btn-primary" type="submit">Update Activity</button>
    </div>
</form>

                    <!-- End Bootstrap Validation Form -->

                </div>
            </div>
        </div>
    </div>
</div>
