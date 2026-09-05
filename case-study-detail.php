<?php require_once 'includes/header.php'; ?>

<?php
$case_id = $_GET['id'] ?? 'speed-homes';

// Mock Data
$client = "Speed Homes";
$industry = "Real Estate";
$year = "2023";
if($case_id == 'health-easy-emi') { $client = "Health Easy EMI"; $industry = "Healthcare"; }
if($case_id == 'bharati-vidyapeeth') { $client = "Bharati Vidyapeeth"; $industry = "Education"; }
?>

<!-- Case Study Header (MATCHING HOMEPAGE COLOR & DESIGN) -->
<section class="hero-section text-center position-relative overflow-hidden">
    <div class="hero-overlay"></div>
    <div class="container hero-content position-relative z-index-1 py-4">
        <div class="eyebrow-badge mb-3">
            <span class="pulse-dot"></span> <?php echo $industry; ?> Case Study
        </div>
        <h1 class="display-4 fw-bold mb-3"><?php echo $client; ?></h1>
        <p class="lead mb-0 max-w-75 mx-auto text-muted">Transforming digital presence and driving exponential growth through data-driven performance marketing.</p>
    </div>
</section>

<!-- Overview Metadata -->
<section class="py-4 bg-white border-bottom">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-4">
                <p class="text-muted small fw-bold mb-1 text-uppercase">Client</p>
                <h5 class="fw-bold"><?php echo $client; ?></h5>
            </div>
            <div class="col-md-4">
                <p class="text-muted small fw-bold mb-1 text-uppercase">Industry</p>
                <h5 class="fw-bold"><?php echo $industry; ?></h5>
            </div>
            <div class="col-md-4">
                <p class="text-muted small fw-bold mb-1 text-uppercase">Timeline</p>
                <h5 class="fw-bold">6 Months - <?php echo $year; ?></h5>
            </div>
        </div>
    </div>
</section>

<!-- Content Sections -->
<section class="section-padding bg-subtle-blue">
    <div class="container">
        <!-- The Challenge -->
        <div class="row align-items-center mb-5 pb-5 border-bottom border-light reveal">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <h3 class="fw-bold mb-3 text-brand-blue">The Challenge</h3>
                <div style="height: 4px; width: 60px; background: var(--brand-blue); border-radius: 2px;"></div>
            </div>
            <div class="col-lg-7">
                <p class="text-muted lead">Before partnering with DigiBrandz, <?php echo $client; ?> struggled with extremely high Cost Per Lead (CPL) and low conversion rates. Their existing digital campaigns lacked proper tracking, audience segmentation, and compelling creative assets. They needed a holistic approach to drastically reduce acquisition costs while simultaneously scaling volume.</p>
            </div>
        </div>
        
        <!-- What We Did -->
        <div class="row align-items-center mb-5 pb-5 border-bottom border-light reveal" style="transition-delay: 0.2s;">
            <div class="col-lg-5 mb-4 mb-lg-0 order-lg-2">
                <h3 class="fw-bold mb-3 text-brand-pink">What We Did</h3>
                <div style="height: 4px; width: 60px; background: var(--brand-pink); border-radius: 2px;"></div>
            </div>
            <div class="col-lg-7 order-lg-1">
                <ul class="list-unstyled mb-0">
                    <li class="mb-3 d-flex align-items-start">
                        <i class="fas fa-check-circle mt-1 me-3 fs-5 text-brand-pink"></i>
                        <span class="text-muted"><strong>Complete UI/UX Overhaul:</strong> Redesigned their landing pages for maximum conversion rate optimization (CRO).</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <i class="fas fa-check-circle mt-1 me-3 fs-5 text-brand-pink"></i>
                        <span class="text-muted"><strong>Audience Restructuring:</strong> Implemented Lookalike audiences and deep pixel-tracking for precise retargeting.</span>
                    </li>
                    <li class="d-flex align-items-start">
                        <i class="fas fa-check-circle mt-1 me-3 fs-5 text-brand-pink"></i>
                        <span class="text-muted"><strong>Creative Refresh:</strong> Deployed AI-generated video assets and A/B tested ad copies continuously.</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- The Results -->
        <div class="row align-items-center reveal" style="transition-delay: 0.3s;">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <h3 class="fw-bold mb-3 text-brand-purple">The Results</h3>
                <div style="height: 4px; width: 60px; background: var(--brand-purple); border-radius: 2px;"></div>
            </div>
            <div class="col-lg-7">
                <p class="text-muted lead mb-4">Within just 90 days, the restructured campaigns and optimized landing pages generated a massive influx of high-intent traffic.</p>
                <div class="row g-4 text-center">
                    <div class="col-md-4">
                        <div class="aesthetic-card p-4 bg-white border-0">
                            <h2 class="display-6 fw-bold text-brand-purple mb-1">40%</h2>
                            <p class="text-muted small mb-0">Reduction in CPL</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="aesthetic-card p-4 bg-white border-0">
                            <h2 class="display-6 fw-bold text-brand-purple mb-1">3.5x</h2>
                            <p class="text-muted small mb-0">Increase in ROAS</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="aesthetic-card p-4 bg-white border-0">
                            <h2 class="display-6 fw-bold text-brand-purple mb-1">10k+</h2>
                            <p class="text-muted small mb-0">New Leads</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="section-padding bg-white text-center">
    <div class="container reveal">
        <h2 class="display-5 fw-bold mb-4">Want Results Like This?</h2>
        <p class="text-muted mb-5 max-w-75 mx-auto lead">Let's build a customized strategy for your brand.</p>
        <a href="contact.php" class="btn btn-gradient btn-lg px-5">Contact Us</a>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
