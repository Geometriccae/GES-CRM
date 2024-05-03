<!-- application/views/project_category/create.php -->
<?php 	$this->load->view('includes/header',$page_data);   ?><!-- create_form.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Create Project Category</title>
</head>
<body>

<h2>Create Project Category</h2>

<a href="<?= site_url('project_category') ?>">Back to Project Categories</a>

<form method="post" action="<?= site_url('project_category/store') ?>">
    <label for="project_category_name">Project Category Name:</label>
    <input type="text" name="project_category_name" id="project_category_name" required>
    <br>
    <button type="submit">Create</button>
</form>

</body>
</html>
<?php 	$this->load->view('includes/footer',$page_data);   ?>