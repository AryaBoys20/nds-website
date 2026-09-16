<?php
// config.php
// ============================================
// 0. ENVIRONMENT DETECTION
// ============================================
$env = getenv('APP_ENV') ?: 'production';
define('APP_ENV', $env);
define('IS_DEVELOPMENT', $env === 'development');

// ============================================
// 1. ERROR REPORTING
// ============================================
if (IS_DEVELOPMENT) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/logs/error.log');

// ============================================
// 2. SESSION SECURITY
// ============================================
ini_set('session.cookie_httponly', 1);
ini_set('session.use_strict_mode', 1);
ini_set('session.sid_length', 48);

// ============================================
// 3. BASE PATH (auto-detect)
// ============================================
$scriptDir = dirname($_SERVER['SCRIPT_NAME']);
$basePath = ($scriptDir === '/' || $scriptDir === '\\') ? '/' : $scriptDir . '/';
define('BASE_PATH', $basePath);
define('BASE_URL', (isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $basePath);
define('ASSETS_PATH', BASE_PATH . 'assets/');

// ============================================
// 4. COMPANY INFO
// ============================================
define('COMPANY_NAME', 'PT. Nusantara Digital Solindo');
define('COMPANY_SHORT', 'NDS');
define('WHATSAPP_NUMBER', '6289649990006');
define('WHATSAPP_MESSAGE', 'Halo NDS, saya tertarik dengan layanan digital transformation Anda.');
define('EMAIL_INFO', 'info@nds-digital.co.id');
define('PHONE', '+62 896 4999 0006');
define('ADDRESS', 'Jl. Sangkuriang No. 34-36, Cipageran, Cimahi 40531');

// ============================================
// 5. SOCIAL MEDIA
// ============================================
define('SOCIAL_WHATSAPP', 'https://wa.me/' . WHATSAPP_NUMBER . '?text=' . urlencode(WHATSAPP_MESSAGE));
define('SOCIAL_INSTAGRAM', 'https://instagram.com/nds.digital');
define('SOCIAL_LINKEDIN', 'https://linkedin.com/company/nds-digital');
define('SOCIAL_YOUTUBE', 'https://youtube.com/@ndsdigital');
define('SOCIAL_TWITTER', 'https://twitter.com/nds_digital');

// ============================================
// 6. HELPER FUNCTIONS
// ============================================
if (!function_exists('e')) {
    function e($string) {
        return htmlspecialchars((string)$string, ENT_QUOTES, 'UTF-8');
    }
}

function url($path = '') {
    return BASE_URL . ltrim($path, '/');
}

function wa_url($message = null) {
    $msg = $message ?? WHATSAPP_MESSAGE;
    return 'https://wa.me/' . WHATSAPP_NUMBER . '?text=' . urlencode($msg);
}

function asset($path) {
    return ASSETS_PATH . ltrim($path, '/');
}

// ============================================
// 7. LANGUAGE HELPER
// ============================================
function loadLanguage($lang = 'id') {
    $file = __DIR__ . '/lang/' . $lang . '.php';
    if (file_exists($file)) {
        include $file;
        return $lang;
    }
    include __DIR__ . '/lang/id.php';
    return 'id';
}

function getCurrentLang() {
    return $_SESSION['lang'] ?? 'id';
}

function lang($key, $default = '') {
    global $lang;
    return $lang[$key] ?? $default;
}