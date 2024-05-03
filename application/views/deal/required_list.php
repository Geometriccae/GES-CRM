<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <h4 class="card-title">Services Required Table</h4>
                </div>

                <a href="<?php echo base_url('Masterdata/Services_required_controller/add_required'); ?>" class="btn btn-primary mb-3">Add Required</a>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Required</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($required_list as $required): ?>
                            <tr>
                                <td><?php echo $required->id; ?></td>
                                <td><?php echo $required->Required; ?></td>
                                <td>
                                    <a href="<?php echo base_url('Masterdata/Services_required_controller/edit_required/' . $required->id); ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="<?php echo base_url('Masterdata/Services_required_controller/delete_required/' . $required->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this required service?');">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
