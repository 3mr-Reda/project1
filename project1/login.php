<?php
$pageTitle = 'تسجيل الدخول';
include 'includes/header.php';
?>

<!-- Login Section -->
<section class="py-5 d-flex align-items-center min-vh-75 position-relative overflow-hidden" style="background: radial-gradient(circle at 50% 30%, rgba(79, 70, 229, 0.1) 0%, transparent 60%), linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%);">
    <div class="container py-4 position-relative z-2">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card-custom p-4 p-md-5 bg-white border-0 shadow-lg position-relative" style="border-radius: 24px;">
                    
                    <!-- Top Brand Icon -->
                    <div class="text-center mb-4">
                        <div class="icon-box icon-box-primary mx-auto mb-3" style="width: 65px; height: 65px; border-radius: 18px; font-size: 1.6rem;">
                            <i class="bi bi-lock-fill"></i>
                        </div>
                        <h3 class="fw-bolder mb-1">تسجيل الدخول</h3>
                        <p class="text-muted small">مرحباً بك مجدداً في بوابة <span class="text-gradient fw-bold">TechVision</span> الرقمية</p>
                    </div>

                    <!-- Login Form submitting to result.php -->
                    <form action="result.php" method="POST" class="needs-validation" novalidate>
                        <input type="hidden" name="form_type" value="login_form">

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label fw-bold small text-dark">البريد الإلكتروني <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text input-group-text-custom"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control form-control-custom" id="loginEmail" name="loginEmail" placeholder="name@example.com" required>
                                <div class="invalid-feedback">يرجى إدخال البريد الإلكتروني المسجل.</div>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label for="loginPassword" class="form-label fw-bold small text-dark mb-0">كلمة المرور <span class="text-danger">*</span></label>
                                <a href="#" onclick="alert('لإعادة تعيين كلمة المرور، يرجى التواصل مع الدعم الفني أو زيارة صفحة اتصل بنا.'); return false;" class="small text-primary text-decoration-none">نسيت كلمة المرور؟</a>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text input-group-text-custom"><i class="bi bi-key"></i></span>
                                <input type="password" class="form-control form-control-custom" id="loginPassword" name="loginPassword" placeholder="أدخل كلمة المرور السرية..." required>
                                <div class="invalid-feedback">يرجى إدخال كلمة المرور.</div>
                            </div>
                        </div>

                        <!-- Remember Me & Security Badge -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe" value="1">
                                <label class="form-check-label small text-muted" for="rememberMe">تذكرني على هذا الجهاز</label>
                            </div>
                            <span class="badge bg-light text-muted border small"><i class="bi bi-shield-lock me-1"></i> تشفير 256-bit</span>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid mb-4">
                            <button type="submit" class="btn btn-gradient btn-lg py-3 fw-bold shadow-sm">
                                <span>دخول إلى لوحة التحكم</span>
                                <i class="bi bi-box-arrow-in-left ms-2"></i>
                            </button>
                        </div>
                    </form>

                    <!-- Divider -->
                    <div class="position-relative text-center my-4">
                        <hr class="text-secondary opacity-25">
                        <span class="position-absolute top-50 start-50 translate-middle bg-white px-3 small text-muted">أو سجل الدخول بواسطة</span>
                    </div>

                    <!-- Social Login Buttons -->
                    <div class="row g-2 mb-4">
                        <div class="col-4">
                            <button type="button" onclick="alert('جاري التوجيه لبوابة Google OAuth...');" class="btn btn-outline-light border text-dark w-100 py-2 d-flex align-items-center justify-content-center gap-2 small fw-semibold shadow-sm">
                                <i class="bi bi-google text-danger fs-5"></i>
                                <span class="d-none d-sm-inline">Google</span>
                            </button>
                        </div>
                        <div class="col-4">
                            <button type="button" onclick="alert('جاري التوجيه لبوابة Github OAuth...');" class="btn btn-outline-light border text-dark w-100 py-2 d-flex align-items-center justify-content-center gap-2 small fw-semibold shadow-sm">
                                <i class="bi bi-github text-dark fs-5"></i>
                                <span class="d-none d-sm-inline">Github</span>
                            </button>
                        </div>
                        <div class="col-4">
                            <button type="button" onclick="alert('جاري التوجيه لبوابة Microsoft Auth...');" class="btn btn-outline-light border text-dark w-100 py-2 d-flex align-items-center justify-content-center gap-2 small fw-semibold shadow-sm">
                                <i class="bi bi-microsoft text-primary fs-5"></i>
                                <span class="d-none d-sm-inline">Microsoft</span>
                            </button>
                        </div>
                    </div>

                    <!-- Register Link -->
                    <div class="text-center pt-3 border-top">
                        <p class="small text-muted mb-0">
                            ليس لديك حساب مسجل في نظامنا؟ 
                            <a href="contact.php" class="text-primary fw-bold text-decoration-none ms-1">طلب إنشاء حساب جديد <i class="bi bi-arrow-left"></i></a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Background Decorative Circles -->
    <div class="position-absolute top-0 start-0 translate-middle bg-primary bg-opacity-20 rounded-circle" style="width: 350px; height: 350px; filter: blur(70px); z-index: 1;"></div>
    <div class="position-absolute bottom-0 end-0 translate-middle bg-pink bg-opacity-20 rounded-circle" style="width: 350px; height: 350px; filter: blur(70px); z-index: 1;"></div>
</section>

<?php include 'includes/footer.php'; ?>