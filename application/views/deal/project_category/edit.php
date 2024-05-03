<?php 	$this->load->view('includes/header',$page_data);   ?>
<!-- application/views/project_category/edit.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Project Category</title>
</head>
<body>

<h2>Edit Project Category</h2>

<a href="<?= site_url('project_category') ?>">Back to Project Categories</a>

<form method="post" action="<?= site_url('project_category/update/' . $category->id) ?>">
    <label for="project_category_name">Project Category Name:</label>
    <input type="text" name="project_category_name" id="project_category_name" value="<?= $category->Project_Category_name ?>" required>
    <br>
    <button type="submit">Update</button>
</form>

</body>
</html>
<!-- create_form.php -->
<?php 	$this->load->view('includes/footer',$page_data);   ?>