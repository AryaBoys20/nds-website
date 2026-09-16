<?php
// sections/id/keunggulan.php
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
<section id="keunggulan" class="section-padding bg-nds-light">
    <div class="container">
        <h2 class="section-title text-dark mb-4"><?= e($lang['keunggulan_title'] ?? 'Competitive Advantages') ?></h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="text-center p-3">
                    <i class="bi bi-award fs-1 text-nds-accent"></i>
                    <h5 class="mt-2 text-dark"><?= e($lang['keunggulan_sertifikat'] ?? 'Certified Experts') ?></h5>
                    <p class="small text-secondary"><?= e($lang['keunggulan_sertifikat_desc'] ?? '95% team from top universities & Google/Microsoft certified') ?></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center p-3">
                    <i class="bi bi-clock-history fs-1 text-nds-accent"></i>
                    <h5 class="mt-2 text-dark"><?= e($lang['keunggulan_24jam'] ?? '24/7 Service') ?></h5>
                    <p class="small text-secondary"><?= e($lang['keunggulan_24jam_desc'] ?? 'Technical response guarantee in less than 2 hours') ?></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center p-3">
                    <i class="bi bi-arrow-repeat fs-1 text-nds-accent"></i>
                    <h5 class="mt-2 text-dark"><?= e($lang['keunggulan_agile'] ?? 'Agile') ?></h5>
                    <p class="small text-secondary"><?= e($lang['keunggulan_agile_desc'] ?? 'Feature iteration every 2 weeks, flexible & adaptive') ?></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center p-3">
                    <i class="bi bi-shield-lock fs-1 text-nds-accent"></i>
                    <h5 class="mt-2 text-dark"><?= e($lang['keunggulan_keamanan'] ?? 'Cybersecurity') ?></h5>
                    <p class="small text-secondary"><?= e($lang['keunggulan_keamanan_desc'] ?? 'Data protection & system integrity as top priority') ?></p>
                </div>
            </div>
        </div>
        <div class="mt-4 p-4 bg-white rounded-4 text-center">
            <p class="mb-0 fw-semibold text-dark"><i class="bi bi-trophy text-nds-accent me-2"></i><?= e($lang['keunggulan_footer'] ?? 'Credible · Innovative · Experienced (150+ clients) · 85+ Employees · Socially responsible') ?></p>
        </div>
    </div>
</section>