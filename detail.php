<?php
require_once __DIR__ . '/config.php';
if (session_status() === PHP_SESSION_NONE) session_start();

$currentLang = getCurrentLang();
$service = $_GET['service'] ?? '';

// Mapping semua layanan
$services = [
    'consulting' => [
        'title_key' => 'consulting_title',
        'subtitle_key' => 'consulting_subtitle',
        'icon' => 'bi-graph-up-arrow',
        'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=800&h=350&fit=crop&crop=center',
        'overview_key' => 'consulting_overview',
        'overview2_key' => 'consulting_overview2',
        'features' => [
            ['icon' => 'bi-clipboard-data', 'label' => 'Business Process Assessment', 'desc' => 'Evaluasi menyeluruh proses bisnis untuk identifikasi area peningkatan.'],
            ['icon' => 'bi-diagram-3', 'label' => 'Digital Strategy Planning', 'desc' => 'Rancangan strategi digital selaras dengan tujuan bisnis.'],
            ['icon' => 'bi-bar-chart-line', 'label' => 'ROI & KPI Dashboard', 'desc' => 'Dashboard interaktif monitoring ROI dan KPI real-time.'],
            ['icon' => 'bi-map', 'label' => 'Technology Roadmap', 'desc' => 'Peta jalan teknologi 3-5 tahun ke depan.'],
            ['icon' => 'bi-people', 'label' => 'Change Management', 'desc' => 'Strategi manajemen perubahan untuk adopsi teknologi.'],
            ['icon' => 'bi-shield-check', 'label' => 'Risk Assessment', 'desc' => 'Identifikasi dan mitigasi risiko teknologi.'],
        ],
        'cta_key' => 'consulting_cta',
        'cta_desc_key' => 'consulting_cta_desc',
        'related' => ['software-dev', 'ai-solutions', 'cloud-computing', 'cybersecurity'],
    ],
    'software-dev' => [
        'title_key' => 'software_title',
        'subtitle_key' => 'software_subtitle',
        'icon' => 'bi-phone',
        'image' => 'https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?w=800&h=400&fit=crop&crop=center',
        'overview_key' => 'software_overview',
        'overview2_key' => null,
        'features' => [
            ['icon' => 'bi-globe2', 'label' => 'Custom Web Application', 'desc' => 'Aplikasi web modern dengan performa tinggi.'],
            ['icon' => 'bi-phone', 'label' => 'Mobile App (iOS & Android)', 'desc' => 'Aplikasi native dengan UX optimal.'],
            ['icon' => 'bi-palette', 'label' => 'UI/UX Design', 'desc' => 'Desain antarmuka intuitif dan menarik.'],
            ['icon' => 'bi-link-45deg', 'label' => 'API Integration', 'desc' => 'Integrasi dengan berbagai API pihak ketiga.'],
            ['icon' => 'bi-tablet', 'label' => 'Progressive Web App (PWA)', 'desc' => 'Aplikasi web yang berfungsi seperti native.'],
            ['icon' => 'bi-database', 'label' => 'Database Design & Management', 'desc' => 'Perancangan dan pengelolaan database efisien.'],
        ],
        'cta_key' => 'software_cta',
        'cta_desc_key' => null,
        'related' => ['consulting', 'ai-solutions', 'cloud-computing', 'iot-solutions'],
    ],
    'ai-solutions' => [
        'title_key' => 'ai_title',
        'subtitle_key' => 'ai_subtitle',
        'icon' => 'bi-cpu',
        'image' => 'https://images.unsplash.com/photo-1507146153580-69a1fe6d8aa1?w=800&h=400&fit=crop&crop=center',
        'overview_key' => 'ai_overview',
        'overview2_key' => null,
        'features' => [
            ['icon' => 'bi-graph-up', 'label' => 'Predictive Analytics', 'desc' => 'Analisis prediktif untuk tren bisnis dan perilaku pelanggan.'],
            ['icon' => 'bi-chat-dots', 'label' => 'Natural Language Processing', 'desc' => 'Pengolahan bahasa alami untuk analisis sentimen dan chatbot.'],
            ['icon' => 'bi-eye', 'label' => 'Computer Vision', 'desc' => 'Pengenalan gambar dan video untuk berbagai aplikasi.'],
            ['icon' => 'bi-boxes', 'label' => 'Custom AI Model', 'desc' => 'Pengembangan model AI khusus sesuai kebutuhan.'],
            ['icon' => 'bi-robot', 'label' => 'AI Chatbot & Virtual Assistant', 'desc' => 'Asisten virtual cerdas untuk layanan pelanggan 24/7.'],
            ['icon' => 'bi-arrow-repeat', 'label' => 'Process Automation', 'desc' => 'Otomatisasi proses bisnis dengan AI.'],
        ],
        'cta_key' => 'ai_cta',
        'cta_desc_key' => null,
        'related' => ['consulting', 'software-dev', 'cloud-computing', 'iot-solutions'],
    ],
    'cloud-computing' => [
        'title_key' => 'cloud_title',
        'subtitle_key' => 'cloud_subtitle',
        'icon' => 'bi-cloud',
        'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=800&h=400&fit=crop&crop=center',
        'overview_key' => 'cloud_overview',
        'overview2_key' => null,
        'features' => [
            ['icon' => 'bi-cloud-arrow-up', 'label' => 'AWS / GCP / Azure', 'desc' => 'Solusi cloud dari penyedia terkemuka.'],
            ['icon' => 'bi-arrows-move', 'label' => 'Cloud Migration', 'desc' => 'Migrasi aplikasi dan data ke cloud dengan downtime minimal.'],
            ['icon' => 'bi-arrow-repeat', 'label' => 'DevOps & CI/CD', 'desc' => 'Implementasi DevOps dan pipeline CI/CD.'],
            ['icon' => 'bi-shield-lock', 'label' => 'Cloud Security', 'desc' => 'Keamanan cloud dengan enkripsi dan monitoring.'],
            ['icon' => 'bi-coin', 'label' => 'Cost Optimization', 'desc' => 'Optimasi biaya cloud untuk ROI maksimal.'],
            ['icon' => 'bi-hdd-stack', 'label' => 'Disaster Recovery', 'desc' => 'Solusi disaster recovery untuk kelangsungan bisnis.'],
        ],
        'cta_key' => 'cloud_cta',
        'cta_desc_key' => null,
        'related' => ['consulting', 'software-dev', 'ai-solutions', 'cybersecurity'],
    ],
    'iot-solutions' => [
        'title_key' => 'iot_title',
        'subtitle_key' => 'iot_subtitle',
        'icon' => 'bi-wifi',
        'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=800&h=400&fit=crop&crop=center',
        'overview_key' => 'iot_overview',
        'overview2_key' => null,
        'features' => [
            ['icon' => 'bi-device-hdd', 'label' => 'Smart Device Integration', 'desc' => 'Integrasi perangkat pintar untuk berbagai industri.'],
            ['icon' => 'bi-activity', 'label' => 'Real-time Monitoring', 'desc' => 'Monitoring data real-time untuk keputusan cepat.'],
            ['icon' => 'bi-bar-chart', 'label' => 'Sensor Data Analytics', 'desc' => 'Analisis data sensor untuk insight bisnis.'],
            ['icon' => 'bi-shield', 'label' => 'IoT Security', 'desc' => 'Keamanan perangkat dan data IoT.'],
            ['icon' => 'bi-layers', 'label' => 'Edge Computing', 'desc' => 'Pemrosesan data di edge untuk latency rendah.'],
            ['icon' => 'bi-phone', 'label' => 'Mobile IoT Dashboard', 'desc' => 'Dashboard mobile untuk monitoring dari mana saja.'],
        ],
        'cta_key' => 'iot_cta',
        'cta_desc_key' => null,
        'related' => ['consulting', 'software-dev', 'ai-solutions', 'cloud-computing'],
    ],
    'cybersecurity' => [
        'title_key' => 'cyber_title',
        'subtitle_key' => 'cyber_subtitle',
        'icon' => 'bi-shield-lock',
        'image' => 'https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?w=800&h=400&fit=crop&crop=center',
        'overview_key' => 'cyber_overview',
        'overview2_key' => null,
        'features' => [
            ['icon' => 'bi-search', 'label' => 'Vulnerability Assessment', 'desc' => 'Identifikasi kerentanan pada sistem dan infrastruktur.'],
            ['icon' => 'bi-lock', 'label' => 'Data Protection & Encryption', 'desc' => 'Perlindungan data dengan enkripsi dan kontrol akses.'],
            ['icon' => 'bi-clipboard-check', 'label' => 'Compliance & Audit', 'desc' => 'Kepatuhan terhadap regulasi dan standar keamanan.'],
            ['icon' => 'bi-eye', 'label' => 'Security Monitoring', 'desc' => 'Monitoring ancaman real-time dengan SOC 24/7.'],
            ['icon' => 'bi-alarm', 'label' => 'Incident Response', 'desc' => 'Respon cepat terhadap insiden keamanan.'],
            ['icon' => 'bi-people', 'label' => 'Security Awareness Training', 'desc' => 'Pelatihan keamanan untuk karyawan.'],
        ],
        'cta_key' => 'cyber_cta',
        'cta_desc_key' => null,
        'related' => ['consulting', 'software-dev', 'cloud-computing', 'iot-solutions'],
    ],
];

