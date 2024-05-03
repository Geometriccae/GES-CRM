<?php 	$this->load->view('user_includes/header',$page_data);   ?><!-- services_list.php -->

















<div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Dashboard</h6>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>#">GES</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">IT Services </li>
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
    <h4 class="card-title">IT Services Table</h4>
    </div>
                      
    
    <a href="<?php echo base_url('Deal_it_service/user_create'); ?>" class="btn btn-primary mb-3">Add New Service</a>


    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
            <th>ID</th>
            <th>Deal Owner</th>
            <th>Contact Name</th>
            <th>Project Category</th>
            <th>Services Required</th>
            <th>Company Name</th>
            <th>Type of Business</th>
            <th>Next Step</th>
            <th>Contact Number</th>
            <th>Project Value</th>
            <th>Closing Date</th>
            <th>Stage</th>
            <th>Conversion Rate</th>
            <th>Campaign Source</th>
            <th>Actions</th>
        </tr>
            </thead>

            <tbody>
            <?php foreach ($services as $service): ?>
        <tr>
            <td><?= $service->IT_services_id ?></td>
            <td><?= $service->Deal_Owner ?></td>
            <td><?= $service->Contact_Name ?></td>
            <td><?= $service->Project_Category ?></td>
            <td><?= $service->Services_Required ?></td>
            <td><?= $service->Company_Name ?></td>
            <td><?= $service->Type_Of_Business ?></td>
            <td><?= $service->Next_Step ?></td>
            <td><?= $service->Contact_Number ?></td>
            <td><?= $service->Project_Value ?></td>
            <td><?= date('d-m-Y', strtotime($service->Closing_Date)); ?></td>
            <td><?= $service->Stage ?></td>
            <td><?= $service->Conversion_Rate ?></td>
            <td><?= $service->Campaign_Source ?></td>
            <td>
                <a href="<?= site_url('deal_it_service/user_edit/' . $service->IT_services_id) ?> " class="btn btn-primary btn-sm">Edit</a>
                <a href="<?= site_url('deal_it_service/user_delete/' . $service->IT_services_id) ?>"  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this lead?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
</tbody>
                                        </table>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        <!-- end row -->
                        <script>
    $(document).ready(function () {
        // Call the DataTables construction function on the table with the ID "myTable"
        $('#myTable').DataTable();
    });
</script>
<!-- services_list.php -->




<?php 	$this->load->view('user_includes/footer',$page_data);   ?>