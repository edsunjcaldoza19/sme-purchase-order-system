<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - SME</title>
    <link href="assets/fonts/nunito.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
</head>

<body>
    <div id="auth">

<div class="row h-100">
    <div class="col-lg-7 col-12">
        <div id="auth-left">
            <div class="auth-logo">
            </div>
            <h1 class="auth-title">Sign Up</h1>
            <p class="auth-subtitle mb-5">Input your data to register to our website.</p>
            <form action="auth/register.php" method="post" enctype="multipart/form-data">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" name="cstName" class="form-control form-control-xl" placeholder="Name" required>
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="email" name="cstEmail" class="form-control form-control-xl" placeholder="Email" required>
                    <div class="form-control-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <select class="form-control form-control-xl" name="cstGender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <div class="form-control-icon">
                        <i class="bi bi-people"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="date" name="cstBirthdate" class="form-control form-control-xl" required>
                    <div class="form-control-icon">
                        <i class="bi bi-calendar"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" name="cstUsername" class="form-control form-control-xl" placeholder="Username" required>
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" name="cstPassword" class="form-control form-control-xl" placeholder="Password" required>
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" name="cstConfirm" class="form-control form-control-xl" placeholder="Confirm Password" required>
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="form-check form-check-lg d-flex align-items-end">
                    <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label text-gray-600" for="flexCheckDefault">
                        I accept to the terms and agreement
                    </label>
                </div>
                <button type="submit" name="customerSignUp" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
            </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p class='text-gray-600'>Already have an account? <a href="auth-login.php" class="font-bold">Log
                        in</a>.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-5 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>

    </div>
</body>

</html>
