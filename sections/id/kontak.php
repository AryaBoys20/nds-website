<?php
// sections/id/kontak.php
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
<section id="kontak" class="section-padding bg-nds-light">
    <div class="container">
        <h2 class="section-title text-dark mb-4"><?= e($lang['kontak_title'] ?? 'Hubungi Kami') ?></h2>
        <p class="text-secondary mb-4"><?= e($lang['kontak_subtitle'] ?? 'Kunjungi kantor kami atau hubungi tim NDS melalui kontak di bawah ini.') ?></p>
        <div class="row g-4">
            <div class="col-lg-5">
                <div class="contact-info-card">
                    <h5 class="fw-bold mb-3 text-dark"><i class="bi bi-geo-alt me-2 text-nds-accent"></i><?= e($lang['kontak_alamat'] ?? 'Alamat Kantor') ?></h5>
                    <p class="text-secondary">Jl. Sangkuriang No. 34-36<br />Cipageran, Cimahi 40531</p>
                    <hr />
                    <h5 class="fw-bold mb-3 text-dark"><i class="bi bi-telephone me-2 text-nds-accent"></i><?= e($lang['kontak_telepon'] ?? 'Telepon') ?></h5>
                    <p class="text-secondary">+62 896 4999 0006</p>
                    <h5 class="fw-bold mb-3 text-dark"><i class="bi bi-whatsapp me-2 text-success"></i><?= e($lang['kontak_whatsapp'] ?? 'WhatsApp') ?></h5>
                    <p><a href="https://wa.me/6289649990006" target="_blank" class="wa-link"><i class="bi bi-whatsapp me-1"></i> +62 896 4999 0006</a></p>
                    <h5 class="fw-bold mb-3 text-dark"><i class="bi bi-envelope me-2 text-nds-accent"></i><?= e($lang['kontak_email'] ?? 'Email') ?></h5>
                    <p class="text-secondary">info@nds-digital.co.id</p>
                    <div class="mt-3">
                        <a href="https://wa.me/6289649990006" target="_blank" class="btn btn-wa w-100 mt-2">
                            <i class="bi bi-whatsapp me-2"></i> <?= e($lang['kontak_btn_wa'] ?? 'Chat via WhatsApp') ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-info-card p-0 overflow-hidden">
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.033647759183!2d107.627175!3d-6.862550!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e60f2a0b5b7b%3A0x8c4b2a3b6f8a9f0e!2sJl.%20Sangkuriang%2C%20Cipageran%2C%20Cimahi%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>