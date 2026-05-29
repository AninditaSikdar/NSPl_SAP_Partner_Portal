<!DOCTYPE php>
<php lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard - SAP Partner Portal</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>

<header class="portal-header">
  <nav class="navbar navbar-expand-xl portal-navbar" aria-label="Partner portal navigation">
    <div class="container portal-container">
      
      <button class="navbar-toggler portal-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#portalNavbar" aria-controls="portalNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <div class="collapse navbar-collapse portal-menu" id="portalNavbar">
        <div class="portal-top-row">
        <a class="portal-brand" href="index.php">
            <img src="images/logo.png" alt="NSPL logo" class="portal-logo">
            <span>Partner Portal</span>
        </a>

          <form class="portal-search" role="search">
            <span class="search-icon" aria-hidden="true">&#128269;</span>
            <input type="search" placeholder="Search all Partner Central data and resources" aria-label="Search all Partner Central data and resources">
          </form>

          <div class="portal-actions">
            <a href="#" class="profile-a">Support</a>
            <a href="#" class="profile-a">My company</a>
            <a href="#"  class="profile-a">My tasks <span class="task-badge">9</span></a>
            <div class="dropdown">
                <a class="profile-a dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    My Profile
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
          </div>
        </div>

        <ul class="navbar-nav portal-links">
          <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="lead-generation.php">Lead Generation</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Opportunities </a></li>
          <li class="nav-item"><a class="nav-link" href="#">Task</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Invoice</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Programs</a></li>
          <li class="nav-item"><a class="nav-link" href="resources.php">Resources </a></li>
          <li class="nav-item"><a class="nav-link" href="#">Events</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Newsletter</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Reports</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>