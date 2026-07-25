<?php
$pageTitle = 'الصفحة الرئيسية';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section d-flex align-items-center min-vh-75">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-7 text-center text-lg-start">
                <span class="badge badge-custom badge-primary-soft mb-3 px-3 py-2 border border-primary border-opacity-25 animate-float">
                    <i class="bi bi-lightning-charge-fill me-1"></i> الجيل الجديد من حلول الويب الرقمية
                </span>
                <h1 class="display-4 fw-bolder mb-4 lh-base">
                    نصنع المستقبل الرقمي بـ <span class="text-gradient">أحدث التقنيات</span> والابتكار
                </h1>
                <p class="lead text-muted mb-5 pe-lg-5">
                    في <strong class="text-dark">TechVision</strong>، نجمع بين الإبداع التفاعلي والهندسة البرمجية المتقدمة لتقديم مواقع إلكترونية وتطبيقات ذكية تفوق التوقعات وتحقق أهداف عملك بكفاءة عالية.
                </p>
                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3">
                    <a href="contact.php" class="btn btn-gradient btn-lg px-4 py-3">
                        <i class="bi bi-rocket-takeoff-fill me-2"></i> ابدأ مشروعك الآن
                    </a>
                    <a href="#services" class="btn btn-outline-custom btn-lg px-4 py-3">
                        <i class="bi bi-grid-fill me-2"></i> استكشف خدماتنا
                    </a>
                </div>

                <!-- Trust Badges -->
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-4 mt-5 pt-3 border-top border-secondary border-opacity-10">
                    <div class="d-flex align-items-center text-muted small">
                        <i class="bi bi-shield-check-fill text-success fs-5 me-2"></i>
                        <span>أمان وحماية 100%</span>
                    </div>
                    <div class="d-flex align-items-center text-muted small">
                        <i class="bi bi-speedometer2 text-primary fs-5 me-2"></i>
                        <span>أداء فائق السرعة</span>
                    </div>
                    <div class="d-flex align-items-center text-muted small">
                        <i class="bi bi-headset text-info fs-5 me-2"></i>
                        <span>دعم فني 24/7</span>
                    </div>
                </div>
            </div>

            <!-- Visual Hero Card / Illustration Replacement -->
            <div class="col-lg-5">
                <div class="position-relative">
                    <div class="card-custom p-4 p-md-5 bg-white border-0 shadow-lg position-relative z-2">
                        <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom border-light">
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge bg-danger rounded-circle p-1"></span>
                                <span class="badge bg-warning rounded-circle p-1"></span>
                                <span class="badge bg-success rounded-circle p-1"></span>
                                <span class="ms-2 fw-bold text-muted small">TechVision OS v3.0</span>
                            </div>
                            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-pill">نشط الآن <i class="bi bi-broadcast"></i></span>
                        </div>

                        <div class="mb-4">
                            <h5 class="fw-bold mb-3"><i class="bi bi-terminal-fill text-primary me-2"></i> حالة النظام ومؤشرات الأداء</h5>
                            <div class="progress mb-2" style="height: 10px; border-radius: 10px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 96%;" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between text-muted small mb-3">
                                <span>كفاءة الكود المصدري</span>
                                <span class="fw-bold text-primary">96% ممتاز</span>
                            </div>
                        </div>

                        <div class="row g-3 text-center">
                            <div class="col-6">
                                <div class="p-3 rounded-4 bg-light-custom border border-light">
                                    <h3 class="fw-bolder text-gradient mb-1">0.12s</h3>
                                    <span class="text-muted small">سرعة الاستجابة</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 rounded-4 bg-light-custom border border-light">
                                    <h3 class="fw-bolder text-gradient-cyan mb-1">99.9%</h3>
                                    <span class="text-muted small">نسبة التشغيل والاستقرار</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 pt-3 border-top text-center">
                            <a href="about.php" class="text-decoration-none fw-bold text-primary small d-flex align-items-center justify-content-center gap-1">
                                <span>تعرف على البنية التحتية والمزيد عنا</span>
                                <i class="bi bi-arrow-left"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Background Glow Elements -->
                    <div class="position-absolute top-0 end-0 translate-middle-y bg-primary bg-opacity-25 rounded-circle blur-lg" style="width: 250px; height: 250px; filter: blur(60px); z-index: 1;"></div>
                    <div class="position-absolute bottom-0 start-0 translate-middle-x bg-info bg-opacity-25 rounded-circle blur-lg" style="width: 250px; height: 250px; filter: blur(60px); z-index: 1;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row g-4 justify-content-center">
            <div class="col-md-3 col-sm-6">
                <div class="stat-card">
                    <div class="stat-number">+150</div>
                    <div class="text-light text-opacity-75 fw-semibold">مشروع رقمي منجز</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-card" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
                    <div class="stat-number" style="background: linear-gradient(135deg, #34d399 0%, #38bdf8 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">+98%</div>
                    <div class="text-light text-opacity-75 fw-semibold">نسبة رضا العملاء</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-card">
                    <div class="stat-number" style="background: linear-gradient(135deg, #f43f5e 0%, #fb923c 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">24/7</div>
                    <div class="text-light text-opacity-75 fw-semibold">دعم فني وهندسي مستمر</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-card" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
                    <div class="stat-number" style="background: linear-gradient(135deg, #a855f7 0%, #6366f1 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">+10</div>
                    <div class="text-light text-opacity-75 fw-semibold">سنوات من الابتكار التقني</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Services Section -->
