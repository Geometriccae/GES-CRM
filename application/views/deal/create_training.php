
<div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">Ges</h6>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="#">Ges</a></li>
                        <li class="breadcrumb-item"><a href="#">deal</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add deal</li>
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

                                    <h4 class="card-title">Create New IT Trainings</h4>
                                        
                                    <p><a href="<?php echo base_url('IT_Trainings'); ?> ">Back to List</a></p>
                                    <form method="post" action="<?php echo base_url('IT_Trainings/create'); ?>" class="row g-3">
    <div class="col-md-6">
        <label for="Deal_Owner" class="form-label">Deal Owner:</label>
        <select name="DealOwner" id="Deal_Owner" class="form-select">
            <option value="">Select Deal Owner</option>
            <?php foreach ($full_names as $full_name): ?>
                <option value="<?= $full_name->full_name ?>"><?= $full_name->full_name ?></option>
            <?php endforeach; ?>
        </select>
    </div>
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
    <label class="mb-1">Customer Type:</label>
    <select name="CustomerType" class="form-select">
        <option value="">Select Customer Type</option>
        <?php foreach ($customer_types as $customer_type): ?>
            <option value="<?= $customer_type->CustomerType ?>"><?= $customer_type->CustomerType ?></option>
        <?php endforeach; ?>
    </select>
</div>

<div class="col-md-6">
<label class="mb-1">Training Category:</label>
                <select name="TrainingCategory" class="form-select">
                    <option value="">Select Training Category</option>
                    <?php foreach ($training_categories as $category): ?>
                        <option value="<?= $category->TrainingCategory ?>"><?= $category->TrainingCategory ?></option>
                    <?php endforeach; ?>
                </select>
</div>
<div class="col-md-6">
        <label class="mb-1">Courses Required:</label>
        <!-- Add your Courses Required select input here -->
        <select name="CoursesRequired" class="form-select">
            <option value="">Select Courses Required</option>
            <?php foreach ($courses_required_options as $course_required_option): ?>
                <option value="<?= $course_required_option->course_required ?>"><?= $course_required_option->course_required ?></option>
            <?php endforeach; ?>
        </select>
    </div>
<div class="col-md-6">
<label class="mb-1">Number Of Participants:</label>
                <input type="number" name="NumberOfParticipants" class="form-control">
</div>
<div class="col-md-6">
<label class="mb-1">Concessions:</label>
                <input type="text" name="Concessions" class="form-control">
</div>
    <div class="col-md-6">
        <label for="Company_Name" class="form-label">Company Name:</label>
        <input type="text" name="CompanyName" id="Company_Name" class="form-control">
    </div>
    <div class="col-md-6">
    <label for="Type_Of_Business" class="form-label">Type of Business:</label>
    <select name="TypeOfBusiness" id="Type_Of_Business" class="form-select">
        <option value="">Select type of business</option>
        <option value="New Business">New Business</option>
        <option value="Existing Business">Existing Business</option>
    </select>
</div>

<div class="col-md-6">
    <label for="Next_Step" class="form-label">Next Step:</label>
    <select name="NextStep" id="Next_Step" class="form-select">
        <option value="">Select a next step</option>
        <?php foreach ($next_step_options as $next_step_option): ?>
            <option value="<?= $next_step_option->next_step ?>"><?= $next_step_option->next_step ?></option>
        <?php endforeach; ?>
    </select>
</div>

    <div class="col-md-6">
        <label for="Contact_Number" class="form-label">Contact Number:</label>
        <input type="text" name="ContactName" id="Contact_Number" class="form-control">
    </div>
    <div class="col-md-6">
    <label class="mb-1">Course Value:</label>
                <input type="text" name="CourseValue" class="form-control">
</div>

    <div class="col-md-6">
    <label class="mb-1">Closing Date:</label>
                <input type="date" name="ClosingDate" class="form-control">
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
    <select name="ConversionRate" id="Conversion_Rate" class="form-select">
        <option value="">Select a conversion rate</option>
        <?php foreach ($conversion_rates as $conversion_rate): ?>
            <option value="<?= $conversion_rate->rate ?>"><?= $conversion_rate->rate ?></option>
        <?php endforeach; ?>
    </select>
</div>

<div class="col-md-6">
    <label for="Campaign_Source" class="form-label">Campaign Source:</label>
    <select name="CampaignSource" id="Campaign_Source" class="form-select">
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















          

