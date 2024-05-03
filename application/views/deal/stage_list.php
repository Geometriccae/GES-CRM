<!DOCTYPE html>
<html>
<head>
    <title>Stage List</title>
</head>
<body>
    <h2>Stage List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Stage</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($stages as $stage): ?>
            <tr>
                <td><?= $stage->id ?></td>
                <td><?= $stage->stage ?></td>
                <td><a href="<?= site_url('stage_controller/edit/' . $stage->id) ?>">Edit</a></td>
                <td><a href="<?= site_url('stage_controller/delete/' . $stage->id) ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="<?= site_url('stage_controller/create') ?>">Create New Stage</a>
</body>
</html>