<section id="services" class="py-5 bg-light-custom">
    <div class="container py-5">
        <div class="text-center max-w-lg mx-auto mb-5">
            <span class="badge badge-custom bg-white text-primary border shadow-sm mb-2">خدماتنا الرئيسية</span>
            <h2 class="display-6 fw-bolder mb-3">حلول تقنية متكاملة لنمو أعمالك</h2>
            <p class="text-muted fs-5">نقدم مجموعة شاملة من الخدمات البرمجية والتصميمية لتلبية احتياجات شركتك في عصر التحول الرقمي.</p>
        </div>

        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="card-custom p-4 bg-white d-flex flex-column">
                    <div class="icon-box icon-box-primary">
                        <i class="bi bi-code-square"></i>
                    </div>
                    <h4 class="fw-bold mb-3">تطوير الويب المتطور</h4>
                    <p class="text-muted flex-grow-1 mb-4">
                        بناء مواقع وتطبيقات ويب ديناميكية وسريعة باستخدام أحدث معايير HTML5, CSS3, Bootstrap 5 و PHP مع تصميم متجاوب لجميع الشاشات.
                    </p>
                    <a href="contact.php?service=web" class="text-primary fw-bold text-decoration-none d-inline-flex align-items-center gap-1">
                        <span>طلب الخدمة</span>
                        <i class="bi bi-arrow-left"></i>
                    </a>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="card-custom p-4 bg-white d-flex flex-column">
                    <div class="icon-box icon-box-cyan">
                        <i class="bi bi-cpu"></i>
                    </div>
                    <h4 class="fw-bold mb-3">حلول الذكاء الاصطناعي</h4>
                    <p class="text-muted flex-grow-1 mb-4">
                        دمج تقنيات الذكاء الاصطناعي وتعلم الآلة في تطبيقاتك لتحليل البيانات، أتمتة المهام المعقدة، وتحسين اتخاذ القرارات بذكاء.
                    </p>
                    <a href="contact.php?service=ai" class="text-primary fw-bold text-decoration-none d-inline-flex align-items-center gap-1">
                        <span>طلب الخدمة</span>
                        <i class="bi bi-arrow-left"></i>
                    </a>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="card-custom p-4 bg-white d-flex flex-column">
                    <div class="icon-box icon-box-pink">
                        <i class="bi bi-shield-lock-fill"></i>
                    </div>
                    <h4 class="fw-bold mb-3">الأمن السيبراني والسحابة</h4>
                    <p class="text-muted flex-grow-1 mb-4">
                        توفير بيئة استضافة سحابية فائقة الأمان مع تطبيق معايير الحماية التامة والتشفير لبياناتك ضد أي تهديدات سيبرانية.
                    </p>
                    <a href="contact.php?service=security" class="text-primary fw-bold text-decoration-none d-inline-flex align-items-center gap-1">
                        <span>طلب الخدمة</span>
                        <i class="bi bi-arrow-left"></i>
                    </a>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="card-custom p-4 bg-white d-flex flex-column">
                    <div class="icon-box" style="background: linear-gradient(135deg, rgba(245, 158, 11, 0.15) 0%, rgba(217, 119, 6, 0.15) 100%); color: #d97706;">
                        <i class="bi bi-palette-fill"></i>
                    </div>
                    <h4 class="fw-bold mb-3">تصميم تجربة المستخدم UI/UX</h4>
                    <p class="text-muted flex-grow-1 mb-4">
                        تصميم واجهات مستخدم جذابة وعصرية تركز على انسيابية التصفح وسهولة الاستخدام لضمان أعلى نسب تفاعل وبقاء للزوار.
                    </p>
                    <a href="contact.php?service=uiux" class="text-primary fw-bold text-decoration-none d-inline-flex align-items-center gap-1">
                        <span>طلب الخدمة</span>
                        <i class="bi bi-arrow-left"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us / Features -->
