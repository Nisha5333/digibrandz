<?php require_once 'includes/header.php'; ?>

<!-- CAREER PAGE CUSTOM STYLING (CORAL / TEAL / GOLD THEME) -->
<style>
:root {
    --color-primary-coral: #FF6B6B;
    --color-secondary-teal: #2EC4B6;
    --color-accent-gold: #FFD93D;
    --color-bg-offwhite: #FFF9F5;
    --color-text-dark: #2D3436;
    --color-text-light: #636E72;
    --color-card-bg: #FFFFFF;
}

body {
    background-color: var(--color-bg-offwhite);
    color: var(--color-text-dark);
}

/* Gradient Buttons */
.btn-gradient-coral-gold {
    background: linear-gradient(135deg, var(--color-primary-coral) 0%, var(--color-accent-gold) 100%);
    color: #ffffff !important;
    border: none;
    font-weight: 700;
    border-radius: 50px;
    transition: all 0.3s ease;
    box-shadow: 0 8px 20px rgba(255, 107, 107, 0.3);
}

.btn-gradient-coral-gold:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 25px rgba(255, 107, 107, 0.45);
    color: #ffffff !important;
}

/* Cards & Hover Effects */
.career-card {
    background: var(--color-card-bg);
    border-radius: 16px;
    border: 1px solid rgba(0, 0, 0, 0.06);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
    transition: all 0.35s ease;
}

.career-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 18px 38px rgba(255, 107, 107, 0.15);
    border-color: var(--color-primary-coral);
}

/* Icon / Benefit Image Box */
.benefit-img-wrapper {
    width: 100%;
    height: 220px;
    overflow: hidden;
    margin: 0;
    border-radius: 16px 16px 0 0;
    transition: all 0.3s ease;
}

.benefit-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.career-card:hover .benefit-img {
    transform: scale(1.06);
}

/* Team Section */
.team-member-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 30px 20px;
    text-align: center;
    border: 1px solid rgba(0, 0, 0, 0.05);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.04);
    transition: all 0.35s ease;
    height: 100%;
}

.team-member-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 18px 35px rgba(255, 107, 107, 0.15);
    border-color: var(--color-primary-coral);
}

