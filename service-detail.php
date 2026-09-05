<?php require_once 'includes/header.php'; ?>

<!-- Placeholder logic for dynamic content -->
<?php
$service_id = $_GET['id'] ?? 'social-media';
$title = "Service Name";
if($service_id == 'social-media') $title = "Social Media Management";
if($service_id == 'ai-video') $title = "AI Video Production";
if($service_id == 'web-dev') $title = "Custom Web Development";
if($service_id == 'performance') $title = "Performance Marketing";
if($service_id == 'seo') $title = "Search Engine Optimization";
if($service_id == 'ads') $title = "Google & Meta Ads";
?>

<!-- Service Header (MATCHING HOMEPAGE COLOR & DESIGN) -->
<section class="hero-section text-center position-relative overflow-hidden">
    <div class="hero-overlay"></div>
    <div class="container hero-content position-relative z-index-1 py-4">
        <div class="eyebrow-badge mb-3">
            <span class="pulse-dot"></span> Service Detail
        </div>
        <h1 class="display-4 fw-bold mb-3"><?php echo $title; ?></h1>
        <p class="lead mb-0 max-w-75 mx-auto text-muted">Empowering your business with scalable, result-driven digital expertise.</p>
    </div>
</section>

<!-- Introduction & Description -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 reveal">
                <img src="assets/images/home.jpg" alt="Service Description" class="img-fluid rounded" style="box-shadow: var(--shadow-md);">
            </div>
            <div class="col-lg-6 reveal" style="transition-delay: 0.2s;">
                <h2 class="section-title mb-4">Driving Growth Through Innovation</h2>
                <p class="text-muted mb-4">In today's digital landscape, a cookie-cutter approach simply doesn't work. We take the time to understand your unique business objectives, target audience, and competitive landscape to craft a strategy that delivers measurable results.</p>
                <p class="text-muted mb-4">Our approach combines cutting-edge technology, creative excellence, and data-driven insights to ensure every campaign, website, or content piece we produce acts as a powerful catalyst for your brand's growth.</p>
                
                <div class="d-flex gap-4 mt-4">
                    <div class="d-flex flex-column">
                        <h3 class="text-brand-purple mb-1">98%</h3>
                        <p class="text-muted small">Client Satisfaction</p>
                    </div>
                    <div class="d-flex flex-column">
                        <h3 class="text-brand-pink mb-1">4.2x</h3>
                        <p class="text-muted small">Average ROI</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What We Offer & Benefits -->
