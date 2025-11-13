<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNNify - Buy. Sell. LionStyle.</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/real-estate/assets/css/style.css">
    <script src="/real-estate/assets/js/script.js" defer></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">  
</head>
<body>


<header class="navbar">
    <div class="nav-container">
        <a href="/real-estate/index.php" class="logo">
            <img src="/real-estate/assets/images/enugu.png" alt="Enugu Homes Logo">
            <span>EnuguHomes</span>
        </a>

        <nav class="nav-links">
            <a href="/real-estate/index.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'index.php'){ echo 'active'; } ?>">Home</a>
            <a href="/real-estate/listings/market.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'market.php'){ echo 'active'; } ?>">Properties</a>
            <a href="/real-estate/faq.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'faq.php'){ echo 'active'; } ?>">Buying Guide</a>
            <a href="/real-estate/contact.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'contact.php'){ echo 'active'; } ?>">Contact Agent</a>
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
            <a href="/real-estate/admin/admin_dashboard.php" 
             class="admin-btn <?php if(basename($_SERVER['PHP_SELF']) == 'admin_dashboard.php'){ echo 'active'; } ?>">
            🛡️ Admin
             </a>
        <?php endif; ?>

            <a href="/real-estate/auth/login.php" class="login-btn <?php if(basename($_SERVER['PHP_SELF']) == 'login.php'){ echo 'active'; } ?>">Admin Login</a>
            <!--<a href="/real-estate/auth/register.php" class="register-btn <?php if(basename($_SERVER['PHP_SELF']) == 'register.php'){ echo 'active'; } ?>">Register</a>-->
        </nav>

        <!-- Hamburger Menu -->
        <div class="hamburger" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <nav class="mobile-menu" id="mobileMenu">
        <a href="/real-estate/index.php">Home</a>
        <a href="/real-estate/listings/market.php">Marketplace</a>
        <a href="/real-estate/faq.php">FAQs</a>
        <a href="/real-estate/contact.php">Contact</a>
          <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
            <a href="/creal-estate/admin/admin_dashboard.php" 
             class="admin-btn <?php if(basename($_SERVER['PHP_SELF']) == 'admin_dashboard.php'){ echo 'active'; } ?>">
            🛡️ Admin
             </a>
        <?php endif; ?>      
        <a href="/real-estate/auth/login.php" class="login-btn">Login</a>
        <a href="/real-estate/auth/register.php" class="register-btn">Register</a>
    </nav>
</header>
