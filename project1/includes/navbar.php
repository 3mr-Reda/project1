<?php
// Get current page name for active link highlighting
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg fixed-top custom-navbar">
    <div class="container">
        <!-- Brand Logo -->
        <a class="navbar-brand d-flex align-items-center" href="home.php">
            <span class="icon-box icon-box-primary me-2 mb-0" style="width: 42px; height: 42px; border-radius: 12px; font-size: 1.3rem;">
                <i class="bi bi-cpu-fill"></i>
            </span>
            <span class="fw-bold">تـكـنـو | <span class="text-gradient">TechVision</span></span>
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="تبديل القائمة">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'home.php' || $currentPage == '') ? 'active' : ''; ?>" href="home.php">
                        <i class="bi bi-house-door me-1"></i> الرئيسية
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>" href="about.php">
                        <i class="bi bi-info-circle me-1"></i> من نحن
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>" href="contact.php">
                        <i class="bi bi-envelope me-1"></i> اتصل بنا
                    </a>
                </li>
            </ul>

            <!-- Action Buttons / Search -->
            <div class="d-flex align-items-center gap-2 mt-3 mt-lg-0">
                <a href="login.php" class="btn <?php echo ($currentPage == 'login.php') ? 'btn-gradient' : 'btn-outline-custom'; ?> btn-sm px-4 py-2">
                    <i class="bi bi-person-circle me-1"></i> تسجيل الدخول
                </a>
                <a href="contact.php" class="btn btn-gradient btn-sm px-4 py-2 d-none d-sm-inline-flex">
                    <i class="bi bi-rocket-takeoff me-1"></i> ابدأ مشروعك
                </a>
            </div>
        </div>
    </div>
</nav>
