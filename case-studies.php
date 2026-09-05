<?php require_once 'includes/header.php'; ?>

<!-- 1. HERO SECTION (REDUCED NARROW WIDTH) -->
<section class="hero-section text-center position-relative overflow-hidden">
    <div class="hero-overlay"></div>
    <div class="container hero-content position-relative z-index-1 py-4">
        <div class="hero-content-narrow mx-auto">
            <div class="eyebrow-badge mb-3">
                <span class="pulse-dot"></span> Our Victories
            </div>
            <h1 class="display-4 mb-3 fw-bold">Case Studies & <span class="text-gradient">Recent Victories</span></h1>
            <p class="lead mb-0 text-muted">Explore how DigiBrandz has helped businesses achieve their digital goals across Real Estate, Healthcare, Education, and Retail.</p>
        </div>
    </div>
</section>

<!-- 2. ALL 13 CASE STUDIES IN GRID -->
<section class="section-padding bg-subtle-blue">
    <div class="container">
        <div class="case-grid">

        <!-- 1. Speed Homes -->
        <div class="case-card" onclick="toggleCaseStudy('case-1')">
            <div class="case-image">
                <img src="assets/images/speed-homes.png" alt="Speed Homes">
            </div>
            <div>
                <span class="category-badge" style="background: #FF6B6B;">Real Estate</span>
            </div>
            <h3 class="client-name">Speed Homes</h3>
            <p class="key-result">Key Result: <strong>40% CPL Reduction</strong></p>
            <button type="button" class="expand-btn" id="btn-case-1">
                Expand Case Study <span class="arrow">▼</span>
            </button>

            <!-- Expanded Content -->
            <div class="case-details" id="case-1">
                <div class="detail-grid">
                    <div class="detail-item">
                        <h4>Client & Timeline</h4>
                        <p><strong>Client:</strong> Speed Homes<br><strong>Timeline:</strong> 6 Months (2023)</p>
                    </div>
                    <div class="detail-item">
                        <h4>Industry</h4>
                        <p>Real Estate & Property Development</p>
                    </div>
                </div>

                <div class="detail-item mt-3">
                    <h4>Challenges</h4>
                    <p>High Cost Per Lead (CPL), low buyer lead conversion rates, and poorly targeted paid ad campaigns.</p>
                </div>

                <div class="detail-item mt-3">
                    <h4>Solutions Implemented</h4>
                    <ul class="solutions-list">
                        <li>UI/UX Landing Page Overhaul</li>
                        <li>Audience Restructuring & Precision Retargeting</li>
                        <li>High-Converting Creative Refresh</li>
                    </ul>
                </div>

                <div class="result-stats">
                    <div class="result-stat">
                        <div class="number">40%</div>
                        <div class="label">CPL Reduction</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">3.5x</div>
                        <div class="label">ROAS Increase</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">10k+</div>
                        <div class="label">New Leads</div>
                    </div>
                </div>

                <div class="text-center pb-2">
                    <a href="contact.php" class="contact-cta">Discuss Your Project &rarr;</a>
                </div>
            </div>
        </div>

        <!-- 2. Health Easy EMI -->
        <div class="case-card" onclick="toggleCaseStudy('case-2')">
            <div class="case-image">
                <img src="assets/images/health-easy-emi.png" alt="Health Easy EMI">
            </div>
            <div>
                <span class="category-badge" style="background: #2EC4B6;">Healthcare</span>
            </div>
            <h3 class="client-name">Health Easy EMI</h3>
            <p class="key-result">Key Result: <strong>Zero to Scalable</strong></p>
            <button type="button" class="expand-btn" id="btn-case-2">
                Expand Case Study <span class="arrow">▼</span>
            </button>

            <div class="case-details" id="case-2">
                <div class="detail-grid">
                    <div class="detail-item">
                        <h4>Client & Timeline</h4>
                        <p><strong>Client:</strong> Health Easy EMI<br><strong>Timeline:</strong> 8 Months</p>
                    </div>
                    <div class="detail-item">
                        <h4>Industry</h4>
                        <p>Healthcare & Medical Finance</p>
                    </div>
                </div>

                <div class="detail-item mt-3">
                    <h4>Challenges</h4>
                    <p>New medical startup with zero initial digital presence, no existing branding, and low customer trust.</p>
                </div>

                <div class="detail-item mt-3">
                    <h4>Solutions Implemented</h4>
                    <ul class="solutions-list">
                        <li>Social Media Brand Identity Setup</li>
                        <li>Meta Lead Generation Campaigns</li>
                        <li>Responsive Website, SEO & GMB Setup</li>
                    </ul>
                </div>

                <div class="result-stats">
                    <div class="result-stat">
                        <div class="number">100%</div>
                        <div class="label">Brand Presence</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">5k+</div>
                        <div class="label">Patient Enquiries</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">4.2x</div>
                        <div class="label">Conversion Rate</div>
                    </div>
                </div>

                <div class="text-center pb-2">
                    <a href="contact.php" class="contact-cta">Discuss Your Project &rarr;</a>
                </div>
            </div>
        </div>

        <!-- 3. Bharati Vidyapeeth -->
        <div class="case-card" onclick="toggleCaseStudy('case-3')">
            <div class="case-image">
                <img src="assets/images/bharati-vidyapeeth.png" alt="Bharati Vidyapeeth">
            </div>
            <div>
                <span class="category-badge" style="background: #FFD93D; color: #2D3436 !important;">Education</span>
            </div>
            <h3 class="client-name">Bharati Vidyapeeth</h3>
            <p class="key-result">Key Result: <strong>1M+ Views</strong></p>
            <button type="button" class="expand-btn" id="btn-case-3">
                Expand Case Study <span class="arrow">▼</span>
            </button>

            <div class="case-details" id="case-3">
                <div class="detail-grid">
                    <div class="detail-item">
                        <h4>Client & Timeline</h4>
                        <p><strong>Client:</strong> Bharati Vidyapeeth<br><strong>Timeline:</strong> 4 Months</p>
                    </div>
                    <div class="detail-item">
                        <h4>Industry</h4>
                        <p>Higher Education & Academics</p>
                    </div>
                </div>

                <div class="detail-item mt-3">
                    <h4>Challenges</h4>
                    <p>Low online student admission enquiries and limited digital reach among youth.</p>
                </div>

                <div class="detail-item mt-3">
                    <h4>Solutions Implemented</h4>
                    <ul class="solutions-list">
                        <li>AI Video Reels & Short Form Production</li>
                        <li>Social Media & Meta Ads Campaigns</li>
                        <li>Campus Influencer Collaborations</li>
                    </ul>
                </div>

                <div class="result-stats">
                    <div class="result-stat">
                        <div class="number">1M+</div>
                        <div class="label">Total Views</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">2.5x</div>
                        <div class="label">Admissions Boost</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">85%</div>
                        <div class="label">Engagement</div>
                    </div>
                </div>

                <div class="text-center pb-2">
                    <a href="contact.php" class="contact-cta">Discuss Your Project &rarr;</a>
                </div>
            </div>
        </div>

        <!-- 4. Shamudri Tourism LLC -->
        <div class="case-card" onclick="toggleCaseStudy('case-4')">
            <div class="case-image">
                <img src="assets/images/travel-tourism.png" alt="Shamudri Tourism LLC">
            </div>
            <div>
                <span class="category-badge" style="background: #9B59B6;">Travel & Tourism</span>
            </div>
            <h3 class="client-name">Shamudri Tourism LLC</h3>
            <p class="key-result">Key Result: <strong>Brand Awareness</strong></p>
            <button type="button" class="expand-btn" id="btn-case-4">
                Expand Case Study <span class="arrow">▼</span>
            </button>

            <div class="case-details" id="case-4">
                <div class="detail-grid">
                    <div class="detail-item">
                        <h4>Client & Timeline</h4>
                        <p><strong>Client:</strong> Shamudri Tourism LLC<br><strong>Timeline:</strong> 5 Months</p>
                    </div>
                    <div class="detail-item">
                        <h4>Industry</h4>
                        <p>Travel & Hospitality</p>
                    </div>
                </div>

                <div class="detail-item mt-3">
                    <h4>Challenges</h4>
                    <p>No active social media channels and limited international tourist reach.</p>
                </div>

                <div class="detail-item mt-3">
                    <h4>Solutions Implemented</h4>
                    <ul class="solutions-list">
                        <li>Complete Social Media Management</li>
                        <li>Meta Ads & Targeted Travel Promotions</li>
                        <li>High-Quality Visual Content Strategy</li>
                    </ul>
                </div>

                <div class="result-stats">
                    <div class="result-stat">
                        <div class="number">500k+</div>
                        <div class="label">Targeted Reach</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">150+</div>
                        <div class="label">Tour Enquiries</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">3.8x</div>
                        <div class="label">ROAS</div>
                    </div>
                </div>

                <div class="text-center pb-2">
                    <a href="contact.php" class="contact-cta">Discuss Your Project &rarr;</a>
                </div>
            </div>
        </div>

        <!-- 5. Happenstance -->
        <div class="case-card" onclick="toggleCaseStudy('case-5')">
            <div class="case-image">
                <img src="assets/images/footwear-brand.png" alt="Happenstance">
            </div>
            <div>
                <span class="category-badge" style="background: #E91E63;">Retail</span>
            </div>
            <h3 class="client-name">Happenstance</h3>
            <p class="key-result">Key Result: <strong>243K+ Followers</strong></p>
            <button type="button" class="expand-btn" id="btn-case-5">
                Expand Case Study <span class="arrow">▼</span>
            </button>

            <div class="case-details" id="case-5">
                <div class="detail-grid">
                    <div class="detail-item">
                        <h4>Client & Timeline</h4>
                        <p><strong>Client:</strong> Happenstance Footwear<br><strong>Timeline:</strong> 12 Months</p>
                    </div>
                    <div class="detail-item">
                        <h4>Industry</h4>
                        <p>Retail & Footwear Fashion</p>
                    </div>
                </div>

                <div class="detail-item mt-3">
                    <h4>Challenges</h4>
                    <p>Low social media presence and static offline retail store footfall.</p>
                </div>

                <div class="detail-item mt-3">
                    <h4>Solutions Implemented</h4>
                    <ul class="solutions-list">
                        <li>Viral Social Media Growth Campaign</li>
                        <li>Meta Ads & E-commerce Conversions</li>
                        <li>Local SEO & GMB Store Listings</li>
                    </ul>
                </div>

                <div class="result-stats">
                    <div class="result-stat">
                        <div class="number">243K+</div>
                        <div class="label">New Followers</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">40%</div>
                        <div class="label">Footfall Boost</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">2M+</div>
                        <div class="label">Impressions</div>
                    </div>
                </div>

                <div class="text-center pb-2">
                    <a href="contact.php" class="contact-cta">Discuss Your Project &rarr;</a>
                </div>
            </div>
        </div>

        <!-- 6. Bluesky Scaffolding -->
        <div class="case-card" onclick="toggleCaseStudy('case-6')">
            <div class="case-image">
                <img src="assets/images/construction.png" alt="Bluesky Scaffolding">
            </div>
            <div>
                <span class="category-badge" style="background: #F39C12;">Construction</span>
            </div>
            <h3 class="client-name">Bluesky Scaffolding</h3>
            <p class="key-result">Key Result: <strong>Digital Presence</strong></p>
            <button type="button" class="expand-btn" id="btn-case-6">
                Expand Case Study <span class="arrow">▼</span>
            </button>

            <div class="case-details" id="case-6">
                <div class="detail-grid">
                    <div class="detail-item">
                        <h4>Client & Timeline</h4>
                        <p><strong>Client:</strong> Bluesky Scaffolding<br><strong>Timeline:</strong> 6 Months</p>
                    </div>
                    <div class="detail-item">
                        <h4>Industry</h4>
                        <p>Construction & Industrial Supplies</p>
                    </div>
                </div>

                <div class="detail-item mt-3">
                    <h4>Challenges</h4>
                    <p>No corporate website, low B2B industry visibility, and manual lead intake.</p>
                </div>

                <div class="detail-item mt-3">
                    <h4>Solutions Implemented</h4>
                    <ul class="solutions-list">
                        <li>Corporate Website Development</li>
                        <li>B2B SEO & Google My Business</li>
                        <li>Social Media Industry Branding</li>
                    </ul>
                </div>

                <div class="result-stats">
                    <div class="result-stat">
                        <div class="number">200+</div>
                        <div class="label">B2B Leads</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">300%</div>
                        <div class="label">Search Traffic</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">100%</div>
                        <div class="label">Brand Uptime</div>
                    </div>
                </div>

                <div class="text-center pb-2">
                    <a href="contact.php" class="contact-cta">Discuss Your Project &rarr;</a>
                </div>
            </div>
        </div>

        <!-- 7. Tanaji Group -->
        <div class="case-card" onclick="toggleCaseStudy('case-7')">
            <div class="case-image">
                <img src="assets/images/tanaji-group.png" alt="Tanaji Group">
            </div>
            <div>
                <span class="category-badge" style="background: #F39C12;">Construction</span>
            </div>
            <h3 class="client-name">Tanaji Group</h3>
            <p class="key-result">Key Result: <strong>Website Development</strong></p>
            <button type="button" class="expand-btn" id="btn-case-7">
                Expand Case Study <span class="arrow">▼</span>
            </button>

            <div class="case-details" id="case-7">
                <div class="detail-grid">
                    <div class="detail-item">
                        <h4>Client & Timeline</h4>
                        <p><strong>Client:</strong> Tanaji Group<br><strong>Timeline:</strong> 4 Months</p>
                    </div>
                    <div class="detail-item">
                        <h4>Industry</h4>
                        <p>Infrastructure & Construction</p>
                    </div>
                </div>

                <div class="detail-item mt-3">
                    <h4>Challenges</h4>
                    <p>Outdated digital presence, low online project inquiries, and missing brand portfolio.</p>
                </div>

                <div class="detail-item mt-3">
                    <h4>Solutions Implemented</h4>
                    <ul class="solutions-list">
                        <li>Dynamic Responsive Web Architecture</li>
                        <li>UI/UX Design & Portfolio Showcase</li>
                        <li>Search Engine Optimization (SEO)</li>
                    </ul>
                </div>

                <div class="result-stats">
                    <div class="result-stat">
                        <div class="number">3x</div>
                        <div class="label">Organic Traffic</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">85%</div>
                        <div class="label">Mobile Performance</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">150+</div>
                        <div class="label">Inquiries</div>
                    </div>
                </div>

                <div class="text-center pb-2">
                    <a href="contact.php" class="contact-cta">Discuss Your Project &rarr;</a>
                </div>
            </div>
        </div>

        <!-- 8. YashRaj Systems -->
        <div class="case-card" onclick="toggleCaseStudy('case-8')">
            <div class="case-image">
                <img src="assets/images/automation.png" alt="YashRaj Systems">
            </div>
            <div>
                <span class="category-badge" style="background: #3498DB;">Automation</span>
            </div>
            <h3 class="client-name">YashRaj Systems</h3>
            <p class="key-result">Key Result: <strong>Website Development</strong></p>
            <button type="button" class="expand-btn" id="btn-case-8">
                Expand Case Study <span class="arrow">▼</span>
            </button>

            <div class="case-details" id="case-8">
                <div class="detail-grid">
                    <div class="detail-item">
                        <h4>Client & Timeline</h4>
                        <p><strong>Client:</strong> YashRaj Systems<br><strong>Timeline:</strong> 3 Months</p>
                    </div>
                    <div class="detail-item">
                        <h4>Industry</h4>
                        <p>Industrial Automation & Engineering</p>
                    </div>
                </div>

                <div class="detail-item mt-3">
                    <h4>Challenges</h4>
                    <p>No website, no online presence, inability to capture modern digital enquiries.</p>
                </div>

                <div class="detail-item mt-3">
                    <h4>Solutions Implemented</h4>
                    <ul class="solutions-list">
                        <li>High-Speed Static Web Development</li>
                        <li>Corporate UI/UX Design</li>
                        <li>Performance Optimization & SSL Security</li>
                    </ul>
                </div>

                <div class="result-stats">
                    <div class="result-stat">
                        <div class="number">100%</div>
                        <div class="label">Digital Uptime</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">4.5x</div>
                        <div class="label">Lead Intake</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">50+</div>
                        <div class="label">B2B Partners</div>
                    </div>
                </div>

                <div class="text-center pb-2">
                    <a href="contact.php" class="contact-cta">Discuss Your Project &rarr;</a>
                </div>
            </div>
        </div>

        <!-- 9. TechPort Solutions -->
        <div class="case-card" onclick="toggleCaseStudy('case-9')">
            <div class="case-image">
                <img src="assets/images/techport-solutions.png" alt="TechPort Solutions">
            </div>
            <div>
                <span class="category-badge" style="background: #3498DB;">Automation</span>
            </div>
            <h3 class="client-name">TechPort Solutions</h3>
            <p class="key-result">Key Result: <strong>LinkedIn Branding</strong></p>
            <button type="button" class="expand-btn" id="btn-case-9">
                Expand Case Study <span class="arrow">▼</span>
            </button>

            <div class="case-details" id="case-9">
                <div class="detail-grid">
                    <div class="detail-item">
                        <h4>Client & Timeline</h4>
                        <p><strong>Client:</strong> TechPort Solutions<br><strong>Timeline:</strong> 5 Months</p>
                    </div>
                    <div class="detail-item">
                        <h4>Industry</h4>
                        <p>IT Services & Software Solutions</p>
                    </div>
                </div>

                <div class="detail-item mt-3">
                    <h4>Challenges</h4>
                    <p>No corporate website, lack of LinkedIn executive branding, low enterprise client trust.</p>
                </div>

                <div class="detail-item mt-3">
                    <h4>Solutions Implemented</h4>
                    <ul class="solutions-list">
                        <li>Corporate Website Development</li>
                        <li>LinkedIn Executive Branding & Content</li>
                        <li>Lead Funnel & UI/UX Optimization</li>
                    </ul>
                </div>

                <div class="result-stats">
                    <div class="result-stat">
                        <div class="number">50+</div>
                        <div class="label">Enterprise Leads</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">10k+</div>
                        <div class="label">LinkedIn Reach</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">2.8x</div>
                        <div class="label">Pipeline Growth</div>
                    </div>
                </div>

                <div class="text-center pb-2">
                    <a href="contact.php" class="contact-cta">Discuss Your Project &rarr;</a>
                </div>
            </div>
        </div>

        <!-- 10. Venkateshwara Cooperative -->
        <div class="case-card" onclick="toggleCaseStudy('case-10')">
            <div class="case-image">
                <img src="assets/images/agriculture.png" alt="Venkateshwara Cooperative">
            </div>
            <div>
                <span class="category-badge" style="background: #27AE60;">Agriculture</span>
            </div>
            <h3 class="client-name">Venkateshwara Cooperative</h3>
            <p class="key-result">Key Result: <strong>Social Media Setup</strong></p>
            <button type="button" class="expand-btn" id="btn-case-10">
                Expand Case Study <span class="arrow">▼</span>
            </button>

            <div class="case-details" id="case-10">
                <div class="detail-grid">
                    <div class="detail-item">
                        <h4>Client & Timeline</h4>
                        <p><strong>Client:</strong> Venkateshwara Co-Op<br><strong>Timeline:</strong> 6 Months</p>
                    </div>
                    <div class="detail-item">
                        <h4>Industry</h4>
                        <p>Agriculture & Farming Cooperative</p>
                    </div>
                </div>

                <div class="detail-item mt-3">
                    <h4>Challenges</h4>
                    <p>Traditional offline operations with zero social media channels and limited farmer outreach.</p>
                </div>

                <div class="detail-item mt-3">
                    <h4>Solutions Implemented</h4>
                    <ul class="solutions-list">
                        <li>Multilingual Social Media Channel Setup</li>
                        <li>Educational & Informative Content Strategy</li>
                        <li>Community Outreach Campaigns</li>
                    </ul>
                </div>

                <div class="result-stats">
                    <div class="result-stat">
                        <div class="number">50k+</div>
                        <div class="label">Farmers Reached</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">12k+</div>
                        <div class="label">Members Joined</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">90%</div>
                        <div class="label">Community Trust</div>
                    </div>
                </div>

                <div class="text-center pb-2">
                    <a href="contact.php" class="contact-cta">Discuss Your Project &rarr;</a>
                </div>
            </div>
        </div>

        <!-- 11. Latur Mahanagar Palika -->
        <div class="case-card" onclick="toggleCaseStudy('case-11')">
            <div class="case-image">
                <img src="assets/images/gov.png" alt="Latur Mahanagar Palika">
            </div>
            <div>
                <span class="category-badge" style="background: #E74C3C;">Government</span>
            </div>
            <h3 class="client-name">Latur Mahanagar Palika</h3>
            <p class="key-result">Key Result: <strong>Election Campaigns</strong></p>
            <button type="button" class="expand-btn" id="btn-case-11">
                Expand Case Study <span class="arrow">▼</span>
            </button>

            <div class="case-details" id="case-11">
                <div class="detail-grid">
                    <div class="detail-item">
                        <h4>Client & Timeline</h4>
                        <p><strong>Client:</strong> Latur Mahanagar Palika<br><strong>Timeline:</strong> 3 Months</p>
                    </div>
                    <div class="detail-item">
                        <h4>Industry</h4>
                        <p>Government & Municipal Public Services</p>
                    </div>
                </div>

                <div class="detail-item mt-3">
                    <h4>Challenges</h4>
                    <p>Low digital civic engagement, outdated communication, lack of social media presence.</p>
                </div>

                <div class="detail-item mt-3">
                    <h4>Solutions Implemented</h4>
                    <ul class="solutions-list">
                        <li>Social Media Strategy & Verification</li>
                        <li>High-Impact Video & Campaign Content</li>
                        <li>Civic Engagement Drives</li>
                    </ul>
                </div>

                <div class="result-stats">
                    <div class="result-stat">
                        <div class="number">1M+</div>
                        <div class="label">Video Views</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">80%</div>
                        <div class="label">Citizen Reach</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">50k+</div>
                        <div class="label">Interactions</div>
                    </div>
                </div>

                <div class="text-center pb-2">
                    <a href="contact.php" class="contact-cta">Discuss Your Project &rarr;</a>
                </div>
            </div>
        </div>

        <!-- 12. Nashik Mahanagar Palika -->
        <div class="case-card" onclick="toggleCaseStudy('case-12')">
            <div class="case-image">
                <img src="assets/images/gov.png" alt="Nashik Mahanagar Palika">
            </div>
            <div>
                <span class="category-badge" style="background: #E74C3C;">Government</span>
            </div>
            <h3 class="client-name">Nashik Mahanagar Palika</h3>
            <p class="key-result">Key Result: <strong>Digital Communication</strong></p>
            <button type="button" class="expand-btn" id="btn-case-12">
                Expand Case Study <span class="arrow">▼</span>
            </button>

            <div class="case-details" id="case-12">
                <div class="detail-grid">
                    <div class="detail-item">
                        <h4>Client & Timeline</h4>
                        <p><strong>Client:</strong> Nashik Mahanagar Palika<br><strong>Timeline:</strong> 4 Months</p>
                    </div>
                    <div class="detail-item">
                        <h4>Industry</h4>
                        <p>Government & Public Administration</p>
                    </div>
                </div>

                <div class="detail-item mt-3">
                    <h4>Challenges</h4>
                    <p>No unified digital communication platform, low citizen public awareness.</p>
                </div>

                <div class="detail-item mt-3">
                    <h4>Solutions Implemented</h4>
                    <ul class="solutions-list">
                        <li>Social Media Channel Operations</li>
                        <li>Public Information & Awareness Campaigns</li>
                        <li>Digital Broadcast Strategy</li>
                    </ul>
                </div>

                <div class="result-stats">
                    <div class="result-stat">
                        <div class="number">800k+</div>
                        <div class="label">Impressions</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">95%</div>
                        <div class="label">Public Awareness</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">100%</div>
                        <div class="label">Verified Channels</div>
                    </div>
                </div>

                <div class="text-center pb-2">
                    <a href="contact.php" class="contact-cta">Discuss Your Project &rarr;</a>
                </div>
            </div>
        </div>

        <!-- 13. Shri Samartha Krupa Ghee -->
        <div class="case-card" onclick="toggleCaseStudy('case-13')">
            <div class="case-image">
                <img src="assets/images/food.png" alt="Shri Samartha Krupa Ghee">
            </div>
            <div>
                <span class="category-badge" style="background: #F1C40F; color: #2D3436 !important;">Food</span>
            </div>
            <h3 class="client-name">Shri Samartha Krupa Ghee</h3>
            <p class="key-result">Key Result: <strong>E-commerce Onboarding</strong></p>
            <button type="button" class="expand-btn" id="btn-case-13">
                Expand Case Study <span class="arrow">▼</span>
            </button>

            <div class="case-details" id="case-13">
                <div class="detail-grid">
                    <div class="detail-item">
                        <h4>Client & Timeline</h4>
                        <p><strong>Client:</strong> Shri Samartha Krupa Ghee<br><strong>Timeline:</strong> 5 Months</p>
                    </div>
                    <div class="detail-item">
                        <h4>Industry</h4>
                        <p>Food & FMCG Products</p>
                    </div>
                </div>

                <div class="detail-item mt-3">
                    <h4>Challenges</h4>
                    <p>Strong offline regional sales, but zero online presence or direct-to-consumer store.</p>
                </div>

                <div class="detail-item mt-3">
                    <h4>Solutions Implemented</h4>
                    <ul class="solutions-list">
                        <li>Social Media Brand Identity Launch</li>
                        <li>E-Commerce Website & Payment Setup</li>
                        <li>Food Influencer Marketing Campaigns</li>
                    </ul>
                </div>

                <div class="result-stats">
                    <div class="result-stat">
                        <div class="number">1,000+</div>
                        <div class="label">Direct Sales</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">3.2x</div>
                        <div class="label">Revenue Growth</div>
                    </div>
                    <div class="result-stat">
                        <div class="number">150k+</div>
                        <div class="label">Brand Impressions</div>
                    </div>
                </div>

                <div class="text-center pb-2">
                    <a href="contact.php" class="contact-cta">Discuss Your Project &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. CONTACT SECTION -->
