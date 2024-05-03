<!DOCTYPE html>
<html>
<head>
    <title>Create Stage</title>
</head>
<body>
    <h1>Create Stage</h1>
    <form method="post" action="<?= base_url('stages/store') ?>">
        <label>Stage:</label>
        <input type="text" name="stage" required>
        <button type="submit">Create</button>
    </form>
</body>
</html>
