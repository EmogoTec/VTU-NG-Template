<?php
/**
 * Emogo Special Data - Elite Dashboard Template
 * 
 * This file demonstrates the UI/UX layout for the VTU system.
 * NOTE: Backend database queries and sensitive server paths have been stripped 
 * for security and distribution purposes.
 */

// SESSION & SECURITY PLACEHOLDER
if (session_status() === PHP_SESSION_NONE) { 
    session_start(); 
}

// UI Mockup Data
$name = "Client"; 
$bal = 0.00;
$kyc_status = "Unverified";
$greeting = "Good Day";
$news_ticker = "Welcome to your new VTU Dashboard template!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Dashboard | VTU System</title>
    <!-- Stylesheets & Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <style>
        :root { --red: #d32f2f; --dark: #121212; --bg: #f8fafd; }
        body { background: var(--bg); font-family: 'Plus Jakarta Sans', sans-serif; }
        
        /* Sidebar & Layout */
        .sidebar { width: 280px; background: var(--dark); height: 100vh; position: fixed; left: 0; top: 0; padding: 25px; z-index: 2001; color: #fff; }
        .sidebar-brand { color: var(--red); font-weight: 900; font-size: 24px; text-align: center; margin-bottom: 35px; display: block; text-decoration: none; }
        .nav-link-custom { display: flex; align-items: center; padding: 12px 18px; color: #aaa; text-decoration: none; border-radius: 16px; margin-bottom: 5px; font-size: 13px; font-weight: 600; }
        .nav-link-custom:hover { background: rgba(211, 47, 47, 0.1); color: #fff; }
        
        .main-content { margin-left: 280px; padding: 40px; }
        .card-elite { border-radius: 28px; padding: 30px; border: none; box-shadow: 0 15px 35px rgba(0,0,0,0.05); }
        .action-tile { background: #fff; border-radius: 24px; padding: 25px; text-align: center; border: 1px solid #edf2f7; transition: 0.3s; cursor: pointer; height: 100%; }
        .action-tile:hover { border-color: var(--red); transform: translateY(-5px); }
        
        @media (max-width: 991px) { .main-content { margin-left: 0; padding: 20px; } .sidebar { display: none; } }
    </style>
</head>
<body>

<!-- Sidebar Menu -->
<aside class="sidebar" id="sidebar">
    <a href="#" class="sidebar-brand">EMOGO SPECIAL</a>
    <span class="nav-label text-uppercase text-muted small fw-bold mb-3 d-block ps-2">Main Services</span>
    <a href="#" class="nav-link-custom active"><i class="fa fa-house me-3"></i> Dashboard</a>
    <a href="#" class="nav-link-custom"><i class="fa fa-wifi me-3"></i> Buy Data</a>
    <a href="#" class="nav-link-custom"><i class="fa fa-phone me-3"></i> Buy Airtime</a>
</aside>

<main class="main-content">
    <!-- News Ticker -->
    <div class="mb-4 bg-white rounded-pill p-3 border-start border-danger border-4 shadow-sm">
        <marquee class="fw-bold text-dark"><?php echo $news_ticker; ?></marquee>
    </div>

    <h2 class="fw-800 mb-4"><?php echo $greeting; ?>, User</h2>

    <!-- Wallet & Funding Cards -->
    <div class="row g-4 mb-5">
        <div class="col-lg-5">
            <div class="card-elite text-white" style="background: linear-gradient(135deg, #d32f2f 0%, #8e1c1c 100%);">
                <span class="opacity-75">Main Wallet Balance</span>
                <h2 class="fw-bold mt-2">₦<?php echo number_format($bal, 2); ?></h2>
                <button class="btn btn-light rounded-pill mt-3 px-4 fw-bold">Add Funds</button>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card-elite bg-white border">
                <h6 class="fw-bold text-success mb-3">Automated Funding (Bank Accounts)</h6>
                <p class="small text-muted">Integrate your automated bank account API endpoints here to display dynamic account numbers for clients.</p>
            </div>
        </div>
    </div>

    <!-- Service Grid -->
    <h6 class="fw-bold text-uppercase mb-4" style="color:#666;">Service Offering</h6>
    <div class="row g-3">
        <?php 
        $services = ['Data', 'Airtime', 'Electricity', 'Cable TV', 'Exam Pins', 'NIN Services'];
        foreach($services as $s): ?>
        <div class="col-6 col-md-3">
            <div class="action-tile">
                <div class="mb-3 text-danger"><i class="fa fa-circle-nodes fs-3"></i></div>
                <span class="fw-bold small"><?php echo $s; ?></span>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