<section class="case-contact-section" id="contact">
    <div class="container">
        <h2>Let's Build Your Digital Legacy</h2>
        <p>Want results like these? Let's create a customized strategy for your brand.</p>
        <a href="contact.php" class="contact-btn">Contact Us</a>
    </div>
</section>

<!-- Inline JS for Toggle Case Study Details -->
<script>
function toggleCaseStudy(id) {
    const details = document.getElementById(id);
    const btn = document.getElementById('btn-' + id);
    if (!details) return;
    
    // Close other open case details
    document.querySelectorAll('.case-details.open').forEach(el => {
        if (el.id !== id) {
            el.classList.remove('open');
            const otherBtn = document.getElementById('btn-' + el.id);
            if (otherBtn) {
                otherBtn.classList.remove('active');
                otherBtn.innerHTML = 'Expand Case Study <span class="arrow">▼</span>';
            }
        }
    });

    // Toggle current
    if (details.classList.contains('open')) {
        details.classList.remove('open');
        if (btn) {
            btn.classList.remove('active');
            btn.innerHTML = 'Expand Case Study <span class="arrow">▼</span>';
        }
    } else {
        details.classList.add('open');
        if (btn) {
            btn.classList.add('active');
            btn.innerHTML = 'Collapse Case Study <span class="arrow">▲</span>';
        }
    }
}
</script>

<?php require_once 'includes/footer.php'; ?>