<!-- application/views/customer_type/create_customer_type.php -->

<h2>Create Customer Type</h2>

<form method="post" action="<?= base_url('CustomerType_controller/create') ?>">
    <div class="form-group">
        <label for="customer_type">Customer Type:</label>
        <input type="text" class="form-control" id="customer_type" name="customer_type" required>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
