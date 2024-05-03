<!DOCTYPE html>
<html>
<head>
    <title>Edit Project Value</title>
</head>
<body>
    <h1>Edit Project Value</h1>
    <form method="post" action="<?= site_url('project_value_controller/update/' . $project_value->id) ?>">
        <label for="amount">Amount:</label>
        <input type="text" name="amount" id="amount" value="<?= $project_value->amount ?>" required>
        <button type="submit">Update</button>
    </form>
    <a href="<?= site_url('project_value_controller') ?>">Back to List</a>
</body>
</html>
