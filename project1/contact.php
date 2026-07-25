<?php
$pageTitle = 'اتصل بنا';
include 'includes/header.php';

// Check if a service parameter was passed from home page
$selectedService = isset($_GET['service']) ? $_GET['service'] : '';
?>

<!-- Page Header Banner -->
<section class="page-header-banner text-center text-lg-start">
    <div class="container position-relative z-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center justify-content-lg-start mb-2">
                <li class="breadcrumb-item"><a href="home.php" class="text-white-50 text-decoration-none">الرئيسية</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">اتصل بنا</li>
            </ol>
        </nav>
        <h1 class="display-5 fw-bolder text-white mb-3">
            تواصل مع <span class="text-gradient" style="background: linear-gradient(135deg, #38bdf8 0%, #e879f9 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">فريق الخبراء</span> اليوم
        </h1>
        <p class="lead text-white-50 max-w-lg mb-0 pe-lg-5">
            نحن هنا للإجابة على جميع استفساراتك البرمجية والتقنية. ابدأ رحلة التحول الرقمي لمؤسستك بخطوة واحدة بسيطة معنا.
        </p>
    </div>
</section>

<!-- Contact Content Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row g-5">
            <!-- Contact Information Column -->
            <div class="col-lg-5">
                <span class="badge badge-custom badge-primary-soft mb-3">معلومات الاتصال</span>
                <h2 class="display-6 fw-bolder mb-4">نحن في خدمتك على مدار الساعة</h2>
                <p class="text-muted mb-5">
                    سواء كنت تفضل الزيارة المباشرة، الاتصال الهاتفي، أو إرسال بريد إلكتروني، يسعدنا تواصلك في أي وقت للتشاور أو بدء مشروع جديد.
                </p>

                <div class="d-flex flex-column gap-4">
                    <!-- Info Item 1 -->
                    <div class="card-custom p-4 bg-light-custom border-0 d-flex align-items-start gap-3">
                        <span class="icon-box icon-box-primary mb-0 flex-shrink-0" style="width: 50px; height: 50px; font-size: 1.3rem;">
                            <i class="bi bi-geo-alt-fill"></i>
                        </span>
                        <div>
                            <h5 class="fw-bold mb-1">المقر الرئيسي</h5>
                            <p class="text-muted mb-0 small">واجهة الرياض التقنية، طريق المطار، الرياض، المملكة العربية السعودية</p>
                        </div>
                    </div>

                    <!-- Info Item 2 -->
                    <div class="card-custom p-4 bg-light-custom border-0 d-flex align-items-start gap-3">
                        <span class="icon-box icon-box-cyan mb-0 flex-shrink-0" style="width: 50px; height: 50px; font-size: 1.3rem;">
                            <i class="bi bi-telephone-fill"></i>
                        </span>
                        <div>
                            <h5 class="fw-bold mb-1">الاتصال المباشر</h5>
                            <p class="text-muted mb-1 small" dir="ltr">+966 50 123 4567</p>
                            <p class="text-muted mb-0 small" dir="ltr">+966 11 987 6543</p>
                        </div>
                    </div>

                    <!-- Info Item 3 -->
                    <div class="card-custom p-4 bg-light-custom border-0 d-flex align-items-start gap-3">
                        <span class="icon-box icon-box-pink mb-0 flex-shrink-0" style="width: 50px; height: 50px; font-size: 1.3rem;">
                            <i class="bi bi-envelope-fill"></i>
                        </span>
                        <div>
                            <h5 class="fw-bold mb-1">البريد الإلكتروني</h5>
                            <p class="text-muted mb-1 small">info@techvision.com</p>
                            <p class="text-muted mb-0 small">support@techvision.com</p>
                        </div>
                    </div>

                    <!-- Info Item 4 -->
                    <div class="card-custom p-4 bg-light-custom border-0 d-flex align-items-start gap-3">
                        <span class="icon-box mb-0 flex-shrink-0" style="background: rgba(16, 185, 129, 0.15); color: #10b981; width: 50px; height: 50px; font-size: 1.3rem;">
                            <i class="bi bi-clock-fill"></i>
                        </span>
                        <div>
                            <h5 class="fw-bold mb-1">ساعات العمل الرسمية</h5>
                            <p class="text-muted mb-0 small">الأحد إلى الخميس: 9:00 صباحاً - 6:00 مساءً<br>الجمعة والسبت: عطلة نهاية الأسبوع</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form Column -->
            <div class="col-lg-7">
                <div class="card-custom p-4 p-md-5 bg-white shadow-lg border">
                    <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
                        <div>
                            <h3 class="fw-bolder mb-1"><i class="bi bi-send-check-fill text-primary me-2"></i> أرسل لنا رسالة مباشرة</h3>
                            <p class="text-muted small mb-0">قم بتعبئة النموذج أدناه وسيقوم أحد مهندسينا بالرد عليك خلال 24 ساعة.</p>
                        </div>
                        <span class="badge bg-success bg-opacity-10 text-success px-3 py-2">متاح للرد <i class="bi bi-dot"></i></span>
                    </div>

                    <!-- Form sending to result.php -->
                    <form action="result.php" method="POST" class="needs-validation" novalidate>
                        <input type="hidden" name="form_type" value="contact_form">

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="fullName" class="form-label fw-bold small text-dark">الاسم الكامل <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text input-group-text-custom"><i class="bi bi-person"></i></span>
                                    <input type="text" class="form-control form-control-custom" id="fullName" name="fullName" placeholder="أدخل اسمك الكريم..." required>
                                    <div class="invalid-feedback">يرجى إدخال الاسم الكامل.</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="emailAddress" class="form-label fw-bold small text-dark">البريد الإلكتروني <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text input-group-text-custom"><i class="bi bi-envelope"></i></span>
                                    <input type="email" class="form-control form-control-custom" id="emailAddress" name="emailAddress" placeholder="name@example.com" required>
                                    <div class="invalid-feedback">يرجى إدخال بريد إلكتروني صحيح.</div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="phoneNumber" class="form-label fw-bold small text-dark">رقم الهاتف <span class="text-muted fw-normal">(اختياري)</span></label>
                                <div class="input-group">
                                    <span class="input-group-text input-group-text-custom"><i class="bi bi-telephone"></i></span>
                                    <input type="tel" class="form-control form-control-custom" id="phoneNumber" name="phoneNumber" placeholder="05xxxxxxxx">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="serviceType" class="form-label fw-bold small text-dark">الخدمة المطلوبة <span class="text-danger">*</span></label>
                                <select class="form-select form-control-custom" id="serviceType" name="serviceType" required>
                                    <option value="" disabled <?php echo ($selectedService == '') ? 'selected' : ''; ?>>اختر الخدمة...</option>
                                    <option value="تطوير تطبيقات الويب" <?php echo ($selectedService == 'web') ? 'selected' : ''; ?>>تطوير تطبيقات الويب</option>
                                    <option value="حلول الذكاء الاصطناعي" <?php echo ($selectedService == 'ai') ? 'selected' : ''; ?>>حلول الذكاء الاصطناعي</option>
                                    <option value="الحوسبة السحابية والأمان" <?php echo ($selectedService == 'security') ? 'selected' : ''; ?>>الحوسبة السحابية والأمان</option>
                                    <option value="تصميم واجهات UI/UX" <?php echo ($selectedService == 'uiux') ? 'selected' : ''; ?>>تصميم واجهات UI/UX</option>
                                    <option value="استشارة تقنية عامة">استشارة تقنية عامة</option>
                                </select>
                                <div class="invalid-feedback">يرجى تحديد الخدمة المطلوبة.</div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label fw-bold small text-dark">عنوان الرسالة <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-custom" id="subject" name="subject" placeholder="موضوع استفسارك أو مشروعك..." required>
                            <div class="invalid-feedback">يرجى كتابة عنوان للرسالة.</div>
                        </div>

                        <div class="mb-4">
                            <label for="messageText" class="form-label fw-bold small text-dark">نص الرسالة أو تفاصيل المشروع <span class="text-danger">*</span></label>
                            <textarea class="form-control form-control-custom" id="messageText" name="messageText" rows="5" placeholder="اشرح لنا فكرتك، متطلباتك، أو أي أسئلة تود طرحها على الفريق..." required></textarea>
                            <div class="invalid-feedback">يرجى كتابة نص الرسالة.</div>
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="1" id="privacyCheck" name="privacyCheck" required>
                            <label class="form-check-label small text-muted" for="privacyCheck">
                                أوافق على شروط سياسة الخصوصية ومعالجة بياناتي لغرض التواصل بخصوص هذا الطلب.
                            </label>
                            <div class="invalid-feedback">يجب الموافقة على الشروط للمتابعة.</div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-gradient btn-lg py-3 fw-bold shadow-sm">
                                <span>إرسال الرسالة الآن</span>
                                <i class="bi bi-send-fill ms-2"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Map Banner / Tech Hub Location -->
