<?php
/**
 * GK Construction - Corporate Home Page
 * Theme: Premium Gold, Black, and White
 * Typography: Poppins
 * Location: Dindigul, Tamil Nadu
 */

require_once 'includes/config.php';

$current_page = 'home';
$page_title = 'Premier Builders & Civil Engineering Firm | Dindigul';

include 'includes/header.php';
?>

<!-- ========================================================
     FULL STRETCH HERO BANNER (JET BLACK, GOLD & SUNLIT RESIDENCE)
     ======================================================== -->
<section class="full-stretch-hero">
    <!-- Vivid Sunlit Luxury Home Visual (Right Side) -->
    <img 
        src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&w=1920&q=92" 
        alt="GK Construction Landmark Residence in Dindigul" 
        class="hero-full-stretch-image"
    >

    <!-- Obsidian Black to Transparent Gradient Overlay -->
    <div class="hero-stretch-overlay"></div>

    <div class="container">
        <div class="hero-stretch-content-wrap">
            <div class="badge-tag-dark">
                <i class="fa-solid fa-compass-drafting text-gold"></i> Built With Precision &bull; Dindigul
            </div>

            <!-- Exact 2-Line Heading with Gold Accent -->
            <h1 class="hero-stretch-title">
                <span class="hero-line-1">Building Architectural Landmarks</span><br>
                <span class="hero-line-2 highlight-gold">in Dindigul</span>
            </h1>

            <!-- Concise 2-Line Description in Soft White -->
            <p class="hero-stretch-desc">
                We design and construct bespoke luxury homes and commercial landmarks across South Tamil Nadu. Engineered with structural integrity, traditional Vastu principles, and enduring craftsmanship.
            </p>

            <!-- 2 Clean Requested CTAs -->
            <div class="hero-stretch-actions">
                <a href="contact.php" class="btn btn-gold btn-shimmer">
                    <span>Get Free Consultation</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="projects.php" class="btn btn-outline-white">
                    <span>Explore Our Projects</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================
     KEY METRICS STRIP (PURE WHITE WITH GOLD & BLACK ACCENTS)
     ======================================================== -->
<section class="stats-strip-section">
    <div class="container">
        <div class="stats-card-container">
            <?php $stat_i = 1; foreach ($company_stats as $stat): ?>
                <div class="stat-box fade-in-up delay-<?php echo $stat_i++; ?>">
                    <div class="stat-number"><?php echo $stat['count']; ?></div>
                    <div class="stat-label"><?php echo $stat['label']; ?></div>
                    <div class="stat-sub"><?php echo $stat['sub']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========================================================
     ABOUT GK CONSTRUCTION (PURE WHITE SECTION)
     ======================================================== -->
<section class="section section-white" id="about">
    <div class="container">
        <div class="about-single-layout">
            
            <!-- Left: Single Bigger Image -->
            <div class="about-single-img-wrap fade-in-left">
                <img 
                    src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=88" 
                    alt="Finished Luxury Landmark Residence in Dindigul" 
                    class="about-single-img"
                >
            </div>

            <!-- Right: Punchy Concise Copy with Visual Highlight Cards -->
            <div class="fade-in-right">
                <div class="badge-tag"><i class="fa-solid fa-cube text-gold"></i> About GK Construction</div>
                <h2 class="section-title">
                    Master Builders Rooted in <span class="highlight-gold">Dindigul</span>
                </h2>
                <p style="font-size: 1.05rem; color: var(--text-dark-secondary); line-height: 1.75;">
                    With over 15 years of civil engineering excellence, <strong>GK Construction</strong> delivers structural perfection, transparent pricing, and timely execution for every home and commercial landmark in Dindigul.
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
                        <strong>Fe 550D Steel</strong>
                        <span>Tata & UltraTech</span>
                    </div>
                    <div class="about-mini-card">
                        <i class="fa-solid fa-shield-halved"></i>
                        <strong>10-Yr Deed</strong>
                        <span>Structural Warranty</span>
                    </div>
                </div>

                <div style="display: flex; gap: 14px; flex-wrap: wrap; margin-top: 24px;">
                    <a href="about.php" class="btn btn-outline-gold">
                        <span>Read Our Story</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="contact.php" class="btn btn-gold btn-shimmer">
                        <span>Get Free Consultation</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ========================================================
     SPECIALIZED CIVIL SERVICES (LUXURY BLACK & GOLD SECTION)
     ======================================================== -->
