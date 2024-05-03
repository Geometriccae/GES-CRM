<?php 	$this->load->view('includes/header',$page_data);   ?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Campaign Source</title>
</head>
<body>
    <h1>Create Campaign Source</h1>
    <form method="post" action="<?= base_url('campaign_source/store') ?>">
        <label>Source Name:</label>
        <input type="text" name="source_name" required>
        <button type="submit">Create</button>
    </form>
</body>
</html>

<?php 	$this->load->view('includes/footer',$page_data);   ?>