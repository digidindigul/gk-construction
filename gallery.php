<?php
/**
 * GK Construction - Gallery
 * Theme: Premium Gold, Black, and White
 * Location: Dindigul, Tamil Nadu
 */
require_once 'includes/config.php';

$current_page = 'gallery';
$page_title = 'Site & Construction Gallery | GK Construction';

include 'includes/header.php';

$gallery_items = [
    [
        'title' => 'Structural Concrete Pour & Quality Testing',
        'category' => 'Civil Engineering',
        'img' => 'https://images.unsplash.com/photo-1541888946425-d0fbb186c5f7?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'title' => 'Traditional Tamil Nadu Luxury Villa Elevation',
        'category' => 'Traditional Residence',
        'img' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'title' => 'Commercial Plaza Curtain Wall Architecture',
        'category' => 'Commercial Hub',
        'img' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'title' => 'Hillside Stone & Timber Luxury Residence',
        'category' => 'Luxury Residence',
        'img' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'title' => 'Heavy PEB Industrial Warehouse Framing',
        'category' => 'Industrial PEB',
        'img' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'title' => 'High-Ceiling Italian Marble Living Courtyard',
        'category' => 'Interior Architecture',
        'img' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=800&q=80'
    ]
];
?>

<!-- Premium Subpage Banner (Obsidian Black, Gold & White) -->
<section class="page-banner-premium">
    <div class="container">
        <div class="badge-tag-dark"><i class="fa-solid fa-images text-gold"></i> Visual Proof of Precision</div>
        <h1 class="page-banner-title">On-Site & Completed <span class="highlight-gold">Project Gallery</span></h1>
        <p class="page-banner-desc">
            Authentic moments from our active construction sites, structural RCC inspections, and finished traditional & luxury residences in Dindigul.
        </p>
    </div>
</section>

<!-- Gallery Grid (Clean Images, Strictly No Borders, No Text Stamped on Photos) -->
<section class="section section-white">
    <div class="container">
        <div class="projects-grid">
            <?php foreach ($gallery_items as $item): ?>
                <div class="project-card">
                    <div class="project-image-box" style="height: 290px;">
                        <img src="<?php echo $item['img']; ?>" alt="<?php echo htmlspecialchars($item['title']); ?>">
                    </div>
                    <div class="project-details">
                        <div class="project-meta">
                            <span><i class="fa-solid fa-tag text-gold"></i> <?php echo htmlspecialchars($item['category']); ?></span>
                            <span>Quality Certified</span>
                        </div>
                        <h4 style="color: var(--text-dark-primary); margin-bottom: 8px;"><?php echo htmlspecialchars($item['title']); ?></h4>
                        <p style="margin-bottom: 0; color: var(--text-dark-secondary); font-size: 0.92rem;">Captured on-site during technical review & final handover.</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div style="text-align: center; margin-top: 55px;">
            <a href="contact.php" class="btn btn-gold btn-shimmer">
                <span>Inquire About Your Project</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
