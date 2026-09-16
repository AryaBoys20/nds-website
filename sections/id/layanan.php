<?php
// sections/id/layanan.php
if (!isset($lang) || !is_array($lang)) {
    $lang = [];
    $currentLang = $_SESSION['lang'] ?? 'id';
    $langFile = __DIR__ . '/../../lang/' . $currentLang . '.php';
    if (file_exists($langFile)) {
        include $langFile;
    } else {
        include __DIR__ . '/../../lang/id.php';
    }
}
?>
<section id="layanan" class="section-padding bg-nds-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title text-center"><?= e($lang['layanan_title'] ?? 'Layanan Kami') ?></h2>
            <p class="section-subtitle"><?= e($lang['layanan_subtitle'] ?? 'Klik salah satu layanan untuk melihat detail lengkap') ?></p>
        </div>
        
        <div class="row g-4">
            <?php
            $services = [
                [
                    'slug' => 'consulting',
                    'icon' => 'bi-graph-up-arrow',
                    'color' => '#3b9bd7',
                    'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=400&h=250&fit=crop&crop=center',
                    'title' => 'Technology Consulting'
                ],
                [
                    'slug' => 'software-dev',
                    'icon' => 'bi-phone',
                    'color' => '#6f42c1',
                    'image' => 'https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?w=400&h=250&fit=crop&crop=center',
                    'title' => 'Software Development'
                ],
                [
                    'slug' => 'ai-solutions',
                    'icon' => 'bi-cpu',
                    'color' => '#dc3545',
                    'image' => 'https://images.unsplash.com/photo-1507146153580-69a1fe6d8aa1?w=400&h=250&fit=crop&crop=center',
                    'title' => 'AI Solutions'
                ],
                [
                    'slug' => 'cloud-computing',
                    'icon' => 'bi-cloud',
                    'color' => '#0dcaf0',
                    'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=400&h=250&fit=crop&crop=center',
                    'title' => 'Cloud Computing'
                ],
                [
                    'slug' => 'iot-solutions',
                    'icon' => 'bi-wifi',
                    'color' => '#198754',
                    'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=400&h=250&fit=crop&crop=center',
                    'title' => 'IoT Solutions'
                ],
                [
                    'slug' => 'cybersecurity',
                    'icon' => 'bi-shield-lock',
                    'color' => '#fd7e14',
                    'image' => 'https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?w=400&h=250&fit=crop&crop=center',
                    'title' => 'Cybersecurity'
                ],
            ];
            foreach ($services as $index => $svc):
                $labelKey = 'layanan_' . str_replace('-', '_', $svc['slug']);
                $descKey = $labelKey . '_desc';
            ?>
            <div class="col-md-6 col-lg-4 animate-fade-up delay-<?= ($index + 1) ?>">
                <a href="<?= BASE_URL ?>detail.php?service=<?= $svc['slug'] ?>" class="text-decoration-none">
                    <div class="card service-card h-100">
                        <div class="position-relative">
                            <img src="<?= e($svc['image']) ?>" 
                                 alt="<?= e($lang[$labelKey] ?? $svc['title']) ?>" 
                                 class="card-img-top"
                                 style="height: 200px; object-fit: cover; transition: var(--transition-smooth);">
                            <div class="position-absolute top-0 end-0 m-3">
                                <span class="badge bg-white text-dark px-3 py-2 rounded-pill shadow-sm" style="font-weight: 500; font-size: 0.7rem;">
                                    <i class="bi bi-arrow-right text-nds-accent me-1"></i> Detail
                                </span>
                            </div>
                            <div class="position-absolute bottom-0 start-0 end-0 p-3" 
                                 style="background: linear-gradient(transparent, rgba(0,0,0,0.6));">
                            </div>
                        </div>
                        <div class="card-body text-center p-4">
                            <div class="service-icon-wrapper mx-auto" style="background: linear-gradient(135deg, <?= $svc['color'] ?>, <?= $svc['color'] ?>cc); margin-top: -32px;">
                                <i class="bi <?= $svc['icon'] ?>"></i>
                            </div>
                            <h5 class="card-title mt-3 text-dark fw-bold"><?= e($lang[$labelKey] ?? $svc['title']) ?></h5>
                            <p class="card-text small text-secondary"><?= e($lang[$descKey] ?? '') ?></p>
                            <span class="btn btn-nds btn-sm w-100">
                                <?= e($lang['layanan_btn_detail'] ?? 'Lihat Detail') ?>
                                <i class="bi bi-arrow-right ms-1"></i>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
        <p class="mt-5 text-secondary fst-italic text-center animate-fade-up delay-4">
            <i class="bi bi-quote me-2 text-nds-accent"></i>
            <?= e($lang['layanan_footer'] ?? 'Bukan sekadar vendor teknologi, tapi mitra strategis dalam otomatisasi & inovasi digital.') ?>
        </p>
    </div>
</section>