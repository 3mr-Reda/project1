<?php
$pageTitle = 'نتيجة العملية';
include 'includes/header.php';

// Determine the type of submission or state
$formType = isset($_POST['form_type']) ? $_POST['form_type'] : '';
?>

<section class="py-5 min-vh-75 d-flex align-items-center bg-light-custom">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                
                <?php if ($formType === 'login_form'): ?>
                    <?php
                    $email = isset($_POST['loginEmail']) ? htmlspecialchars($_POST['loginEmail']) : 'مستخدم تجريبي';
                    $remember = isset($_POST['rememberMe']) ? 'نعم (تم تذكر الجلسة)' : 'لا (جلسة مؤقتة)';
                    ?>
                    <!-- Login Success State -->
                    <div class="card-custom p-4 p-md-5 bg-white text-center shadow-lg border-0" style="border-radius: 24px;">
                        <div class="mb-4">
                            <span class="icon-box mx-auto mb-3" style="width: 80px; height: 80px; background: rgba(16, 185, 129, 0.15); color: #10b981; font-size: 2.5rem; border-radius: 50%;">
                                <i class="bi bi-check-lg"></i>
                            </span>
                            <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 mb-2">عملية موثقة بنجاح</span>
                            <h2 class="display-6 fw-bolder mb-2">تم تسجيل الدخول بنجاح!</h2>
                            <p class="text-muted fs-5">أهلاً بك مجدداً، لقد تم التحقق من بياناتك وتفعيل صلاحيات الوصول للنظام.</p>
                        </div>

                        <!-- User Info Card -->
                        <div class="p-4 bg-light-custom rounded-4 text-start mb-4 border">
                            <div class="d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom">
                                <span class="fw-bold text-dark"><i class="bi bi-person-circle text-primary me-2"></i> بيانات الحساب المسجل:</span>
                                <span class="badge bg-primary">نشط الآن</span>
                            </div>
                            <div class="row g-2 small">
                                <div class="col-sm-4 text-muted">البريد الإلكتروني:</div>
                                <div class="col-sm-8 fw-bold text-dark"><?php echo $email; ?></div>
                                
                                <div class="col-sm-4 text-muted">حفظ الجلسة:</div>
                                <div class="col-sm-8 fw-bold text-dark"><?php echo $remember; ?></div>

                                <div class="col-sm-4 text-muted">وقت الدخول:</div>
                                <div class="col-sm-8 fw-bold text-dark"><?php echo date('Y-m-d H:i:s'); ?> (توقيت الخادم)</div>
                            </div>
                        </div>

                        <div class="alert alert-info bg-info bg-opacity-10 border-info border-opacity-25 text-start small mb-4" role="alert">
                            <i class="bi bi-info-circle-fill text-info me-2"></i>
                            <strong>ملاحظة تقنية:</strong> هذه صفحة محاكاة استاتيكية لاختبار ربط النماذج بملفات الويب باستخدام PHP المعالِج.
                        </div>

                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="home.php" class="btn btn-gradient px-4 py-2 fw-bold shadow-sm">
                                <i class="bi bi-house-door-fill me-1"></i> الانتقال للصفحة الرئيسية
                            </a>
                            <a href="login.php" class="btn btn-outline-custom px-4 py-2 fw-bold">
                                <i class="bi bi-box-arrow-right me-1"></i> تسجيل الخروج
                            </a>
                        </div>
                    </div>

                <?php elseif ($formType === 'contact_form'): ?>
                    <?php
                    $fullName = isset($_POST['fullName']) ? htmlspecialchars($_POST['fullName']) : 'عميل TechVision';
                    $email = isset($_POST['emailAddress']) ? htmlspecialchars($_POST['emailAddress']) : 'غير محدد';
                    $phone = !empty($_POST['phoneNumber']) ? htmlspecialchars($_POST['phoneNumber']) : 'لم يتم إدخاله';
                    $service = isset($_POST['serviceType']) ? htmlspecialchars($_POST['serviceType']) : 'استشارة عامة';
                    $subject = isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : 'بدون عنوان';
                    $message = isset($_POST['messageText']) ? htmlspecialchars($_POST['messageText']) : '';
                    ?>
                    <!-- Contact Submission Success State -->
                    <div class="card-custom p-4 p-md-5 bg-white text-center shadow-lg border-0" style="border-radius: 24px;">
                        <div class="mb-4">
                            <span class="icon-box mx-auto mb-3" style="width: 80px; height: 80px; background: rgba(79, 70, 229, 0.15); color: #4f46e5; font-size: 2.5rem; border-radius: 50%;">
                                <i class="bi bi-send-check-fill"></i>
                            </span>
                            <span class="badge badge-custom badge-primary-soft mb-2">تم الإرسال بنجاح</span>
                            <h2 class="display-6 fw-bolder mb-2">شكراً لتواصلك معنا، <?php echo $fullName; ?>!</h2>
                            <p class="text-muted fs-5">لقد استلمنا رسالتك بنجاح، وسيقوم أحد خبرائنا التقنيين بمراجعتها والرد عليك خلال أقل من 24 ساعة.</p>
                        </div>

                        <!-- Summary of Submitted Data -->
                        <div class="p-4 bg-light-custom rounded-4 text-start mb-4 border">
                            <h6 class="fw-bold mb-3 pb-2 border-bottom text-primary"><i class="bi bi-file-earmark-text-fill me-2"></i> ملخص الطلب الذي تم إرساله:</h6>
                            <div class="row g-3 small">
                                <div class="col-sm-4 text-muted">الاسم الكامل:</div>
                                <div class="col-sm-8 fw-bold text-dark"><?php echo $fullName; ?></div>

                                <div class="col-sm-4 text-muted">البريد الإلكتروني:</div>
                                <div class="col-sm-8 fw-bold text-dark"><?php echo $email; ?></div>

                                <div class="col-sm-4 text-muted">رقم الهاتف:</div>
                                <div class="col-sm-8 fw-bold text-dark" dir="ltr" style="text-align: right;"><?php echo $phone; ?></div>

                                <div class="col-sm-4 text-muted">الخدمة المطلوبة:</div>
                                <div class="col-sm-8"><span class="badge bg-primary px-3 py-1"><?php echo $service; ?></span></div>

                                <div class="col-sm-4 text-muted">عنوان الرسالة:</div>
                                <div class="col-sm-8 fw-bold text-dark"><?php echo $subject; ?></div>

                                <div class="col-12 mt-3 pt-2 border-top">
                                    <div class="text-muted mb-1">نص الرسالة / تفاصيل المشروع:</div>
                                    <div class="p-3 bg-white rounded-3 border text-dark font-monospace small" style="white-space: pre-line; line-height: 1.6;">
                                        <?php echo !empty($message) ? $message : 'لا يوجد نص رسالة.'; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="home.php" class="btn btn-gradient px-4 py-2 fw-bold shadow-sm">
                                <i class="bi bi-house-door-fill me-1"></i> العودة للصفحة الرئيسية
                            </a>
                            <a href="contact.php" class="btn btn-outline-custom px-4 py-2 fw-bold">
                                <i class="bi bi-plus-circle me-1"></i> إرسال رسالة أخرى
                            </a>
                        </div>
                    </div>

                <?php else: ?>
                    <!-- Default / Direct Access State -->
                    <div class="card-custom p-4 p-md-5 bg-white text-center shadow-lg border-0" style="border-radius: 24px;">
                        <div class="mb-4">
                            <span class="icon-box mx-auto mb-3" style="width: 80px; height: 80px; background: rgba(6, 182, 212, 0.15); color: #06b6d4; font-size: 2.5rem; border-radius: 50%;">
                                <i class="bi bi-gear-wide-connected"></i>
                            </span>
                            <span class="badge bg-info bg-opacity-10 text-info px-3 py-2 mb-2">مركز معالجة البيانات</span>
                            <h2 class="display-6 fw-bolder mb-2">صفحة النتيجة والمعالجة (Result Page)</h2>
                            <p class="text-muted fs-5">هذه الصفحة مخصصة لاستقبال ومعالجة المدخلات القادمة من نماذج تسجيل الدخول أو اتصل بنا باستخدام لغة PHP.</p>
                        </div>

                        <div class="p-4 bg-light-custom rounded-4 text-center mb-4 border max-w-md mx-auto">
                            <p class="text-muted small mb-0">
                                لاختبار عمل هذه الصفحة بشكل كامل، قم بزيارة 
                                <a href="login.php" class="fw-bold text-primary text-decoration-none">صفحة تسجيل الدخول</a> 
                                أو 
                                <a href="contact.php" class="fw-bold text-primary text-decoration-none">صفحة اتصل بنا</a> 
                                وإرسال النموذج.
                            </p>
                        </div>

                        <div class="d-flex justify-content-center">
                            <a href="home.php" class="btn btn-gradient px-5 py-2 fw-bold shadow-sm">
                                <i class="bi bi-house-door-fill me-2"></i> الذهاب إلى الرئيسية
                            </a>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>