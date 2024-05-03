<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <h4 class="card-title">Project Category Table</h4>
                </div>

                <a href="<?php echo base_url('Masterdata/Project_Category_controller/add_category'); ?>" class="btn btn-primary mb-3">Add Category</a>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category): ?>
                            <tr>
                                <td><?php echo $category->id; ?></td>
                                <td><?php echo $category->category; ?></td>
                                <td><a href="<?php echo base_url('Masterdata/Project_Category_controller/edit_category/' . $category->id); ?>" class="btn btn-primary btn-sm">Edit</a> <a href="<?php echo base_url('Masterdata/Project_Category_controller/delete_category/' . $category->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category?');">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
