<?php $this->load->view('includes/header', $page_data); ?>

<div class="page-title-box">
    <!-- ... Header content ... -->
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit IT Service</h4>
                <p><a href="<?= base_url('deal_it_service') ?>">Back to List</a></p>
                <form method="post" action="<?= base_url('deal_it_service/update') ?>" class="row g-3">
                    <input type="hidden" name="Deal_Owner" id="Deal_Owner" value="<?= $this->session->userdata('admin_full_name'); ?>">
                    <input type="hidden" name="it_services_id" value="<?= $service->it_services_id ?>">

                    <!-- Contact Name -->
                    <div class="col-md-6">
                        <label for="Contact_Name" class="form-label">Contact Name:</label>
                        <select name="Contact_Name" id="Contact_Name" class="form-select">
                            <?php foreach ($contact_names as $contact_name): ?>
                                <option value="<?= $contact_name->name ?>" data-contact="<?= $contact_name->contact_no ?>" data-company="<?= $contact_name->company ?>" <?= ($service->Contact_Name == $contact_name->name) ? 'selected' : '' ?>>
                                    <?= $contact_name->name ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Project Category -->
                    <div class="col-md-6">
                        <label for="Project_Category" class="form-label">Project Category:</label>
                        <select name="Project_Category" id="Project_Category" class="form-select">
                            <?php foreach ($categories as $category): ?>
                                <option value="<?= $category->category ?>" <?= ($service->Project_Category == $category->category) ? 'selected' : '' ?>>
                                    <?= $category->category ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Services Required -->
                    <div class="col-md-6">
                        <label for="Services_Required" class="form-label">Services Required:</label>
                        <select name="Services_Required" id="Services_Required" class="form-select">
                            <?php foreach ($required_list as $required): ?>
                                <option value="<?= $required->Required ?>" <?= ($service->Services_Required == $required->Required) ? 'selected' : '' ?>>
                                    <?= $required->Required ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Company Name -->
                    <div class="col-md-6">
                        <label for="Company_Name" class="form-label">Company Name:</label>
                        <input type="text" name="Company_Name" id="Company_Name" class="form-control" value="<?= $service->Company_Name ?>">
                    </div>

                    <!-- Type of Business -->
                    <div class="col-md-6">
                        <label for="Type_Of_Business" class="form-label">Type of Business:</label>
                        <select name="Type_Of_Business" id="Type_Of_Business" class="form-select">
                            <option value="New Business" <?= ($service->Type_Of_Business == 'New Business') ? 'selected' : '' ?>>New Business</option>
                            <option value="Existing Business" <?= ($service->Type_Of_Business == 'Existing Business') ? 'selected' : '' ?>>Existing Business</option>
                        </select>
                    </div>

                    <!-- Next Step -->
                    <div class="col-md-6">
                        <label for="Next_Step" class="form-label">Next Step:</label>
                        <select name="Next_Step" id="Next_Step" class="form-select">
                            <?php foreach ($next_step_options as $next_step_option): ?>
                                <option value="<?= $next_step_option->next_step ?>" <?= ($service->Next_Step == $next_step_option->next_step) ? 'selected' : '' ?>>
                                    <?= $next_step_option->next_step ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Contact Number -->
                    <div class="col-md-6">
                        <label for="Contact_Number" class="form-label">Contact Number:</label>
                        <input type="text" name="Contact_Number" id="Contact_Number" class="form-control" value="<?= $service->Contact_Number ?>">
                    </div>

                    <!-- Project Value -->
                    <div class="col-md-6">
                        <label for="Project_Value" class="form-label">Project Value:</label>
                        <select name="Project_Value" id="Project_Value" class="form-select">
                            <?php foreach ($project_values as $project_value): ?>
                                <option value="<?= $project_value->amount ?>" <?= ($service->Project_Value == $project_value->amount) ? 'selected' : '' ?>>
                                    <?= $project_value->amount ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Closing Date -->
                    <div class="col-md-6">
                        <label for="Closing_Date" class="form-label">Closing Date:</label>
                        <input type="date" name="Closing_Date" id="Closing_Date" class="form-control" value="<?= $service->Closing_Date ?>">
                    </div>

                    <!-- Stage -->
                    <div class="col-md-6">
                        <label for="Stage" class="form-label">Stage:</label>
                        <select name="Stage" id="Stage" class="form-select">
                            <?php foreach ($stages as $stage): ?>
                                <option value="<?= $stage->stage ?>" <?= ($service->Stage == $stage->stage) ? 'selected' : '' ?>>
                                    <?= $stage->stage ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Conversion Rate -->
                    <div class="col-md-6">
                        <label for="Conversion_Rate" class="form-label">Conversion Rate:</label>
                        <select name="Conversion_Rate" id="Conversion_Rate" class="form-select">
                            <?php foreach ($conversion_rates as $conversion_rate): ?>
                                <option value="<?= $conversion_rate->rate ?>" <?= ($service->Conversion_Rate == $conversion_rate->rate) ? 'selected' : '' ?>>
                                    <?= $conversion_rate->rate ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Campaign Source -->
                    <div class="col-md-6">
                        <label for="Campaign_Source" class="form-label">Campaign Source:</label>
                        <select name="Campaign_Source" id="Campaign_Source" class="form-select">
                            <?php foreach ($campaign_sources as $campaign_source): ?>
                                <option value="<?= $campaign_source->source_name ?>" <?= ($service->Campaign_Source == $campaign_source->source_name) ? 'selected' : '' ?>>
                                    <?= $campaign_source->source_name ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <input type="submit" class="btn btn-success" name="submit" value="Update">
            
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
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer', $page_data); ?>
