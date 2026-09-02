<?php require_once 'includes/header.php'; ?>

<!-- Page Header -->
<section class="py-5 bg-peach">
    <div class="container text-center">
        <h1 class="display-5 fw-bold mb-3">Join Our <span class="text-gradient">Team</span></h1>
        <p class="lead text-muted">Build your career in a dynamic, creative, and innovative environment.</p>
    </div>
</section>

<!-- Why Join Section -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold mb-3">Why Work With Us?</h2>
            <p class="text-muted">We foster a culture of continuous learning, creativity, and mutual respect.</p>
        </div>
        <div class="row g-4 text-center">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box mb-3 mx-auto" style="color: var(--primary-indigo); font-size: 2.5rem; width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; background: var(--bg-lavender); border-radius: 50%;">
                    <i class="fas fa-laptop-house"></i>
                </div>
                <h4 class="mb-2">Flexible Work</h4>
                <p class="text-muted">Hybrid work models and flexible hours to maintain your work-life balance.</p>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box mb-3 mx-auto" style="color: var(--primary-pink); font-size: 2.5rem; width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; background: var(--bg-peach); border-radius: 50%;">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h4 class="mb-2">Growth & Learning</h4>
                <p class="text-muted">Access to premium courses, workshops, and continuous mentorship.</p>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box mb-3 mx-auto" style="color: var(--primary-teal); font-size: 2.5rem; width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; background: var(--bg-mint); border-radius: 50%;">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h4 class="mb-2">Health & Wellness</h4>
                <p class="text-muted">Comprehensive health insurance and regular wellness programs.</p>
            </div>
        </div>
    </div>
</section>

<!-- Open Positions Section -->
<section class="section-padding bg-lavender">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold mb-3">Open Positions</h2>
            <p class="text-muted">Find the role that fits your passion and expertise.</p>
        </div>
        <div class="row g-4">
            <?php
            $jobs = [
                ['title' => 'Digital Marketing Executive', 'type' => 'Full Time', 'location' => 'On-site'],
                ['title' => 'SEO Specialist', 'type' => 'Full Time', 'location' => 'Hybrid'],
                ['title' => 'Frontend Developer (React/Vue)', 'type' => 'Full Time', 'location' => 'Remote'],
                ['title' => 'Backend Developer (PHP/Node)', 'type' => 'Full Time', 'location' => 'Remote'],
                ['title' => 'UI/UX Designer', 'type' => 'Full Time', 'location' => 'Hybrid']
            ];
            
            $delay = 100;
            foreach ($jobs as $job) {
                echo '
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="'.$delay.'">
                    <div class="aesthetic-card p-4 d-flex justify-content-between align-items-center h-100 bg-white">
                        <div>
                            <h5 class="fw-bold mb-2">'.$job['title'].'</h5>
                            <span class="badge bg-light me-2" style="color: var(--primary-indigo);"><i class="fas fa-briefcase me-1"></i> '.$job['type'].'</span>
                            <span class="badge bg-light" style="color: var(--primary-teal);"><i class="fas fa-map-marker-alt me-1"></i> '.$job['location'].'</span>
                        </div>
                        <a href="#applyForm" class="btn btn-outline-custom btn-sm">Apply Now</a>
                    </div>
                </div>';
                $delay += 50;
                if($delay > 300) $delay = 100;
            }
            ?>
        </div>
    </div>
</section>

<!-- Application Form -->
<section class="section-padding bg-white" id="applyForm">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="aesthetic-card p-5 bg-mint">
                    <h3 class="fw-bold mb-4 text-center">Apply Here</h3>
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-bold">Full Name</label>
                                <input type="text" class="form-control" required style="border-radius: 10px;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-bold">Mobile Number</label>
                                <input type="tel" class="form-control" required style="border-radius: 10px;">
                            </div>
                            <div class="col-12">
                                <label class="form-label text-muted small fw-bold">Email Address</label>
                                <input type="email" class="form-control" required style="border-radius: 10px;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-bold">Highest Qualification</label>
                                <select class="form-select" required style="border-radius: 10px;">
                                    <option value="" selected disabled>Select Qualification</option>
                                    <option value="Bachelors">Bachelor's Degree</option>
                                    <option value="Masters">Master's Degree</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-bold">Years of Experience</label>
                                <select class="form-select" required style="border-radius: 10px;">
                                    <option value="" selected disabled>Select Experience</option>
                                    <option value="Fresher">Fresher (0 Years)</option>
                                    <option value="1-3">1-3 Years</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label text-muted small fw-bold">Upload Resume (PDF/DOCX)</label>
                                <input class="form-control" type="file" accept=".pdf,.doc,.docx" required style="border-radius: 10px;">
                            </div>
                            <div class="col-12">
                                <label class="form-label text-muted small fw-bold">Cover Letter / Message</label>
                                <textarea class="form-control" rows="4" placeholder="Tell us why you're a great fit..." style="border-radius: 10px;"></textarea>
                            </div>
                            <div class="col-12 mt-4 text-center">
                                <button type="submit" class="btn btn-gradient px-5 py-2">Submit Application</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>