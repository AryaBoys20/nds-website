<?php
// sections/en/visi.php
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
<section id="visi" class="section-padding bg-nds-primary position-relative overflow-hidden">
    <!-- Decoration -->
    <div class="position-absolute" style="top: -20%; right: -10%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(59,155,215,0.12) 0%, transparent 70%); border-radius: 50%; animation: float 8s ease-in-out infinite;"></div>
    <div class="position-absolute" style="bottom: -30%; left: -10%; width: 400px; height: 400px; background: radial-gradient(circle, rgba(59,155,215,0.08) 0%, transparent 70%); border-radius: 50%; animation: floatReverse 6s ease-in-out infinite;"></div>

    <div class="container position-relative" style="z-index: 2;">
        <!-- ====== VISION ====== -->
        <div class="row align-items-center g-5 mb-5 pb-5 border-bottom border-light border-opacity-10">
            <div class="col-lg-7 animate-fade-left">
                <span class="badge bg-warning text-dark mb-3 px-4 py-2 rounded-pill" style="font-weight: 600;">
                    <i class="bi bi-compass-fill me-1"></i> <?= e($lang['visi_badge'] ?? 'Our Vision') ?>
                </span>
                <h2 class="fw-bold text-white display-5 mb-3"><?= e($lang['visi_title'] ?? 'Long-term Vision') ?></h2>
                <p class="fs-5 fw-light text-white-50 mb-4" style="line-height: 1.8;">
                    <?= e($lang['visi_desc'] ?? 'To become a leading technology company in Southeast Asia by 2026, with inclusive and sustainable solutions.') ?>
                </p>
                <p class="text-white-50 mb-4">
                    <?= e($lang['visi_kantor'] ?? 'Head office in SCBD Jakarta, serving clients throughout Indonesia and expanding to Southeast Asia.') ?>
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <span class="badge bg-light text-dark px-3 py-2">150+ Clients</span>
                    <span class="badge bg-light text-dark px-3 py-2">85+ Employees</span>
                    <span class="badge bg-light text-dark px-3 py-2">Agritech · EdTech · F&B · Banking</span>
                </div>
            </div>
            <div class="col-lg-5 animate-fade-right delay-1">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=500&h=350&fit=crop&crop=center" 
                         alt="NDS Vision" 
                         class="img-fluid rounded-4 shadow-lg" 
                         style="width: 100%; height: 300px; object-fit: cover;">
                    <div class="position-absolute bottom-0 start-0 m-3 bg-white rounded-3 p-3 shadow-lg">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-trophy-fill text-warning fs-4"></i>
                            <div>
                                <div class="fw-bold text-dark small">Top 10</div>
                                <div class="text-secondary" style="font-size: 0.7rem;">Tech Company 2026</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ====== MISSION ====== -->
        <div class="text-center mb-5 animate-fade-up">
            <span class="badge bg-warning text-dark mb-3 px-4 py-2 rounded-pill" style="font-weight: 600;">
                <i class="bi bi-bullseye me-1"></i> <?= e($lang['misi_badge'] ?? 'Our Mission') ?>
            </span>
            <h2 class="fw-bold text-white display-6 mb-3"><?= e($lang['misi_title'] ?? 'Our Mission') ?></h2>
            <p class="text-white-50 mx-auto" style="max-width: 600px;">
                <?= e($lang['misi_subtitle'] ?? 'Our commitment to creating real impact through technology.') ?>
            </p>
        </div>

        <div class="row g-4">
            <?php
            $missions = [
                ['icon' => 'bi-lightbulb-fill', 'title_key' => 'misi_1_title', 'desc_key' => 'misi_1_desc', 'default_title' => 'Continuous Innovation', 'default_desc' => 'Delivering innovative technology solutions that answer today\'s business challenges.'],
                ['icon' => 'bi-people-fill', 'title_key' => 'misi_2_title', 'desc_key' => 'misi_2_desc', 'default_title' => 'Quality Talent', 'default_desc' => 'Developing the best digital talents through training, certification, and learning culture.'],
                ['icon' => 'bi-globe2', 'title_key' => 'misi_3_title', 'desc_key' => 'misi_3_desc', 'default_title' => 'Social Impact', 'default_desc' => 'Contributing to society through inclusive and sustainable technology.'],
                ['icon' => 'bi-shield-check', 'title_key' => 'misi_4_title', 'desc_key' => 'misi_4_desc', 'default_title' => 'Security & Trust', 'default_desc' => 'Maintaining data integrity and client trust as our top priority.'],
                ['icon' => 'bi-rocket-takeoff-fill', 'title_key' => 'misi_5_title', 'desc_key' => 'misi_5_desc', 'default_title' => 'Sustainable Growth', 'default_desc' => 'Building a business ecosystem that grows together with clients and partners.'],
                ['icon' => 'bi-hand-thumbs-up-fill', 'title_key' => 'misi_6_title', 'desc_key' => 'misi_6_desc', 'default_title' => 'Customer Satisfaction', 'default_desc' => 'Providing the best service with fast response and targeted solutions.'],
            ];
            foreach ($missions as $index => $misi):
            ?>
            <div class="col-md-6 col-lg-4 animate-fade-up delay-<?= ($index % 3) + 1 ?>">
                <div class="misi-card h-100 p-4 rounded-4 position-relative" 
                     style="background: rgba(255,255,255,0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.08); transition: var(--transition-smooth);">
                    <div class="d-flex align-items-start gap-3 mb-3">
                        <div class="misi-icon-wrapper" style="width: 56px; height: 56px; background: linear-gradient(135deg, var(--nds-accent), var(--nds-accent-dark)); border-radius: 16px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; box-shadow: 0 8px 25px rgba(59,155,215,0.3);">
                            <i class="bi <?= $misi['icon'] ?> fs-4 text-white"></i>
                        </div>
                        <div>
                            <span class="badge bg-nds-accent mb-2" style="font-size: 0.7rem;">Mission <?= $index + 1 ?></span>
                            <h5 class="fw-bold text-white mb-0"><?= e($lang[$misi['title_key']] ?? $misi['default_title']) ?></h5>
                        </div>
                    </div>
                    <p class="text-white-50 small mb-0" style="line-height: 1.7;">
                        <?= e($lang[$misi['desc_key']] ?? $misi['default_desc']) ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- ====== CTA ====== -->
        <div class="text-center mt-5 animate-fade-up delay-4">
            <a href="<?= wa_url() ?>" target="_blank" class="btn btn-wa btn-lg px-5 animate-pulse-wa" style="border-radius: 50px;">
                <i class="bi bi-whatsapp me-2"></i> <?= e($lang['visi_cta'] ?? 'Discuss Your Vision') ?>
            </a>
        </div>
    </div>
</section>

<style>
.misi-card { transition: var(--transition-smooth); }
.misi-card:hover {
    transform: translateY(-8px);
    background: rgba(255,255,255,0.08) !important;
    border-color: rgba(59,155,215,0.3) !important;
    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
}
.misi-card:hover .misi-icon-wrapper {
    transform: scale(1.1) rotate(6deg);
    box-shadow: 0 12px 35px rgba(59,155,215,0.5);
}
.misi-icon-wrapper { transition: var(--transition-bounce); }
</style>