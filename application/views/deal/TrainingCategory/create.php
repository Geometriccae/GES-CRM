<!DOCTYPE html>
<html>
<head>
    <title>Create Training Category</title>
</head>
<body>
    <h2>Create Training Category</h2>
    <form method="post" action="<?php echo base_url('TrainingCategoryController/create'); ?>">
        <label for="TrainingCategory">Category:</label>
        <input type="text" name="TrainingCategory" required>
        <input type="submit" value="Create">
    </form>
    <a href="<?php echo base_url('TrainingCategoryController/index'); ?>">Back to List</a>
</body>
</html>
