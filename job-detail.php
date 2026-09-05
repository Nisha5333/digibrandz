<?php require_once 'includes/header.php'; ?>

<?php
$job_id = $_GET['id'] ?? 'digital-marketing-executive';

// Mock Data
$title = "Digital Marketing Executive";
$type = "Full Time";
$location = "On-site";
if($job_id == 'seo-specialist') { $title = "SEO Specialist"; $location = "Hybrid"; }
if($job_id == 'frontend-developer') { $title = "Frontend Developer (React/Vue)"; $location = "Remote"; }
if($job_id == 'ui-ux-designer') { $title = "UI/UX Designer"; $location = "Hybrid"; }
?>

<!-- Job Header (MATCHING HOMEPAGE COLOR & DESIGN) -->
<section class="hero-section text-center position-relative overflow-hidden">
    <div class="hero-overlay"></div>
    <div class="container hero-content position-relative z-index-1 py-4">
        <div class="eyebrow-badge mb-3">
            <span class="pulse-dot"></span> Careers at DigiBrandz
        </div>
        <h1 class="display-4 fw-bold mb-3"><?php echo $title; ?></h1>
        <div class="d-flex justify-content-center gap-3">
            <span class="badge bg-subtle-blue text-brand-blue border border-white py-2 px-3"><i class="fas fa-briefcase me-1"></i> <?php echo $type; ?></span>
            <span class="badge bg-subtle-purple text-brand-purple border border-white py-2 px-3"><i class="fas fa-map-marker-alt me-1"></i> <?php echo $location; ?></span>
        </div>
    </div>
</section>

<!-- Job Description -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 reveal">
                <div class="mb-5">
                    <h3 class="fw-bold mb-3 text-brand-blue">About the Role</h3>
                    <p class="text-muted">We are looking for a highly motivated and creative individual to join our growing team. As a <?php echo $title; ?> at DigiBrandz, you will be at the forefront of digital innovation, working directly with cross-functional teams to deliver outstanding results for our diverse client portfolio. If you are passionate about technology, design, and performance, you belong here.</p>
                </div>
                
                <div class="mb-5">
                    <h3 class="fw-bold mb-3 text-brand-pink">Key Responsibilities</h3>
                    <ul class="text-muted list-group list-group-flush border-0">
                        <li class="list-group-item bg-transparent px-0 border-0 d-flex align-items-start">
                            <i class="fas fa-circle mt-2 me-3 small text-brand-pink" style="font-size: 8px;"></i>
                            <span>Develop and execute comprehensive strategies tailored to client objectives.</span>
                        </li>
                        <li class="list-group-item bg-transparent px-0 border-0 d-flex align-items-start">
                            <i class="fas fa-circle mt-2 me-3 small text-brand-pink" style="font-size: 8px;"></i>
                            <span>Analyze performance metrics and adapt campaigns to maximize ROI and engagement.</span>
                        </li>
                        <li class="list-group-item bg-transparent px-0 border-0 d-flex align-items-start">
                            <i class="fas fa-circle mt-2 me-3 small text-brand-pink" style="font-size: 8px;"></i>
                            <span>Collaborate with the creative and development teams to ensure seamless project delivery.</span>
                        </li>
                        <li class="list-group-item bg-transparent px-0 border-0 d-flex align-items-start">
                            <i class="fas fa-circle mt-2 me-3 small text-brand-pink" style="font-size: 8px;"></i>
                            <span>Stay up-to-date with industry trends, algorithm updates, and emerging technologies.</span>
                        </li>
                    </ul>
                </div>
                
                <div class="mb-5">
                    <h3 class="fw-bold mb-3 text-brand-purple">Requirements</h3>
                    <ul class="text-muted list-group list-group-flush border-0">
                        <li class="list-group-item bg-transparent px-0 border-0 d-flex align-items-start">
                            <i class="fas fa-check mt-1 me-3 text-brand-purple"></i>
                            <span>Minimum of 2+ years of proven experience in a similar role within an agency environment.</span>
                        </li>
                        <li class="list-group-item bg-transparent px-0 border-0 d-flex align-items-start">
                            <i class="fas fa-check mt-1 me-3 text-brand-purple"></i>
                            <span>Strong analytical skills and the ability to interpret complex data into actionable insights.</span>
                        </li>
                        <li class="list-group-item bg-transparent px-0 border-0 d-flex align-items-start">
                            <i class="fas fa-check mt-1 me-3 text-brand-purple"></i>
                            <span>Excellent written and verbal communication skills.</span>
                        </li>
                        <li class="list-group-item bg-transparent px-0 border-0 d-flex align-items-start">
                            <i class="fas fa-check mt-1 me-3 text-brand-purple"></i>
                            <span>A proactive, problem-solving mindset and a strong desire to learn and grow.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Application Form -->
<section class="section-padding bg-subtle-blue border-top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 reveal">
                <div class="aesthetic-card p-5 bg-white">
                    <h3 class="fw-bold mb-4 text-center">Apply for this Position</h3>
                    <p class="text-center text-muted mb-5">Submit your details and resume below. Our HR team reviews applications weekly.</p>
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-bold">Full Name</label>
                                <input type="text" class="form-control form-control-lg" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-bold">Mobile Number</label>
                                <input type="tel" class="form-control form-control-lg" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label text-muted small fw-bold">Email Address</label>
                                <input type="email" class="form-control form-control-lg" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-bold">Highest Qualification</label>
                                <select class="form-select form-select-lg" required>
                                    <option value="" selected disabled>Select Qualification</option>
                                    <option value="Bachelors">Bachelor's Degree</option>
                                    <option value="Masters">Master's Degree</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-bold">Years of Experience</label>
                                <select class="form-select form-select-lg" required>
                                    <option value="" selected disabled>Select Experience</option>
                                    <option value="Fresher">Fresher (0 Years)</option>
                                    <option value="1-3">1-3 Years</option>
                                    <option value="3-5">3-5 Years</option>
                                    <option value="5+">5+ Years</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label text-muted small fw-bold">Upload Resume (PDF/DOCX)</label>
                                <input class="form-control form-control-lg" type="file" accept=".pdf,.doc,.docx" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label text-muted small fw-bold">Cover Letter / Message</label>
                                <textarea class="form-control" rows="4" placeholder="Tell us why you're a great fit..."></textarea>
                            </div>
                            <div class="col-12 mt-5 text-center">
                                <button type="submit" class="btn btn-gradient px-5 py-3 fs-5 w-100">Submit Application</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
