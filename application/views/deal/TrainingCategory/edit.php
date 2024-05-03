<!DOCTYPE html>
<html>
<head>
    <title>Edit Training Category</title>
</head>
<body>
    <h2>Edit Training Category</h2>
    <form method="post" action="<?php echo base_url('TrainingCategoryController/update/'.$category['id']); ?>">
        <label for="TrainingCategory">Category:</label>
        <input type="text" name="TrainingCategory" value="<?php echo $category['TrainingCategory']; ?>" required>
        <input type="submit" value="Update">
    </form>
    <a href="<?php echo base_url('TrainingCategoryController/index'); ?>">Back to List</a>
</body>
</html>
