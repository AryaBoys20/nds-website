<?php
// index.php
require_once __DIR__ . '/config.php';

// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Handle language switch
if (isset($_GET['lang']) && in_array($_GET['lang'], ['id', 'en'])) {
    $_SESSION['lang'] = $_GET['lang'];
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
    exit;
}

// Set default language
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'id';
}

// Load language
$lang = [];
$currentLang = getCurrentLang();
$langFile = __DIR__ . '/lang/' . $currentLang . '.php';
if (file_exists($langFile)) {
    include $langFile;
} else {
    include __DIR__ . '/lang/id.php';
}

$pageTitle = COMPANY_NAME . ' - Digital Transformation Partner';
$pageDescription = 'Trusted partner for digital transformation';

include __DIR__ . '/includes/header.php';
?>

<main>
    <?php
    $sections = ['hero', 'tentang', 'layanan', 'klien', 'tim', 'keunggulan', 'visi', 'kontak'];
    $sectionPath = __DIR__ . '/sections/' . $currentLang . '/';
    
    foreach ($sections as $section) {
        $sectionFile = $sectionPath . $section . '.php';
        if (file_exists($sectionFile)) {
            include $sectionFile;
        } else {
            // Fallback to Indonesian
            $fallback = __DIR__ . '/sections/id/' . $section . '.php';
            if (file_exists($fallback)) {
                include $fallback;
            }
        }
    }
    ?>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>