// Validasi service
if (!isset($services[$service])) {
    header('Location: ' . BASE_URL);
    exit;
}

$serviceData = $services[$service];
$pageTitle = lang($serviceData['title_key'], ucfirst(str_replace('-', ' ', $service))) . ' - ' . COMPANY_NAME;
$pageDescription = lang($serviceData['subtitle_key'], '');

include __DIR__ . '/includes/header.php';
?>

<!-- ====== HERO DETAIL ====== -->
<section class="detail-hero" style="background: linear-gradient(135deg, var(--nds-primary), var(--nds-secondary)); position: relative; overflow: hidden; padding: 140px 0 80px;">
    <!-- Background Decoration -->
    <div class="position-absolute" style="top: -40%; right: -10%; width: 600px; height: 600px; background: radial-gradient(circle, rgba(59,155,215,0.12) 0%, transparent 70%); border-radius: 50%; animation: float 8s ease-in-out infinite;"></div>
    <div class="position-absolute" style="bottom: -30%; left: -10%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(59,155,215,0.08) 0%, transparent 70%); border-radius: 50%; animation: floatReverse 6s ease-in-out infinite;"></div>
    
    <div class="container position-relative" style="z-index: 2;">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4 animate-fade-up">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= BASE_URL ?>" class="text-decoration-none" style="color: rgba(255,255,255,0.6); transition: var(--transition-smooth);"><i class="bi bi-house me-1"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="<?= BASE_URL ?>#layanan" class="text-decoration-none" style="color: rgba(255,255,255,0.6); transition: var(--transition-smooth);"><?= e(lang('nav_layanan', 'Layanan')) ?></a></li>
                <li class="breadcrumb-item active" style="color: #fff;"><?= e(lang($serviceData['title_key'])) ?></li>
            </ol>
        </nav>
        
        <!-- Header -->
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <div class="d-flex align-items-center gap-4 mb-3 animate-fade-up delay-1">
                    <div class="service-icon-wrapper-large" style="width: 100px; height: 100px; background: linear-gradient(135deg, var(--nds-accent), var(--nds-accent-dark)); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 15px 50px rgba(59,155,215,0.3); transition: var(--transition-bounce); flex-shrink: 0;">
                        <i class="bi <?= $serviceData['icon'] ?>" style="font-size: 3.5rem; color: #fff;"></i>
                    </div>
                    <div>
                        <h1 class="display-4 fw-bold text-white mb-1"><?= e(lang($serviceData['title_key'])) ?></h1>
                        <p class="lead text-white-50 mb-0" style="font-weight: 300;"><?= e(lang($serviceData['subtitle_key'])) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-lg-end animate-fade-up delay-2">
                <a href="<?= wa_url() ?>" target="_blank" class="btn btn-wa btn-lg px-5 animate-pulse-wa" style="border-radius: 50px;">
                    <i class="bi bi-whatsapp me-2"></i> Konsultasi Gratis
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ====== DETAIL CONTENT ====== -->
<section class="section-padding">
    <div class="container">
        <div class="row g-5">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Image -->
                <div class="mb-5 position-relative animate-fade-up">
                    <img src="<?= e($serviceData['image']) ?>" 
                         alt="<?= e(lang($serviceData['title_key'])) ?>" 
                         class="img-fluid rounded-4 w-100" 
                         style="max-height: 450px; object-fit: cover; box-shadow: 0 20px 60px rgba(0,0,0,0.12); transition: var(--transition-smooth);">
                    <div class="position-absolute top-0 start-0 m-4">
                        <span class="badge bg-nds-primary px-4 py-2 rounded-pill" style="font-weight: 500; letter-spacing: 0.5px;">
                            <i class="bi bi-star-fill text-warning me-1"></i> Premium Service
                        </span>
                    </div>
                    <div class="position-absolute bottom-0 end-0 m-4">
                        <span class="badge bg-white text-dark px-4 py-2 rounded-pill shadow-sm" style="font-weight: 500;">
                            <i class="bi bi-clock me-1 text-nds-accent"></i> 24/7 Support
                        </span>
                    </div>
                </div>

                <!-- Overview -->
                <div class="mb-5 animate-fade-up delay-1">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div style="width: 40px; height: 40px; background: rgba(59,155,215,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-info-circle-fill text-nds-accent fs-4"></i>
                        </div>
                        <h3 class="fw-bold mb-0" style="color: var(--nds-primary);">Overview</h3>
                    </div>
                    <div class="p-4 bg-nds-light rounded-4" style="border-left: 4px solid var(--nds-accent);">
                        <p class="mb-0 fs-6" style="line-height: 1.8; color: #4a4a6a;"><?= e(lang($serviceData['overview_key'])) ?></p>
                        <?php if ($serviceData['overview2_key'] && lang($serviceData['overview2_key'])): ?>
                            <p class="mt-3 mb-0 fs-6" style="line-height: 1.8; color: #4a4a6a;"><?= e(lang($serviceData['overview2_key'])) ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Features -->
                <div class="mb-5 animate-fade-up delay-2">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div style="width: 40px; height: 40px; background: rgba(59,155,215,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-grid-3x3-gap-fill text-nds-accent fs-4"></i>
                        </div>
                        <h3 class="fw-bold mb-0" style="color: var(--nds-primary);"><?= e(lang('consulting_services', 'Layanan Kami')) ?></h3>
                    </div>
                    <div class="row g-4">
                        <?php foreach ($serviceData['features'] as $index => $feature): ?>
                        <div class="col-md-6 animate-fade-up delay-<?= ($index % 3) + 3 ?>">
                            <div class="feature-card p-4 bg-white rounded-4 h-100 shadow-sm" 
                                 style="border: 1px solid rgba(0,0,0,0.04); transition: var(--transition-smooth); border-left: 4px solid var(--nds-accent);">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="feature-icon-wrapper" style="width: 48px; height: 48px; background: rgba(59,155,215,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; transition: var(--transition-smooth);">
                                        <i class="bi <?= $feature['icon'] ?> text-nds-accent fs-3"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1" style="color: var(--nds-primary);"><?= e($feature['label']) ?></h6>
                                        <p class="small text-secondary mb-0" style="line-height: 1.6;"><?= e($feature['desc']) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Back Button -->
                <div class="animate-fade-up delay-3">
                    <a href="<?= BASE_URL ?>#layanan" class="btn btn-nds btn-lg">
                        <i class="bi bi-arrow-left me-2"></i> <?= e(lang('consulting_back', 'Kembali ke Layanan')) ?>
                    </a>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="position-sticky" style="top: 120px;">
                    <!-- Contact Card -->
                    <div class="contact-card p-4 bg-white rounded-4 shadow-sm mb-4 animate-fade-up delay-2" 
                         style="border: 1px solid rgba(0,0,0,0.04); transition: var(--transition-smooth);">
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <div class="bg-nds-light p-3 rounded-3" style="transition: var(--transition-smooth);">
                                <i class="bi bi-telephone text-nds-accent fs-3"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-0" style="color: var(--nds-primary);"><?= e(lang('consulting_konsultasi', 'Konsultasi Gratis')) ?></h5>
                                <p class="small text-secondary mb-0"><?= e(lang('consulting_konsultasi_desc', 'Hubungi kami untuk konsultasi awal.')) ?></p>
                            </div>
                        </div>
                        
                        <div class="d-flex flex-column gap-2">
                            <a href="<?= wa_url() ?>" target="_blank" class="btn btn-wa w-100 py-3" style="border-radius: 50px; font-weight: 600;">
                                <i class="bi bi-whatsapp me-2"></i> Chat via WhatsApp
                            </a>
                            <a href="mailto:<?= EMAIL_INFO ?>" class="btn btn-outline-secondary w-100 py-3" style="border-radius: 50px; font-weight: 500;">
                                <i class="bi bi-envelope me-2"></i> <?= EMAIL_INFO ?>
                            </a>
                        </div>
                        
                        <hr class="my-4">
                        
                        <div class="d-flex justify-content-around text-center">
                            <div>
                                <i class="bi bi-clock text-nds-accent fs-4"></i>
                                <p class="small mb-0 text-secondary">24/7 Support</p>
                            </div>
                            <div>
                                <i class="bi bi-shield-check text-nds-accent fs-4"></i>
                                <p class="small mb-0 text-secondary">Garansi 100%</p>
                            </div>
                            <div>
                                <i class="bi bi-people text-nds-accent fs-4"></i>
                                <p class="small mb-0 text-secondary">Tim Expert</p>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Stats -->
                    <div class="stats-card p-4 rounded-4 text-white animate-fade-up delay-3" 
                         style="background: linear-gradient(135deg, var(--nds-primary), var(--nds-secondary)); border: 1px solid rgba(255,255,255,0.05);">
                        <h6 class="fw-bold mb-3"><i class="bi bi-bar-chart-fill me-2"></i> Mengapa Memilih Kami?</h6>
                        <div class="d-flex justify-content-between text-center">
                            <div>
                                <span class="d-block fs-2 fw-bold" style="background: linear-gradient(135deg, #ffffff, #b6d4e8); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">150+</span>
                                <span class="small text-white-50">Klien</span>
                            </div>
                            <div>
                                <span class="d-block fs-2 fw-bold" style="background: linear-gradient(135deg, #ffffff, #b6d4e8); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">85</span>
                                <span class="small text-white-50">Karyawan</span>
                            </div>
                            <div>
                                <span class="d-block fs-2 fw-bold" style="background: linear-gradient(135deg, #ffffff, #b6d4e8); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">98%</span>
                                <span class="small text-white-50">Kepuasan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====== RELATED SERVICES ====== -->