<section class="section section-black" id="services">
    <div class="container">
        <div class="section-header fade-in-left">
            <div class="badge-tag-dark"><i class="fa-solid fa-wrench text-gold"></i> What We Build</div>
            <h2 class="section-title">End-to-End <span class="highlight-gold">Civil Engineering</span> Solutions</h2>
            <p class="section-subtitle">Comprehensive construction and turnkey development services delivered with uncompromising precision.</p>
        </div>

        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card-dark fade-in-up delay-1">
                <div class="service-card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=700&q=80" alt="Traditional & Luxury Residences">
                </div>
                <div class="service-card-body">
                    <h3>Traditional & Luxury Homes</h3>
                    <p>Bespoke individual residences designed with traditional Vastu and premium Italian marble finishing.</p>
                    <a href="projects.php" class="service-link">View Residential Portfolio <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="service-card-dark fade-in-up delay-2">
                <div class="service-card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=700&q=80" alt="Commercial Complexes & Hubs">
                </div>
                <div class="service-card-body">
                    <h3>Commercial Hubs & Plazas</h3>
                    <p>Modern retail complexes, showrooms, and office towers engineered for high footfall and durability.</p>
                    <a href="projects.php" class="service-link">View Commercial Projects <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="service-card-dark fade-in-up delay-3">
                <div class="service-card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=700&q=80" alt="Industrial Sheds & Warehouses">
                </div>
                <div class="service-card-body">
                    <h3>Industrial Sheds & Warehouses</h3>
                    <p>Pre-Engineered Building (PEB) structures, cold storage facilities, and heavy-duty factory spaces.</p>
                    <a href="projects.php" class="service-link">View Industrial Projects <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="service-card-dark fade-in-up delay-4">
                <div class="service-card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=700&q=80" alt="3D Architectural & Vastu Planning">
                </div>
                <div class="service-card-body">
                    <h3>3D Architectural & Vastu Plans</h3>
                    <p>Photorealistic 3D external elevation renders, municipal sanction plans, and Vastu layouts.</p>
                    <a href="contact.php" class="service-link">Book Planning Session <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="service-card-dark fade-in-up delay-5">
                <div class="service-card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=700&q=80" alt="Structural Renovation">
                </div>
                <div class="service-card-body">
                    <h3>Renovation & Retrofitting</h3>
                    <p>Structural strengthening, modern elevation facelifts, and heritage home restorations.</p>
                    <a href="contact.php" class="service-link">Inquire for Renovation <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="service-card-dark fade-in-up delay-6">
                <div class="service-card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=700&q=80" alt="Turnkey Contracting">
                </div>
                <div class="service-card-body">
                    <h3>Turnkey Contracting</h3>
                    <p>Complete single-point accountability from foundation breaking to final key handover.</p>
                    <a href="contact.php" class="service-link">Request Turnkey Proposal <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================
     WHY GK CONSTRUCTION (CORE GUARANTEES & PROMISES)
     ======================================================== -->
