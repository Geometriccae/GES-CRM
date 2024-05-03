<?php 	$this->load->view('includes/header',$page_data);   ?>



<div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Dashboard</h6>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>#">GES</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Lead</li>
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




   <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

<style>
    th{
       color: #655be6;
    }
   
</style>
<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <div class="text-center">
    <h4 class="card-title">Activity List</h4>
    </div>
                                    <?php if ($this->session->flashdata('error')) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php } ?>
   
    
    <a  href="<?php echo base_url('ActivityScheduler/create'); ?>" class="btn btn-primary mb-3 ">Activity List</a>
  
  
    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
            <th>ID</th>
            <th>Create Date</th>
            <th>Type of Activity</th>
            <th>Description</th>
            <th>Start Date with Time</th>
            <th>End Date with Time</th>
            <th>Project</th>
            <th>Assigned To</th>
            <th>Status</th>
            <th>Priority</th>
            <th>Reminder</th>
            <th>Repeat</th>
            <th>Action</th>
        </tr>
            </thead>

            <tbody>
            <?php foreach ($activities as $activity): ?>
            <tr>
                <td><?php echo $activity->id; ?></td>
                <td><?php echo $activity->CreateDate; ?></td>
                <td><?php echo $activity->TypeOfActivity; ?></td>
                <td><?php echo $activity->Description; ?></td>
                <td><?php echo $activity->StartDateWithTime; ?></td>
                <td><?php echo $activity->EndDateWithTime; ?></td>
                <td><?php echo $activity->Project; ?></td>
                <td><?php echo $activity->AssignedTo; ?></td>
                <td><?php echo $activity->Status; ?></td>
                <td><?php echo $activity->Priority; ?></td>
                <td><?php echo $activity->Reminder; ?></td>
                <td><?php echo $activity->Repeat; ?></td>
                <td>
                    <a href="<?php echo site_url('ActivityScheduler/edit/'.$activity->id); ?> "  class="btn btn-primary btn-sm">Edit</a>
                
                    <a href="<?php echo site_url('ActivityScheduler/delete/'.$activity->id); ?>" onclick="return confirm('Are you sure you want to delete this activity?')"  class="btn btn-danger btn-sm">Delete</a>
                    <a href="<?php echo site_url('ActivityScheduler/notification/'.$activity->id); ?> "class="btn btn-info btn-sm send-notification" data-activity-id="<?php echo $activity->id; ?>">Send Notification</a>

                </td>
            </tr>
        <?php endforeach; ?>
</tbody>
                                        </table>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        







<?php 	$this->load->view('includes/footer',$page_data);   ?>