<section class="section-padding bg-subtle-pink">
    <div class="container">
        <div class="text-center mb-5 reveal">
            <h2 class="section-title mb-3">What We Offer</h2>
            <p class="text-muted lead max-w-75 mx-auto">Key features and benefits of partnering with DigiBrandz for this service.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4 reveal" style="transition-delay: 0.1s;">
                <div class="aesthetic-card p-4 h-100 bg-white">
                    <div class="icon-box mb-3 text-brand-blue fs-3"><i class="fas fa-bullseye"></i></div>
                    <h4 class="mb-3">Targeted Strategy</h4>
                    <p class="text-muted small">We build strategies based on concrete data and deep market research to ensure we hit your exact demographic.</p>
                </div>
            </div>
            <div class="col-md-4 reveal" style="transition-delay: 0.2s;">
                <div class="aesthetic-card p-4 h-100 bg-white">
                    <div class="icon-box mb-3 text-brand-pink fs-3"><i class="fas fa-bolt"></i></div>
                    <h4 class="mb-3">Fast Execution</h4>
                    <p class="text-muted small">Time is money. Our agile teams work rapidly without compromising on the premium quality of output.</p>
                </div>
            </div>
            <div class="col-md-4 reveal" style="transition-delay: 0.3s;">
                <div class="aesthetic-card p-4 h-100 bg-white">
                    <div class="icon-box mb-3 text-brand-purple fs-3"><i class="fas fa-chart-line"></i></div>
                    <h4 class="mb-3">Measurable Results</h4>
                    <p class="text-muted small">Transparent reporting and analytics dashboard so you always know exactly how your investment is performing.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Process -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="text-center mb-5 reveal">
            <h2 class="section-title mb-3">Our Process</h2>
            <p class="text-muted lead">A streamlined workflow designed for maximum efficiency.</p>
        </div>
        
        <div class="row g-0 align-items-center justify-content-center mt-5 position-relative reveal">
            <!-- connecting line -->
            <div class="d-none d-md-block position-absolute" style="height: 4px; background: #F1F5F9; width: 80%; top: 40px; left: 10%; z-index: 0;"></div>
            
            <div class="col-md-3 text-center position-relative z-index-1 mb-4 mb-md-0">
                <div class="bg-subtle-blue text-brand-blue rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px; font-size: 24px; font-weight: bold; border: 4px solid white; box-shadow: var(--shadow-sm);">1</div>
                <h5 class="fw-bold">Discovery</h5>
                <p class="text-muted small px-3">Understanding your business goals and auditing current assets.</p>
            </div>
            
            <div class="col-md-3 text-center position-relative z-index-1 mb-4 mb-md-0">
                <div class="bg-subtle-pink text-brand-pink rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px; font-size: 24px; font-weight: bold; border: 4px solid white; box-shadow: var(--shadow-sm);">2</div>
                <h5 class="fw-bold">Strategy</h5>
                <p class="text-muted small px-3">Developing a custom roadmap tailored to your exact needs.</p>
            </div>
            
            <div class="col-md-3 text-center position-relative z-index-1 mb-4 mb-md-0">
                <div class="bg-subtle-purple text-brand-purple rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px; font-size: 24px; font-weight: bold; border: 4px solid white; box-shadow: var(--shadow-sm);">3</div>
                <h5 class="fw-bold">Execution</h5>
                <p class="text-muted small px-3">Building, launching, and managing the active campaigns.</p>
            </div>
            
            <div class="col-md-3 text-center position-relative z-index-1">
                <div class="bg-subtle-blue text-brand-blue rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px; font-size: 24px; font-weight: bold; border: 4px solid white; box-shadow: var(--shadow-sm);">4</div>
                <h5 class="fw-bold">Optimization</h5>
                <p class="text-muted small px-3">Continuous testing and scaling based on data feedback.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQs -->
<section class="section-padding bg-subtle-blue">
    <div class="container">
        <div class="text-center mb-5 reveal">
            <h2 class="section-title mb-3">Frequently Asked Questions</h2>
            <p class="text-muted lead">Common questions about this service.</p>
        </div>
        <div class="row justify-content-center reveal">
            <div class="col-lg-8">
                <div class="accordion" id="serviceFAQ">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How long does it take to see results?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#serviceFAQ">
                            <div class="accordion-body text-muted">
                                Timelines vary based on the service. SEO typically takes 3-6 months to gain serious traction, while Paid Ads can generate leads within 48 hours of launch. We establish clear timelines during the discovery phase.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Do you provide monthly reports?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#serviceFAQ">
                            <div class="accordion-body text-muted">
                                Yes, transparency is core to our agency. You will receive detailed monthly performance reports, and we also provide a live analytics dashboard for real-time tracking of KPIs.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Can this service be integrated with others?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#serviceFAQ">
                            <div class="accordion-body text-muted">
                                Absolutely. In fact, we highly recommend an omnichannel approach. Integrating Web Development with SEO and Paid Ads creates a compounding effect on your overall return on investment.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="section-padding bg-navy-dark text-center text-white">
    <div class="container reveal">
        <h2 class="display-5 fw-bold mb-4">Let's Discuss Your Project</h2>
        <p class="text-white-50 mb-5 max-w-75 mx-auto">Get a free consultation and discover how we can help you achieve your business goals.</p>
        <a href="contact.php" class="btn btn-gradient btn-lg px-5">Book a Consultation</a>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
