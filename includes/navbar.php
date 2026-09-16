<?php
// File: includes/navbar.php
if (!defined('BASE_PATH')) {
    require_once __DIR__ . '/../config.php';
}

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Pastikan $lang tersedia
if (!isset($lang) || !is_array($lang)) {
    $lang = [];
    $langFile = __DIR__ . '/../lang/' . ($_SESSION['lang'] ?? 'id') . '.php';
    if (file_exists($langFile)) {
        include $langFile;
    } else {
        include __DIR__ . '/../lang/id.php';
    }
}

$currentLang = $_SESSION['lang'] ?? 'id';
$basePath = BASE_PATH ?? '/';
?>
<nav class="navbar navbar-expand-lg bg-nds-primary navbar-dark sticky-top shadow-sm">
    <div class="container">
                <a class="navbar-brand fw-bold" href="<?= $basePath ?>">
            <img src="<?= asset('img/logo-nds.png') ?>" 
                 alt="NDS Logo" 
                 style="height: 40px; margin-right: 8px;">
            <span>NDS</span>
        </a>
        
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $basePath ?>#tentang"><?= e($lang['nav_tentang'] ?? 'Tentang') ?></a>
                </li>
                
                <!-- Services Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="bi bi-grid-3x3-gap-fill me-1"></i> <?= e($lang['nav_layanan'] ?? 'Layanan') ?>
</a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <?php
                        $services = [
                            'consulting' => ['icon' => 'bi-graph-up-arrow', 'label' => 'layanan_consulting'],
                            'software-dev' => ['icon' => 'bi-phone', 'label' => 'layanan_software'],
                            'ai-solutions' => ['icon' => 'bi-cpu', 'label' => 'layanan_ai'],
                            'cloud-computing' => ['icon' => 'bi-cloud', 'label' => 'layanan_cloud'],
                            'iot-solutions' => ['icon' => 'bi-wifi', 'label' => 'layanan_iot'],
                            'cybersecurity' => ['icon' => 'bi-shield-lock', 'label' => 'layanan_cybersecurity'],
                        ];
                        foreach ($services as $slug => $svc): ?>
                        <li>
                            <a class="dropdown-item" href="<?= $basePath ?>detail.php?service=<?= $slug ?>">
                                <i class="bi <?= $svc['icon'] ?> me-2 text-nds-accent"></i>
                                <?= e($lang[$svc['label']] ?? ucwords(str_replace('-', ' ', $slug))) ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?= $basePath ?>#klien"><?= e($lang['nav_klien'] ?? 'Klien') ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $basePath ?>#tim"><?= e($lang['nav_tim'] ?? 'Tim') ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $basePath ?>#keunggulan"><?= e($lang['nav_keunggulan'] ?? 'Keunggulan') ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $basePath ?>#kontak"><?= e($lang['nav_kontak'] ?? 'Kontak') ?></a>
                </li>
                
                <!-- Language Switcher -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-globe2"></i>
                        <span class="ms-1"><?= strtoupper($currentLang) ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item <?= $currentLang == 'id' ? 'active' : '' ?>" 
                               href="<?= $basePath ?>?lang=id">
                                <i class="bi bi-flag-fill me-2" style="color: #ff0000;"></i>
                                Indonesia
                                <?php if ($currentLang == 'id'): ?>
                                    <i class="bi bi-check-circle-fill text-success float-end"></i>
                                <?php endif; ?>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item <?= $currentLang == 'en' ? 'active' : '' ?>" 
                               href="<?= $basePath ?>?lang=en">
                                <i class="bi bi-flag-fill me-2" style="color: #012169;"></i>
                                English
                                <?php if ($currentLang == 'en'): ?>
                                    <i class="bi bi-check-circle-fill text-success float-end"></i>
                                <?php endif; ?>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>