<section class="py-5 bg-light-custom">
    <div class="container py-3">
        <div class="card-custom p-5 bg-dark text-white border-0 text-center position-relative overflow-hidden" style="border-radius: 24px; background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%);">
            <div class="position-relative z-2">
                <i class="bi bi-globe-central-south-asia text-primary display-4 mb-3 d-inline-block"></i>
                <h3 class="fw-bolder mb-2">نغطي خدماتنا في كافة أنحاء الوطن العربي والعالم</h3>
                <p class="text-muted max-w-lg mx-auto mb-4">
                    مكاتبنا الافتراضية ومقراتنا التقنية جاهزة للاجتماعات عبر الفيديو أو اللقاءات المباشرة لإنجاح مشروعك الرقمي أينما كنت.
                </p>
                <div class="d-inline-flex align-items-center gap-3 bg-white bg-opacity-10 px-4 py-2 rounded-pill border border-secondary border-opacity-50">
                    <span class="d-flex align-items-center gap-1 text-info small"><i class="bi bi-geo-alt"></i> الرياض</span>
                    <span class="text-secondary">|</span>
                    <span class="d-flex align-items-center gap-1 text-success small"><i class="bi bi-geo-alt"></i> دبي</span>
                    <span class="text-secondary">|</span>
                    <span class="d-flex align-items-center gap-1 text-warning small"><i class="bi bi-geo-alt"></i> القاهرة</span>
                </div>
            </div>
            <!-- Glow background -->
            <div class="position-absolute top-50 start-50 translate-middle bg-primary bg-opacity-25 rounded-circle" style="width: 350px; height: 350px; filter: blur(70px); pointer-events: none;"></div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>