<?php
// sections/en/tentang.php
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
<section id="tentang" class="section-padding bg-nds-light">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 animate-fade-left">
                <h2 class="section-title text-dark mb-4"><?= e($lang['tentang_title'] ?? 'About NDS') ?></h2>
                <p class="fs-6">
                    <span class="fw-bold"><?= e($lang['tentang_desc1'] ?? 'PT. Nusantara Digital Solindo is a trusted digital transformation partner that brings a sustainable innovation ecosystem for businesses of all scales.') ?></span>
                </p>
                <p><?= e($lang['tentang_desc2'] ?? 'We believe technology is a tool to create real impact for business growth and social welfare. Every solution is designed with a human-centered approach and ease of adoption.') ?></p>
                
                <ul class="list-unstyled mt-4">
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill list-icon"></i>
                        <strong><?= e($lang['tentang_kantor'] ?? 'Head Office') ?>:</strong> Menara Bumi Digital, SCBD, Jakarta Selatan
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill list-icon"></i>
                        <strong><?= e($lang['tentang_berdiri'] ?? 'Established') ?>:</strong> 2018
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill list-icon"></i>
                        <strong><?= e($lang['tentang_jml_karyawan'] ?? 'Employees') ?>:</strong> 85+ experienced professionals
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 animate-fade-right delay-1">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=500&h=260&fit=crop&crop=center" 
                     alt="NDS Team" 
                     class="img-about shadow-lg">
            </div>
        </div>
    </div>
</section>