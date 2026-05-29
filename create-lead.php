  
<!--header-->
<?php
    include_once('common/header.php');
?>

<main class="dashboard-page">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="dashboard-title m-0">Create New Lead</h1>
        <a href="lead-generation.php" class="registration m-0" style="text-decoration: none;">
            <i class="fa-solid fa-arrow-left me-2"></i> Back to Leads
        </a>
    </div>
  </div>
</main>

<!--form-->
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-7">
            <div class="registration-card dashboard-panel">
                <form action="lead-generation.php" method="POST" class="partner-form">
                    <!-- Contact Information -->
                    <div class="step-section">
                        <div class="section-heading border-bottom">
                            <h4><i class="fa-regular fa-id-badge me-2"></i>Contact Information</h4>
                        </div>
                        
                        <div class="row g-4">
                            <div class="col-md-6 input-form">
                                <label for="firstName" class="form-label"><b class="text-danger">*</b> First Name</label>
                                <input type="text" class="form-control login-input" id="firstName" name="firstName" placeholder="e.g. John" required>
                            </div>
                            <div class="col-md-6 input-form">
                                <label for="lastName" class="form-label"><b class="text-danger">*</b> Last Name</label>
                                <input type="text" class="form-control login-input" id="lastName" name="lastName" placeholder="e.g. Smith" required>
                            </div>
                            <div class="col-md-6 input-form">
                                <label for="emailAddress" class="form-label"><b class="text-danger">*</b> Email Address</label>
                                <input type="email" class="form-control login-input" id="emailAddress" name="emailAddress" placeholder="john@example.com" required>
                            </div>
                            <div class="col-md-6 input-form">
                                <label for="phoneNumber" class="form-label"><b class="text-danger">*</b> Phone Number</label>
                                <input type="tel" class="form-control login-input" id="phoneNumber" name="phoneNumber" placeholder="+1 234 567 8900" required>
                            </div>
                        </div>
                    </div>

                    <!-- Company Details -->
                    <div class="step-section">
                        <div class="section-heading border-bottom">
                            <h4><i class="fa-regular fa-building me-2"></i>Company Details</h4>
                        </div>
                        
                        <div class="row g-4">
                            <div class="col-md-6 input-form">
                                <label for="companyName" class="form-label"><b class="text-danger">*</b> Company Name</label>
                                <input type="text" class="form-control login-input" id="companyName" name="companyName" placeholder="Tech Solutions Inc." required>
                            </div>
                            <div class="col-md-6 input-form">
                                <label for="jobTitle" class="form-label">Job Title</label>
                                <input type="text" class="form-control login-input" id="jobTitle" name="jobTitle" placeholder="e.g. IT Director">
                            </div>
                            <div class="col-md-12 input-form">
                                <label for="industry" class="form-label">Industry Sector</label>
                                <select class="form-select login-input text-muted" id="industry" name="industry">
                                    <option value="" selected disabled>Select Industry...</option>
                                    <option value="IT Services">IT Services</option>
                                    <option value="Finance">Finance & Banking</option>
                                    <option value="Manufacturing">Manufacturing</option>
                                    <option value="Retail">Retail & E-commerce</option>
                                    <option value="Healthcare">Healthcare</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Lead Specifics -->
                    <div class="step-section">
                        <div class="section-heading border-bottom">
                            <h4><i class="fa-solid fa-briefcase me-2"></i>Lead Information</h4>
                        </div>
                        
                        <div class="row g-4">
                            <div class="col-md-6 input-form">
                                <label for="leadStatus" class="form-label"><b class="text-danger">*</b> Lead Status</label>
                                <select class="form-select login-input" id="leadStatus" name="leadStatus" required>
                                    <option value="New" selected>New</option>
                                    <option value="Contacted">Contacted</option>
                                    <option value="Qualified">Qualified</option>
                                    <option value="Proposal">Proposal Sent</option>
                                </select>
                            </div>
                            <div class="col-md-6 input-form">
                                <label for="leadSource" class="form-label">Lead Source</label>
                                <select class="form-select login-input text-muted" id="leadSource" name="leadSource">
                                    <option value="" selected disabled>Select Source...</option>
                                    <option value="Website">Website</option>
                                    <option value="Referral">Referral</option>
                                    <option value="Event">Event / Trade Show</option>
                                    <option value="Cold Call">Cold Call</option>
                                    <option value="Partner">Partner</option>
                                </select>
                            </div>
                            <div class="col-md-12 input-form">
                                <label for="notes" class="form-label">Additional Notes</label>
                                <textarea class="form-control login-input" id="notes" name="notes" rows="4" placeholder="Any special requirements, observations, or context regarding this lead..."></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions d-flex justify-content-end gap-3 pt-4 border-top">
                        <a href="lead-generation.php" class="btn btn-light px-4 py-2 fw-bold" style="border-radius: 50px; color: #617286; background: #e9ecef;">Cancel</a>
                        <button type="submit" class="signin px-5 border-0 m-0 shadow-sm">Save Lead</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!--footer-->
<?php
    include_once('common/footer.php');
?>