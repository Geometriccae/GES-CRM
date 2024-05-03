<!DOCTYPE html>
<html>
<head>
    <title>Edit Conversion Rate</title>
</head>
<body>
    <h1>Edit Conversion Rate</h1>
    <form method="post" action="<?= base_url('conversion_rate/update/' . $conversion_rate->id) ?>">
        <label>Rate:</label>
        <input type="text" name="rate" value="<?= $conversion_rate->rate ?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
