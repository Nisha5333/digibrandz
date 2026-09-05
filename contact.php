<?php require_once 'includes/header.php'; ?>

<!-- 1. HERO SECTION (MATCHING HOMEPAGE COLOR & DESIGN) -->
<section class="hero-section text-center position-relative overflow-hidden">
    <div class="hero-overlay"></div>
    <div class="container hero-content position-relative z-index-1 py-4">
        <div class="eyebrow-badge mb-3">
            <span class="pulse-dot"></span> Let's Connect
        </div>
        <h1 class="display-4 mb-3 fw-bold">Have a Brand That Deserves <span class="text-gradient">To Be Seen?</span></h1>
        <p class="lead mb-0 max-w-75 mx-auto text-muted">Tell us what you're building. We'll help you figure out what comes next with data-driven performance and creative storytelling.</p>
    </div>
</section>

<!-- Contact & Interactive Enquiry Section -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="row g-5">
            <!-- Left Info Column -->
            <div class="col-lg-4 reveal" data-aos="fade-right">
                <div class="aesthetic-card p-4 bg-subtle-purple mb-4">
                    <h4 class="mb-3 fw-bold">Get In Touch</h4>
                    <p class="text-muted small mb-4">Have a quick question or want to meet the team? Contact us directly or fill out the enquiry form.</p>
                    
                    <div class="d-flex align-items-start mb-4 gap-3">
                        <div class="card-icon-wrapper bg-white text-brand-purple mb-0" style="width: 46px; height: 46px; font-size: 1.2rem;">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <div class="fw-bold text-heading small">Office Address</div>
                            <p class="mb-0 text-muted small">DigiBrandz IT Solutions, Innovation Park, Tech City</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start mb-4 gap-3">
                        <div class="card-icon-wrapper bg-white text-brand-pink mb-0" style="width: 46px; height: 46px; font-size: 1.2rem;">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <div class="fw-bold text-heading small">Call Us</div>
                            <p class="mb-0 text-muted small">+91 (123) 456-7890</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start gap-3">
                        <div class="card-icon-wrapper bg-white text-brand-blue mb-0" style="width: 46px; height: 46px; font-size: 1.2rem;">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <div class="fw-bold text-heading small">Email Us</div>
                            <p class="mb-0 text-muted small">hello@digibrandz.com</p>
                        </div>
                    </div>
                </div>

                <!-- Visual Character Card -->
                <div class="aesthetic-card p-4 bg-subtle-blue text-center">
                    <i class="fas fa-comments-dollar text-brand-blue mb-3" style="font-size: 42px;"></i>
                    <h5 class="fw-bold mb-2">Free Consultation</h5>
                    <p class="text-muted small mb-0">Our growth strategists evaluate your current digital presence and provide a clear audit report within 24 hours.</p>
                </div>
            </div>

            <!-- Right Interactive Form Column -->
            <div class="col-lg-8 reveal" style="transition-delay: 0.1s;">
                <div class="aesthetic-card p-4 p-md-5 bg-white">
                    <h3 class="fw-bold mb-2">Project Consultation Form</h3>
                    <p class="text-muted mb-4 small">Fill out the details below to help us understand your business goals.</p>

                    <form action="#" method="POST">
                        <div class="row g-4">
                            <!-- Basic Contact Details -->
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Full Name *</label>
                                <input type="text" class="form-control" placeholder="e.g. Rahul Sharma" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Email Address *</label>
                                <input type="email" class="form-control" placeholder="rahul@company.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Mobile Number *</label>
                                <input type="tel" class="form-control" placeholder="+91 98765 43210" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Company / Brand Name</label>
                                <input type="text" class="form-control" placeholder="e.g. DigiBrandz Solutions">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Business Website URL</label>
                                <input type="url" class="form-control" placeholder="https://www.yourbrand.com">
                            </div>
                            
                            <!-- Business Type Dropdown -->
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Business Type *</label>
                                <select class="form-select" required>
                                    <option value="" selected disabled>Select Business Type</option>
                                    <option value="Startup">Startup</option>
                                    <option value="SME">SME</option>
                                    <option value="Enterprise">Enterprise</option>
                                    <option value="E-commerce">E-commerce</option>
                                    <option value="Real Estate">Real Estate</option>
                                    <option value="Healthcare">Healthcare</option>
                                    <option value="Education">Education</option>
                                    <option value="Restaurant/Café">Restaurant / Café</option>
                                    <option value="Hotel/Tourism">Hotel / Tourism</option>
                                    <option value="Construction">Construction</option>
                                    <option value="Manufacturing/Industrial">Manufacturing / Industrial</option>
                                    <option value="Retail">Retail & Fashion</option>
                                    <option value="IT & Software">IT & Software</option>
                                    <option value="Government">Government / Public</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <!-- Services Chips Selection -->
                            <div class="col-12 mt-4">
                                <label class="form-label small fw-bold d-block mb-3">Services Interested In *</label>
                                <div class="contact-chip-group">
                                    <div class="chip-checkbox">
                                        <input type="checkbox" id="srv-sm" value="Social Media">
                                        <label for="srv-sm"><i class="fas fa-hashtag me-1"></i> Social Media</label>
                                    </div>
                                    <div class="chip-checkbox">
                                        <input type="checkbox" id="srv-seo" value="SEO">
                                        <label for="srv-seo"><i class="fas fa-search me-1"></i> Website SEO</label>
                                    </div>
                                    <div class="chip-checkbox">
                                        <input type="checkbox" id="srv-ads" value="Meta & Google Ads">
                                        <label for="srv-ads"><i class="fas fa-ad me-1"></i> Meta & Google Ads</label>
                                    </div>
                                    <div class="chip-checkbox">
                                        <input type="checkbox" id="srv-web" value="Web & App Dev">
                                        <label for="srv-web"><i class="fas fa-code me-1"></i> Website & App Dev</label>
                                    </div>
                                    <div class="chip-checkbox">
                                        <input type="checkbox" id="srv-video" value="AI Video">
                                        <label for="srv-video"><i class="fas fa-video me-1"></i> AI Video Production</label>
                                    </div>
                                    <div class="chip-checkbox">
                                        <input type="checkbox" id="srv-perf" value="Performance Marketing">
                                        <label for="srv-perf"><i class="fas fa-chart-line me-1"></i> Performance Marketing</label>
                                    </div>
                                    <div class="chip-checkbox">
                                        <input type="checkbox" id="srv-leads" value="Lead Gen">
                                        <label for="srv-leads"><i class="fas fa-bolt me-1"></i> Real Estate Lead Gen</label>
                                    </div>
                                    <div class="chip-checkbox">
                                        <input type="checkbox" id="srv-ecom" value="E-Commerce">
                                        <label for="srv-ecom"><i class="fas fa-shopping-cart me-1"></i> E-Commerce</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Budget & Timeline -->
                            <div class="col-md-6 mt-4">
                                <label class="form-label small fw-bold">Estimated Project Budget</label>
                                <select class="form-select">
                                    <option value="" selected disabled>Select Budget Range</option>
                                    <option value="<50k">Under ₹50,000 / month</option>
                                    <option value="50k-1l">₹50,000 - ₹1,000,000 / month</option>
                                    <option value="1l-3l">₹1,000,000 - ₹3,000,000 / month</option>
                                    <option value="3l+">₹3,000,000+ / month</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label class="form-label small fw-bold">Preferred Contact Method</label>
                                <select class="form-select">
                                    <option value="Phone Call">Phone Call</option>
                                    <option value="WhatsApp">WhatsApp Message</option>
                                    <option value="Email">Email Response</option>
                                    <option value="Google Meet">Google Meet Call</option>
                                </select>
                            </div>

                            <!-- Project Details -->
                            <div class="col-12 mt-4">
                                <label class="form-label small fw-bold">Project Details & Goals</label>
                                <textarea class="form-control" rows="4" placeholder="Tell us about your current digital challenges and what goals you want to achieve..."></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 mt-5">
                                <button type="submit" class="btn btn-gradient w-100 py-3 fs-5">
                                    <span>Get My Free Consultation</span>
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>