<!DOCTYPE html>
<html>
<head>
    <title>Update Training</title>
</head>
<body>
    <h1>Update Training</h1>
    <form method="post">
        <label>Deal Owner: <input type="text" name="DealOwner" value="<?php echo $training->DealOwner; ?>"></label><br>
        <!-- ... other fields ... -->
        <label>Campaign Source: <input type="text" name="CampaignSource" value="<?php echo $training->CampaignSource; ?>"></label><br>
        <input type="submit" value="Update">
    </form>
    <a href="<?php echo base_url('IT_Trainings'); ?>">Back to List</a>
</body>
</html>
