<!--header-->
<?php
    include_once('common/header.php');
?>

<!--page-title-->
<main class="dashboard-page">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="dashboard-title m-0">Partner Resources</h1>
    </div>
  </div>
</main>

<!--resource-list-->
<div class="container">
  <div class="resource-list">
    <section class="dashboard-panel">
        <div class="dashboard-panel-header flex-wrap gap-3">
            <div>
                <h6 class="dashboard-panel-title">Marketing & Sales Assets</h6>
                <p class="dashboard-panel-text m-0">Download the latest materials to help you market and sell SAP solutions.</p>
            </div>
            <div class="d-flex">
                <input type="search" class="form-control login-input" placeholder="Search resources...">
                <button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Resource Name</th>
                        <th scope="col">Format</th>
                        <th scope="col">Category</th>
                        <th scope="col">Last Updated</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>SAP S/4HANA Cloud Pitch Deck</td>
                        <td><i class="fa-solid fa-file-powerpoint text-danger me-2"></i> PPTX</td>
                        <td>Sales Material</td>
                        <td>May 20, 2026</td>
                        <td class="text-center">
                            <a href="#" class="view-details"><i class="fa-solid fa-download me-1"></i> Download</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Partner Brand Guidelines 2026</td>
                        <td><i class="fa-solid fa-file-pdf text-danger me-2"></i> PDF</td>
                        <td>Brand Assets</td>
                        <td>Apr 12, 2026</td>
                        <td class="text-center">
                            <a href="#" class="view-details"><i class="fa-solid fa-download me-1"></i> Download</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Q2 Demand Generation Campaign Kit</td>
                        <td><i class="fa-solid fa-file-zipper text-warning me-2"></i> ZIP</td>
                        <td>Marketing</td>
                        <td>May 10, 2026</td>
                        <td class="text-center">
                            <a href="#" class="view-details"><i class="fa-solid fa-download me-1"></i> Download</a>
                        </td>
                    </tr>
                    <tr>
                        <td>SAP Business Technology Platform Overview</td>
                        <td><i class="fa-solid fa-file-video text-primary me-2"></i> MP4</td>
                        <td>Training</td>
                        <td>Mar 28, 2026</td>
                        <td class="text-center">
                            <a href="#" class="view-details"><i class="fa-solid fa-download me-1"></i> Download</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <nav aria-label="Resource pagination">
            <ul class="pagination justify-content-end pb-4 px-4 mb-0">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </section>
  </div>
</div>

<!--footer-->
<?php
    include_once('common/footer.php');
?>