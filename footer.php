    <!-- Simple Clean Corporate Footer -->
    <footer class="corporate-footer">
        <div class="container footer-main-content">
            <div class="footer-grid">
                
                <!-- Col 1: Brand Info -->
                <div class="footer-col brand-col">
                    <div class="footer-logo-wrap">
                        <img src="assets/images/gk-logo.jpg" alt="GK Construction Logo" class="footer-logo">
                        <div class="footer-brand-title">
                            <h4>GK CONSTRUCTION</h4>
                            <span class="gold-sub">BUILT WITH PRECISION &bull; DINDIGUL</span>
                        </div>
                    </div>
                    <p class="brand-desc">
                        Engineering premier residential villas, commercial landmarks, and turnkey infrastructure across Dindigul and South Tamil Nadu.
                    </p>
                    <div class="footer-social-links">
                        <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="<?php echo WHATSAPP_LINK; ?>" aria-label="WhatsApp" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>

                <!-- Col 2: Navigation -->
                <div class="footer-col links-col">
                    <h5 class="footer-heading">Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="index.php"><i class="fa-solid fa-chevron-right text-gold"></i> Home</a></li>
                        <li><a href="about.php"><i class="fa-solid fa-chevron-right text-gold"></i> About Us</a></li>
                        <li><a href="projects.php"><i class="fa-solid fa-chevron-right text-gold"></i> Our Projects</a></li>
                        <li><a href="gallery.php"><i class="fa-solid fa-chevron-right text-gold"></i> Gallery</a></li>
                        <li><a href="contact.php"><i class="fa-solid fa-chevron-right text-gold"></i> Contact Us</a></li>
                    </ul>
                </div>

                <!-- Col 3: Dindigul Head Office -->
                <div class="footer-col contact-col">
                    <h5 class="footer-heading">Dindigul Office</h5>
                    <div class="office-details">
                        <div class="office-item">
                            <i class="fa-solid fa-location-dot text-gold"></i>
                            <div>
                                <p><?php echo SITE_ADDRESS; ?></p>
                            </div>
                        </div>
                        <div class="office-item">
                            <i class="fa-solid fa-phone text-gold"></i>
                            <div>
                                <p><a href="tel:<?php echo str_replace(' ', '', SITE_PHONE); ?>"><?php echo SITE_PHONE; ?></a></p>
                            </div>
                        </div>
                        <div class="office-item">
                            <i class="fa-solid fa-envelope text-gold"></i>
                            <div>
                                <p><a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom-bar">
                <div class="copyright-text">
                    &copy; <?php echo date('Y'); ?> <strong>GK Construction</strong>. Built With Precision. All Rights Reserved.
                </div>
                <div>
                    <span>Dindigul &bull; Palani &bull; Kodaikanal</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating Back to Top Button -->
    <a href="#" class="back-to-top" id="backToTop" aria-label="Back to Top">
        <i class="fa-solid fa-arrow-up"></i>
    </a>

    <!-- Floating WhatsApp Action Badge -->
    <a href="<?php echo WHATSAPP_LINK; ?>" class="floating-whatsapp-badge" target="_blank" aria-label="Chat on WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
        <span class="wa-tooltip">Chat with Engineer</span>
    </a>

    <!-- Main JavaScript Logic -->
    <script src="assets/js/main.js"></script>
</body>
</html>
