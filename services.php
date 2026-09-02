<?php require_once 'includes/header.php'; ?>

<!-- Page Header -->
<section class="py-5 bg-mint">
    <div class="container text-center">
        <h1 class="display-5 fw-bold mb-3">Our <span class="text-gradient">Services</span></h1>
        <p class="lead text-muted">Comprehensive solutions to elevate your digital footprint.</p>
    </div>
</section>

<!-- Overview Section -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <!-- NEW ILLUSTRATION: Abstract Dashboard composition -->
                <div class="css-illustration w-100" style="min-height: 350px; background: var(--bg-lavender); border: none; display: flex; align-items: center; justify-content: center;">
                    <div style="width: 80%; height: 80%; background: white; border-radius: 12px; padding: 20px; box-shadow: 0 10px 30px rgba(99,102,241,0.1);">
                        <div class="d-flex justify-content-between mb-4">
                            <div style="width: 40%; height: 12px; background: #E2E8F0; border-radius: 6px;"></div>
                            <div style="width: 15%; height: 12px; background: var(--primary-indigo); border-radius: 6px;"></div>
                        </div>
                        <div class="row g-3">
                            <div class="col-8">
                                <div style="height: 120px; background: var(--bg-lavender); border-radius: 8px;"></div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column gap-3">
                                    <div style="height: 52px; background: var(--bg-peach); border-radius: 8px;"></div>
                                    <div style="height: 52px; background: var(--bg-mint); border-radius: 8px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="fw-bold mb-4">End-to-End Digital Solutions</h2>
                <p class="text-muted mb-4">We offer a full spectrum of digital services designed to work together seamlessly. From building your initial web presence to scaling your marketing campaigns, our expert team has you covered at every stage of your digital journey.</p>
                <a href="contact.php" class="btn btn-gradient">Discuss Your Project</a>
            </div>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="section-padding bg-lavender">
    <div class="container">
        <div class="row g-4">
            <?php
            $services = [
                ['color' => 'var(--primary-indigo)', 'bg' => 'var(--bg-lavender)', 'title' => 'Social Media Management', 'desc' => 'Engaging community building and daily content management.'],
                ['color' => 'var(--primary-pink)', 'bg' => 'var(--bg-peach)', 'title' => 'AI Video Production', 'desc' => 'Cutting-edge AI-generated video content for ads and social media.'],
                ['color' => 'var(--primary-teal)', 'bg' => 'var(--bg-mint)', 'title' => 'Custom Web Development', 'desc' => 'Responsive, fast, and secure websites built from scratch.'],
                ['color' => 'var(--primary-amber)', 'bg' => '#FEF3C7', 'title' => 'Performance Marketing', 'desc' => 'Data-driven campaigns to maximize your ROI.'],
                ['color' => 'var(--primary-indigo)', 'bg' => 'var(--bg-lavender)', 'title' => 'Search Engine Optimization', 'desc' => 'On-page and off-page strategies to rank higher on Google.'],
                ['color' => 'var(--primary-pink)', 'bg' => 'var(--bg-peach)', 'title' => 'Google & Meta Ads', 'desc' => 'Targeted paid advertising to capture high-intent leads.'],
                ['color' => 'var(--primary-teal)', 'bg' => 'var(--bg-mint)', 'title' => 'Email Marketing', 'desc' => 'Automated email sequences to nurture leads and retain customers.'],
                ['color' => 'var(--primary-amber)', 'bg' => '#FEF3C7', 'title' => 'Content Creation', 'desc' => 'High-quality blog posts, articles, and copywriting.'],
                ['color' => 'var(--primary-indigo)', 'bg' => 'var(--bg-lavender)', 'title' => 'UI/UX Design', 'desc' => 'Intuitive and aesthetically pleasing interface design.'],
                ['color' => 'var(--primary-pink)', 'bg' => 'var(--bg-peach)', 'title' => 'Brand Identity', 'desc' => 'Logos, color palettes, and comprehensive brand guidelines.'],
                ['color' => 'var(--primary-teal)', 'bg' => 'var(--bg-mint)', 'title' => 'E-commerce Solutions', 'desc' => 'Robust online stores optimized for high conversion rates.'],
                ['color' => 'var(--primary-amber)', 'bg' => '#FEF3C7', 'title' => 'App Development', 'desc' => 'Native and cross-platform mobile applications.'],
                ['color' => 'var(--primary-indigo)', 'bg' => 'var(--bg-lavender)', 'title' => 'Data Analytics', 'desc' => 'In-depth tracking and reporting for informed decision making.'],
                ['color' => 'var(--primary-pink)', 'bg' => 'var(--bg-peach)', 'title' => 'Cloud Hosting & Support', 'desc' => 'Reliable hosting solutions and ongoing maintenance.']
            ];
            
            $delay = 100;
            foreach ($services as $service) {
                echo '
                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="'.$delay.'">
                    <div class="aesthetic-card p-4 h-100 bg-white text-center">
                        <div class="mb-3 mx-auto" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; background: '.$service['bg'].'; border-radius: 12px; position: relative;">
                            <!-- Small abstract geometric accent -->
                            <div style="width: 20px; height: 20px; background: '.$service['color'].'; border-radius: 4px; opacity: 0.8; position: absolute; top: 15px; left: 15px;"></div>
                            <div style="width: 15px; height: 15px; background: white; border-radius: 50%; opacity: 0.9; position: absolute; bottom: 15px; right: 15px; border: 2px solid '.$service['color'].';"></div>
                        </div>
                        <h5 class="mb-2 fs-6 fw-bold">'.$service['title'].'</h5>
                        <p class="text-muted small mb-0">'.$service['desc'].'</p>
                    </div>
                </div>';
                $delay += 50;
                if($delay > 400) $delay = 100;
            }
            ?>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>