<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create New Activity</h4>
                <p class="card-title-desc">Provide the required information for creating a new activity.</p>
                <form class="row g-3 needs-validation" method="post" action="<?php echo base_url('ActivityController/user_create'); ?>" novalidate>

    <!-- Type of Activity (Select Field) -->
    <div class="col-md-4">
        <label for="TypeOfActivity" class="form-label">Type of Activity</label>
        <select class="form-select" id="TypeOfActivity" name="TypeOfActivity" required>
            <option value="">Select Type of Activity</option>
            <?php foreach ($activity_types as $activity_type): ?>
                <option value="<?php echo $activity_type->Type_of_Activity; ?>"><?php echo $activity_type->Type_of_Activity; ?></option>
            <?php endforeach; ?>
        </select>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>

    <!-- Project (Select Field) -->
    <div class="col-md-4">
        <label for="Project" class="form-label">Project</label>
        <select class="form-select" id="Project" name="Project" required>
            <option value="">Select Project</option>
            <?php foreach ($projects as $project): ?>
                <option value="<?php echo $project->Project; ?>"><?php echo $project->Project; ?></option>
            <?php endforeach; ?>
        </select>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>

    <!-- Assigned To (Select Field) -->
    <div class="col-md-4">
        <label for="AssignedTo" class="form-label">Assigned To</label>
        <select class="form-select" id="AssignedTo" name="AssignedTo" required>
            <option value="">Select User</option>
            <?php foreach ($users as $user): ?>
                <option value="<?php echo $user['full_name']; ?>"><?php echo $user['full_name']; ?></option>
            <?php endforeach; ?>
        </select>
        <div class="invalid-feedback">
            Please select a user.
        </div>
    </div>

    <!-- Priority (Select Field) -->
    <div class="col-md-4">
        <label for="Priority" class="form-label">Priority</label>
        <select class="form-select" id="Priority" name="Priority">
            <option value="">Select Priority</option>
            <option value="High">High</option>
            <option value="Medium">Medium</option>
            <option value="Low">Low</option>
        </select>
    </div>

    <!-- Status (Select Field) -->
    <div class="col-md-4">
        <label for="Status" class="form-label">Status</label>
        <select class="form-select" id="Status" name="Status">
            <option value="">Select Status</option>
            <option value="Pending">Pending</option>
            <option value="In Progress">In Progress</option>
            <option value="Completed">Completed</option>
        </select>
    </div>

    <!-- Start Date (Input Field) -->
    <div class="col-md-4">
        <label for="StartDate" class="form-label">Start Date</label>
        <input type="date" class="form-control" id="StartDate" name="StartDate" required>
        <div class="invalid-feedback">
            Please provide a valid start date.
        </div>
    </div>

    <!-- End Date (Input Field) -->
    <div class="col-md-4">
        <label for="EndDate" class="form-label">End Date</label>
        <input type="date" class="form-control" id="EndDate" name="EndDate" required>
        <div class="invalid-feedback">
            Please provide a valid end date.
        </div>
    </div>
    <!-- Description -->
    <div class="col-md-4">
        <label for="Description" class="form-label">Description</label>
        <textarea required="" class="form-control" id="Description" placeholder="Enter Discription " name="Description" rows="5" ></textarea>
    </div>
  
    <!-- Links -->
    <div class="col-md-4">
        <label for="Links" class="form-label">Links</label>
        <input type="text" class="form-control"placeholder="Enter Links" id="Links" name="Links">
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Create Activity</button>
    </div>
</form>

<script>
    // You can remove the JavaScript code for radio button handling since there are no radio buttons.
</script>


            </div>
        </div>
    </div>
</div>
