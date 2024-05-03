<?php 	$this->load->view('includes/header',$page_data);   ?>





<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h2>Whats app Notification</h2>
                <form method="post" action="<?php echo site_url('ActivityScheduler/send_notification/'.$activity->id); ?>" class="row g-3 needs-validation" novalidate>
                <div class="col-md-6">
    <label for="WhatsAppNumber" class="form-label">WhatsApp Number:</label>
    <input type="tel" class="form-control" name="WhatsAppNumber">
</div>    
                <div class="col-md-6">
                        <label for="TypeOfActivity" class="form-label">Type of Activity:</label>
                        <input type="text" class="form-control" name="TypeOfActivity" required value="<?php echo $activity->TypeOfActivity; ?>">
                        
                    </div>
                    <div class="col-md-6">
                        <label for="Description" class="form-label">Description:</label>
                        <textarea class="form-control" name="Description" required><?php echo $activity->Description; ?></textarea>
                        
                    </div>
                    <div class="col-md-6">
                        <label for="StartDate" class="form-label">Start Date:</label>
                        <input type="date" class="form-control" name="StartDate" required value="<?php echo $activity->StartDate; ?>">
                        
                    </div>
                    <div class="col-md-6">
                        <label for="StartTime" class="form-label">Start Time:</label>
                        <input type="time" class="form-control" name="StartTime" required value="<?php echo $activity->StartTime; ?>">
                        
                    </div>
                    <div class="col-md-6">
                        <label for="EndDate" class="form-label">End Date:</label>
                        <input type="date" class="form-control" name="EndDate" required value="<?php echo $activity->EndDate; ?>">
                        
                    </div>
                    <div class="col-md-6">
                        <label for="EndTime" class="form-label">End Time:</label>
                        <input type="time" class="form-control" name="EndTime" required value="<?php echo $activity->EndTime; ?>">
                        
                    </div>
                    <div class="col-md-6">
                        <label for="ReminderDate" class="form-label">Reminder Date:</label>
                        <input type="date" class="form-control" name="ReminderDate" value="<?php echo $activity->ReminderDate; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="ReminderTime" class="form-label">Reminder Time:</label>
                        <input type="time" class="form-control" name="ReminderTime" value="<?php echo $activity->ReminderTime; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="Repeat" class="form-label">Repeat:</label>
                        <select class="form-select" name="Repeat" required>
                            <option <?php echo ($activity->Repeat === 'Yes') ? 'selected' : ''; ?> value="Yes">Yes</option>
                            <option <?php echo ($activity->Repeat === 'No') ? 'selected' : ''; ?> value="No">No</option>
                        </select>
                        
                    </div>
                    <div class="col-md-6">
                        <label for="Project" class="form-label">Project:</label>
                        <input type="text" class="form-control" name="Project" value="<?php echo $activity->Project; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="AssignedTo" class="form-label">Assigned To:</label>
                        <input type="text" class="form-control" name="AssignedTo" value="<?php echo $activity->AssignedTo; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="Status" class="form-label">Status:</label>
                        <input type="text" class="form-control" name="Status" value="<?php echo $activity->Status; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="Priority" class="form-label">Priority:</label>
                        <input type="text" class="form-control" name="Priority" value="<?php echo $activity->Priority; ?>">
                    </div>
                    
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Send Notification</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php 	$this->load->view('includes/footer',$page_data);   ?>