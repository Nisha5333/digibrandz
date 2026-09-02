<?php require_once 'includes/header.php'; ?>

<!-- Page Header -->
<section class="py-5 bg-lavender">
    <div class="container text-center">
        <h1 class="display-5 fw-bold mb-3">Get In <span class="text-gradient">Touch</span></h1>
        <p class="lead text-muted">Ready to transform your brand? Let's talk about your project.</p>
    </div>
</section>

<!-- Contact Section -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-right">
                <!-- NEW ILLUSTRATION: Abstract Contact Visual -->
                <div class="css-illustration w-100 mb-4" style="background: var(--bg-peach); border: none; height: 250px; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
                    <div style="position: absolute; width: 150px; height: 150px; border-radius: 50%; border: 2px dashed var(--primary-pink); opacity: 0.2; top: -50px; right: -50px;"></div>
                    <div style="width: 70%; background: white; border-radius: 12px; padding: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); z-index: 2;">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div style="width: 30px; height: 30px; background: var(--bg-lavender); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-paper-plane" style="font-size: 10px; color: var(--primary-indigo);"></i>
                            </div>
                            <div style="height: 8px; width: 60%; background: #F1F5F9; border-radius: 4px;"></div>
                        </div>
                        <div style="height: 6px; width: 100%; background: #F8FAFC; border-radius: 3px; margin-bottom: 8px;"></div>
                        <div style="height: 6px; width: 80%; background: #F8FAFC; border-radius: 3px; margin-bottom: 8px;"></div>
                        <div style="height: 6px; width: 40%; background: #F8FAFC; border-radius: 3px;"></div>
                        <div class="d-flex justify-content-end mt-3">
                            <div style="height: 20px; width: 60px; background: var(--primary-pink); border-radius: 4px; opacity: 0.9;"></div>
                        </div>
                    </div>
                </div>
                
                <div class="aesthetic-card p-4 bg-mint">
                    <h4 class="fw-bold mb-4">Contact Information</h4>
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-box me-3" style="color: var(--primary-indigo); font-size: 1.5rem;">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <p class="mb-0 text-muted">123 Innovation Park, Tech City, 10001</p>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-box me-3" style="color: var(--primary-indigo); font-size: 1.5rem;">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <p class="mb-0 text-muted">+1 (555) 123-4567</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="icon-box me-3" style="color: var(--primary-indigo); font-size: 1.5rem;">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <p class="mb-0 text-muted">hello@digibrandz.com</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7" data-aos="fade-left">
                <div class="aesthetic-card p-5 bg-white">
                    <h3 class="fw-bold mb-4">Send Us a Message</h3>
                    <form action="#" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-bold">Full Name</label>
                                <input type="text" class="form-control form-control-lg" placeholder="John Doe" required style="border-radius: 12px; background: #F9FAFB;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-bold">Email Address</label>
                                <input type="email" class="form-control form-control-lg" placeholder="john@company.com" required style="border-radius: 12px; background: #F9FAFB;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-bold">Mobile Number</label>
                                <input type="tel" class="form-control form-control-lg" placeholder="+1 234 567 890" required style="border-radius: 12px; background: #F9FAFB;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-bold">Company Name</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Company Inc." style="border-radius: 12px; background: #F9FAFB;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-bold">Website URL</label>
                                <input type="url" class="form-control form-control-lg" placeholder="https://www.company.com" style="border-radius: 12px; background: #F9FAFB;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-bold">Business Type</label>
                                <select class="form-select form-select-lg" style="border-radius: 12px; background: #F9FAFB;">
                                    <option value="" selected disabled>Select Type</option>
                                    <option value="B2B">B2B Service</option>
                                    <option value="B2C">B2C Retail</option>
                                    <option value="Ecommerce">E-commerce</option>
                                    <option value="Startup">Startup</option>
                                </select>
                            </div>
                            
                            <div class="col-12 mt-4">
                                <label class="form-label text-muted small fw-bold d-block mb-3">Services Interested In</label>
                                <div class="row g-2">
                                    <div class="col-md-4 col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Social Media" id="srv1">
                                            <label class="form-check-label text-muted" for="srv1">Social Media</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Web Dev" id="srv2">
                                            <label class="form-check-label text-muted" for="srv2">Web Development</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="SEO" id="srv3">
                                            <label class="form-check-label text-muted" for="srv3">SEO</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mt-4">
                                <label class="form-label text-muted small fw-bold">Budget Range</label>
                                <select class="form-select form-select-lg" style="border-radius: 12px; background: #F9FAFB;">
                                    <option value="" selected disabled>Select Budget</option>
                                    <option value="<1k">Under $1,000</option>
                                    <option value="1k-5k">$1,000 - $5,000</option>
                                    <option value="5k-10k">$5,000 - $10,000</option>
                                    <option value="10k+">$10,000+</option>
                                </select>
                            </div>
                            
                            <div class="col-12 mt-4">
                                <label class="form-label text-muted small fw-bold">Project Details</label>
                                <textarea class="form-control" rows="4" placeholder="Tell us about your goals..." style="border-radius: 12px; background: #F9FAFB;"></textarea>
                            </div>
                            
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-gradient w-100 py-3 fs-5">Submit Inquiry</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>