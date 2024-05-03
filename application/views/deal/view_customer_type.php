<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Customer Type</title>
</head>
<body>
    <h1>View Customer Type</h1>
    <p><strong>ID:</strong> <?php echo $customerType->id; ?></p>
    <p><strong>Customer Type:</strong> <?php echo $customerType->CustomerType; ?></p>
    <a href="<?php echo site_url('customertype/edit/' . $customerType->id); ?>">Edit</a>
    <a href="<?php echo site_url('customertype'); ?>">Back to List</a>
</body>
</html>
