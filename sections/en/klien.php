<?php
// sections/en/klien.php
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
<section id="klien" class="section-padding bg-nds-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title text-center"><?= e($lang['klien_title'] ?? 'Clients & Portfolio') ?></h2>
            <p class="section-subtitle"><?= e($lang['klien_subtitle'] ?? 'Serving various industries with impactful solutions.') ?></p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 animate-fade-up delay-1">
                <div class="card card-hover h-100">
                    <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=400&h=200&fit=crop&crop=center" 
                         class="card-img-top img-client" alt="Agritech">
                    <div class="card-body">
                        <h5 class="fw-bold">Agritech</h5>
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
            <div class="col-md-6 col-lg-3 animate-fade-up delay-2">
                <div class="card card-hover h-100">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400&h=200&fit=crop&crop=center" 
                         class="card-img-top img-client" alt="EdTech">
                    <div class="card-body">
                        <h5 class="fw-bold">EdTech</h5>
                        <p class="small text-secondary">Group Edukasi Cerdas</p>
                        <p class="card-text small text-secondary">Interactive platform for 500+ schools</p>
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
            <div class="col-md-6 col-lg-3 animate-fade-up delay-3">
                <div class="card card-hover h-100">
                    <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?w=400&h=200&fit=crop&crop=center" 
                         class="card-img-top img-client" alt="F&B">
                    <div class="card-body">
                        <h5 class="fw-bold">F&B</h5>
                        <p class="small text-secondary">Kopi Nusantara Co.</p>
                        <p class="card-text small text-secondary">Loyalty program &amp; real-time inventory</p>
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
            <div class="col-md-6 col-lg-3 animate-fade-up delay-4">
                <div class="card card-hover h-100">
                    <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=400&h=200&fit=crop&crop=center" 
                         class="card-img-top img-client" alt="Banking">
                    <div class="card-body">
                        <h5 class="fw-bold">Banking</h5>
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