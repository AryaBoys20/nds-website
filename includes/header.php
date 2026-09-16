<?php
// File: includes/header.php
if (!defined('BASE_PATH')) {
    require_once __DIR__ . '/../config.php';
}

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Pastikan fungsi e() tersedia
if (!function_exists('e')) {
    function e($string) {
        return htmlspecialchars((string)$string, ENT_QUOTES, 'UTF-8');
    }
}

$currentLang = getCurrentLang();
$langAttr = $currentLang === 'en' ? 'en' : 'id';

$pageTitle = $pageTitle ?? COMPANY_NAME;
$pageDescription = $pageDescription ?? 'Digital Transformation Partner - ' . COMPANY_NAME;

// Load language if not already loaded
if (!isset($lang) || !is_array($lang)) {
    $lang = [];
    $langFile = __DIR__ . '/../lang/' . $currentLang . '.php';
    if (file_exists($langFile)) {
        include $langFile;
    } else {
        include __DIR__ . '/../lang/id.php';
    }
}
?>
<!DOCTYPE html>
<html lang="<?= $langAttr ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($pageTitle) ?></title>
    <meta name="description" content="<?= e($pageDescription) ?>">
    
    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
    
        <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?= BASE_URL ?>assets/img/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= BASE_URL ?>assets/img/favicon.png">
    <link rel="shortcut icon" href="<?= BASE_URL ?>assets/img/favicon.png">
    <link rel="apple-touch-icon" href="<?= BASE_URL ?>assets/img/favicon.png">
    
    <!-- Solusi Tambahan: Gunakan file .ico jika favicon.png tetap tidak muncul -->
    <link rel="shortcut icon" href="<?= BASE_URL ?>assets/img/favicon.ico" type="image/x-icon">
</head>
<body>

<?php include __DIR__ . '/whatsapp-float.php'; ?>
<?php include __DIR__ . '/navbar.php'; ?>