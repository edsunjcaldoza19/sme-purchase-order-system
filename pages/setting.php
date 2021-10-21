<?php include 'includes/head.php'?>

<body>
    <div class="loader_bg">
        <div class="loader">
        </div>
    </div>
    <div id="app">
        <?php include 'includes/sidebar.php'?>
        <div id="main" class="layout-navbar">
        <?php include 'includes/navbar.php'?>
        <div id="main-content">
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Settings</h3>
                            <p class="text-subtitle text-muted">For users to browse view settings</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Settings</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h3>Account Settings</h3>
                    </div>
                    <div class="card-body">
                        <form action="be/setting/account-update.php" method="post" enctype="multipart/form-data">
                        <?php
                            require 'be/db/db_pdo.php';
                            $cstID = $_SESSION['cst_id'];
                            $sql = $conn->prepare("SELECT * FROM `tbl_account_customer` WHERE `id` = $cstID");
                            $sql->execute();
                            $fetch = $sql->fetch();
                        ?>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="hidden" name="cstID" value="<?php echo $fetch['id']; ?>">
                                <input type="text" value="<?php echo $fetch['cst_name']; ?>" name="cstName" class="form-control form-control-xl" placeholder="Name" required>
                                <div class="form-control-icon">
                                    <i class="bi bi-person"></i>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="email" value="<?php echo $fetch['cst_email']; ?>" name="cstEmail" class="form-control form-control-xl" placeholder="Email" required>
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
                                <input type="date" value="<?php echo $fetch['cst_birthdate']; ?>" name="cstBirthdate" class="form-control form-control-xl" required>
                                <div class="form-control-icon">
                                    <i class="bi bi-calendar"></i>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="text" value="<?php echo $fetch['cst_username']; ?>" name="cstUsername" class="form-control form-control-xl" placeholder="Username" required>
                                <div class="form-control-icon">
                                    <i class="bi bi-person"></i>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="password" value="<?php echo $fetch['cst_password']; ?>" name="cstPassword" class="form-control form-control-xl" placeholder="Password" required>
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
                            <button type="submit" name="customerUpdate" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Update Information</button>
                        </form>
                    </div>
                </div>

            </section>
    <?php
        include 'includes/footer.php';
    ?>
            </div>
        </div>
    </div>
    <?php include 'includes/scripts.php' ?>
</body>

</html>
