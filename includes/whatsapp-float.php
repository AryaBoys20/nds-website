<?php
// File: includes/whatsapp-float.php
// Floating WhatsApp Button

if (!defined('BASE_PATH')) {
    require_once __DIR__ . '/../config.php';
}
?>
<a href="<?= wa_url() ?>" 
   class="btn-wa-float" 
   target="_blank" 
   rel="noopener noreferrer" 
   aria-label="Chat via WhatsApp">
    <i class="bi bi-whatsapp"></i>
    <span>Chat via WhatsApp</span>
</a>