<section class="section section-why-gk" id="why-gk">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header text-center fade-in-right">
            <div class="badge-tag"><i class="fa-solid fa-shield-halved text-gold"></i> The GK Construction Promise</div>
            <h2 class="section-title">
                Why Build With <span class="highlight-gold">GK Construction?</span>
            </h2>
            <p class="section-subtitle">
                We eliminate construction risks, hidden charges, and project delays. Experience turnkey luxury home building backed by strict legal guarantees and uncompromising engineering standards in Dindigul.
            </p>
        </div>

        <!-- 5 Core Guarantees Grid -->
        <div class="why-gk-grid">
            
            <!-- Card 1: Zero Delay Policy -->
            <div class="why-gk-card fade-in-up delay-1">
                <div class="why-card-top">
                    <div class="why-icon-box">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                    </div>
                    <span class="why-pill-badge">Contractual Penalty</span>
                </div>
                <h3 class="why-card-title">Zero Delay Guarantee</h3>
                <p class="why-card-desc">
                    We commit to project handover dates registered in your contract. In the rare event of a delay on our end, we pay a contractual penalty for every week of delay.
                </p>
                <div class="why-card-footer">
                    <i class="fa-solid fa-circle-check text-gold"></i>
                    <span>100% On-Time Handover Track Record</span>
                </div>
            </div>

            <!-- Card 2: 450+ QC Checks -->
            <div class="why-gk-card fade-in-up delay-2">
                <div class="why-card-top">
                    <div class="why-icon-box">
                        <i class="fa-solid fa-clipboard-check"></i>
                    </div>
                    <span class="why-pill-badge">450+ Checklist Points</span>
                </div>
                <h3 class="why-card-title">450+ Quality Control Checks</h3>
                <p class="why-card-desc">
                    Every stage—from soil bearing tests, shuttering, steel reinforcement to concrete cube compression tests—passes rigorous engineer-verified quality checkpoints.
                </p>
                <div class="why-card-footer">
                    <i class="fa-solid fa-circle-check text-gold"></i>
                    <span>Tata Tiscon & UltraTech 53 Grade</span>
                </div>
            </div>

            <!-- Card 3: Milestone Money Safety -->
            <div class="why-gk-card fade-in-up delay-3">
                <div class="why-card-top">
                    <div class="why-icon-box">
                        <i class="fa-solid fa-vault"></i>
                    </div>
                    <span class="why-pill-badge">Stage-by-Stage</span>
                </div>
                <h3 class="why-card-title">Escrow Milestone Money Safety</h3>
                <p class="why-card-desc">
                    Never pay upfront advances. Your funds are linked to tangible construction milestones. You only approve payments after inspecting each completed construction stage.
                </p>
                <div class="why-card-footer">
                    <i class="fa-solid fa-circle-check text-gold"></i>
                    <span>Zero Upfront Financial Risk</span>
                </div>
            </div>

            <!-- Card 4: 100% Price Lock -->
            <div class="why-gk-card fade-in-up delay-4">
                <div class="why-card-top">
                    <div class="why-icon-box">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>
                    <span class="why-pill-badge">Fixed Price Lock</span>
                </div>
                <h3 class="why-card-title">Zero Cost Overruns Guarantee</h3>
                <p class="why-card-desc">
                    Comprehensive, itemized Bill of Quantities (BOQ) with transparent brand specifications. No hidden costs, no surprise mid-project escalations, and guaranteed fixed pricing.
                </p>
                <div class="why-card-footer">
                    <i class="fa-solid fa-circle-check text-gold"></i>
                    <span>Legally Binding BOQ Agreement</span>
                </div>
            </div>

            <!-- Card 5: 10-Year Structural Warranty -->
            <div class="why-gk-card fade-in-up delay-5">
                <div class="why-card-top">
                    <div class="why-icon-box">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <span class="why-pill-badge">10-Year Legal Deed</span>
                </div>
                <h3 class="why-card-title">10-Year Structural Warranty</h3>
                <p class="why-card-desc">
                    We stand by our craftsmanship. Every building is covered by a registered 10-year structural stability deed guaranteeing foundation, RCC frame, and damp-proof integrity.
                </p>
                <div class="why-card-footer">
                    <i class="fa-solid fa-circle-check text-gold"></i>
                    <span>Formal Registered Warranty Deed</span>
                </div>
            </div>

        </div>

        <!-- Consultation Banner Bar inside Why GK -->
        <div class="why-gk-cta-banner fade-in-up">
            <div class="why-cta-content">
                <h4>Ready to Build Without Hassle or Compromise?</h4>
                <p>Consult with our lead civil engineers in Dindigul for free soil assessment, architectural layout advice, and fixed-price quotation.</p>
            </div>
            <div class="why-cta-actions">
                <a href="contact.php" class="btn btn-gold btn-shimmer">
                    <span>Book Free Consultation</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="tel:<?php echo str_replace(' ', '', SITE_PHONE); ?>" class="btn btn-outline-white">
                    <i class="fa-solid fa-phone"></i>
                    <span><?php echo SITE_PHONE; ?></span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================
     FEATURED PROJECTS SHOWCASE (PURE WHITE SECTION)
     ======================================================== -->
