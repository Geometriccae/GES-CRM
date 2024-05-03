<!-- application/views/project_category/index.php -->
<?php 	$this->load->view('includes/header',$page_data);   ?><!-- create_form.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Project Categories</title>
</head>
<body>

<h2>Project Categories</h2>

<a href="<?= site_url('project_category/create') ?>">Create New Category</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Project Category Name</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($categories as $category): ?>
        <tr>
            <td><?= $category->id ?></td>
            <td><?= $category->Project_Category_name ?></td>
            <td>
                <a href="<?= site_url('project_category/edit/' . $category->id) ?>">Edit</a>
                <a href="<?= site_url('project_category/delete/' . $category->id) ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
<?php 	$this->load->view('includes/footer',$page_data);   ?>