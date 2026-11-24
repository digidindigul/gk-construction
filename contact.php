<?php
/**
 * GK Construction - Contact Us
 * Theme: Premium Gold, Black, and White
 * Location: Dindigul, Tamil Nadu
 */
require_once 'includes/config.php';

$current_page = 'contact';
$page_title = 'Contact Us | Dindigul Head Office';

$message_sent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message_sent = true;
}

include 'includes/header.php';
?>

<!-- Premium Subpage Banner (Obsidian Black, Gold & White) -->
<section class="page-banner-premium">
    <div class="container">
        <div class="badge-tag-dark"><i class="fa-solid fa-headset text-gold"></i> Connect With Us</div>
        <h1 class="page-banner-title">Start Your Landmark in <span class="highlight-gold">Dindigul</span></h1>
        <p class="page-banner-desc">
            Reach our chief civil engineers and architects for direct plot consultation, architectural blueprints, or project feasibility audits.
        </p>
    </div>
</section>

<!-- Contact Info & Form Section (Pure White Canvas) -->
<section class="section section-white">
    <div class="container">
        <div class="contact-card-grid">
            <!-- Contact Information Column -->
            <div class="contact-info-pane fade-in-left">
                <div class="badge-tag"><i class="fa-solid fa-building text-gold"></i> Head Office</div>
                <h2 style="font-size: 2.2rem; margin-bottom: 18px; color: var(--text-dark-primary);">GK Construction <span class="highlight-gold">Headquarters</span></h2>
                <p style="color: var(--text-dark-secondary); margin-bottom: 30px; line-height: 1.75; font-size: 1.05rem;">
                    Located conveniently at 15, GTN Salai Road, near MSP School, Masilamanipuram, Anna Nagar, Dindigul. Walk in for a detailed review of your architectural blueprints and land survey with our licensed civil engineers.
                </p>

                <div class="office-details" style="gap: 24px; margin-bottom: 36px;">
                    <div class="office-item">
                        <i class="fa-solid fa-location-dot text-gold" style="font-size: 1.4rem;"></i>
                        <div>
                            <strong style="font-size: 1.05rem; color: var(--text-dark-primary);">Physical Address:</strong>
                            <p style="color: var(--text-dark-secondary); margin-bottom: 0;"><?php echo SITE_ADDRESS; ?></p>
                        </div>
                    </div>
                    <div class="office-item">
                        <i class="fa-solid fa-phone-volume text-gold" style="font-size: 1.4rem;"></i>
                        <div>
                            <strong style="font-size: 1.05rem; color: var(--text-dark-primary);">Direct Helplines:</strong>
                            <p style="color: var(--text-dark-secondary); margin-bottom: 0;"><a href="tel:<?php echo str_replace(' ', '', SITE_PHONE); ?>"><?php echo SITE_PHONE; ?></a> (Primary Helpline)</p>
                            <p style="color: var(--text-dark-secondary); margin-bottom: 0;"><a href="tel:<?php echo str_replace(' ', '', SITE_PHONE_ALT); ?>"><?php echo SITE_PHONE_ALT; ?></a> (Site Operations)</p>
                        </div>
                    </div>
                    <div class="office-item">
                        <i class="fa-solid fa-envelope text-gold" style="font-size: 1.4rem;"></i>
                        <div>
                            <strong style="font-size: 1.05rem; color: var(--text-dark-primary);">Official Email:</strong>
                            <p style="color: var(--text-dark-secondary); margin-bottom: 0;"><a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></p>
                        </div>
                    </div>
                </div>

                <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" class="btn btn-gold btn-shimmer">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span>Chat Live with Engineer</span>
                </a>
            </div>

            <!-- Contact Form Column -->
            <div class="contact-form-pane fade-in-right">
                <?php if ($message_sent): ?>
                    <div style="background: #ECFDF5; border: 1.5px solid #10B981; padding: 20px; border-radius: var(--radius-md); color: #065F46; text-align: center; margin-bottom: 20px;">
                        <i class="fa-solid fa-circle-check" style="color: #10B981; font-size: 2rem; margin-bottom: 8px;"></i>
                        <h4>Thank You! Your Request Has Been Received.</h4>
                        <p style="margin-bottom: 0; font-size: 0.9rem;">Our Chief Civil Consultant will contact you within 2 working hours.</p>
                    </div>
                <?php endif; ?>

                <h3 style="margin-bottom: 18px; font-size: 1.4rem; color: var(--text-dark-primary);">Request On-Site Inspection & Quote</h3>
                <form action="contact.php" method="POST" style="display: flex; flex-direction: column; gap: 16px;">
                    <div>
                        <label style="display: block; font-size: 0.88rem; font-weight: 600; margin-bottom: 6px; color: var(--text-dark-primary);">Your Full Name *</label>
                        <input type="text" name="name" required placeholder="e.g. Anand Kumar" style="width: 100%; padding: 12px 16px; border-radius: var(--radius-sm); background: #FFFFFF; border: 1.5px solid var(--border-light); color: var(--text-dark-primary); font-family: inherit;">
                    </div>
                    <div>
                        <label style="display: block; font-size: 0.88rem; font-weight: 600; margin-bottom: 6px; color: var(--text-dark-primary);">Phone / WhatsApp Number *</label>
                        <input type="tel" name="phone" required placeholder="e.g. +91 99426 XXXXX" style="width: 100%; padding: 12px 16px; border-radius: var(--radius-sm); background: #FFFFFF; border: 1.5px solid var(--border-light); color: var(--text-dark-primary); font-family: inherit;">
                    </div>
                    <div>
                        <label style="display: block; font-size: 0.88rem; font-weight: 600; margin-bottom: 6px; color: var(--text-dark-primary);">Project Category</label>
                        <select name="type" style="width: 100%; padding: 12px 16px; border-radius: var(--radius-sm); background: #FFFFFF; border: 1.5px solid var(--border-light); color: var(--text-dark-primary); font-family: inherit;">
                            <option value="residential">Traditional Home / Luxury Villa</option>
                            <option value="commercial">Commercial Hub / Showroom / Plaza</option>
                            <option value="industrial">Industrial PEB / Warehouse Shed</option>
                            <option value="renovation">Renovation & Structural Retrofitting</option>
                            <option value="planning">3D Elevation & Vastu Architectural Plan</option>
                        </select>
                    </div>
                    <div>
                        <label style="display: block; font-size: 0.88rem; font-weight: 600; margin-bottom: 6px; color: var(--text-dark-primary);">Plot Location / Specific Requirements</label>
                        <textarea name="message" rows="3" placeholder="e.g. 2400 sq ft plot in Palani Road, Dindigul..." style="width: 100%; padding: 12px 16px; border-radius: var(--radius-sm); background: #FFFFFF; border: 1.5px solid var(--border-light); color: var(--text-dark-primary); font-family: inherit;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-gold btn-shimmer" style="margin-top: 10px;">
                        <span>Submit Project Inquiry</span>
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Central Dindigul Map Section -->
<section class="section section-white" style="padding-top: 0; padding-bottom: 85px;">
    <div class="container">
        <div style="border-radius: var(--radius-xl); overflow: hidden; height: 380px; position: relative; box-shadow: var(--shadow-image); border: none !important;">
            <iframe 
                title="GK Construction Head Office Dindigul"
                src="https://maps.google.com/maps?q=15,+GTN+Salai+Rd,+near+MSP+School,+Masilamanipuram,+Anna+Nagar,+Dindigul,+Tamil+Nadu+624005&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
