<?php 	$this->load->view('includes/header',$page_data);   ?>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h2>Create New Activity</h2>
                <form method="post" action="<?php echo site_url('ActivityScheduler/create'); ?>" class="row g-3 needs-validation" novalidate>
                    <div class="col-md-6">
                        <label for="TypeOfActivity" class="form-label">Type of Activity:</label>
                        <input type="text" class="form-control" name="TypeOfActivity" required>
                        
                    </div>
                    <div class="col-md-6">
                        <label for="Description" class="form-label">Description:</label>
                        <textarea class="form-control" name="Description" required></textarea>
                        
                    </div>
                    <div class="col-md-6">
                        <label for="StartDate" class="form-label">Start Date:</label>
                        <input type="date" class="form-control" name="StartDate" required>
                        
                    </div>
                    <div class="col-md-6">
                        <label for="StartTime" class="form-label">Start Time:</label>
                        <input type="time" class="form-control" name="StartTime" required>
                        
                    </div>
                    <div class="col-md-6">
                        <label for="EndDate" class="form-label">End Date:</label>
                        <input type="date" class="form-control" name="EndDate" required>
                        
                    </div>
                    <div class="col-md-6">
                        <label for="EndTime" class="form-label">End Time:</label>
                        <input type="time" class="form-control" name="EndTime" required>
                        
                    </div>
                    <div class="col-md-6">
                        <label for="ReminderDate" class="form-label">Reminder Date:</label>
                        <input type="date" class="form-control" name="ReminderDate">
                    </div>
                    <div class="col-md-6">
                        <label for="ReminderTime" class="form-label">Reminder Time:</label>
                        <input type="time" class="form-control" name="ReminderTime">
                    </div>
                    <div class="col-md-6">
                        <label for="Repeat" class="form-label">Repeat:</label>
                        <select class="form-select" name="Repeat" required>
                            <option selected disabled value="">Choose...</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        
                    </div>
                    <div class="col-md-6">
                        <label for="Project" class="form-label">Project:</label>
                        <input type="text" class="form-control" name="Project">
                    </div>
                    <div class="col-md-6">
                        <label for="AssignedTo" class="form-label">Assigned To:</label>
                        <input type="text" class="form-control" name="AssignedTo">
                    </div>
                    <div class="col-md-6">
                        <label for="Status" class="form-label">Status:</label>
                        <input type="text" class="form-control" name="Status">
                    </div>
                    <div class="col-md-6">
                        <label for="Priority" class="form-label">Priority:</label>
                        <input type="text" class="form-control" name="Priority">
                    </div>
                    
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php 	$this->load->view('includes/footer',$page_data);   ?>