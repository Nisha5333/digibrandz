<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigiBrandz IT Solutions</title>
    
    <!-- Google Fonts: Roboto & Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            /* Original Brand Colors */
            --primary-indigo: #6366F1;
            --primary-pink: #EC4899;
            --primary-teal: #14B8A6;
            --primary-amber: #F59E0B;
            
            /* Original Pastel Backgrounds */
            --bg-lavender: #EEF2FF;
            --bg-peach: #FCE7F3;
            --bg-mint: #ECFDF5;
            
            /* Original Radius & Shadows */
            --radius-md: 16px;
            --radius-lg: 24px;
            --shadow-soft: 0 10px 30px rgba(99, 102, 241, 0.08);
            --shadow-hover: 0 15px 35px rgba(99, 102, 241, 0.15);
        }

        body {
            font-family: 'Roboto', sans-serif;
            color: #334155;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            color: #0F172A;
        }

        .text-gradient {
            background: linear-gradient(135deg, var(--primary-indigo), var(--primary-pink));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .bg-lavender { background-color: var(--bg-lavender); }
        .bg-peach { background-color: var(--bg-peach); }
        .bg-mint { background-color: var(--bg-mint); }

        /* Original Navbar */
        .navbar-custom {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            font-size: 1.5rem;
            color: var(--primary-indigo) !important;
        }

        .nav-link {
            font-weight: 500;
            color: #475569 !important;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary-pink) !important;
        }

        /* Original Buttons */
        .btn-gradient {
            background: linear-gradient(135deg, var(--primary-indigo), var(--primary-pink));
            color: white;
            border: none;
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 500;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-gradient:hover {
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(236, 72, 153, 0.3);
        }

        .btn-outline-custom {
            border: 2px solid var(--primary-indigo);
            color: var(--primary-indigo);
            border-radius: 50px;
            padding: 10px 28px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-outline-custom:hover {
            background: var(--primary-indigo);
            color: white;
        }

        /* Original Cards */
        .aesthetic-card {
            background: white;
            border-radius: var(--radius-lg);
            border: none;
            box-shadow: var(--shadow-soft);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .aesthetic-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .icon-box {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
        }

        .aesthetic-card:hover .icon-box {
            transform: scale(1.1);
        }

        /* Original Floating Circles */
        .floating-circle {
            position: absolute;
            border-radius: 50%;
            z-index: -1;
            opacity: 0.5;
            filter: blur(20px);
        }

        .circle-1 {
            width: 100px;
            height: 100px;
            background: var(--bg-peach);
            top: -20px;
            right: -20px;
        }

        .circle-2 {
            width: 80px;
            height: 80px;
            background: var(--bg-mint);
            bottom: -10px;
            left: -10px;
        }

        .section-padding {
            padding: 100px 0;
        }

        /* --- NEW: CSS ILLUSTRATION CLASSES (Premium/Minimal) --- */
        
        .css-illustration {
            background: white;
            border-radius: var(--radius-md);
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
            border: 1px solid rgba(0,0,0,0.05);
            padding: 1.5rem;
        }
        
        /* Node Architecture (for Hero & About) */
        .node-container {
            position: relative;
            padding: 1rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            align-items: flex-start;
        }
        
        .node-item {
            background: white;
            border: 1px solid rgba(0,0,0,0.05);
            padding: 0.8rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.02);
            position: relative;
            z-index: 2;
            color: var(--primary-indigo);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .node-line {
            position: absolute;
            left: 2.5rem;
            top: 1.5rem;
            bottom: 1.5rem;
            width: 2px;
            background: rgba(99, 102, 241, 0.2);
            z-index: 1;
        }
        
        .node-highlight {
            background: linear-gradient(135deg, var(--primary-indigo), var(--primary-pink));
            color: white;
            border: none;
        }
        
        /* Mini Browser/UI Mockups (for Services/Cards) */
        .browser-mockup-mini {
            background: white;
            border: 1px solid rgba(0,0,0,0.05);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.04);
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .browser-header-mini {
            background: #F8FAFC;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            padding: 6px 10px;
            display: flex;
            align-items: center;
            gap: 4px;
        }
        
        .browser-dot-mini {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #CBD5E1;
        }
        
        .ui-placeholder-line {
            height: 4px;
            border-radius: 2px;
            background: #F1F5F9;
        }
        
        .ui-placeholder-block {
            background: #F1F5F9;
            border-radius: 4px;
        }
        
        /* Metric/Graph Elements */
        .metric-bar-mini {
            height: 4px;
            background: #F1F5F9;
            border-radius: 2px;
            overflow: hidden;
            margin-top: 6px;
        }
        
        .metric-fill-mini {
            height: 100%;
        }

        /* Typographic Monogram (for Team) */
        .typographic-monogram {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 120px;
            height: 120px;
            background: white;
            color: var(--primary-indigo);
            font-size: 3rem;
            font-weight: 800;
            border-radius: 50%;
            font-family: 'Poppins', sans-serif;
        }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top py-3">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            DigiBrandz<span style="color: var(--primary-pink);">.</span>
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown">
                        Services
                    </a>
                    <ul class="dropdown-menu border-0 shadow-sm" style="border-radius: 12px;">
                        <li><a class="dropdown-item py-2" href="services.php">All Services</a></li>
                        <li><a class="dropdown-item py-2" href="services.php">Digital Marketing</a></li>
                        <li><a class="dropdown-item py-2" href="services.php">Web Development</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="case-studies.php">Case Studies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="career.php">Career</a>
                </li>
            </ul>
            <a href="contact.php" class="btn btn-gradient">Get Started</a>
        </div>
    </div>
</nav>

<!-- Spacer for fixed navbar -->
<div style="height: 80px;"></div>