<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="badge badge-custom bg-light text-primary border mb-3">لماذا نحن؟</span>
                <h2 class="display-6 fw-bolder mb-4">نحن نربط بين الرؤية الاستراتيجية والتنفيذ الاحترافي</h2>
                <p class="text-muted fs-5 mb-4">
                    نحن لا نبني مجرد صفحات ويب، بل نؤسس منظومات رقمية متكاملة تساعدك على التفوق على منافسيك بفضل التزامنا بأعلى معايير الجودة العالمية في البرمجة والتصميم.
                </p>

                <div class="row g-4 mt-2">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start gap-3">
                            <span class="badge bg-primary bg-opacity-10 text-primary p-2 rounded-3 fs-5">
                                <i class="bi bi-check2-circle"></i>
                            </span>
                            <div>
                                <h5 class="fw-bold mb-1">كود نظيف وقياسي</h5>
                                <p class="text-muted small mb-0">كود برمجي مرتب يسهل تطويره وصيانته وتوسيع قدراته مستقبلاً.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start gap-3">
                            <span class="badge bg-success bg-opacity-10 text-success p-2 rounded-3 fs-5">
                                <i class="bi bi-lightning-charge"></i>
                            </span>
                            <div>
                                <h5 class="fw-bold mb-1">سرعة أداء فائقة</h5>
                                <p class="text-muted small mb-0">تحسين وقت التحميل واستجابة الخوادم لضمان أفضل تجربة للمستخدم.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start gap-3">
                            <span class="badge bg-info bg-opacity-10 text-info p-2 rounded-3 fs-5">
                                <i class="bi bi-phone-flip"></i>
                            </span>
                            <div>
                                <h5 class="fw-bold mb-1">توافق تام مع الجوال</h5>
                                <p class="text-muted small mb-0">تصميم مرن يعمل بكفاءة وسلاسة على كافة الهواتف والأجهزة اللوحية.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start gap-3">
                            <span class="badge bg-warning bg-opacity-10 text-warning p-2 rounded-3 fs-5">
                                <i class="bi bi-headset"></i>
                            </span>
                            <div>
                                <h5 class="fw-bold mb-1">دعم متواصل</h5>
                                <p class="text-muted small mb-0">فريقنا الهندسي معك دائماً لتقديم الاستشارات وحل أي تحديات تقنية.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-custom p-4 p-lg-5 bg-dark text-white border-0 shadow-lg position-relative" style="border-radius: 24px;">
                    <div class="d-flex align-items-center justify-content-between pb-3 mb-4 border-bottom border-secondary border-opacity-50">
                        <span class="text-muted small"><i class="bi bi-code-slash text-info me-2"></i> stack_config.php</span>
                        <span class="badge bg-success bg-opacity-25 text-success">PHP Integrated <i class="bi bi-check-lg"></i></span>
                    </div>
                    <pre class="text-info mb-0" style="font-family: monospace; font-size: 0.95rem; line-height: 1.8; direction: ltr; text-align: left;"><code class="language-php">&lt;?php
<span class="text-secondary">// TechVision System Architecture</span>
<span class="text-warning">$projectConfig</span> = [
    <span class="text-light">'framework'</span> =&gt; <span class="text-success">'Bootstrap v5.3'</span>,
    <span class="text-light">'backend'</span>   =&gt; <span class="text-success">'PHP 8.x Modular'</span>,
    <span class="text-light">'responsive'</span>=&gt; <span class="text-danger">true</span>,
    <span class="text-light">'security'</span>  =&gt; <span class="text-success">'Enterprise Grade'</span>,
    <span class="text-light">'ui_style'</span>  =&gt; <span class="text-success">'Glassmorphism &amp; Gradients'</span>
];

<span class="text-primary">function</span> <span class="text-warning">renderExcellence</span>(<span class="text-warning">$clientNeeds</span>) {
    <span class="text-primary">return</span> <span class="text-warning">TechVision::build</span>(<span class="text-warning">$clientNeeds</span>, <span class="text-warning">$projectConfig</span>);
}
<span class="text-secondary">?&gt;</span></code></pre>
                    <div class="mt-4 pt-3 border-top border-secondary border-opacity-50 d-flex justify-content-between align-items-center text-muted small">
                        <span>تم التصميم بواسطة مجموعة التطوير</span>
                        <span class="badge bg-primary">التقييم: 100/100</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="py-5 bg-light-custom">
    <div class="container py-4">
        <div class="card-custom p-5 text-center text-white border-0 shadow-lg position-relative overflow-hidden" style="background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 50%, #9333ea 100%); border-radius: 30px;">
            <div class="position-relative z-2 py-3">
                <span class="badge bg-white bg-opacity-20 text-white mb-3 px-3 py-2">نحن جاهزون للبدء</span>
                <h2 class="display-6 fw-bolder mb-3 text-white">هل أنت مستعد لنقل مشروعك إلى المستوى التالي؟</h2>
                <p class="lead text-white text-opacity-75 mb-4 max-w-lg mx-auto">
                    تواصل معنا اليوم لمناقشة أفكارك وتحويلها إلى واقع رقمي ملموس يتمتع بأعلى مستويات الجودة والاحترافية.
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="contact.php" class="btn btn-light btn-lg px-5 py-3 fw-bold text-primary shadow-sm rounded-pill">
                        <i class="bi bi-send-fill me-2"></i> تواصل معنا الآن
                    </a>
                    <a href="about.php" class="btn btn-outline-light btn-lg px-4 py-3 rounded-pill">
                        <i class="bi bi-people-fill me-2"></i> تعرف على فريقنا
                    </a>
                </div>
            </div>
            <!-- Decorative circle -->
            <div class="position-absolute top-0 end-0 bg-white bg-opacity-10 rounded-circle" style="width: 400px; height: 400px; transform: translate(30%, -30%); pointer-events: none;"></div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>