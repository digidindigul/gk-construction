<?php
/**
 * GK Construction - Core Configuration & Site Metadata
 * Location: Dindigul, Tamil Nadu, India
 * Tagline: Built With Precision
 */

// Environment settings
define('SITE_NAME', 'GK Construction');
define('SITE_TAGLINE', 'Built With Precision');
define('SITE_LOCATION', 'Dindigul, Tamil Nadu');
define('SITE_PHONE', '+91 99426 68806');
define('SITE_PHONE_RAW', '9942668806');
define('SITE_PHONE_ALT', '+91 99426 68806');
define('SITE_EMAIL', 'gkconstruction235@gmail.com');
define('SITE_ADDRESS', '15, GTN Sali Rd, near MSP School, Masilamanipuram, Anna Nagar, Dindigul, Tamil Nadu 624005');
define('SITE_MAP_URL', 'https://maps.google.com/?q=15,+GTN+Salai+Rd,+near+MSP+School,+Masilamanipuram,+Anna+Nagar,+Dindigul,+Tamil+Nadu+624005');
define('WHATSAPP_LINK', 'https://wa.me/919942668806?text=Hello%20GK%20Construction,%20I%20would%20like%20to%20inquire%20about%20a%20construction%20project.');

// Navigation links requested by client
$nav_items = [
    'home' => [
        'title' => 'Home',
        'url' => 'index.php'
    ],
    'about' => [
        'title' => 'About Us',
        'url' => 'about.php'
    ],
    'projects' => [
        'title' => 'Our Projects',
        'url' => 'projects.php'
    ],
    'gallery' => [
        'title' => 'Gallery',
        'url' => 'gallery.php'
    ],
    'contact' => [
        'title' => 'Contact Us',
        'url' => 'contact.php'
    ]
];

// Helper function to check active state
function is_active($page_key, $current_page) {
    return ($page_key === $current_page) ? 'active' : '';
}

// Company statistics
$company_stats = [
    ['count' => '15+', 'label' => 'Years of Excellence', 'sub' => 'Serving South Tamil Nadu'],
    ['count' => '250+', 'label' => 'Delivered Projects', 'sub' => 'Residential & Commercial'],
    ['count' => '100%', 'label' => 'Structural Precision', 'sub' => 'Vastu & Safety Compliant'],
    ['count' => '50+', 'label' => 'Expert Engineers & Crews', 'sub' => 'In-House Civil Experts']
];
