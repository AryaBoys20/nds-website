<?php
// File: includes/footer.php
// Footer Component with language support

if (!defined('BASE_PATH')) {
    require_once __DIR__ . '/../config.php';
}

$currentLang = $_SESSION['lang'] ?? 'id';
$basePath = $basePath ?? BASE_PATH;
?>
<footer class="bg-nds-primary text-white pt-5 pb-3">
    <div class="container">
        <!-- Footer Top -->
        <div class="row g-4 pb-4 border-bottom border-secondary border-opacity-25">
            <!-- Company Info -->
            <div class="col-lg-4 col-md-6">
                                <div class="d-flex align-items-center mb-3">
                    <img src="<?= asset('img/logo-nds.png') ?>" 
                         alt="NDS Logo" 
                         style="height: 50px; margin-right: 12px;">
                    <h5 class="fw-bold mb-0"><?= COMPANY_NAME ?></h5>
                </div>
                <p class="text-light-emphasis small" style="color: #b6d4e8 !important;">
                    <?= e($lang['hero_description'] ?? 'Trusted partner for digital transformation, from strategy to implementation of secure, scalable, and human-centered systems.') ?>
                </p>
                <div class="d-flex gap-3 mt-3">
                    <a href="<?= SOCIAL_WHATSAPP ?>" target="_blank" rel="noopener" class="social-icon"><i class="bi bi-whatsapp"></i></a>
                    <a href="<?= SOCIAL_INSTAGRAM ?>" target="_blank" rel="noopener" class="social-icon"><i class="bi bi-instagram"></i></a>
                    <a href="<?= SOCIAL_LINKEDIN ?>" target="_blank" rel="noopener" class="social-icon"><i class="bi bi-linkedin"></i></a>
                    <a href="<?= SOCIAL_YOUTUBE ?>" target="_blank" rel="noopener" class="social-icon"><i class="bi bi-youtube"></i></a>
                    <a href="<?= SOCIAL_TWITTER ?>" target="_blank" rel="noopener" class="social-icon"><i class="bi bi-twitter-x"></i></a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3"><?= e($lang['nav_quick'] ?? 'Quick Links') ?></h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="<?= e($basePath) ?>#tentang" class="footer-link"><?= e($lang['nav_tentang'] ?? 'About') ?></a></li>
                    <li class="mb-2"><a href="<?= e($basePath) ?>#layanan" class="footer-link"><?= e($lang['nav_layanan'] ?? 'Services') ?></a></li>
                    <li class="mb-2"><a href="<?= e($basePath) ?>#klien" class="footer-link"><?= e($lang['nav_klien'] ?? 'Clients') ?></a></li>
                    <li class="mb-2"><a href="<?= e($basePath) ?>#tim" class="footer-link"><?= e($lang['nav_tim'] ?? 'Team') ?></a></li>
                    <li class="mb-2"><a href="<?= e($basePath) ?>#kontak" class="footer-link"><?= e($lang['nav_kontak'] ?? 'Contact') ?></a></li>
                </ul>
            </div>
            
            <!-- Services -->
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-3"><?= e($lang['nav_services'] ?? 'Our Services') ?></h6>
                <ul class="list-unstyled">
                    <?php
                    $services = [
                        'consulting' => 'layanan_consulting',
                        'software-dev' => 'layanan_software',
                        'ai-solutions' => 'layanan_ai',
                        'cloud-computing' => 'layanan_cloud',
                        'iot-solutions' => 'layanan_iot',
                        'cybersecurity' => 'layanan_cybersecurity',
                    ];
                    foreach ($services as $slug => $key): ?>
                    <li class="mb-2">
                        <a href="<?= BASE_URL ?>detail.php?service=<?= $slug ?>" class="footer-link">
                            <i class="bi bi-chevron-right text-nds-accent me-1" style="font-size: 0.6rem;"></i>
                            <?= e($lang[$key] ?? ucwords(str_replace('-', ' ', $slug))) ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-3"><?= e($lang['kontak_title'] ?? 'Contact Us') ?></h6>
                <ul class="list-unstyled">
                    <li class="mb-2 d-flex align-items-start">
                        <i class="bi bi-geo-alt text-nds-accent me-2 mt-1"></i>
                        <span class="small"><?= e(ADDRESS) ?></span>
                    </li>
                    <li class="mb-2 d-flex align-items-center">
                        <i class="bi bi-telephone text-nds-accent me-2"></i>
                        <span class="small"><?= e(PHONE) ?></span>
                    </li>
                    <li class="mb-2 d-flex align-items-center">
                        <i class="bi bi-whatsapp text-success me-2"></i>
                        <a href="<?= SOCIAL_WHATSAPP ?>" target="_blank" rel="noopener" class="footer-link small"><?= e(PHONE) ?></a>
                    </li>
                    <li class="mb-2 d-flex align-items-center">
                        <i class="bi bi-envelope text-nds-accent me-2"></i>
                        <a href="mailto:<?= e(EMAIL_INFO) ?>" class="footer-link small"><?= e(EMAIL_INFO) ?></a>
                    </li>
                    <li class="mb-2 d-flex align-items-center">
                        <i class="bi bi-clock text-nds-accent me-2"></i>
                        <span class="small"><?= e($lang['kontak_jam_detail'] ?? 'Monday–Friday, 08:00–17:00 WIB') ?></span>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <!-- Footer Bottom -->
<div class="row align-items-center pt-4">
    <div class="col-md-6">
        <p class="mb-0 small text-light-emphasis" style="color: rgba(255,255,255,0.6) !important;">
            &copy; <?= date('Y') ?> <?= COMPANY_NAME ?> • <?= e($lang['footer_copyright'] ?? 'All Rights Reserved') ?>
        </p>
    </div>
    <div class="col-md-6 text-md-end">
        <span class="badge bg-light text-dark me-2 animate-pulse">
            <i class="bi bi-people-fill me-1 text-nds-accent"></i> 85+ <?= e($lang['footer_karyawan'] ?? 'Employees') ?>
        </span>
        <span class="badge bg-light text-dark me-2">
            <i class="bi bi-whatsapp text-success"></i> <?= e(PHONE) ?>
        </span>
        <span class="badge bg-light text-dark d-none d-sm-inline-block">
            <i class="bi bi-star-fill text-warning me-1"></i> 
            <?= e($lang['footer_tagline'] ?? 'Creating an Intelligent & Integrated Digital Future') ?>
        </span>
    </div>
</div>

<!-- Back to Top Button -->
<button onclick="scrollToTop()" id="backToTopBtn" class="btn btn-nds rounded-circle" 
        style="position: fixed; bottom: 100px; right: 30px; width: 45px; height: 45px; 
               display: none; z-index: 999; box-shadow: 0 4px 15px rgba(59,155,215,0.4); 
               border: none; font-size: 1.2rem; transition: all 0.3s ease;">
    <i class="bi bi-arrow-up"></i>
</button>

<script>
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="<?= e($basePath) ?>assets/js/main.js"></script>
</body>
</html>