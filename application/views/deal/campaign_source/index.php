<?php 	$this->load->view('includes/header',$page_data);   ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <h4 class="card-title">Campaign Sources Table</h4>
                </div>

                <a href="<?php echo base_url('campaign_source/create'); ?>" class="btn btn-primary mb-3">Add Campaign Source</a>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Source Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($campaign_sources as $campaign_source): ?>
                            <tr>
                                <td><?= $campaign_source->id ?></td>
                                <td><?= $campaign_source->source_name ?></td>
                                <td>
                                    <a href="<?= base_url('campaign_source/edit/' . $campaign_source->id) ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="<?= base_url('campaign_source/delete/' . $campaign_source->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this campaign source?')">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php 	$this->load->view('includes/footer',$page_data);   ?>