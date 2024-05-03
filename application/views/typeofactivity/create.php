<?php 	$this->load->view('includes/header',$page_data);   ?>
<h1>Create Activity</h1>
<form method="post" action="<?php echo base_url('Type_of_Activity/create'); ?>">
    <input type="text" name="Type_of_Activity" placeholder="Activity Name" required>
    <button type="submit">Create</button>
</form>


<?php 	$this->load->view('includes/footer',$page_data);   ?>