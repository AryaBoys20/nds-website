<?php
// sections/en/hero.php
if (!isset($lang) || !is_array($lang)) {
    $lang = [];
    $currentLang = $_SESSION['lang'] ?? 'en';
    $langFile = __DIR__ . '/../../lang/' . $currentLang . '.php';
    if (file_exists($langFile)) {
        include $langFile;
    } else {
        include __DIR__ . '/../../lang/en.php';
    }
}
?>
<section id="hero" class="hero-gradient py-5">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <span class="hero-badge mb-4 d-inline-block">
                    <i class="bi bi-stars me-2"></i> <?= e($lang['hero_badge'] ?? 'Digital Transformation Partner') ?>
                </span>
                
                <h1 class="display-3 fw-bold text-white mb-3 animate-fade-up">
                    <?= e($lang['hero_title'] ?? 'PT. Nusantara Digital Solindo') ?>
                </h1>
                
                <p class="fs-3 fw-light text-white mb-3 animate-fade-up delay-1">
                    <span class="typewriter" data-texts='["Creating an Intelligent & Integrated Digital Future","Building a Smart Digital Future","Innovating for a Smarter Tomorrow","Digital Transformation for Indonesia"]'>
                        <?= e($lang['hero_subtitle'] ?? 'Creating an Intelligent & Integrated Digital Future') ?>
                    </span>
                    <span class="d-inline-block animate-pulse" style="color: #3b9bd7;">|</span>
                </p>
                
                <p class="lead mb-4 animate-fade-up delay-2" style="color: rgba(255,255,255,0.8) !important; font-weight: 300;">
                    <?= e($lang['hero_description'] ?? 'Trusted partner for digital transformation, from strategy to implementation of secure, scalable, and human-centered systems.') ?>
                </p>
                
                <div class="d-flex flex-wrap gap-4 mb-4 animate-fade-up delay-3">
                    <div class="text-center">
                        <span class="stat-number">150+</span>
                        <div class="stat-label"><?= e($lang['hero_klien'] ?? 'Clients') ?></div>
                    </div>
                    <div class="text-center">
                        <span class="stat-number">85</span>
                        <div class="stat-label"><?= e($lang['hero_karyawan'] ?? 'Employees') ?></div>
                    </div>
                    <div class="text-center">
                        <span class="stat-number">2018</span>
                        <div class="stat-label"><?= e($lang['hero_berdiri'] ?? 'Established') ?></div>
                    </div>
                    <div class="text-center">
                        <span class="stat-number">2026</span>
                        <div class="stat-label"><?= e($lang['hero_visi'] ?? 'Expansion Vision') ?></div>
                    </div>
                </div>
                
                <div class="d-flex flex-wrap gap-3 animate-fade-up delay-4">
                    <a href="<?= wa_url() ?>" target="_blank" class="btn btn-wa btn-lg px-5 animate-pulse-wa">
                        <i class="bi bi-whatsapp me-2"></i><?= e($lang['hero_btn_wa'] ?? 'Contact via WA') ?>
                    </a>
                    <a href="#layanan" class="btn btn-outline-light btn-lg px-5">
                        <?= e($lang['hero_btn_layanan'] ?? 'Explore Services') ?>
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
            
            <div class="col-lg-5 animate-fade-right delay-2">
                <div class="position-relative">
                    <img src="<?= asset('img/hero-team-collaboration.png') ?>" 
                         alt="NDS Team Collaboration" 
                         class="img-hero animate-float"
                         style="width: 100%; height: auto; max-height: 350px; object-fit: contain; background: rgba(255,255,255,0.05); padding: 10px;">
                    <div class="position-absolute top-0 end-0 bg-white rounded-3 p-2 shadow-lg animate-pulse" 
                         style="transform: translate(30%, -30%);">
                        <span class="badge bg-success">
                            <i class="bi bi-check-circle-fill me-1"></i> 100% Trusted
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>