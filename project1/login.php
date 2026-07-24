<?php
$pageTitle = 'تسجيل الدخول';
include 'includes/header.php';
?>

<div class="container mt-5 mb-5 flex-grow-1">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card card-custom p-4 border-0">
                <h3 class="text-center mb-4 fw-bold text-primary">تسجيل الدخول</h3>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">البريد الإلكتروني</label>
                        <input type="email" class="form-control form-control-lg bg-light" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">كلمة المرور</label>
                        <input type="password" class="form-control form-control-lg bg-light" id="exampleInputPassword1" placeholder="أدخل كلمة المرور">
                    </div>
                    <div class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">تذكرني</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow-sm">تسجيل الدخول</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
<?php

include "nav.php";

?>