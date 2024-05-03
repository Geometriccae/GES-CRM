
<?php 	$this->load->view('includes/header',$page_data);   ?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Project Value</title>
</head>
<body>
    <h1>Create Project Value</h1>
    <form method="post" action="<?= site_url('project_value_controller/create') ?>">
        <label for="amount">Amount:</label>
        <input type="text" name="amount" id="amount" required>
        <button type="submit">Create</button>
    </form>
    <a href="<?= site_url('project_value_controller') ?>">Back to List</a>
</body>
</html>
<?php 	$this->load->view('includes/footer',$page_data);   ?>