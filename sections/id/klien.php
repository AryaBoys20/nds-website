<?php
// sections/id/tim.php
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
<section id="klien" class="section-padding bg-nds-light">
    <div class="container">
        <h2 class="section-title text-dark mb-4"><?= $lang['klien_title'] ?? 'Klien & Portfolio' ?></h2>
        <p class="text-secondary mb-4"><?= $lang['klien_subtitle'] ?? 'Melayani berbagai industri dengan solusi yang berdampak.' ?></p>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover h-100">
                    <!-- GAMBAR KLIEN - UKURAN SEDANG -->
                    <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=400&h=180&fit=crop&crop=center" 
                         class="card-img-top img-client" 
                         alt="Agritech"
                         style="height: 140px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="fw-bold text-dark">Agritech</h5>
                        <p class="small text-secondary">PT. Bumi Hijau Lestari</p>
                        <p class="card-text small text-secondary">IoT harvest prediction system</p>
                        <div class="client-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i> 5/5
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover h-100">
                    <!-- GAMBAR KLIEN - UKURAN SEDANG -->
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400&h=180&fit=crop&crop=center" 
                         class="card-img-top img-client" 
                         alt="EdTech"
                         style="height: 140px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="fw-bold text-dark">EdTech</h5>
                        <p class="small text-secondary">Group Edukasi Cerdas</p>
                        <p class="card-text small text-secondary">Platform interaktif untuk 500+ sekolah</p>
                        <div class="client-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i> 5/5
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover h-100">
                    <!-- GAMBAR KLIEN - UKURAN SEDANG -->
                    <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?w=400&h=180&fit=crop&crop=center" 
                         class="card-img-top img-client" 
                         alt="F&B"
                         style="height: 140px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="fw-bold text-dark">F&B</h5>
                        <p class="small text-secondary">Kopi Nusantara Co.</p>
                        <p class="card-text small text-secondary">Loyalty program &amp; inventory real-time</p>
                        <div class="client-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star text-secondary"></i> 4/5
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover h-100">
                    <!-- GAMBAR KLIEN - UKURAN SEDANG -->
                    <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=400&h=180&fit=crop&crop=center" 
                         class="card-img-top img-client" 
                         alt="Banking"
                         style="height: 140px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="fw-bold text-dark">Banking</h5>
                        <p class="small text-secondary">Bank Rakyat Digital (BRD)</p>
                        <p class="card-text small text-secondary">Cybersecurity &amp; data protection</p>
                        <div class="client-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i> 5/5
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>