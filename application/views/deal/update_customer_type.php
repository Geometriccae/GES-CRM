<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Customer Type</title>
</head>
<body>
    <h1>Edit Customer Type</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('customertype/update/' . $customerType->id); ?>
    <label for="CustomerType">Customer Type:</label>
    <input type="text" name="CustomerType" id="CustomerType" value="<?php echo $customerType->CustomerType; ?>" required>
    <button type="submit">Update</button>
    <?php echo form_close(); ?>
    <a href="<?php echo site_url('customertype/view/' . $customerType->id); ?>">Cancel</a>
</body>
</html>
