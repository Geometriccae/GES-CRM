<!-- lead_status_list.php -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>#">GES</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lead</li>
            </ol>
        </div>
        <div class="col-md-4">
            <div class="float-end d-none d-md-block">
                <div class="dropdown">
                    <button class="btn btn-primary btn-rounded dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti-settings me-1"></i> Settings <i class="mdi mdi-chevron-down"></i>
                    </button>
                    <!-- Add dropdown menu items here -->
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    th {
        color: #655be6;
    }
</style>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <h2>Activities Assigned to <?php echo $this->session->userdata('admin_full_name'); ?></h2>
                </div>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>ActivityID</th>
                            <th>TypeOfActivity</th>
                            <th>Project</th>
                            <th>Priority</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Links</th>
                            <th>StartDate</th>
                            <th>EndDate</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php
    $id = 1; // Initialize the ID to 1.
    foreach ($activities as $activity):
    ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $activity->TypeOfActivity; ?></td>
            <td><?php echo $activity->Project; ?></td>
            <td><?php echo $activity->Priority; ?></td>
            <td><?php echo $activity->Status; ?></td>
            <td><?php echo $activity->Description; ?></td>
            <td><?php echo $activity->Links; ?></td>
            <td><?php echo $activity->StartDate; ?></td>
            <td><?php echo $activity->EndDate; ?></td>
            <td><a href="<?php echo base_url('ActivityController/user_edit/' . $activity->ActivityID); ?>" class="btn btn-primary btn-sm">Edit</a></td>
        </tr>
    <?php
    $id++; // Increment the ID for the next row.
    endforeach;
    ?>
</tbody>

                </table>
                
            </div>
        </div>
    </div>
</div>
