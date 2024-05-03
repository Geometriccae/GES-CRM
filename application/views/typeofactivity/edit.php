<?php 	$this->load->view('includes/header',$page_data);   ?>
<h1>Edit Activity</h1>
<form method="post" action="<?php echo base_url('Type_of_Activity/update/'.$activity->id); ?>">
    <input type="text" name="Type_of_Activity" value="<?php echo $activity->Type_of_Activity; ?>" required>
    <button type="submit">Update</button>
</form>


<?php 	$this->load->view('includes/footer',$page_data);   ?>