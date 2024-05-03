<?php 	$this->load->view('includes/header',$page_data);   ?>

<h1>Activities List</h1>
<table>
    <thead>
        <tr>
            <th>Activity Type</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($activities as $activity): ?>
            <tr>
                <td><?php echo $activity->Type_of_Activity; ?></td>
                <td>
                    <a href="<?php echo base_url('Type_of_Activity/update/' . $activity->id); ?>">Edit</a>
                    <a href="<?php echo base_url('Type_of_Activity/delete/' . $activity->id); ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Button to create a new activity -->
<a href="<?php echo base_url('Type_of_Activity/create'); ?>">Create New Activity</a>

<?php 	$this->load->view('includes/footer',$page_data);   ?>