<?php 	$this->load->view('includes/header',$page_data);   ?>
<!DOCTYPE html>
<html>
<head>
    <title>Training Categories</title>
</head>
<body>
    <h2>Training Categories</h2>
    <a href="<?php echo base_url('TrainingCategoryController/create'); ?>">Create New Category</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($categories as $category) { ?>
        <tr>
            <td><?php echo $category['id']; ?></td>
            <td><?php echo $category['TrainingCategory']; ?></td>
            <td>
               
                <a href="<?php echo base_url('TrainingCategoryController/update/'.$category['id']); ?>">Edit</a>
                <a href="<?php echo base_url('TrainingCategoryController/delete/'.$category['id']); ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

<?php 	$this->load->view('includes/footer',$page_data);   ?>