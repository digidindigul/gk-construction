<?php
if (!isset($current_page)) {
    $current_page = 'home';
}
if (!isset($page_title)) {
    $page_title = 'Premier Construction & Civil Engineering Firm | Dindigul';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title . ' - ' . SITE_NAME); ?></title>
    <meta name="description" content="GK Construction is Dindigul's premier civil contracting firm specializing in traditional and luxury residential villas, commercial landmarks, and turnkey construction. Built with Precision.">
    
    <!-- Google Fonts: Poppins (Clean, Human, Rich) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Main Custom Corporate Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Floating Navigation Bar (Logo Only + Words with Animated Effects) -->
    <header class="floating-header-wrapper">
        <nav class="floating-navbar" id="floatingNavbar">
            <div class="navbar-container">
                
                <!-- Brand: LOGO ONLY on desktop, Name shown ONLY on mobile -->
                <a href="index.php" class="brand-logo-anchor" aria-label="GK Construction Home">
                    <img src="assets/images/gk-emblem.png" alt="GK Construction Emblem" class="brand-logo-only">
                    <span class="brand-name-mobile">GK Construction</span>
                </a>

                <!-- Desktop Navigation Menu: WORDS ONLY WITH SLEEK UNDERLINE ANIMATION -->
                <ul class="nav-menu" id="navMenu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link <?php echo is_active('home', $current_page); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link <?php echo is_active('about', $current_page); ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="projects.php" class="nav-link <?php echo is_active('projects', $current_page); ?>">Our Projects</a>
                    </li>
                    <li class="nav-item">
                        <a href="gallery.php" class="nav-link <?php echo is_active('gallery', $current_page); ?>">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link <?php echo is_active('contact', $current_page); ?>">Contact Us</a>
                    </li>
                </ul>

                <!-- Corporate Action CTA with Shimmer Effect -->
                <div class="nav-cta-group">
                    <!-- Mobile Quick Call Button (Visible on mobile only) -->
                    <a href="tel:<?php echo str_replace(' ', '', SITE_PHONE); ?>" class="mobile-call-btn" aria-label="Call GK Construction">
                        <i class="fa-solid fa-phone"></i>
                    </a>

                    <!-- Desktop Consultation CTA -->
                    <a href="contact.php" class="btn btn-gold btn-nav-cta btn-shimmer">
                        <span>Get Free Consultation</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    
                    <!-- Mobile Hamburger Toggle -->
                    <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>

            <!-- Mobile Dropdown Menu -->
            <div class="mobile-dropdown" id="mobileDropdown">
                <div class="mobile-dropdown-cta">
                    <a href="contact.php" class="btn btn-gold w-100 btn-shimmer">
                        <span>Get Free Consultation</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <ul class="mobile-nav-list">
                    <li>
                        <a href="index.php" class="mobile-nav-link <?php echo is_active('home', $current_page); ?>">Home</a>
                    </li>
                    <li>
                        <a href="about.php" class="mobile-nav-link <?php echo is_active('about', $current_page); ?>">About Us</a>
                    </li>
                    <li>
                        <a href="projects.php" class="mobile-nav-link <?php echo is_active('projects', $current_page); ?>">Our Projects</a>
                    </li>
                    <li>
                        <a href="gallery.php" class="mobile-nav-link <?php echo is_active('gallery', $current_page); ?>">Gallery</a>
                    </li>
                    <li>
                        <a href="contact.php" class="mobile-nav-link <?php echo is_active('contact', $current_page); ?>">Contact Us</a>
                    </li>
                </ul>
                <div class="mobile-menu-footer">
                    <p><i class="fa-solid fa-phone text-gold"></i> <?php echo SITE_PHONE; ?></p>
                    <p><i class="fa-solid fa-location-dot text-gold"></i> <?php echo SITE_LOCATION; ?></p>
                    <a href="<?php echo WHATSAPP_LINK; ?>" class="btn btn-gold w-100 mt-2" target="_blank">
                        <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
                    </a>
                </div>
            </div>
        </nav>
    </header>
