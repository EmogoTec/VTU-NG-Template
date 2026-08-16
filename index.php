<?php
/**
 * EMOGOSPECIAL - ELITE SERIES LANDING PAGE
 * FULL PULSEFLOW INTEGRATION: Services, Prices, Bill Brands, Why Us, Vision, & FAQ
 * Support: 08051012264 | Branding: EMOGOSPECIAL
 */

// 1. ALWAYS include your central engine first. 
include('includes/db.php'); 

// 2. Use the central check
$is_logged_in = isset($_SESSION['user_id']);

// AUTO-REDIRECT: If already logged in, skip the home page and go to dashboard
if ($is_logged_in) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMOGOSPECIAL | Professional VTU Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root { 
            --elite-red: #d32f2f; 
            --elite-dark: #121212; 
            --accent-soft: rgba(211, 47, 47, 0.05); 
            --pulse-blue: #007bff;
        }
        
        body { font-family: 'Plus Jakarta Sans', sans-serif; scroll-behavior: smooth; background: #fff; color: #333; }
        
        /* Navbar Styling */
        .navbar { background: #fff; box-shadow: 0 2px 15px rgba(0,0,0,0.05); }
        .navbar-brand { font-weight: 900; color: var(--elite-red) !important; letter-spacing: 1px; }
        .nav-link { font-weight: 700; color: #444 !important; transition: 0.3s; font-size: 14px; }
        .nav-link:hover { color: var(--elite-red) !important; }
        
        /* Buttons */
        .btn-elite { background: var(--elite-red); color: #fff; border-radius: 50px; font-weight: 700; padding: 12px 30px; border: none; transition: 0.3s; text-decoration: none; display: inline-block; }
        .btn-elite:hover { background: #b71c1c; color: #fff; transform: translateY(-2px); }

        /* PulseFlow Components */
        .section-padding { padding: 80px 0; }
        .bg-light-elite { background-color: var(--accent-soft); }
        
        /* Service Grid (IMG_20260413_200352_3) */
        .service-card { background: #fff; border: 1px solid #eee; padding: 30px 20px; border-radius: 12px; transition: 0.3s; text-align: center; height: 100%; }
        .service-card:hover { border-color: var(--elite-red); transform: translateY(-5px); }
        .service-card i { font-size: 32px; color: var(--elite-red); margin-bottom: 20px; }
        .btn-action { background: var(--pulse-blue); color: #fff; font-size: 12px; padding: 5px 15px; border-radius: 4px; text-decoration: none; font-weight: 600; }

        /* Pricing Cards (IMG_20260413_200313_0) */
        .price-card { background: #fff; border: 1px solid #eee; border-radius: 10px; overflow: hidden; height: 100%; }
        .price-header { background: #fafafa; padding: 15px; border-bottom: 1px solid #eee; font-weight: 800; display: flex; align-items: center; gap: 10px; }
        .price-table { width: 100%; font-size: 14px; }
        .price-table td { padding: 10px 15px; border-bottom: 1px solid #f9f9f9; }
        .btn-more { background: var(--pulse-blue); color: #fff; width: 100%; display: block; text-align: center; padding: 10px; font-weight: 700; text-decoration: none; }

        /* Features/Why Us (IMG_20260413_200357_4) */
        .feature-item { margin-bottom: 30px; border-left: 4px solid var(--elite-red); padding-left: 20px; }
        .feature-item h5 { font-weight: 700; color: var(--elite-dark); margin-bottom: 5px; }

        /* Contact Box Grid */
        .contact-box { background: #fff; padding: 25px; border-radius: 12px; border: 1px solid #eee; height: 100%; transition: 0.3s; }
        .contact-box:hover { border-color: var(--elite-red); box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        .contact-icon { font-size: 24px; color: var(--elite-red); margin-bottom: 15px; }

        footer { background: var(--elite-dark); color: rgba(255,255,255,0.6); padding: 60px 0 20px; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">EMOGOSPECIAL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#pricing">Price List</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                <li class="nav-item ms-lg-4"><a class="nav-link fw-bold" href="login.php" style="color: var(--elite-red) !important;">Login</a></li>
                <li class="nav-item ms-lg-2"><a class="btn btn-elite" href="register.php">Sign Up</a></li>
            </ul>
        </div>
    </div>
</nav>

<section id="home" class="section-padding" style="background: linear-gradient(135deg, #fff 60%, var(--accent-soft) 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 style="font-size: 56px; font-weight: 900; color: var(--elite-dark); line-height: 1.1;">
                    One App You Need For <span style="color:var(--elite-red);">Digital Services.</span>
                </h1>
                <p class="my-4 text-muted" style="font-size: 18px;">Automated VTU services for Data, Airtime, and Bills. Built for speed and reliability at EMOGOSPECIAL.</p>
                <div class="d-flex gap-3">
                    <a href="register.php" class="btn btn-elite shadow">Get Started Now</a>
                    <a href="#services" class="btn btn-outline-dark rounded-pill px-4 fw-bold">View Services</a>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0 text-center">
                <img src="https://img.freepik.com/free-vector/mobile-payments-concept-illustration_114360-1481.jpg" class="img-fluid rounded-4" alt="EMOGOSPECIAL" style="max-height: 450px;">
            </div>
        </div>
    </div>
</section>

<section id="services" class="section-padding bg-light-elite">
    <div class="container">
        <h2 class="fw-800 text-center mb-5">Our Professional Services</h2>
        <div class="row g-4">
            <?php 
            $srvs = [
                ['fa-wifi', 'Buy Data', 'Instant Data Delivery'],
                ['fa-phone', 'Airtime Topup', 'Instant Airtime Recharge'],
                ['fa-tv', 'Cable TV', 'DStv, GOtv, Startimes'],
                ['fa-bolt', 'Utility Bills', 'Electricity Token Instant'],
                ['fa-graduation-cap', 'Exam Pins', 'WAEC, NECO, NABTEB'],
                ['fa-wallet', 'Fund Wallet', 'Automated Funding 24/7']
            ];
            foreach($srvs as $s): ?>
            <div class="col-md-4">
                <div class="service-card shadow-sm">
                    <i class="fas <?= $s[0] ?>"></i>
                    <h5 class="fw-700"><?= $s[1] ?></h5>
                    <p class="small text-muted mb-3"><?= $s[2] ?></p>
                    <a href="login.php" class="btn-action">Get started</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="pricing" class="section-padding">
    <div class="container">
        <h2 class="fw-800 text-center mb-5">Current Price List</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="price-card shadow-sm">
                    <div class="price-header"><i class="fas fa-wifi text-warning"></i> MTN Data</div>
                    <table class="price-table">
                        <tr><td>500.0MB SME</td><td class="text-end fw-bold">₦135.00</td></tr>
                        <tr><td>1.0GB SME</td><td class="text-end fw-bold">₦255.00</td></tr>
                        <tr><td>2.0GB SME</td><td class="text-end fw-bold">₦510.00</td></tr>
                    </table>
                    <a href="login.php" class="btn-more">More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="price-card shadow-sm">
                    <div class="price-header"><i class="fas fa-wifi text-danger"></i> Airtel Data</div>
                    <table class="price-table">
                        <tr><td>1.0GB CG</td><td class="text-end fw-bold">₦260.00</td></tr>
                        <tr><td>2.0GB CG</td><td class="text-end fw-bold">₦520.00</td></tr>
                        <tr><td>5.0GB CG</td><td class="text-end fw-bold">₦1,300.00</td></tr>
                    </table>
                    <a href="login.php" class="btn-more">More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="price-card shadow-sm">
                    <div class="price-header"><i class="fas fa-bolt text-primary"></i> Electricity</div>
                    <div class="p-3">
                        <div class="row g-2 text-center">
                            <?php $discos = ['AEDC', 'EKEDC', 'IKEDC', 'JED', 'IBEDC', 'KEDCO']; 
                            foreach($discos as $d): ?>
                                <div class="col-4"><span class="badge bg-light text-dark border w-100 p-2"><?= $d ?></span></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <a href="login.php" class="btn-more">Pay Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="why-us" class="section-padding bg-light-elite">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <h2 class="fw-800 mb-4">Why Choose Us?</h2>
                <img src="https://img.freepik.com/free-vector/question-mark-concept-illustration_114360-8280.jpg" class="img-fluid" alt="Why EMOGOSPECIAL" style="max-height: 300px;">
            </div>
            <div class="col-lg-7">
                <div class="feature-item">
                    <h5>Automation Services</h5>
                    <p class="text-muted small">Our platform is 100% automated, ensuring instant delivery of data, airtime, and bill payments 24/7 all year round.</p>
                </div>
                <div class="feature-item">
                    <h5>Swift Delivery</h5>
                    <p class="text-muted small">Experience lightning-fast processing for all your transactions with zero delays. We value your time.</p>
                </div>
                <div class="feature-item">
                    <h5>Customer Support</h5>
                    <p class="text-muted small">We are committed to your satisfaction. Reach us instantly via WhatsApp at 08051012264.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="section-padding">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6 text-center">
                <img src="https://img.freepik.com/free-vector/vision-statement-concept-illustration_114360-7576.jpg" class="img-fluid rounded-4" style="max-height: 350px;">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-800 mb-4">Our Vision</h2>
                <p class="lead" style="color: var(--elite-red);">EMOGOSPECIAL envisions a world where digital communication is accessible to everyone without boundaries.</p>
                <p class="text-muted">We strive to stay at the forefront of innovation, connecting lives with speed, precision, and reliable automated systems that empower individuals and businesses. Our focus is on seamless connectivity for all.</p>
            </div>
        </div>
    </div>
</section>

<section id="faq" class="section-padding bg-light-elite">
    <div class="container">
        <h2 class="fw-800 text-center mb-5">Frequently Asked Questions</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3">
                        <h2 class="accordion-header"><button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#q1">How do I buy data on EMOGOSPECIAL?</button></h2>
                        <div id="q1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion"><div class="accordion-body text-muted small">Log in to your account, fund your wallet, fill the data order form, and proceed. Your data will be delivered instantly.</div></div>
                    </div>
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3">
                        <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#q2">Is my transaction fulfilled immediately?</button></h2>
                        <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body text-muted small">Yes! All transactions on EMOGOSPECIAL are fully automated using secure APIs, ensuring they are completed in seconds.</div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="section-padding">
    <div class="container">
        <div class="text-center mb-5"><h2 class="fw-900">Get In Touch</h2></div>
        <div class="row g-4 text-center">
            <div class="col-md-4"><div class="contact-box"><i class="fab fa-whatsapp contact-icon"></i><h6>WhatsApp Support</h6><p class="small text-muted">08051012264</p></div></div>
            <div class="col-md-4"><div class="contact-box"><i class="fas fa-phone-alt contact-icon"></i><h6>Call Us</h6><p class="small text-muted">08051012264</p></div></div>
            <div class="col-md-4"><div class="contact-box"><i class="fas fa-envelope contact-icon"></i><h6>Email Support</h6><p class="small text-muted">support@emogo.com.ng</p></div></div>
        </div>
    </div>
</section>

<footer>
    <div class="container text-center">
        <h5 class="text-white fw-800 mb-3">EMOGOSPECIAL & GENERAL SERVICES</h5>
        <p class="mb-4 text-white">Contact: 08051012264</p>
        <hr style="border-color: rgba(255,255,255,0.1);">
        <p class="small mt-4 mb-0">&copy; <?php echo date('Y'); ?> EMOGOSPECIAL COMPUTER AND GENERAL SERVICES.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>