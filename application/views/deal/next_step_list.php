<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <h4 class="card-title">Next Steps Table</h4>
                </div>

                <a href="<?php echo base_url('Next_step_controller/add_next_step'); ?>" class="btn btn-primary mb-3">Add Next Step</a>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Next Step</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($next_steps as $next_step): ?>
                            <tr>
                                <td><?php echo $next_step->id; ?></td>
                                <td><?php echo $next_step->next_step; ?></td>
                                <td>
                                    <a href="<?php echo base_url('Next_step_controller/edit_next_step/' . $next_step->id); ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="<?php echo base_url('Next_step_controller/delete_next_step/' . $next_step->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this next step?');">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
