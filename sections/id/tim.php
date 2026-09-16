<?php
// File: sections/id/tim.php
if (!isset($lang) || !is_array($lang)) {
    $langFile = __DIR__ . '/../../lang/id.php';
    if (file_exists($langFile)) {
        include $langFile;
    }
}
?>
<section id="tim" class="section-padding">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
            <h2 class="section-title text-dark mb-0"><?= $lang['tim_title'] ?? 'Management & Team' ?></h2>
            <span class="employee-badge"><i class="bi bi-people-fill"></i> 85+ <?= $lang['tim_karyawan'] ?? 'Employees' ?></span>
        </div>

        <div class="row g-4">
            <!-- CEO -->
            <div class="col-md-4">
                <div class="card card-hover h-100 text-center p-3">
                    <img src="assets/img/team/ceo.png" 
                         alt="CEO" 
                         class="profile-img mx-auto mt-2">
                    <div class="card-body">
                        <h5 class="fw-bold text-dark">Muhammad Arya Pratama, S.Kom</h5>
                        <span class="badge bg-nds-primary"><?= $lang['tim_ceo'] ?? 'CEO' ?></span>
                        <p class="small mt-2 text-secondary"><?= $lang['tim_ceo_desc'] ?? 'Former McKinsey IT Consultant, 15 years experience.' ?></p>
                    </div>
                </div>
            </div>

            <!-- CTO -->
            <div class="col-md-4">
                <div class="card card-hover h-100 text-center p-3">
                    <img src="assets/img/team/cto.png" 
                         alt="CTO" 
                         class="profile-img mx-auto mt-2">
                    <div class="card-body">
                        <h5 class="fw-bold text-dark">Dr. Purnama Aditya, M.Sc.</h5>
                        <span class="badge bg-nds-primary"><?= $lang['tim_cto'] ?? 'CTO' ?></span>
                        <p class="small mt-2 text-secondary"><?= $lang['tim_cto_desc'] ?? 'Doctor of Computer Science (Univ. Tokyo), Machine Learning expert.' ?></p>
                    </div>
                </div>
            </div>

            <!-- COO -->
            <div class="col-md-4">
                <div class="card card-hover h-100 text-center p-3">
                    <img src="assets/img/team/coo.png" 
                         alt="COO" 
                         class="profile-img mx-auto mt-2">
                    <div class="card-body">
                        <h5 class="fw-bold text-dark">Naufal Hafizd Nuruddin, B.Eng.</h5>
                        <span class="badge bg-nds-primary"><?= $lang['tim_coo'] ?? 'COO' ?></span>
                        <p class="small mt-2 text-secondary"><?= $lang['tim_coo_desc'] ?? 'Project management specialist, PMP & Scrum certified.' ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistik Karyawan -->
<div class="row g-4 mt-4">
    <div class="col-6 col-md-3">
        <div class="card card-hover text-center p-4 h-100 border-0 shadow-sm">
            <div class="stat-icon-circle mx-auto mb-3">
                <i class="bi bi-people-fill fs-3 text-nds-accent"></i>
            </div>
            <h3 class="fw-bold text-dark mb-1">85+</h3>
            <p class="small text-secondary mb-0"><?= $lang['tim_total'] ?? 'Total Karyawan' ?></p>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="card card-hover text-center p-4 h-100 border-0 shadow-sm">
            <div class="stat-icon-circle mx-auto mb-3">
                <i class="bi bi-code-slash fs-3 text-nds-accent"></i>
            </div>
            <h3 class="fw-bold text-dark mb-1">45</h3>
            <p class="small text-secondary mb-0"><?= $lang['tim_engineer'] ?? 'Engineer & Developer' ?></p>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="card card-hover text-center p-4 h-100 border-0 shadow-sm">
            <div class="stat-icon-circle mx-auto mb-3">
                <i class="bi bi-palette-fill fs-3 text-nds-accent"></i>
            </div>
            <h3 class="fw-bold text-dark mb-1">15</h3>
            <p class="small text-secondary mb-0"><?= $lang['tim_designer'] ?? 'Designer & UX' ?></p>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="card card-hover text-center p-4 h-100 border-0 shadow-sm">
            <div class="stat-icon-circle mx-auto mb-3">
                <i class="bi bi-briefcase-fill fs-3 text-nds-accent"></i>
            </div>
            <h3 class="fw-bold text-dark mb-1">25</h3>
            <p class="small text-secondary mb-0"><?= $lang['tim_support'] ?? 'Business & Support' ?></p>
        </div>
    </div>
</div>

<!-- Info Tambahan -->
<div class="mt-4 p-3 bg-white rounded-3 shadow-sm">
    <p class="fw-semibold text-dark mb-2">
        <i class="bi bi-mortarboard-fill text-nds-accent me-2"></i>
        <?= $lang['tim_ahli'] ?? 'Expert team from top universities: ITB, UI, ITS, UGM, NUS, Univ. Tokyo' ?>
    </p>
    <p class="small text-secondary mb-0"><?= $lang['tim_sertifikasi'] ?? 'Google/Microsoft certified developers • professionals' ?></p>
</div>
        
    </div>
</section>