<section class="section-padding bg-nds-light">
    <div class="container">
        <div class="text-center mb-5">
            <div class="d-inline-flex align-items-center gap-2 mb-3">
                <div style="width: 40px; height: 40px; background: rgba(59,155,215,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-link-45deg text-nds-accent fs-4"></i>
                </div>
                <h3 class="fw-bold mb-0" style="color: var(--nds-primary);"><?= e(lang('consulting_related', 'Layanan Terkait')) ?></h3>
            </div>
            <p class="text-secondary">Layanan lain yang mungkin Anda butuhkan</p>
        </div>
        <div class="row g-4">
            <?php foreach ($serviceData['related'] as $slug): 
                $related = $services[$slug] ?? null;
                if (!$related) continue;
            ?>
            <div class="col-md-3 animate-fade-up">
                <a href="<?= BASE_URL ?>detail.php?service=<?= $slug ?>" class="text-decoration-none">
                    <div class="related-card p-4 bg-white rounded-4 text-center h-100 shadow-sm" 
                         style="border: 1px solid rgba(0,0,0,0.04); transition: var(--transition-smooth);">
                        <div class="related-icon-wrapper mb-3" style="width: 64px; height: 64px; background: rgba(59,155,215,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; transition: var(--transition-smooth);">
                            <i class="bi <?= $related['icon'] ?> fs-2 text-nds-accent"></i>
                        </div>
                        <h6 class="fw-bold text-dark mb-1"><?= e(lang($related['title_key'])) ?></h6>
                        <p class="small text-secondary mb-2"><?= e(lang($related['subtitle_key'])) ?></p>
                        <span class="badge bg-nds-light text-nds-accent px-3 py-2" style="font-weight: 500;">
                            <i class="bi bi-arrow-right me-1"></i> Lihat Detail
                        </span>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ====== CTA ====== -->
