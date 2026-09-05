<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigiBrandz IT Solutions | Build Digital Empires</title>
    
    <!-- Google Fonts: Poppins & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
            <span>DigiBrandz</span><span class="text-brand-pink" style="font-size: 32px; line-height: 0;">.</span>
        </a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'index.php' || $currentPage == '') ? 'active' : ''; ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'services.php' || $currentPage == 'service-detail.php') ? 'active' : ''; ?>" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'case-studies.php' || $currentPage == 'case-study-detail.php') ? 'active' : ''; ?>" href="case-studies.php">Case Studies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'career.php' || $currentPage == 'job-detail.php') ? 'active' : ''; ?>" href="career.php">Career</a>
                </li>
            </ul>
            <div class="d-flex align-items-center gap-3">
                <a href="contact.php" class="btn btn-gradient btn-sm px-4">
                    <span>Get Started</span> <i class="fas fa-arrow-right fs-6"></i>
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Spacer for fixed navbar -->
<div style="height: 85px;"></div>