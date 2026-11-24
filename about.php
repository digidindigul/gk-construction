<?php
/**
 * GK Construction - About Us Page
 * Theme: Premium Gold, Black, and White
 * Tone: Elaborate, warm, straightforward, and easy-to-understand usual verbal terms
 * Location: Dindigul, Tamil Nadu
 */
require_once 'includes/config.php';

$current_page = 'about';
$page_title = 'About Us - Trusted House Builders in Dindigul';

include 'includes/header.php';
?>

<!-- ========================================================
     PAGE BANNER (OBSIDIAN BLACK, GOLD & WHITE)
     ======================================================== -->
<section class="page-banner-premium">
    <div class="container">
        <div class="badge-tag-dark"><i class="fa-solid fa-cube text-gold"></i> About GK Construction &bull; Dindigul</div>
        <h1 class="page-banner-title">Building Honest, Beautiful Homes in <span class="highlight-gold">Dindigul</span></h1>
        <p class="page-banner-desc">
            For over 15 years, GK Construction has been helping families and business owners across Dindigul, Palani, and Kodaikanal build quality properties with fixed pricing, top brand materials, and on-time key handover.
        </p>
    </div>
</section>

<!-- ========================================================
     SECTION 1: OUR STORY & WHO WE ARE (PURE WHITE SECTION)
     ======================================================== -->
<section class="section section-white">
    <div class="container">
        <div class="about-single-layout">
            
            <!-- Left: Single Big Image (Clean Photo, Zero Border) -->
            <div class="about-single-img-wrap fade-in-left">
                <img 
                    src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=88" 
                    alt="Finished Luxury Landmark Residence in Dindigul" 
                    class="about-single-img"
                >
            </div>

            <!-- Right: Warm, Plain-Language Story -->
            <div class="fade-in-right">
                <div class="badge-tag"><i class="fa-solid fa-house-chimney text-gold"></i> Who We Are</div>
                <h2 class="section-title">Civil Engineers You Can Trust in <span class="highlight-gold">Your Hometown</span></h2>
                
                <p style="font-size: 1.05rem; line-height: 1.8; color: var(--text-dark-secondary); margin-bottom: 16px;">
                    Building a home is usually a once-in-a-lifetime dream for any family. But in many towns, people worry about dealing with contractors—worrying about unexpected extra costs halfway through, low-grade cement or sand being mixed, work stopping for weeks, or room plans not matching Vastu.
                </p>

                <p style="font-size: 1.05rem; line-height: 1.8; color: var(--text-dark-secondary); margin-bottom: 24px;">
                    <strong>GK Construction</strong> was started in Dindigul to solve these worries completely. We are qualified, licensed civil engineers based right here in town. When you entrust your house to us, we handle everything under one roof: plot soil testing, government plan approval, 100% Vastu 2D & 3D floor plans, foundation, RCC pillars, roof slab, wiring, plumbing, and painting. We sign a clear agreement with fixed rates before touching the ground, so you never have to face surprise bills.
                </p>

                <!-- 3 Visual Highlight Mini-Cards -->
                <div class="about-highlights-row">
                    <div class="about-mini-card">
                        <i class="fa-solid fa-compass-drafting"></i>
                        <strong>100% Vastu</strong>
                        <span>Traditional Harmony</span>
                    </div>
                    <div class="about-mini-card">
                        <i class="fa-solid fa-cubes-stacked"></i>
                        <strong>Tata & UltraTech</strong>
                        <span>Genuine Brand Materials</span>
                    </div>
                    <div class="about-mini-card">
                        <i class="fa-solid fa-shield-halved"></i>
                        <strong>10-Year Warranty</strong>
                        <span>Written Legal Deed</span>
                    </div>
                </div>

                <div style="display: flex; gap: 14px; flex-wrap: wrap; margin-top: 30px;">
                    <a href="contact.php" class="btn btn-gold btn-shimmer">
                        <span>Book Free Plot Visit</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="projects.php" class="btn btn-outline-gold">
                        <span>View Our Completed Houses</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================
     SECTION 2: KEY NUMBERS STRIP (WHITE & GOLD DASHBOARD)
     ======================================================== -->
<section class="stats-strip-section" style="margin-top: 0; margin-bottom: 0; padding-bottom: 70px;">
    <div class="container">
        <div class="stats-card-container">
            <?php $st_i = 1; foreach ($company_stats as $stat): ?>
                <div class="stat-box fade-in-up delay-<?php echo $st_i++; ?>">
                    <div class="stat-number"><?php echo $stat['count']; ?></div>
                    <div class="stat-label"><?php echo $stat['label']; ?></div>
                    <div class="stat-sub"><?php echo $stat['sub']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========================================================
     SECTION 3: 6 SIMPLE PROMISES (LUXURY BLACK & GOLD)
     ======================================================== -->