<section class="section-padding" style="background: linear-gradient(135deg, var(--nds-primary), var(--nds-secondary)); position: relative; overflow: hidden;">
    <!-- Decoration -->
    <div class="position-absolute" style="top: -30%; right: -10%; width: 400px; height: 400px; background: radial-gradient(circle, rgba(59,155,215,0.1) 0%, transparent 70%); border-radius: 50%; animation: float 8s ease-in-out infinite;"></div>
    <div class="position-absolute" style="bottom: -30%; left: -10%; width: 400px; height: 400px; background: radial-gradient(circle, rgba(59,155,215,0.08) 0%, transparent 70%); border-radius: 50%; animation: floatReverse 6s ease-in-out infinite;"></div>
    
    <div class="container text-center position-relative" style="z-index: 2;">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="animate-fade-up">
                    <span class="badge bg-warning text-dark mb-3 px-4 py-2 rounded-pill" style="font-weight: 600; letter-spacing: 0.5px;">
                        <i class="bi bi-stars me-1"></i> Siap Memulai?
                    </span>
                    <h3 class="fw-bold text-white mb-3 display-5"><?= e(lang($serviceData['cta_key'], 'Siap Memulai?')) ?></h3>
                    <p class="text-white-50 mb-4 fs-5" style="font-weight: 300;"><?= e(lang($serviceData['cta_desc_key'] ?? 'consulting_cta_desc', 'Hubungi tim kami untuk konsultasi gratis.')) ?></p>
                    <a href="<?= wa_url() ?>" target="_blank" class="btn btn-wa btn-lg px-5 animate-pulse-wa" style="border-radius: 50px;">
                        <i class="bi bi-whatsapp me-2"></i> <?= e(lang('consulting_cta_btn', 'Konsultasi Sekarang')) ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====== ADDITIONAL CSS ====== -->
