<!-- application/views/services_required/edit.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Service</title>
</head>
<body>

<h2>Edit Service</h2>
<form method="post" action="<?php echo site_url('services_required/update/' . $service->id); ?>">
    <label for="service_name">Service Name:</label>
    <input type="text" name="service_name" value="<?php echo $service->service_name; ?>" required>
    <br><br>
    <button type="submit">Update</button>
</form>

</body>
</html>