<section class="section section-black">
    <div class="container">
        <div class="section-header text-center fade-in-left">
            <div class="badge-tag-dark"><i class="fa-solid fa-handshake text-gold"></i> Our Guarantees</div>
            <h2 class="section-title">6 Clear Promises for Every <span class="highlight-gold">Homeowner</span></h2>
            <p class="section-subtitle">
                No complicated technical jargon. Here is what we promise to you in simple, straightforward language:
            </p>
        </div>

        <div class="services-grid">
            
            <!-- Promise 1 -->
            <div class="service-card-dark">
                <div class="service-card-body" style="padding: 32px 26px;">
                    <div style="font-size: 2.2rem; color: var(--color-gold); margin-bottom: 14px;">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>
                    <h3>1. Fixed Price Guarantee</h3>
                    <p>
                        We give you a complete, itemized quotation (BOQ) with all material brands written down before we start. Even if market cement or steel rates go up during building, we bear the difference. You pay zero extra money.
                    </p>
                </div>
            </div>

            <!-- Promise 2 -->
            <div class="service-card-dark">
                <div class="service-card-body" style="padding: 32px 26px;">
                    <div style="font-size: 2.2rem; color: var(--color-gold); margin-bottom: 14px;">
                        <i class="fa-solid fa-vault"></i>
                    </div>
                    <h3>2. Pay Step-by-Step (Milestones)</h3>
                    <p>
                        Never worry about your hard-earned money. You don't pay big advances upfront. Payments are divided into simple stages: Foundation, Lintel, Roof slab, Plastering, and Final handover. You pay only after seeing the work with your own eyes.
                    </p>
                </div>
            </div>

            <!-- Promise 3 -->
            <div class="service-card-dark">
                <div class="service-card-body" style="padding: 32px 26px;">
                    <div style="font-size: 2.2rem; color: var(--color-gold); margin-bottom: 14px;">
                        <i class="fa-solid fa-compass-drafting"></i>
                    </div>
                    <h3>3. 100% Vastu Shastra Plans</h3>
                    <p>
                        We design house drawings strictly following traditional Tamil Vastu principles—ensuring correct placement for Main Entrance, Kitchen (Agni moolai), Master Bedroom (Kubera moolai), Pooja room, and Septic tank, with plenty of fresh air and sunlight.
                    </p>
                </div>
            </div>

            <!-- Promise 4 -->
            <div class="service-card-dark">
                <div class="service-card-body" style="padding: 32px 26px;">
                    <div style="font-size: 2.2rem; color: var(--color-gold); margin-bottom: 14px;">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                    </div>
                    <h3>4. On-Time Key Handover</h3>
                    <p>
                        We commit to an exact handover date in writing. We work with disciplined project schedules so your housewarming (Grahapravesam) can happen on your auspicious planned day without last-minute delays.
                    </p>
                </div>
            </div>

            <!-- Promise 5 -->
            <div class="service-card-dark">
                <div class="service-card-body" style="padding: 32px 26px;">
                    <div style="font-size: 2.2rem; color: var(--color-gold); margin-bottom: 14px;">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <h3>5. Daily Engineer Supervision</h3>
                    <p>
                        We never hand over your house to third-party sub-contractors or careless workers. Our own qualified civil site engineers are present on site every day, checking column vertical alignment, steel spacing, and concrete mixing ratio.
                    </p>
                </div>
            </div>

            <!-- Promise 6 -->
            <div class="service-card-dark">
                <div class="service-card-body" style="padding: 32px 26px;">
                    <div style="font-size: 2.2rem; color: var(--color-gold); margin-bottom: 14px;">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <h3>6. 10-Year Structural Warranty</h3>
                    <p>
                        Along with your house key, we give you a formal, registered 10-year structural stability warranty document covering the foundation, RCC pillars, beams, and roof damp-proofing for complete peace of mind.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ========================================================
     SECTION 4: BRAND TRANSPARENCY (MATERIALS WE USE)
     ======================================================== -->
