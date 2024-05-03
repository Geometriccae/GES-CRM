<!DOCTYPE html>
<html>
<head>
    <title>Edit Stage</title>
</head>
<body>
    <h2>Edit Stage</h2>
    <form method="post" action="<?= site_url('stage_controller/update/' . $stage->id) ?>">
        <label for="stage">Stage:</label>
        <input type="text" name="stage" value="<?= $stage->stage ?>">
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="<?= site_url('stage_controller') ?>">Back to Stage List</a>
</body>
</html>
