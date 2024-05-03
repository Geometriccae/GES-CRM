<?php 	$this->load->view('includes/header',$page_data);   ?>
<h1>Edit Activity</h1>
    <form method="post" action="<?php echo base_url('activityscheduler/update/' . $activity['id']); ?>">
        <!-- Form fields for editing the activity -->
        <label for="TypeOfActivity">Type of Activity:</label>
        <input type="text" id="TypeOfActivity" name="TypeOfActivity" value="<?php echo $activity['TypeOfActivity']; ?>" required><br><br>

        <label for="Project">Project:</label>
        <input type="text" id="Project" name="Project" value="<?php echo $activity['Project']; ?>" required><br><br>

        <label for="AssignedTo">Assigned To:</label>
        <input type="text" id="AssignedTo" name="AssignedTo" value="<?php echo $activity['AssignedTo']; ?>" required><br><br>

        <label for="Priority">Priority:</label>
        <select id="Priority" name="Priority">
            <option value="High" <?php if ($activity['Priority'] === 'High') echo 'selected'; ?>>High</option>
            <option value="Medium" <?php if ($activity['Priority'] === 'Medium') echo 'selected'; ?>>Medium</option>
            <option value="Low" <?php if ($activity['Priority'] === 'Low') echo 'selected'; ?>>Low</option>
        </select><br><br>

        <label for="Status">Status:</label>
        <select id="Status" name="Status">
            <option value="Pending" <?php if ($activity['Status'] === 'Pending') echo 'selected'; ?>>Pending</option>
            <option value="In Progress" <?php if ($activity['Status'] === 'In Progress') echo 'selected'; ?>>In Progress</option>
            <option value="Completed" <?php if ($activity['Status'] === 'Completed') echo 'selected'; ?>>Completed</option>
        </select><br><br>

        <label for="StartDate">Start Date:</label>
        <input type="date" id="StartDate" name="StartDate" value="<?php echo $activity['StartDate']; ?>" required><br><br>

        <label for="EndDate">End Date:</label>
        <input type="date" id="EndDate" name="EndDate" value="<?php echo $activity['EndDate']; ?>" required><br><br>

        <input type="submit" value="Update Activity">
    </form>

<?php 	$this->load->view('includes/footer',$page_data);   ?>