<section class="section section-white">
    <div class="container">
        <div class="section-header text-center fade-in-right">
            <div class="badge-tag"><i class="fa-solid fa-certificate text-gold"></i> Brand Transparency</div>
            <h2 class="section-title">The Trusted Brands That Go Into <span class="highlight-gold">Your House</span></h2>
            <p class="section-subtitle">
                We believe in total honesty. Every material used on your site is branded, tested, and can be inspected by you at any time.
            </p>
        </div>

        <div class="materials-grid">
            
            <!-- Brand 1: Steel -->
            <div class="material-card fade-in-up">
                <div class="material-icon-wrap"><i class="fa-solid fa-cubes-stacked"></i></div>
                <div class="material-category">TMT Steel Bars</div>
                <div class="material-brand-name">Tata Tiscon / JSW Neosteel</div>
                <p class="material-desc">Fe 550D high-ductility ribbed steel bars for earthquake safety and maximum pillar strength.</p>
            </div>

            <!-- Brand 2: Cement -->
            <div class="material-card fade-in-up">
                <div class="material-icon-wrap"><i class="fa-solid fa-trowel-bricks"></i></div>
                <div class="material-category">Cement</div>
                <div class="material-brand-name">UltraTech / Dalmia 53 Grade</div>
                <p class="material-desc">Fresh 53-grade OPC and PPC cement for solid columns, beams, and leak-proof roof slab casting.</p>
            </div>

            <!-- Brand 3: Sand & Aggregates -->
            <div class="material-card fade-in-up">
                <div class="material-icon-wrap"><i class="fa-solid fa-mountain"></i></div>
                <div class="material-category">Sand & Stones</div>
                <div class="material-brand-name">Triple-Washed M-Sand & P-Sand</div>
                <p class="material-desc">Certified zero-clay manufactured sand for concrete and double-sieved plastering sand with 20mm blue metal.</p>
            </div>

            <!-- Brand 4: Bricks -->
            <div class="material-card fade-in-up">
                <div class="material-icon-wrap"><i class="fa-solid fa-cube"></i></div>
                <div class="material-category">Wall Construction</div>
                <div class="material-brand-name">Chamber Red Bricks / Solid Blocks</div>
                <p class="material-desc">First-grade burnt red clay bricks or high-density concrete solid blocks for thermal coolness and strength.</p>
            </div>

            <!-- Brand 5: Electrical -->
            <div class="material-card fade-in-up">
                <div class="material-icon-wrap"><i class="fa-solid fa-bolt"></i></div>
                <div class="material-category">Wiring & Switches</div>
                <div class="material-brand-name">Finolex Wires & Legrand Switches</div>
                <p class="material-desc">Fire-resistant (FR) pure copper cables with shock-proof modular switches and MCB distribution boxes.</p>
            </div>

            <!-- Brand 6: Plumbing -->
            <div class="material-card fade-in-up">
                <div class="material-icon-wrap"><i class="fa-solid fa-faucet-drip"></i></div>
                <div class="material-category">Pipes & Fittings</div>
                <div class="material-brand-name">Supreme / Astral CPVC & PVC</div>
                <p class="material-desc">Heavy-gauge leak-proof hot & cold water lines, underground drainage pipes, and brass fittings.</p>
            </div>

            <!-- Brand 7: Tiles & Granite -->
            <div class="material-card fade-in-up">
                <div class="material-icon-wrap"><i class="fa-solid fa-border-all"></i></div>
                <div class="material-category">Flooring & Slabs</div>
                <div class="material-brand-name">Kajaria / Somany & Black Granite</div>
                <p class="material-desc">Vitrified stain-resistant floor tiles (4x2 / 2x2) and premium jet-black granite for kitchen counter and steps.</p>
            </div>

            <!-- Brand 8: Painting -->
            <div class="material-card fade-in-up">
                <div class="material-icon-wrap"><i class="fa-solid fa-paint-roller"></i></div>
                <div class="material-category">Wall Finishes</div>
                <div class="material-brand-name">Asian Paints Apex & Royale</div>
                <p class="material-desc">Two coats of wall putty, primer, and weather-proof exterior paint with smooth luxury interior emulsion.</p>
            </div>

        </div>
    </div>
</section>

<!-- ========================================================
     SECTION 5: OUR STEP-BY-STEP WORK PROCESS
     ======================================================== -->
