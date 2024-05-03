<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <h4 class="card-title">Stages Table</h4>
                </div>

                <a href="<?php echo base_url('stages/create'); ?>" class="btn btn-primary mb-3">Create New Stage</a>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Stage</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($stages as $stage): ?>
                            <tr>
                                <td><?= $stage->id ?></td>
                                <td><?= $stage->stage ?></td>
                                <td><a href="<?= site_url('stages/edit/' . $stage->id) ?>" class="btn btn-primary btn-sm">Edit</a></td>
                                <td><a href="<?= site_url('stages/delete/' . $stage->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this stage?');">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