<style>
/* Detail Page Styles */
.detail-hero {
    position: relative;
    overflow: hidden;
}

.service-icon-wrapper-large {
    transition: var(--transition-bounce);
}

.service-icon-wrapper-large:hover {
    transform: scale(1.08) rotate(6deg);
    box-shadow: 0 20px 60px rgba(59,155,215,0.4) !important;
}

.feature-card {
    transition: var(--transition-smooth);
}

.feature-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 40px rgba(0,0,0,0.08) !important;
}

.feature-card:hover .feature-icon-wrapper {
    background: rgba(59,155,215,0.2) !important;
    transform: scale(1.05);
}

.contact-card {
    transition: var(--transition-smooth);
}

.contact-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 40px rgba(0,0,0,0.1) !important;
}

.contact-card:hover .bg-nds-light {
    background: rgba(59,155,215,0.15) !important;
}

.related-card {
    transition: var(--transition-smooth);
}

.related-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(0,0,0,0.1) !important;
}

.related-card:hover .related-icon-wrapper {
    transform: scale(1.15);
    background: rgba(59,155,215,0.2) !important;
}

.stats-card {
    background: linear-gradient(135deg, var(--nds-primary), var(--nds-secondary));
    border: 1px solid rgba(255,255,255,0.05);
}

/* Breadcrumb */
.breadcrumb-item + .breadcrumb-item::before {
    color: rgba(255,255,255,0.4);
}

.breadcrumb-item a:hover {
    color: #fff !important;
}

/* Animations */
.transition {
    transition: var(--transition-smooth);
}

/* Responsive */
@media (max-width: 768px) {
    .detail-hero {
        padding: 120px 0 60px !important;
    }
    
    .service-icon-wrapper-large {
        width: 70px !important;
        height: 70px !important;
    }
    
    .service-icon-wrapper-large i {
        font-size: 2.2rem !important;
    }
    
    .feature-card {
        padding: 16px !important;
    }
    
    .contact-card {
        padding: 20px !important;
    }
    
    .related-card {
        padding: 16px !important;
    }
    
    .stats-card .d-flex {
        gap: 8px;
    }
    
    .stats-card .fs-2 {
        font-size: 1.5rem !important;
    }
}
</style>

<?php include __DIR__ . '/includes/footer.php'; ?>