<section class="section section-black" id="process">
    <div class="container">
        <div class="section-header text-center fade-in-left">
            <div class="badge-tag-dark"><i class="fa-solid fa-list-check text-gold"></i> How We Work</div>
            <h2 class="section-title">From Empty Plot to <span class="highlight-gold">Housewarming</span></h2>
            <p class="section-subtitle">
                We take care of every single step so you can sit back and enjoy watching your home rise without headache.
            </p>
        </div>

        <div class="process-grid">
            
            <div class="process-card-dark fade-in-up">
                <div class="process-step-indicator">01</div>
                <h4>Free Plot Visit & Soil Inspection</h4>
                <p>We visit your land anywhere in Dindigul, check soil hardness and road access, take exact measurements, and listen to your budget.</p>
            </div>

            <div class="process-card-dark fade-in-up">
                <div class="process-step-indicator">02</div>
                <h4>2D Floor Plan & 3D Front View</h4>
                <p>Our architectural team creates 100% Vastu drawings and photorealistic 3D elevations so you see your house before spending a rupee on brickwork.</p>
            </div>

            <div class="process-card-dark fade-in-up">
                <div class="process-step-indicator">03</div>
                <h4>Approvals & Fixed Rate Agreement</h4>
                <p>We assist with Dindigul Corporation/Panchayat approval drawings and sign a legal agreement with itemized brand specifications.</p>
            </div>

            <div class="process-card-dark fade-in-up">
                <div class="process-step-indicator">04</div>
                <h4>Quality Building & Daily Updates</h4>
                <p>Excavation, pillars, roof casting, brickwork, wiring, plumbing, and painting—with daily photos and videos sent straight to your WhatsApp.</p>
            </div>

            <div class="process-card-dark fade-in-up">
                <div class="process-step-indicator">05</div>
                <h4>450+ Checks & Key Handover</h4>
                <p>We run our full quality audit, deep clean the house, test all plumbing and electrical lines, and hand over the key for your auspicious Grahapravesam.</p>
            </div>

        </div>
    </div>
</section>

<!-- ========================================================
     SECTION 6: LOCAL AREAS WE SERVE
     ======================================================== -->
<section class="section section-white">
    <div class="container">
        <div class="service-areas-wrap fade-in-up">
            <div class="badge-tag-dark"><i class="fa-solid fa-map-pin text-gold"></i> Local Presence</div>
            <h3>Serving Families Across All Areas of Dindigul</h3>
            <p>
                Our head office is conveniently located on GTN Salai Road, near MSP School, Anna Nagar, Dindigul. Our engineers regularly supervise residential villas and commercial building projects across all surrounding localities:
            </p>
            <div class="areas-tag-list">
                <span class="area-pill"><i class="fa-solid fa-location-dot"></i> GTN Salai & Anna Nagar</span>
                <span class="area-pill"><i class="fa-solid fa-location-dot"></i> MSP School Area</span>
                <span class="area-pill"><i class="fa-solid fa-location-dot"></i> Dindigul Town</span>
                <span class="area-pill"><i class="fa-solid fa-location-dot"></i> Palani Road</span>
                <span class="area-pill"><i class="fa-solid fa-location-dot"></i> Collectorate Area</span>
                <span class="area-pill"><i class="fa-solid fa-location-dot"></i> Roundana & Masilamanipuram</span>
                <span class="area-pill"><i class="fa-solid fa-location-dot"></i> Batlagundu Road</span>
                <span class="area-pill"><i class="fa-solid fa-location-dot"></i> Trichy Road</span>
                <span class="area-pill"><i class="fa-solid fa-location-dot"></i> GTN College Road</span>
                <span class="area-pill"><i class="fa-solid fa-location-dot"></i> Begambur</span>
                <span class="area-pill"><i class="fa-solid fa-location-dot"></i> Mendonsa Colony</span>
                <span class="area-pill"><i class="fa-solid fa-location-dot"></i> Chinnalapatti</span>
                <span class="area-pill"><i class="fa-solid fa-location-dot"></i> Vadamadurai</span>
                <span class="area-pill"><i class="fa-solid fa-location-dot"></i> Oddanchatram</span>
                <span class="area-pill"><i class="fa-solid fa-location-dot"></i> Palani</span>
                <span class="area-pill"><i class="fa-solid fa-location-dot"></i> Kodaikanal</span>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================
     SECTION 7: COMMON QUESTIONS (FAQ FOR LOCAL FAMILIES)
     ======================================================== -->
