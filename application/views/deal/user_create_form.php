<?php 	$this->load->view('user_includes/header',$page_data);   ?><!-- create_form.php -->
<div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">Ges</h6>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="#">Ges</a></li>
                        <li class="breadcrumb-item"><a href="#">Lead</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Lead</li>
                    </ol>
                </div>
                <div class="col-md-4">
                    <div class="float-end d-none d-md-block">
                        <div class="dropdown">
                            <button class="btn btn-primary btn-rounded dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ti-settings me-1"></i> Settings <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                    <h4 class="card-title">Create New IT Service</h4>
                                        
                                    <p><a href="<?= site_url('deal_it_service') ?>">Back to List</a></p>
                                    <form method="post" action="<?= site_url('deal_it_service/user_create') ?>" class="row g-3">
                                    <input type="hidden" name="Deal_Owner" id="Deal_Owner" value="<?php echo $this->session->userdata('admin_full_name'); ?>">
    <div class="col-md-6">
        <label for="Business_Category" class="form-label">Contact Name:</label>
        <select name="Contact_Name" id="Contact_Name" class="form-select">
            <option value="">Select Contact Name</option>
            <?php foreach ($contact_names as $contact_name): ?>
                <option value="<?= $contact_name->name ?>" data-contact="<?= $contact_name->contact_no ?>" data-company="<?= $contact_name->company ?>"><?= $contact_name->name ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-md-6">
    <label for="Project_Category" class="form-label">Project Category:</label>
    <select name="Project_Category" id="Project_Category" class="form-select">
        <option value="">Select a category</option>
        <?php foreach ($categories as $category): ?>
            <option value="<?= $category->category ?>"><?= $category->category ?></option>
        <?php endforeach; ?>
    </select>
</div>

<div class="col-md-6">
    <label for="Services_Required" class="form-label">Services Required:</label>
    <select name="Services_Required" id="Services_Required" class="form-select">
        <option value="">Select services required</option>
        <?php foreach ($required_list as $required): ?>
            <option value="<?= $required->Required ?>"><?= $required->Required ?></option>
        <?php endforeach; ?>
    </select>
</div>

    <div class="col-md-6">
        <label for="Company_Name" class="form-label">Company Name:</label>
        <input type="text" name="Company_Name" id="Company_Name" class="form-control">
    </div>
    <div class="col-md-6">
    <label for="Type_Of_Business" class="form-label">Type of Business:</label>
    <select name="Type_Of_Business" id="Type_Of_Business" class="form-select">
        <option value="">Select type of business</option>
        <option value="New Business">New Business</option>
        <option value="Existing Business">Existing Business</option>
    </select>
</div>

<div class="col-md-6">
    <label for="Next_Step" class="form-label">Next Step:</label>
    <select name="Next_Step" id="Next_Step" class="form-select">
        <option value="">Select a next step</option>
        <?php foreach ($next_step_options as $next_step_option): ?>
            <option value="<?= $next_step_option->next_step ?>"><?= $next_step_option->next_step ?></option>
        <?php endforeach; ?>
    </select>
</div>

    <div class="col-md-6">
        <label for="Contact_Number" class="form-label">Contact Number:</label>
        <input type="text" name="Contact_Number" id="Contact_Number" class="form-control">
    </div>
    <div class="col-md-6">
    <label for="Project_Value" class="form-label">Project Value:</label>
    <select name="Project_Value" id="Project_Value" class="form-select">
        <option value="">Select a project value</option>
        <?php foreach ($project_values as $project_value): ?>
            <option value="<?= $project_value->amount ?>"><?= $project_value->amount ?></option>
        <?php endforeach; ?>
    </select>
</div>

    <div class="col-md-6">
        <label for="Closing_Date" class="form-label">Closing Date:</label>
        <input type="date" name="Closing_Date" id="Closing_Date" class="form-control">
    </div>
    <div class="col-md-6">
        <label for="Stage" class="form-label">Stage:</label>
        <select name="Stage" id="Stage" class="form-select">
            <option value="">Select a stage</option>
            <?php foreach ($stages as $stage): ?>
                <option value="<?= $stage->stage ?>"><?= $stage->stage ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-md-6">
    <label for="Conversion_Rate" class="form-label">Conversion Rate:</label>
    <select name="Conversion_Rate" id="Conversion_Rate" class="form-select">
        <option value="">Select a conversion rate</option>
        <?php foreach ($conversion_rates as $conversion_rate): ?>
            <option value="<?= $conversion_rate->rate ?>"><?= $conversion_rate->rate ?></option>
        <?php endforeach; ?>
    </select>
</div>

<div class="col-md-6">
    <label for="Campaign_Source" class="form-label">Campaign Source:</label>
    <select name="Campaign_Source" id="Campaign_Source" class="form-select">
        <option value="">Select a campaign source</option>
        <?php foreach ($campaign_sources as $campaign_source): ?>
            <option value="<?= $campaign_source->source_name ?>"><?= $campaign_source->source_name ?></option>
        <?php endforeach; ?>
    </select>
</div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
</form>

<script>
    // JavaScript code to handle dynamic population of contact info
    const contactNameSelect = document.getElementById('Contact_Name');
    const contactNumberInput = document.getElementById('Contact_Number');
    const companyNameInput = document.getElementById('Company_Name');

    contactNameSelect.addEventListener('change', function () {
        const selectedOption = contactNameSelect.options[contactNameSelect.selectedIndex];
        const contactNo = selectedOption.getAttribute('data-contact');
        const company = selectedOption.getAttribute('data-company');

        contactNumberInput.value = contactNo;
        companyNameInput.value = company;
    });
</script>
</div>

</div></div></div>

<?php 	$this->load->view('user_includes/footer',$page_data);   ?>