<?php
// sections/en/kontak.php
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
<section id="kontak" class="section-padding bg-nds-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title text-center"><?= e($lang['kontak_title'] ?? 'Contact Us') ?></h2>
            <p class="section-subtitle"><?= e($lang['kontak_subtitle'] ?? 'Visit our office or contact the NDS team through the contacts below.') ?></p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-5 animate-fade-left">
                <div class="contact-info-card">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="bg-nds-light p-3 rounded-3">
                            <i class="bi bi-geo-alt text-nds-accent fs-3"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-0"><?= e($lang['kontak_alamat'] ?? 'Office Address') ?></h5>
                        </div>
                    </div>
                    <p class="text-secondary">Jl. Sangkuriang No. 34-36<br />Cipageran, Cimahi 40531</p>
                    
                    <hr />
                    
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="bg-nds-light p-2 rounded-3">
                            <i class="bi bi-telephone text-nds-accent"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0"><?= e($lang['kontak_telepon'] ?? 'Phone') ?></h6>
                            <p class="text-secondary mb-0">+62 896 4999 0006</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="bg-success bg-opacity-10 p-2 rounded-3">
                            <i class="bi bi-whatsapp text-success"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0"><?= e($lang['kontak_whatsapp'] ?? 'WhatsApp') ?></h6>
                            <p class="mb-0">
                                <a href="https://wa.me/6289649990006?text=Hello%20NDS%2C%20I%20am%20interested%20in%20your%20digital%20transformation%20services." 
                                   target="_blank" class="wa-link">
                                    +62 896 4999 0006
                                </a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="bg-nds-light p-2 rounded-3">
                            <i class="bi bi-envelope text-nds-accent"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0"><?= e($lang['kontak_email'] ?? 'Email') ?></h6>
                            <p class="text-secondary mb-0">info@nds-digital.co.id</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="bg-nds-light p-2 rounded-3">
                            <i class="bi bi-clock text-nds-accent"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0"><?= e($lang['kontak_jam'] ?? 'Working Hours') ?></h6>
                            <p class="text-secondary mb-0"><?= e($lang['kontak_jam_detail'] ?? 'Monday–Friday, 08:00–17:00 WIB') ?></p>
                        </div>
                    </div>
                    
                    <hr />
                    
                    <div class="d-flex flex-column gap-2">
                        <a href="https://wa.me/6289649990006?text=Hello%20NDS%2C%20I%20am%20interested%20in%20your%20digital%20transformation%20services." 
                           target="_blank" class="btn btn-wa w-100 py-3">
                            <i class="bi bi-whatsapp me-2"></i> <?= e($lang['kontak_btn_wa'] ?? 'Chat via WhatsApp') ?>
                        </a>
                        <a href="mailto:info@nds-digital.co.id" class="btn btn-outline-secondary w-100 py-3">
                            <i class="bi bi-envelope me-2"></i> Send Email
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7 animate-fade-right delay-1">
                <div class="contact-info-card p-0 overflow-hidden">
                    <div class="map-container">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.033647759183!2d107.627175!3d-6.862550!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e60f2a0b5b7b%3A0x8c4b2a3b6f8a9f0e!2sJl.%20Sangkuriang%2C%20Cipageran%2C%20Cimahi%2C%20Jawa%20Barat!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="p-3 bg-white d-flex justify-content-between align-items-center flex-wrap">
                        <p class="mb-0 small text-secondary">
                            <i class="bi bi-pin-map text-nds-accent me-1"></i> 
                            Jl. Sangkuriang No. 34-36, Cipageran, Cimahi
                        </p>
                        <a href="https://wa.me/6289649990006?text=Hello%20NDS%2C%20I%20am%20interested%20in%20your%20digital%20transformation%20services." 
                           target="_blank" class="btn btn-sm btn-wa">
                            <i class="bi bi-whatsapp me-1"></i> WA
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5 g-3">
            <div class="col-md-4 animate-fade-up delay-1">
                <div class="bg-white p-4 rounded-4 shadow-sm text-center h-100">
                    <div class="bg-nds-light p-3 rounded-3 d-inline-block mb-3">
                        <i class="bi bi-headset fs-2 text-nds-accent"></i>
                    </div>
                    <h6 class="fw-bold"><?= e($lang['kontak_support'] ?? 'Customer Support') ?></h6>
                    <p class="small text-secondary mb-0">support@nds-digital.co.id</p>
                </div>
            </div>
            <div class="col-md-4 animate-fade-up delay-2">
                <div class="bg-white p-4 rounded-4 shadow-sm text-center h-100">
                    <div class="bg-nds-light p-3 rounded-3 d-inline-block mb-3">
                        <i class="bi bi-briefcase fs-2 text-nds-accent"></i>
                    </div>
                    <h6 class="fw-bold"><?= e($lang['kontak_business'] ?? 'Business Development') ?></h6>
                    <p class="small text-secondary mb-0">business@nds-digital.co.id</p>
                </div>
            </div>
            <div class="col-md-4 animate-fade-up delay-3">
                <div class="bg-white p-4 rounded-4 shadow-sm text-center h-100">
                    <div class="bg-success bg-opacity-10 p-3 rounded-3 d-inline-block mb-3">
                        <i class="bi bi-whatsapp fs-2 text-success"></i>
                    </div>
                    <h6 class="fw-bold">WhatsApp</h6>
                    <p class="small mb-0">
                        <a href="https://wa.me/6289649990006?text=Hello%20NDS%2C%20I%20am%20interested%20in%20your%20digital%20transformation%20services." 
                           target="_blank" class="wa-link">
                            +62 896 4999 0006
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>