<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Customer Types</title>
</head>
<body>
    <h1>List of Customer Types</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customerTypes as $customerType): ?>
                <tr>
                    <td><?php echo $customerType->id; ?></td>
                    <td><?php echo $customerType->CustomerType; ?></td>
                    <td>
                        <a href="<?php echo site_url('customertype/view/' . $customerType->id); ?>">View</a>
                        <a href="<?php echo site_url('customertype/edit/' . $customerType->id); ?>">Edit</a>
                        <a href="<?php echo site_url('customertype/delete/' . $customerType->id); ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?php echo site_url('customertype/create'); ?>">Create New Customer Type</a>
</body>
</html>