<section class="section section-white" style="background-color: #F8F9FA; border-top: 1px solid var(--border-light);">
    <div class="container">
        <div class="section-header text-center fade-in-right">
            <div class="badge-tag"><i class="fa-solid fa-circle-question text-gold"></i> Got Questions?</div>
            <h2 class="section-title">Answers to Questions You May Have</h2>
            <p class="section-subtitle">
                Clear answers in plain language to the most common questions our clients in Dindigul ask us.
            </p>
        </div>

        <div class="about-faq-grid">
            
            <!-- Q1 -->
            <div class="faq-card fade-in-right">
                <div class="faq-card-question">
                    <i class="fa-solid fa-circle-question"></i>
                    <span>Can I build on my plot using my own floor plan?</span>
                </div>
                <p class="faq-card-answer">
                    Yes, absolutely! If you already have a floor plan or blueprint, we will review it for structural stability and Vastu, give you an itemized quotation, and construct it exactly as per your drawing. If you don't have a plan, our architects will design one from scratch for you.
                </p>
            </div>

            <!-- Q2 -->
            <div class="faq-card fade-in-left">
                <div class="faq-card-question">
                    <i class="fa-solid fa-circle-question"></i>
                    <span>What does your Turnkey Construction package include?</span>
                </div>
                <p class="faq-card-answer">
                    Turnkey means we take complete, single-point responsibility from start to finish. It includes 2D & 3D architectural drawings, soil testing, foundation, structure, brickwork, plastering, electrical wiring, plumbing lines, flooring tiles, bathroom fittings, woodwork, interior & exterior painting, and clean key handover. You simply walk into a finished home.
                </p>
            </div>

            <!-- Q3 -->
            <div class="faq-card fade-in-right">
                <div class="faq-card-question">
                    <i class="fa-solid fa-circle-question"></i>
                    <span>Do you assist with Bank Home Loans?</span>
                </div>
                <p class="faq-card-answer">
                    Yes. We provide complete documentation needed for bank loans, including certified civil engineering cost estimates, municipal approval blue prints, stage completion certificates, and structural engineer valuation reports accepted by SBI, Canara Bank, HDFC, Indian Bank, and other major financial institutions.
                </p>
            </div>

            <!-- Q4 -->
            <div class="faq-card fade-in-left">
                <div class="faq-card-question">
                    <i class="fa-solid fa-circle-question"></i>
                    <span>I live abroad (NRI) or in Chennai/Bangalore. How can I track my home?</span>
                </div>
                <p class="faq-card-answer">
                    More than 35% of our clients are NRIs or working in major cities. We assign a dedicated site engineer who sends you regular photo and video updates on WhatsApp after every work stage. Milestone payments are only released after you review and approve each stage online.
                </p>
            </div>

            <!-- Q5 -->
            <div class="faq-card fade-in-right">
                <div class="faq-card-question">
                    <i class="fa-solid fa-circle-question"></i>
                    <span>What happens if market steel or cement prices rise during building?</span>
                </div>
                <p class="faq-card-answer">
                    You pay nothing extra. Once we sign our fixed-price construction agreement, GK Construction absorbs any market price escalations. The rate agreed on day one is 100% locked until key handover.
                </p>
            </div>

            <!-- Q6 -->
            <div class="faq-card fade-in-left">
                <div class="faq-card-question">
                    <i class="fa-solid fa-circle-question"></i>
                    <span>How do I get started with GK Construction?</span>
                </div>
                <p class="faq-card-answer">
                    Getting started is completely free and simple. Call us at <strong><?php echo SITE_PHONE; ?></strong> or send a message on WhatsApp. We will schedule a visit to your plot in Dindigul, discuss your family's needs, and provide a clear layout proposal and quotation with zero obligation.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- ========================================================
     SECTION 8: FINAL WARM CALL TO ACTION
     ======================================================== -->
<section class="section section-white" style="text-align: center; padding: 75px 0;">
    <div class="container">
        <div class="badge-tag"><i class="fa-solid fa-mug-hot text-gold"></i> Let's Talk</div>
        <h2 style="font-size: 2.3rem; color: var(--text-dark-primary); margin-bottom: 14px; font-weight: 800;">
            Ready to Build Your Dream Home in <span class="highlight-gold">Dindigul</span>?
        </h2>
        <p style="color: var(--text-dark-secondary); max-width: 680px; margin: 0 auto 32px; font-size: 1.05rem; line-height: 1.7;">
            Visit our office on GTN Salai Road (near MSP School) or schedule a free plot visit today. Our Chief Civil Engineer is always happy to meet you, inspect your land, and share practical advice over tea.
        </p>
        <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
            <a href="contact.php" class="btn btn-gold btn-shimmer">
                <span>Book Free Plot Consultation</span>
                <i class="fa-solid fa-calendar-check"></i>
            </a>
            <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" class="btn btn-outline-gold">
                <i class="fa-brands fa-whatsapp text-gold"></i>
                <span>Chat with Engineer on WhatsApp</span>
            </a>
            <a href="tel:<?php echo str_replace(' ', '', SITE_PHONE); ?>" class="btn btn-outline-white" style="color: var(--text-dark-primary); border-color: #CBD5E1;">
                <i class="fa-solid fa-phone text-gold"></i>
                <span><?php echo SITE_PHONE; ?></span>
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
