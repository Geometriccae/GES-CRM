<!DOCTYPE html>
<html>
<head>
    <title>Create Conversion Rate</title>
</head>
<body>
    <h1>Create Conversion Rate</h1>
    <form method="post" action="<?= base_url('conversion_rate/store') ?>">
        <label>Rate:</label>
        <input type="text" name="rate" required>
        <button type="submit">Create</button>
    </form>
</body>
</html>
