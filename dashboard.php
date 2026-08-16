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
        body { background: var(--bg); font-family: 'Plus Jakarta Sans', sans-serif; }
        
        /* Layout */
        .sidebar { width: 280px; background: var(--dark); height: 100vh; position: fixed; left: 0; top: 0; padding: 25px; color: #fff; z-index: 1000; }
        .main-content { margin-left: 280px; padding: 40px; }
        
        /* Components */
        .card-elite { border-radius: 28px; padding: 30px; border: none; box-shadow: 0 15px 35px rgba(0,0,0,0.05); }
        .bg-red-gradient { background: linear-gradient(135deg, #d32f2f 0%, #8e1c1c 100%); color: #fff; }
        
        .action-tile { background: #fff; border-radius: 24px; padding: 25px; text-align: center; border: 1px solid #edf2f7; transition: 0.3s; cursor: pointer; height: 100%; }
        .action-tile:hover { border-color: var(--red); transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.05); }
        .action-icon { width: 60px; height: 60px; background: #fff5f5; color: var(--red); border-radius: 18px; display: flex; align-items: center; justify-content: center; margin: 0 auto 12px; font-size: 24px; }
        
        @media (max-width: 991px) { .sidebar { display: none; } .main-content { margin-left: 0; padding: 20px; } }
    </style>
</head>
<body>

<aside class="sidebar">
    <h3 class="fw-900 text-danger text-center mb-4">VTU DASHBOARD</h3>
    <div class="nav-label text-uppercase text-muted small fw-bold mb-3">Main Menu</div>
    <div class="d-grid gap-2">
        <a href="#" class="btn btn-outline-light text-start"><i class="fa fa-home me-2"></i> Dashboard</a>
        <a href="#" class="btn btn-outline-light text-start"><i class="fa fa-wifi me-2"></i> Buy Data</a>
        <a href="#" class="btn btn-outline-light text-start"><i class="fa fa-phone me-2"></i> Buy Airtime</a>
        <a href="#" class="btn btn-outline-light text-start"><i class="fa fa-history me-2"></i> Transactions</a>
    </div>
</aside>

<main class="main-content">
    <h2 class="fw-800 mb-4">Dashboard Overview</h2>
    
    <!-- Wallet Section -->
    <div class="row g-4 mb-5">
        <div class="col-md-5">
            <div class="card-elite bg-red-gradient">
                <span class="opacity-75">Main Wallet Balance</span>
                <h2 class="fw-bold mt-2">₦0.00</h2>
                <button class="btn btn-light rounded-pill mt-3 px-4">Add Funds</button>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <h6 class="fw-bold text-uppercase text-muted mb-4">Available Services</h6>
    <div class="row g-3">
        <?php 
        $services = [
            ['Data', 'fa-wifi'], ['Airtime', 'fa-phone'], 
            ['Electricity', 'fa-bolt'], ['Cable TV', 'fa-tv'],
            ['Exam Pins', 'fa-graduation-cap'], ['NIN Services', 'fa-id-card']
        ];
        foreach($services as $s): ?>
        <div class="col-6 col-md-3">
            <div class="action-tile">
                <div class="action-icon"><i class="fa <?php echo $s[1]; ?>"></i></div>
                <span class="fw-bold"><?php echo $s[0]; ?></span>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Transaction Table -->
    <div class="bg-white rounded-4 shadow-sm border mt-5 p-4">
        <h6 class="fw-bold mb-3">Recent Transactions</h6>
        <div class="table-responsive">
            <table class="table align-middle">
                <thead><tr><th>Service</th><th>Amount</th><th>Status</th></tr></thead>
                <tbody>
                    <tr><td>MTN Data Subscription</td><td>₦500.00</td><td><span class="badge bg-success">Success</span></td></tr>
                    <tr><td>Airtime VTU</td><td>₦200.00</td><td><span class="badge bg-success">Success</span></td></tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

</body>
</html>
