

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
    <h4 class="card-title">IT Trainings List Table</h4>
    </div>
                      
    
    <a href="<?php echo base_url('IT_Trainings/create'); ?>" class="btn btn-primary mb-3">Add New IT Trainings List</a>

  
    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
            <th>ID</th>
            <th>Deal Owner</th>
            <th>Contact Name</th>
            <th>Customer Type</th>
            <th>Training Category</th>
            <th>Courses Required</th>
            <th>Number of Participants</th>
            <th>Concessions</th>
            <th>Company Name</th>
            <th>Type of Business</th>
            <th>Next Step</th>
            <th>Contact Name</th>
            <th>Course Value</th>
            <th>Closing Date</th>
            <th>Stage</th>
            <th>Conversion Rate</th>
            <th>Campaign Source</th>
            <th>Actions</th>
        </tr>
            </thead>

            <tbody>
         
                <?php foreach ($trainings as $key => $training): ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $training['DealOwner'] ?></td>
                <td><?= $training['Contact_Name'] ?></td>
                <td><?= $training['CustomerType'] ?></td>
                <td><?= $training['TrainingCategory'] ?></td>
                <td><?= $training['CoursesRequired'] ?></td>
                <td><?= $training['NumberOfParticipants'] ?></td>
                <td><?= $training['Concessions'] ?></td>
                <td><?= $training['CompanyName'] ?></td>
                <td><?= $training['TypeOfBusiness'] ?></td>
                <td><?= $training['NextStep'] ?></td>
                <td><?= $training['ContactName'] ?></td>
                <td><?= $training['CourseValue'] ?></td>
                <td><?= date('d-m-Y', strtotime($training['ClosingDate'])); ?></td>
                 <td><?= $training['Stage'] ?></td>
                <td><?= $training['ConversionRate'] ?></td>
                <td><?= $training['CampaignSource'] ?></td>
                <td>
                    
            <a href="<?= base_url('IT_Trainings/edit/'.$training['id']) ?>" class="btn btn-primary btn-sm">Edit</a>
            <a href="<?= base_url('IT_Trainings/delete/'.$training['id']) ?>"  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
       
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













