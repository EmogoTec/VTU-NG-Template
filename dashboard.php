<?php
/**
 * Emogo Special Data - Elite Dashboard Template
 * 
 * This file demonstrates the UI/UX layout for the VTU system.
 * NOTE: Backend database queries and sensitive server paths have been stripped 
 * for security and public client distribution.
 */

if (session_status() === PHP_SESSION_NONE) { 
    session_start(); 
}

// Template Placeholder Variables
$name = "Client"; 
$bal = 0.00;
$kyc_status = "Unverified";
$greeting = "Good Day";
$news_ticker = "Welcome to your professional VTU dashboard template!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Dashboard | VTU System</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root { --red: #d32f2f; --dark: #121212; --bg: #f8fafd; }
        body { background: var(--bg); font-family: 'Plus Jakarta Sans', sans-serif; color: #333; }
        
        .sidebar { width: 280px; background: var(--dark); height: 100vh; position: fixed; left: 0; top: 0; padding: 25px; z-index: 2001; color: #fff; }
        .sidebar-brand { color: var(--red); font-weight: 900; font-size: 24px; text-align: center; margin-bottom: 35px; display: block; text-decoration: none; }
        .nav-link-custom { display: flex; align-items: center; padding: 12px 18px; color: #aaa; text-decoration: none; border-radius: 16px; margin-bottom: 5px; font-size: 13px; font-weight: 600; }
        .nav-link-custom:hover { background: rgba(211, 47, 47, 0.2); color: #fff; }
        
        .main-content { margin-left: 280px; padding: 40px; min-height: 100vh; }
        .card-elite { border-radius: 28px; padding: 30px; border: none; box-shadow: 0 15px 35px rgba(0,0,0,0.05); }
        .bg-red-gradient { background: linear-gradient(135deg, #d32f2f 0%, #8e1c1c 100%); color: #fff; }
        
        .action-tile { background: #fff; border-radius: 24px; padding: 25px; text-align: center; border: 1px solid #edf2f7; transition: 0.3s; cursor: pointer; height: 100%; }
        .action-tile:hover { border-color: var(--red); transform: translateY(-5px); }
        .action-icon { width: 60px; height: 60px; background: #fff5f5; color: var(--red); border-radius: 18px; display: flex; align-items: center; justify-content: center; margin: 0 auto 12px; font-size: 24px; }
        
        @media (max-width: 991px) { .main-content { margin-left: 0; padding: 20px; } .sidebar { display: none; } }
    </style>
</head>
<body>

<aside class="sidebar">
    <a href="#" class="sidebar-brand">EMOGO SPECIAL</a>
    <span class="text-uppercase text-muted small fw-bold mb-3 d-block ps-2" style="font-size: 10px;">Main Menu</span>
    <a href="#" class="nav-link-custom active"><i class="fa fa-house me-3 text-danger"></i> Dashboard</a>
    <a href="#" class="nav-link-custom"><i class="fa fa-wifi me-3 text-danger"></i> Buy Data</a>
    <a href="#" class="nav-link-custom"><i class="fa fa-phone me-3 text-danger"></i> Buy Airtime</a>
</aside>

<main class="main-content">
    <div class="mb-4 bg-white rounded-pill p-3 border-start border-danger border-4 shadow-sm">
        <marquee class="fw-bold text-dark"><?php echo $news_ticker; ?></marquee>
    </div>

    <div class="mb-5">
        <h2 class="fw-800 text-dark"><?php echo $greeting; ?>, User</h2>
        <p class="text-muted fw-bold"><?php echo date('l, d F Y'); ?></p>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-lg-5">
            <div class="card-elite bg-red-gradient">
                <span class="small fw-bold opacity-75 text-uppercase">Main Wallet</span>
                <h2 class="fw-bold mt-2">₦<?php echo number_format($bal, 2); ?></h2>
                <button class="btn btn-light rounded-pill mt-3 px-4 fw-bold btn-sm shadow-sm" style="width: fit-content;">Add Funds</button>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card-elite bg-white border">
                <span class="small fw-bold text-success text-uppercase mb-2 d-block">Automated Funding Gateway</span>
                <p class="text-muted small">Display virtual bank account numbers (Palmpay / 9PSB) seamlessly with zero-fee integration hooks.</p>
            </div>
        </div>
    </div>

    <h6 class="fw-800 text-uppercase mb-4 text-muted" style="letter-spacing:1px;">Core Services</h6>
    <div class="row g-3">
        <?php 
        $services = [
            ['Buy Data', 'fa-wifi'], ['Buy Airtime', 'fa-phone'], 
            ['Electricity', 'fa-bolt'], ['Cable TV', 'fa-tv'],
            ['Exam Pins', 'fa-graduation-cap'], ['NIN Services', 'fa-id-card']
        ];
        foreach($services as $s): ?>
        <div class="col-6 col-md-3">
            <div class="action-tile">
                <div class="action-icon"><i class="fa <?php echo $s[1]; ?>"></i></div>
                <span class="fw-bold small text-dark"><?php echo $s[0]; ?></span>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
