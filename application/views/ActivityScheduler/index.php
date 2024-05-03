<div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Activity Dashboard</h6>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>#">GES</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Activity Dashboard</li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <button class="btn btn-primary btn-rounded dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti-settings me-1"></i> Settings <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
</div>
<div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stats">
                                    <div class="p-3 mini-stats-content">
                                    <div class="mb-4">
                                          
                             
                                          </div>
                                    </div>
                                    <div class="mx-3">
                                        <div class="card mb-0 border p-3 mini-stats-desc"> 
                                        <h6 class="text-center">Total Activity</h6>
                                            <h5 class="text-center"><?php echo $total_leads; ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stats">
                                    <div class="p-3 mini-stats-content">
                                        <div class="mb-4">
                                          
                             
                                        </div>
                                    </div>
                                    <div class="mx-3">
                                        <div class="card mb-0 border p-3 mini-stats-desc">
                                            <div class="text-center">
                                            <h6 >Pending Activity</h6>
                                            <h5 class="text-center"><?php echo $current_month_lead_count; ?></h5>
                                            </div>    
                                           
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stats">
                                    <div class="p-3 mini-stats-content">
                                        <div class="mb-4">
                                           
                                        </div>
                                    </div>
                                    <div class="mx-3">
                                        <div class="card mb-0 border p-3 mini-stats-desc">
                                        <h6 class="text-center">Completed Activity</h6>
                                            <h5 class="text-center"><?php echo $previous_month_lead_count; ?></h5>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                            <div class="card mini-stats">
                                    <div class="p-3 mini-stats-content">
                                        <div class="mb-4">
                                           
                                        </div>
                                    </div>
                                    <div class="mx-3">
                                        <div class="card mb-0 border p-3 mini-stats-desc">
                                        <h6 class="text-center">Deal Won</h6>
                                            <h5 class="text-center"><?php echo $dealWonCount; ?></h5>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                     
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <h4 class="card-title">Activity List</h4>
                    </div>

                    <a href="<?php echo base_url('ActivityController/create'); ?>" class="btn btn-primary mb-3">Create New Activity</a>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>Activity ID</th>
            <th>Type of Activity</th>
            <th>Project</th>
            <th>Assigned To</th>
            <th>Priority</th>
            <th>Status</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Description</th>
            <th>Links</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $counter = 1; // Initialize the counter variable
        foreach ($activities as $activity) { ?>
            <tr>
                <td><?php echo $counter; ?></td>
                <td><?php echo $activity->TypeOfActivity; ?></td>
                <td><?php echo $activity->Project; ?></td>
                <td><?php echo $activity->AssignedTo; ?></td>
                <td><?php echo $activity->Priority; ?></td>
                <td><?php echo $activity->Status; ?></td>
                <td><?php echo date('d-m-Y', strtotime($activity->StartDate)); ?></td>
<td><?php echo date('d-m-Y', strtotime($activity->EndDate)); ?></td>
<td><?php echo $activity->Description; ?></td>
<td><?php echo $activity->Links; ?></td>
 <!-- Display Links -->
                <td>
                    <a href="<?php echo base_url('ActivityController/edit/' . $activity->ActivityID); ?>" class="btn btn-primary waves-effect waves-light">Edit</a>
                    <a id="sa-warning" href="<?php echo base_url('ActivityController/delete/' . $activity->ActivityID); ?>" class="btn btn-danger waves-effect waves-light">Delete</a>
                    <a href="<?php echo base_url('ActivityController/email/' . $activity->ActivityID); ?>"><button  class="btn btn-purple waves-effect waves-light"> <span>Send</span> <i class="fab fa-telegram-plane ms-2"></i> </button>
                   </a>
                </td>
            </tr>
        <?php
            $counter++; // Increment the counter variable after each iteration
        } ?>
    </tbody>
</table>
  
            </div>
        </div>
    </div>
    <!-- end col -->
    <!-- end row -->
    <script>
        $(document).ready(function () {
            // Call the DataTables construction function on the table with the ID "datatable-buttons"
            $('#datatable-buttons').DataTable();
        });
    </script>