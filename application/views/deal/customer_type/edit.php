<!-- application/views/customer_type/edit_customer_type.php -->

<h2>Edit Customer Type</h2>

<form method="post" action="<?= base_url('CustomerType_controller/update/' . $customer_type->id) ?>">
    <div class="form-group">
        <label for="customer_type">Customer Type:</label>
        <input type="text" class="form-control" id="customer_type" name="customer_type" value="<?= $customer_type->CustomerType ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
