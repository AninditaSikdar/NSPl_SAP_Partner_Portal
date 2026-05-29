  
<!--header-->
<?php
    include_once('common/header.php');
?>

<!--lead-list-->
<main class="dashboard-page">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="dashboard-title m-0">Lead Generation</h1>
        <a href="#" class="registration m-0" style="text-decoration: none;">Create New Lead</a>
    </div>
  </div>
</main>

<!--table-list-->
<div class="container">
  <div class="lead-list">
    <section class="dashboard-panel">
        <div class="dashboard-panel-header flex-wrap gap-3">
            <div>
                <h6 class="dashboard-panel-title">My Leads</h6>
                <p class="dashboard-panel-text m-0">Manage and track your generated leads effectively.</p>
            </div>
            <div class="d-flex">
                <input type="search" class="form-control login-input" placeholder="Search leads...">
                <button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Lead ID</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Company</th>
                        <th scope="col">Status</th>
                        <th scope="col">Date Created</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>#LD-1001</strong></td>
                        <td>John Smith</td>
                        <td>Tech Solutions Inc.</td>
                        <td><span class="badge bg-success rounded-pill px-3 py-2">Qualified</span></td>
                        <td>Oct 15, 2026</td>
                    <td class="text-center">
                        <a href="#" class="view-details">View Details</a>
                    </td>
                </tr>
                <tr>
                    <td><strong>#LD-1002</strong></td>
                    <td>Sarah Johnson</td>
                    <td>Global Retail LLC</td>
                    <td><span class="badge bg-warning text-dark rounded-pill px-3 py-2">Contacted</span></td>
                    <td>Oct 14, 2026</td>
                    <td class="text-center">
                        <a href="#" class="view-details">View Details</a>
                    </td>
                </tr>
                <tr>
                    <td><strong>#LD-1003</strong></td>
                    <td>Michael Brown</td>
                    <td>Finance Corp</td>
                    <td><span class="badge bg-secondary rounded-pill px-3 py-2">New</span></td>
                    <td>Oct 12, 2026</td>
                    <td class="text-center">
                        <a href="#" class="view-details">View Details</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <!-- Pagination -->
    <nav aria-label="Lead pagination">
        <ul class="pagination justify-content-end pb-4 px-4 mb-0">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</section>
  </div>
</div>



<?php
    include_once('common/footer.php');
?>