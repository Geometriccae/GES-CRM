<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <h4 class="card-title">Project Values Table</h4>
                </div>

                <a href="<?php echo base_url('project_value_controller/create'); ?>" class="btn btn-primary mb-3">Create New Project Value</a>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($project_values as $project_value): ?>
                            <tr>
                                <td><?= $project_value->id ?></td>
                                <td><?= $project_value->amount ?></td>
                                <td><a href="<?= site_url('project_value_controller/edit/' . $project_value->id) ?>" class="btn btn-primary btn-sm">Edit</a><a href="<?= site_url('project_value_controller/delete/' . $project_value->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this project value?');">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