<section class="section section-white" id="projects">
    <div class="container">
        <div class="section-header fade-in-left">
            <div class="badge-tag"><i class="fa-solid fa-building text-gold"></i> Signature Portfolio</div>
            <h2 class="section-title">Selected Projects Across <span class="highlight-gold">Tamil Nadu</span></h2>
            <p class="section-subtitle">Take a look at some of our landmark traditional homes, modern villas, and commercial developments in Dindigul, Palani, and Kodaikanal.</p>
        </div>

        <!-- Category Filters -->
        <div class="project-filters fade-in-up">
            <button class="filter-btn active" data-filter="all">All Projects</button>
            <button class="filter-btn" data-filter="residential">Residential Homes</button>
            <button class="filter-btn" data-filter="commercial">Commercial Plazas</button>
            <button class="filter-btn" data-filter="ongoing">Ongoing Sites</button>
        </div>

        <div class="projects-grid">
            <!-- Project 1 -->
            <div class="project-card" data-category="residential">
                <div class="project-image-box">
                    <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&w=800&q=80" alt="Royal Palm Villa Dindigul">
                </div>
                <div class="project-details">
                    <div class="project-meta">
                        <span><i class="fa-solid fa-location-dot"></i> Palani Road, Dindigul</span>
                        <span>Delivered</span>
                    </div>
                    <h4>The Royal Palm Luxury Residence</h4>
                    <p>4,800 Sq.Ft traditional architectural duplex residence with cantilevered balcony, private landscaped courtyard, and Italian marble finish.</p>
                    <div class="project-spec-strip">
                        <span><i class="fa-solid fa-ruler-combined"></i> 4,800 Sq.Ft</span>
                        <span><i class="fa-solid fa-calendar-check"></i> Handover: 2026</span>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card" data-category="commercial">
                <div class="project-image-box">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80" alt="GK Horizon Commercial Plaza">
                </div>
                <div class="project-details">
                    <div class="project-meta">
                        <span><i class="fa-solid fa-location-dot"></i> Bypass Junction, Dindigul</span>
                        <span>Delivered</span>
                    </div>
                    <h4>GK Horizon Business Tower</h4>
                    <p>18,500 Sq.Ft G+4 commercial complex with modern glass curtain walls, basement parking, and advanced fire suppression systems.</p>
                    <div class="project-spec-strip">
                        <span><i class="fa-solid fa-ruler-combined"></i> 18,500 Sq.Ft</span>
                        <span><i class="fa-solid fa-calendar-check"></i> Handover: 2025</span>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card" data-category="residential">
                <div class="project-image-box">
                    <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=800&q=80" alt="Kodaikanal Hillside Residence">
                </div>
                <div class="project-details">
                    <div class="project-meta">
                        <span><i class="fa-solid fa-location-dot"></i> Kodaikanal Valley View</span>
                        <span>Delivered</span>
                    </div>
                    <h4>Kodaikanal Hill View Chalet</h4>
                    <p>Eco-friendly stone and timber luxury estate engineered on challenging slope terrain with thermal insulation and rainwater harvesting.</p>
                    <div class="project-spec-strip">
                        <span><i class="fa-solid fa-ruler-combined"></i> 3,600 Sq.Ft</span>
                        <span><i class="fa-solid fa-calendar-check"></i> Handover: 2025</span>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="project-card" data-category="ongoing">
                <div class="project-image-box">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=800&q=80" alt="Spencer Crown Plaza Dindigul">
                </div>
                <div class="project-details">
                    <div class="project-meta">
                        <span><i class="fa-solid fa-location-dot"></i> Spencer Compound, Dindigul</span>
                        <span style="color: #128C7E;">Ongoing (85%)</span>
                    </div>
                    <h4>Spencer Crown Plaza</h4>
                    <p>G+5 mixed commercial and retail space currently undergoing premium external facade finishing and electrical installations.</p>
                    <div class="project-spec-strip">
                        <span><i class="fa-solid fa-ruler-combined"></i> 22,000 Sq.Ft</span>
                        <span><i class="fa-solid fa-calendar-check"></i> Target: Q1 2027</span>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="project-card" data-category="residential">
                <div class="project-image-box">
                    <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=800&q=80" alt="Batlagundu Villa">
                </div>
                <div class="project-details">
                    <div class="project-meta">
                        <span><i class="fa-solid fa-location-dot"></i> Batlagundu, Dindigul</span>
                        <span>Delivered</span>
                    </div>
                    <h4>The Annamalai Heritage Residence</h4>
                    <p>Fusion of Chettinad traditional architecture with modern open-concept floor plans, teak pillars, and natural skylight courtyards.</p>
                    <div class="project-spec-strip">
                        <span><i class="fa-solid fa-ruler-combined"></i> 4,200 Sq.Ft</span>
                        <span><i class="fa-solid fa-calendar-check"></i> Handover: 2024</span>
                    </div>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="project-card" data-category="ongoing">
                <div class="project-image-box">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=800&q=80" alt="Industrial Agro Facility Oddanchatram">
                </div>
                <div class="project-details">
                    <div class="project-meta">
                        <span><i class="fa-solid fa-location-dot"></i> Oddanchatram Highway</span>
                        <span style="color: #128C7E;">Ongoing (60%)</span>
                    </div>
                    <h4>Apex Agro Cold Storage Facility</h4>
                    <p>Heavy duty steel PEB structure with temperature-controlled cold chambers, heavy vehicular loading bays, and 100kW solar roof integration.</p>
                    <div class="project-spec-strip">
                        <span><i class="fa-solid fa-ruler-combined"></i> 28,000 Sq.Ft</span>
                        <span><i class="fa-solid fa-calendar-check"></i> Target: Q2 2027</span>
                    </div>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 48px;">
            <a href="gallery.php" class="btn btn-outline-gold">
                <i class="fa-solid fa-images"></i>
                <span>Explore Complete Site Photo Gallery</span>
            </a>
        </div>
    </div>
