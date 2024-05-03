<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <h4 class="card-title">Conversion Rates Table</h4>
                </div>

                <a href="<?php echo base_url('conversion_rate/create'); ?>" class="btn btn-primary mb-3">Add Conversion Rate</a>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Rate</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($conversion_rates as $conversion_rate): ?>
                            <tr>
                                <td><?= $conversion_rate->id ?></td>
                                <td><?= $conversion_rate->rate ?></td>
                                <td>
                                    <a href="<?= base_url('conversion_rate/edit/' . $conversion_rate->id) ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="<?= base_url('conversion_rate/delete/' . $conversion_rate->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this conversion rate?')">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
