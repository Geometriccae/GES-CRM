<!-- application/views/customer_type/customer_type_list.php -->

<h2>Customer Types</h2>
<a href="<?= base_url('CustomerType_controller/create') ?>" class="btn btn-primary">Add Customer Type</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Customer Type</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($customer_types as $customer_type): ?>
            <tr>
                <td><?= $customer_type->id ?></td>
                <td><?= $customer_type->CustomerType ?></td>
                <td>
                    <a href="<?= base_url('CustomerType_controller/edit/' . $customer_type->id) ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="<?= base_url('CustomerType_controller/delete/' . $customer_type->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this customer type?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