</section>

<!-- ========================================================
     FINE-TUNED PRECISION ENGINEERING ROADMAP (LUXURY BLACK & GOLD)
     ======================================================== -->
<section class="section section-black">
    <div class="container">
        <div class="section-header">
            <div class="badge-tag-dark"><i class="fa-solid fa-network-wired text-gold"></i> Our Work Process</div>
            <h2 class="section-title">The <span class="highlight-gold">Precision Engineering</span> Roadmap</h2>
            <p class="section-subtitle">How GK Construction ensures seamless execution, strict quality compliance, and on-time handover.</p>
        </div>

        <div class="process-grid">
            <!-- Step 1 -->
            <div class="process-card-dark">
                <div class="process-step-indicator">01</div>
                <h4>Vastu & Blueprint</h4>
                <p>Topographical land survey in Dindigul, soil quality testing, and 100% Vastu-aligned architectural layouts.</p>
            </div>

            <!-- Step 2 -->
            <div class="process-card-dark">
                <div class="process-step-indicator">02</div>
                <h4>3D Design & Fixed Quote</h4>
                <p>Photorealistic 3D elevations, structural CAD drawings, and a fixed-cost contract with zero hidden escalations.</p>
            </div>

            <!-- Step 3 -->
            <div class="process-card-dark">
                <div class="process-step-indicator">03</div>
                <h4>Civil Execution & QC</h4>
                <p>On-site supervision by licensed civil engineers, concrete cube strength testing, and weekly client updates.</p>
            </div>

            <!-- Step 4 -->
            <div class="process-card-dark">
                <div class="process-step-indicator">04</div>
                <h4>Inspection & Handover</h4>
                <p>Comprehensive 75-point snag list audit, deep cleaning, formal handover ceremony, and 10-Year Warranty deed.</p>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================
     CLIENT TESTIMONIALS & TRUST (PURE WHITE SECTION)
     ======================================================== -->
