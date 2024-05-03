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
                <div class="row">
                <div class="float-left col-md-10">
                    <h2>Activities Assigned to <?php echo $this->session->userdata('admin_full_name'); ?></h2>
                </div>
                <div class="float-right col-md-2">
                <a href="<?php echo base_url('User_task/task_table'); ?>" class="btn btn-primary mb-3">Task History</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        
    <?php foreach ($activities as $activity): ?>
    <div class="col-md-12">
        
        <div class="card mb-4 ">
            <div class="card-body">
                <?php if (!empty($activity->TypeOfActivity)): ?>
                    <h5><p class="card-text">Type of Activity: <?php echo $activity->TypeOfActivity; ?></p></h5>
                <?php endif; ?>
                <?php if (!empty($activity->Project)): ?>
                    <p class="card-text">Project: <?php echo $activity->Project; ?></p>
                <?php endif; ?>
                <?php if (!empty($activity->Priority)): ?>
                    <p class="card-text">Priority: <?php echo $activity->Priority; ?></p>
                <?php endif; ?>
                <?php if (!empty($activity->Status)): ?>
                    <p class="card-text">Status: <?php echo $activity->Status; ?></p>
                <?php endif; ?>
                <?php if (!empty($activity->StartDate) && $activity->StartDate != '0000-00-00'): ?>
                    <p class="card-text">Start Date: <?php echo $activity->StartDate; ?></p>
                <?php endif; ?>
                <?php if (!empty($activity->EndDate) && $activity->EndDate != '0000-00-00'): ?>
                    <p class="card-text">End Date: <?php echo $activity->EndDate; ?></p>
                <?php endif; ?>
                <?php if (!empty($activity->Description)): ?>
                    <p class="card-text">Description: <?php echo $activity->Description; ?></p>
                <?php endif; ?>
                <?php if (!empty($activity->Links)): ?>
                    <p class="card-text">Links: <?php echo $activity->Links; ?></p>
                   
                <?php endif; ?>
                <a href="<?php echo base_url('ActivityController/user_edit/' . $activity->ActivityID); ?>" class="btn btn-primary btn-sm">Edit</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>
