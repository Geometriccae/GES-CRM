<!-- application/views/services_required/create.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Add New Service</title>
</head>
<body>

<h2>Add New Service</h2>
<form method="post" action="<?php echo site_url('services_required/create'); ?>">
    <label for="service_name">Service Name:</label>
    <input type="text" name="service_name" required>
    <br><br>
    <button type="submit">Create</button>
</form>

</body>
</html>
