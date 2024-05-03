<!-- application/views/services_required/index.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Services Required List</title>
</head>
<body>

<h2>Services Required List</h2>
<a href="<?php echo site_url('services_required/create'); ?>">Add New Service</a>
<br><br>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Service Name</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($services as $service): ?>
    <tr>
        <td><?php echo $service->id; ?></td>
        <td><?php echo $service->service_name; ?></td>
        <td>
            <a href="<?php echo site_url('services_required/edit/' . $service->id); ?>">Edit</a>
            <a href="<?php echo site_url('services_required/delete/' . $service->id); ?>" onclick="return confirm('Are you sure you want to delete this service?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
