<!DOCTYPE html>
<html>
<head>
    <title>Edit Stage</title>
</head>
<body>
    <h1>Edit Stage</h1>
    <form method="post" action="<?= base_url('stages/update/' . $stage->id) ?>">
        <label>Stage:</label>
        <input type="text" name="stage" value="<?= $stage->stage ?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