.team-img-coral-border {
    width: 140px;
    height: 140px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid var(--color-primary-coral);
    margin-bottom: 20px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

/* Job Badges */
.badge-job-fulltime {
    background-color: var(--color-secondary-teal) !important;
    color: #ffffff !important;
    font-weight: 600;
}

.badge-job-hybrid {
    background-color: var(--color-accent-gold) !important;
    color: #2D3436 !important;
    font-weight: 600;
}

.badge-job-remote {
    background-color: var(--color-primary-coral) !important;
    color: #ffffff !important;
    font-weight: 600;
}

.badge-job-meta {
    background-color: rgba(99, 110, 114, 0.1);
    color: var(--color-text-light);
    font-weight: 600;
}

/* Job Expandable Card */
.job-card-header {
    cursor: pointer;
}

.job-expanded-content {
    background: #FFFDFB;
    border-top: 1px dashed rgba(255, 107, 107, 0.3);
    border-radius: 0 0 16px 16px;
}

/* Quick Apply Form Focus Styling */
.form-control-coral:focus, .form-select-coral:focus {
    border-color: var(--color-primary-coral) !important;
    box-shadow: 0 0 0 0.25rem rgba(255, 107, 107, 0.25) !important;
}

</style>

<!-- 1. HERO SECTION (MATCHES ABOUT US & SERVICES PAGE) -->
<section class="hero-section text-center position-relative overflow-hidden">
    <div class="hero-overlay"></div>
    <div class="container hero-content position-relative z-index-1 py-4">
        <div class="hero-content-narrow mx-auto">
            <div class="eyebrow-badge mb-3">
                <span class="pulse-dot"></span> Careers at DigiBrandz
            </div>
            <h1 class="display-4 mb-3 fw-bold">Build Your Career <span class="text-gradient">With Us</span></h1>
            <p class="lead mb-0 text-muted">Join a dynamic, creative, and innovative environment where continuous learning and growth are part of our DNA.</p>
        </div>
    </div>
</section>

<!-- 2. WHY WORK WITH US SECTION -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5 reveal">
            <h2 class="display-6 fw-bold mb-3">Why Work With Us?</h2>
            <p class="text-muted lead max-w-75 mx-auto" style="color: var(--color-text-light);">
                We foster a culture of continuous learning, creativity, and mutual respect.
            </p>
        </div>
        <div class="row g-4 text-center">
            <!-- Benefit 1: Flexible Work -->
            <div class="col-lg-4 col-md-6 reveal" style="transition-delay: 0.1s;">
                <div class="career-card p-0 h-100 overflow-hidden">
                    <div class="benefit-img-wrapper">
                        <img src="assets/images/flexible.jpg" alt="Flexible Work" class="benefit-img">
                    </div>
                    <div class="p-4">
                        <h4 class="fw-bold mb-3" style="color: var(--color-text-dark);">Flexible Work</h4>
                        <p style="color: var(--color-text-light);" class="mb-0">
                            Hybrid work models and flexible hours to maintain your work-life balance.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Benefit 2: Growth & Learning -->
            <div class="col-lg-4 col-md-6 reveal" style="transition-delay: 0.2s;">
                <div class="career-card p-0 h-100 overflow-hidden">
                    <div class="benefit-img-wrapper">
                        <img src="assets/images/growth.jpg" alt="Growth & Learning" class="benefit-img">
                    </div>
                    <div class="p-4">
                        <h4 class="fw-bold mb-3" style="color: var(--color-text-dark);">Growth & Learning</h4>
                        <p style="color: var(--color-text-light);" class="mb-0">
                            Access to premium courses, workshops, and continuous mentorship.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Benefit 3: Health & Wellness -->
            <div class="col-lg-4 col-md-12 reveal" style="transition-delay: 0.3s;">
                <div class="career-card p-0 h-100 overflow-hidden">
                    <div class="benefit-img-wrapper">
                        <img src="assets/images/health.jpg" alt="Health & Wellness" class="benefit-img">
                    </div>
                    <div class="p-4">
                        <h4 class="fw-bold mb-3" style="color: var(--color-text-dark);">Health & Wellness</h4>
                        <p style="color: var(--color-text-light);" class="mb-0">
                            Comprehensive health insurance and regular wellness programs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. MEET OUR TEAM SECTION -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="text-center mb-5 reveal">
            <h2 class="display-6 fw-bold mb-3">Meet Our Team</h2>
            <p class="text-muted lead mx-auto" style="max-width: 900px; color: var(--color-text-light);">
                Behind every successful project is a passionate team of creative designers, developers, digital marketers, SEO specialists, Photography/Videography experts, Meta Ads Experts, GMB Experts, AI creators, content strategists, and branding experts. We work collaboratively to deliver innovative solutions that help our clients stand out in today's competitive digital landscape.
            </p>
        </div>

        <div class="row g-4">
            <!-- Member 1: The Vision Architect -->
            <div class="col-lg-3 col-md-6 reveal" style="transition-delay: 0.1s;">
                <div class="team-member-card">
                    <img src="assets/images/data yogi.jpg" alt="The Vision Architect" class="team-img-coral-border">
                    <h5 class="fw-bold mb-1" style="color: var(--color-text-dark);">The Vision Architect</h5>
                    <p class="fw-semibold small mb-2" style="color: var(--color-primary-coral);">Chief Strategy & Analytics Officer</p>
                    <p class="small text-muted mb-0">Translates complex data insights into winning market growth engines.</p>
                </div>
            </div>

            <!-- Member 2: The Pixel Alchemist -->
            <div class="col-lg-3 col-md-6 reveal" style="transition-delay: 0.2s;">
                <div class="team-member-card">
                    <img src="assets/images/design.jpg" alt="The Pixel Alchemist" class="team-img-coral-border">
                    <h5 class="fw-bold mb-1" style="color: var(--color-text-dark);">The Pixel Alchemist</h5>
                    <p class="fw-semibold small mb-2" style="color: var(--color-secondary-teal);">Head of UI/UX & Creative Design</p>
                    <p class="small text-muted mb-0">Crafts breathtaking digital experiences and flawless user interface magic.</p>
                </div>
            </div>

            <!-- Member 3: The Code Poet -->
            <div class="col-lg-3 col-md-6 reveal" style="transition-delay: 0.3s;">
                <div class="team-member-card">
                    <img src="assets/images/coding ninja.jpg" alt="The Code Poet" class="team-img-coral-border">
                    <h5 class="fw-bold mb-1" style="color: var(--color-text-dark);">The Code Poet</h5>
                    <p class="fw-semibold small mb-2" style="color: #9b59b6;">Full-Stack & Web Development Lead</p>
                    <p class="small text-muted mb-0">Architecting clean code and scalable high-performance web systems.</p>
                </div>
            </div>

            <!-- Member 4: The Visibility Guru -->
            <div class="col-lg-3 col-md-6 reveal" style="transition-delay: 0.4s;">
                <div class="team-member-card">
                    <img src="assets/images/seo copy.jpg" alt="The Visibility Guru" class="team-img-coral-border">
                    <h5 class="fw-bold mb-1" style="color: var(--color-text-dark);">The Visibility Guru</h5>
                    <p class="fw-semibold small mb-2" style="color: var(--color-primary-coral);">Director of Organic Growth & SEO</p>
                    <p class="small text-muted mb-0">Dominating search engine algorithms and expanding organic reach.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. OFFICE LOCATION SECTION -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 reveal">
                <span class="badge px-3 py-2 rounded-pill mb-3" style="background: rgba(46, 196, 182, 0.15); color: var(--color-secondary-teal); font-weight: 700;">WORK ENVIRONMENT</span>
                <h2 class="display-6 fw-bold mb-4">Our Office</h2>
                <p class="lead text-muted mb-4" style="color: var(--color-text-light);">
                    Our workspace is designed to inspire creativity, collaboration, and innovation. From brainstorming ideas to launching successful digital campaigns, our office reflects the energy and passion that drive DigiBrandz IT Solutions.
                </p>
                <div class="p-4 rounded-4 bg-white border shadow-sm mb-3">
                    <div class="d-flex align-items-start gap-3 mb-3">
                        <div class="p-3 rounded-circle" style="background: rgba(255, 107, 107, 0.1); color: var(--color-primary-coral);">
                            <i class="fas fa-map-marker-alt fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1" style="color: var(--color-text-dark);">Address</h6>
                            <p class="mb-0 text-muted">Office No. 323, Aston Plaza, Ambegaon Budruk, Pune, Maharashtra - 411046</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <div class="p-3 rounded-circle" style="background: rgba(46, 196, 182, 0.1); color: var(--color-secondary-teal);">
                            <i class="fas fa-clock fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1" style="color: var(--color-text-dark);">Working Hours</h6>
                            <p class="mb-0 text-muted">Monday - Saturday, 10:00 AM - 6:30 PM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 reveal" style="transition-delay: 0.2s;">
                <div class="p-2 bg-white rounded-4 shadow-lg border">
                    <img src="assets/images/company.jpg" alt="DigiBrandz Office Workspace" class="img-fluid rounded-3 w-100" style="max-height: 420px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. OPEN POSITIONS SECTION (ALL 10 JOBS ON ONE PAGE) -->
<section class="section-padding bg-white" id="openings">
    <div class="container">
        <div class="text-center mb-5 reveal">
            <span class="badge px-3 py-2 rounded-pill mb-3" style="background: rgba(255, 217, 61, 0.25); color: #B38600; font-weight: 700;">CAREER OPPORTUNITIES</span>
            <h2 class="display-6 fw-bold mb-3">Open Positions</h2>
            <p class="text-muted lead max-w-75 mx-auto">
                Find the role that fits your passion and expertise. Click any role to expand job details and responsibilities.
            </p>
        </div>

        <div class="row g-4">
            <?php
            $all_jobs = [
                ['id' => 'job-1', 'title' => 'Digital Marketing Executive', 'type' => 'Full Time', 'type_class' => 'badge-job-fulltime', 'mode' => 'On-site', 'location' => 'Pune', 'icon' => 'fas fa-bullhorn'],
                ['id' => 'job-2', 'title' => 'SEO Executive', 'type' => 'Full Time', 'type_class' => 'badge-job-fulltime', 'mode' => 'On-site', 'location' => 'Pune', 'icon' => 'fas fa-search-dollar'],
                ['id' => 'job-3', 'title' => 'Social Media Executive', 'type' => 'Full Time', 'type_class' => 'badge-job-fulltime', 'mode' => 'On-site', 'location' => 'Pune', 'icon' => 'fas fa-hashtag'],
                ['id' => 'job-4', 'title' => 'Business Development Executive', 'type' => 'Full Time', 'type_class' => 'badge-job-fulltime', 'mode' => 'On-site', 'location' => 'Pune', 'icon' => 'fas fa-chart-line'],
                ['id' => 'job-5', 'title' => 'Business Analyst', 'type' => 'Full Time', 'type_class' => 'badge-job-fulltime', 'mode' => 'On-site', 'location' => 'Pune', 'icon' => 'fas fa-chart-pie'],
                ['id' => 'job-6', 'title' => 'Graphic Designer', 'type' => 'Full Time', 'type_class' => 'badge-job-fulltime', 'mode' => 'On-site', 'location' => 'Pune', 'icon' => 'fas fa-palette'],
                ['id' => 'job-7', 'title' => 'Video Editor', 'type' => 'Full Time', 'type_class' => 'badge-job-fulltime', 'mode' => 'On-site', 'location' => 'Pune', 'icon' => 'fas fa-video'],
                ['id' => 'job-8', 'title' => 'Website Developer', 'type' => 'Full Time', 'type_class' => 'badge-job-fulltime', 'mode' => 'On-site', 'location' => 'Pune', 'icon' => 'fas fa-code'],
                ['id' => 'job-9', 'title' => 'UI/UX Designer', 'type' => 'Full Time', 'type_class' => 'badge-job-fulltime', 'mode' => 'On-site', 'location' => 'Pune', 'icon' => 'fas fa-object-group'],
                ['id' => 'job-10', 'title' => 'Content Writer', 'type' => 'Full Time', 'type_class' => 'badge-job-fulltime', 'mode' => 'On-site', 'location' => 'Pune', 'icon' => 'fas fa-pen-nib']
            ];

            foreach ($all_jobs as $index => $job) {
                $delay = 0.1 + ($index % 4) * 0.1;
                ?>
                <div class="col-lg-6 reveal" style="transition-delay: <?php echo $delay; ?>s;">
                    <div class="career-card p-0 h-100 overflow-hidden">
                        <!-- Job Header -->
                        <div class="p-4 d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-3">
                            <div class="d-flex align-items-center gap-3">
                                <div class="p-3 rounded-circle text-center" style="width: 55px; height: 55px; background: rgba(255, 107, 107, 0.1); color: var(--color-primary-coral); flex-shrink: 0; display: flex; align-items: center; justify-content: center; font-size: 1.4rem;">
                                    <i class="<?php echo $job['icon']; ?>"></i>
                                </div>
                                <div>
                                    <div class="d-flex flex-wrap align-items-center gap-2 mb-1">
                                        <span class="badge px-3 py-1 rounded-pill <?php echo $job['type_class']; ?>"><?php echo $job['type']; ?></span>
                                        <span class="badge px-2 py-1 rounded-pill badge-job-meta"><i class="fas fa-building me-1"></i><?php echo $job['mode']; ?></span>
                                        <span class="badge px-2 py-1 rounded-pill badge-job-meta"><i class="fas fa-map-marker-alt me-1"></i><?php echo $job['location']; ?></span>
                                    </div>
                                    <h5 class="fw-bold mb-0" style="color: var(--color-text-dark);"><?php echo $job['title']; ?></h5>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-outline-danger btn-sm px-3 py-2 rounded-pill fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $job['id']; ?>" aria-expanded="false" aria-controls="<?php echo $job['id']; ?>">
                                    View Details <i class="fas fa-chevron-down ms-1 small"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Expandable Details Content -->
                        <div class="collapse job-expanded-content" id="<?php echo $job['id']; ?>">
                            <div class="p-4">
                                <h6 class="fw-bold mb-2" style="color: var(--color-primary-coral);"><i class="fas fa-info-circle me-2"></i>Job Description</h6>
                                <p class="small text-muted mb-3">
                                    As a <strong><?php echo $job['title']; ?></strong> at DigiBrandz, you will be an integral part of our team, working closely with cross-functional teams to deliver outstanding results for our diverse client portfolio.
                                </p>

                                <h6 class="fw-bold mb-2" style="color: var(--color-secondary-teal);"><i class="fas fa-tasks me-2"></i>Key Responsibilities</h6>
                                <ul class="small text-muted ps-3 mb-3">
                                    <li class="mb-1">Develop and execute comprehensive strategies tailored to client objectives.</li>
                                    <li class="mb-1">Analyze performance metrics and adapt campaigns to maximize ROI and engagement.</li>
                                    <li class="mb-1">Collaborate with the creative and development teams to ensure seamless project delivery.</li>
                                    <li class="mb-1">Stay up-to-date with industry trends, algorithm updates, and emerging technologies.</li>
                                </ul>

                                <h6 class="fw-bold mb-2" style="color: #9b59b6;"><i class="fas fa-user-check me-2"></i>Requirements</h6>
                                <ul class="small text-muted ps-3 mb-4">
                                    <li class="mb-1">Minimum of 2+ years of proven experience in a similar role within an agency environment.</li>
                                    <li class="mb-1">Strong analytical skills and the ability to interpret complex data into actionable insights.</li>
                                    <li class="mb-1">Excellent written and verbal communication skills.</li>
                                    <li class="mb-1">A proactive, problem-solving mindset and a strong desire to learn and grow.</li>
                                </ul>

                                <div class="text-end">
                                    <a href="#applyForm" class="btn btn-gradient-coral-gold btn-sm px-4 py-2">
                                        Apply Now <i class="fas fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- 7. QUICK APPLY / APPLICATION FORM -->
<section class="section-padding" id="applyForm">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 reveal">
                <div class="career-card p-4 p-md-5">
                    <div class="text-center mb-5">
                        <span class="badge px-3 py-2 rounded-pill mb-2" style="background: rgba(255, 107, 107, 0.15); color: var(--color-primary-coral); font-weight: 700;">GET IN TOUCH</span>
                        <h2 class="display-6 fw-bold mb-2">Quick Apply</h2>
                        <p class="text-muted lead">Submit your details and resume below, and our HR team will get back to you.</p>
                    </div>

                    <form action="#" method="POST" enctype="multipart/form-data">
                        <div class="row g-4">
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <label class="form-label text-dark small fw-bold">Full Name *</label>
                                <input type="text" name="full_name" class="form-control form-control-lg form-control-coral" placeholder="Enter your full name" required>
                            </div>

                            <!-- Mobile Number -->
                            <div class="col-md-6">
                                <label class="form-label text-dark small fw-bold">Mobile Number *</label>
                                <input type="tel" name="mobile" class="form-control form-control-lg form-control-coral" placeholder="+91 98765 43210" required>
                            </div>

                            <!-- Email Address -->
                            <div class="col-12">
                                <label class="form-label text-dark small fw-bold">Email Address *</label>
                                <input type="email" name="email" class="form-control form-control-lg form-control-coral" placeholder="name@example.com" required>
                            </div>

                            <!-- Highest Qualification -->
                            <div class="col-md-6">
                                <label class="form-label text-dark small fw-bold">Highest Qualification *</label>
                                <select name="qualification" class="form-select form-select-lg form-select-coral" required>
                                    <option value="" selected disabled>Select Qualification</option>
                                    <option value="SSC">SSC</option>
                                    <option value="HSC">HSC</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="Bachelor's Degree">Bachelor's Degree</option>
                                    <option value="Master's Degree">Master's Degree</option>
                                    <option value="MBA">MBA</option>
                                    <option value="MCA">MCA</option>
                                    <option value="BCA">BCA</option>
                                    <option value="B.Tech/BE">B.Tech/BE</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <!-- Years of Experience -->
                            <div class="col-md-6">
                                <label class="form-label text-dark small fw-bold">Years of Experience *</label>
                                <select name="experience" class="form-select form-select-lg form-select-coral" required>
                                    <option value="" selected disabled>Select Experience</option>
                                    <option value="Fresher">Fresher</option>
                                    <option value="0-1 Year">0-1 Year</option>
                                    <option value="1-2 Years">1-2 Years</option>
                                    <option value="2-4 Years">2-4 Years</option>
                                    <option value="4-6 Years">4-6 Years</option>
                                    <option value="6+ Years">6+ Years</option>
                                </select>
                            </div>

                            <!-- Resume Upload -->
                            <div class="col-12">
                                <label class="form-label text-dark small fw-bold">Upload Resume/CV * <span class="text-muted fw-normal">(PDF, DOC, DOCX | Max 5MB)</span></label>
                                <input class="form-control form-control-lg form-control-coral" type="file" name="resume" accept=".pdf,.doc,.docx" required>
                            </div>

                            <!-- Cover Letter -->
                            <div class="col-12">
                                <label class="form-label text-dark small fw-bold">Cover Letter / Message</label>
                                <textarea name="message" class="form-control form-control-coral" rows="4" placeholder="Tell us why you're a great fit for DigiBrandz..."></textarea>
                            </div>

                            <!-- Confirmation Checkbox -->
                            <div class="col-12">
                                <div class="form-check text-start">
                                    <input class="form-check-input" type="checkbox" id="confirmCheck" required>
                                    <label class="form-check-label text-muted small" for="confirmCheck">
                                        I confirm that the information provided is accurate and I agree to be contacted regarding this job application.
                                    </label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 mt-4 text-center">
                                <button type="submit" class="btn btn-gradient-coral-gold px-5 py-3 fs-5 w-100">
                                    Submit Application <i class="fas fa-paper-plane ms-2"></i>
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