<div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Dashboard</h6>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>#">GES</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                                        <h6 class="text-center">Total Leads</h6>
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
                                            <h6 >Current Month Leads</h6>
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
                                        <h6 class="text-center">Previous Month Leads</h6>
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
                     
<style>
    i{
        color: #655be6;
    }
    .float-left{
color: #655be6;
    }
</style>
     
      <div class="row">
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h1 class="mt-0 header-title mb-5">Monthly Earning</h1>
                                        <div id="morris-bar-stacked" class="morris-chart-height morris-charts" data-colors='["#1699dd", "--bs-primary", "#ebeff2"]'></div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Sales Analytics</h4>
            
                                        <div class="row text-center mt-5">
                                            <div class="col-6">
                                                <h5 class="">56241</h5>
                                                <p class="text-muted font-size-14">Marketplace</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="">23651</h5>
                                                <p class="text-muted font-size-14">Total Income</p>
                                            </div>
                                        </div>
            
                                        <div id="morris-donut-example" class="dash-chart morris-charts text-center" data-colors='["#ebeff2", "--bs-primary", "#1699dd"]'></div>
                                    </div>
                                </div>
                
                            </div>
                        </div>
                        <!-- end row -->
        
                       <style>
                       h6{
                       
                       }
                       h5{
                        color: #655be6;
                       }
                       </style>