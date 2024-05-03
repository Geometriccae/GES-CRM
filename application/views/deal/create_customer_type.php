<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Customer Type</title>
</head>
<body>
    <h1>Create Customer Type</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('customertype/create'); ?>
    <label for="CustomerType">Customer Type:</label>
    <input type="text" name="CustomerType" id="CustomerType" required>
    <button type="submit">Create</button>
    <?php echo form_close(); ?>
</body>
</html>