<section class="section section-white">
    <div class="container">
        <div class="section-header">
            <div class="badge-tag"><i class="fa-solid fa-comments text-gold"></i> Client Testimonials</div>
            <h2 class="section-title">Trusted by Leading Families & <span class="highlight-gold">Enterprises</span></h2>
            <p class="section-subtitle">Read how our engineering precision, traditional craftsmanship, and transparent communication deliver peace of mind.</p>
        </div>

        <div class="testimonials-grid">
            <!-- Review 1 -->
            <div class="testimonial-card">
                <div>
                    <div class="test-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="test-text">
                        "Building our family home on Palani Road was a cherished dream. GK Construction finished our 4,800 sq ft traditional villa 20 days ahead of schedule! Their engineering precision was exemplary."
                    </p>
                </div>
                <div class="test-author">
                    <div class="author-avatar">Dr. R</div>
                    <div class="author-info">
                        <strong>Dr. R. Senthamilselvan</strong>
                        <span>Cardiologist &bull; Palani Road, Dindigul</span>
                    </div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="testimonial-card">
                <div>
                    <div class="test-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="test-text">
                        "As an NRI living in Singapore, managing construction in Dindigul felt daunting. GK Construction handled everything—from traditional Vastu planning to interior woodwork. Truly built with precision!"
                    </p>
                </div>
                <div class="test-author">
                    <div class="author-avatar">M.K</div>
                    <div class="author-info">
                        <strong>M. Karthik Raja</strong>
                        <span>Tech Director & Homeowner (Singapore / Dindigul)</span>
                    </div>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="testimonial-card">
                <div>
                    <div class="test-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="test-text">
                        "GK Construction constructed our 4-story commercial showroom complex near the Bypass. Zero budget creep, high-grade concrete testing, and great support for fire NOC compliance."
                    </p>
                </div>
                <div class="test-author">
                    <div class="author-avatar">P.V</div>
                    <div class="author-info">
                        <strong>P. Venkatesh Kumar</strong>
                        <span>Managing Director, Sri Meenakshi Textiles</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================
     DINDIGUL HEADQUARTERS & LOCATION SECTION (WHITE & GOLD)
     ======================================================== -->
<section class="section section-white" style="padding-bottom: 85px;">
    <div class="container">
        <div class="location-box">
            <div class="fade-in-left">
                <div class="badge-tag"><i class="fa-solid fa-location-dot text-gold"></i> Dindigul Head Office</div>
                <h3 style="font-size: 2.2rem; margin-bottom: 16px; color: var(--text-dark-primary);">Visit Our Headquarters or Schedule a Site Review</h3>
                <p style="color: var(--text-dark-secondary); margin-bottom: 24px; font-size: 1.05rem;">
                    Conveniently situated at 15, GTN Salai Road, near MSP School, Masilamanipuram, Anna Nagar, Dindigul. Walk in to inspect our material samples, review 3D architectural plans, or book a personal plot inspection with our Chief Civil Engineer.
                </p>
                <div style="display: flex; flex-direction: column; gap: 16px; margin-bottom: 30px;">
                    <div style="display: flex; align-items: flex-start; gap: 14px;">
                        <i class="fa-solid fa-building text-gold" style="font-size: 1.3rem; margin-top: 4px;"></i>
                        <span style="font-weight: 500; color: var(--text-dark-primary); font-size: 1rem;"><?php echo SITE_ADDRESS; ?></span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 14px;">
                        <i class="fa-solid fa-phone-volume text-gold" style="font-size: 1.3rem;"></i>
                        <span style="color: var(--text-dark-primary); font-size: 1.05rem;">Helpline: <strong class="text-gold"><?php echo SITE_PHONE; ?></strong></span>
                    </div>
                </div>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="contact.php" class="btn btn-gold btn-shimmer">
                        <span>Book Site Visit Now</span>
                        <i class="fa-solid fa-calendar-check"></i>
                    </a>
                    <a href="<?php echo WHATSAPP_LINK; ?>" class="btn btn-outline-gold" target="_blank">
                        <i class="fa-brands fa-whatsapp text-gold"></i>
                        <span>WhatsApp Us</span>
                    </a>
                </div>
            </div>

            <!-- Clean High-Clarity Dindigul Central Map Embed -->
            <div class="fade-in-right" style="border-radius: var(--radius-lg); overflow: hidden; height: 350px; position: relative; box-shadow: var(--shadow-image); border: none !important;">
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
    </div>
</section>

<?php include 'includes/footer.php'; ?>
