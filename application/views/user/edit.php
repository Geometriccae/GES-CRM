
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Status Update</h4>
                <p class="card-title-desc">Update Status Of The Task</p>
               
    <form method="post" action="<?php echo base_url('ActivityController/user_edit/' . $activity->ActivityID); ?>">
    <!-- Form fields for editing an activity -->
   
    <label for="Status">Status:</label>
    <select id="Status" name="Status">
        <option value="Pending" <?php if ($activity->Status === 'Pending') echo 'selected'; ?>>Pending</option>
        <option value="In Progress" <?php if ($activity->Status === 'In Progress') echo 'selected'; ?>>In Progress</option>
        <option value="Completed" <?php if ($activity->Status === 'Completed') echo 'selected'; ?>>Completed</option>
    </select><br><br>



    <input type="submit" value="Update">
</form>


<script>
    // You can remove the JavaScript code for radio button handling since there are no radio buttons.
</script>


            </div>
        </div>
    </div>
</div>
