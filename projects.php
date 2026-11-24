<?php
/**
 * GK Construction - Our Projects
 * Theme: Premium Gold, Black, and White
 * Location: Dindigul, Tamil Nadu
 */
require_once 'includes/config.php';

$current_page = 'projects';
$page_title = 'Our Landmark Projects | Residential & Commercial';

include 'includes/header.php';
?>

<!-- Premium Subpage Banner (Obsidian Black, Gold & White) -->
<section class="page-banner-premium">
    <div class="container">
        <div class="badge-tag-dark"><i class="fa-solid fa-building-circle-check text-gold"></i> Masterpiece Portfolio</div>
        <h1 class="page-banner-title">Our Signature <span class="highlight-gold">Landmark Projects</span></h1>
        <p class="page-banner-desc">
            Explore our diverse portfolio of traditional residences, luxury villas, commercial towers, and industrial facilities completed across Dindigul and South Tamil Nadu.
        </p>
    </div>
</section>

<!-- Filterable Projects Section (Clean Images, No Words Stamped on Photos) -->
<section class="section section-white">
    <div class="container">
        <div class="project-filters">
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
                        <span style="color: #128C7E; font-weight: 700;">Ongoing (85%)</span>
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
                        <span style="color: #128C7E; font-weight: 700;">Ongoing (60%)</span>
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

        <div style="text-align: center; margin-top: 55px;">
            <a href="contact.php" class="btn btn-gold btn-shimmer">
                <span>Start Your Construction With Us</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
