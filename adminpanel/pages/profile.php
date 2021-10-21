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
                                <h3>Profile</h3>
                                <p class="text-subtitle text-muted">For users to browse view their profile</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <div class="breadcrumb-item">
                                            <p id="datetime" class="default-datetime">0:00</p>
                                        </div>
                                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-header">
                                        <h4>Admin</h4>
                                        <hr>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        Administrator provides office support to either an individual or
                                        team and is vital for the smooth-running of a business.
                                    </p>
                                </div>
                                <img class="img-fluid w-100" src="images/employee/default-img-2021-8.jpg" alt="Card image cap">
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <button class="btn btn-light-primary">Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Profile Info</h4>
                                <hr>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                                            aria-controls="home" aria-selected="true">Profile</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="settings-tab" data-bs-toggle="tab" href="#settings" role="tab"
                                            aria-controls="profile" aria-selected="false">Settings</a>
                                    </li>
                                </ul>
                                <?php
                                    require 'be/db/db_pdo.php';
                                        $sql = $conn->prepare("SELECT * FROM tbl_account_admin");
                                        $sql->execute();
                                        while($fetch = $sql->fetch()){
                                ?>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="form-group mt-4">
                                                <h4 class="card-title"><i class="bi bi-person-fill"> </i>
                                                Name: <?php echo $fetch['admin_name']; ?> </h4>
                                            </div>
                                            <div class="form-group">
                                                <h4 class="card-title"><i class="bi bi-envelope-fill">  </i>
                                                Email: <?php echo $fetch['admin_email']; ?> </h4>
                                            </div>
                                            <div class="form-group">
                                                <h4 class="card-title"><i class="bi bi-phone-fill">  </i>
                                                Mobile: <?php echo $fetch['admin_mobile']; ?> </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="form form-vertical">
                                        <div class="form-body mt-5 mr-5 ml-5">
                                            <div class="form-group">
                                                <h3>Update Settings</h3>
                                            </div>
                                            <form action="be/admin/admin-update.php" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-12">
                                                    <input type="hidden" name="adminId" value="<?php echo $fetch['id'] ?>">
                                                    <div class="form-group has-icon-left">
                                                        <label for="first-name-icon">Name</label>
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control"
                                                                name="adminName" placeholder="Enter name"
                                                                value="<?php echo $fetch['admin_name']; ?>">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-person"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group has-icon-left">
                                                        <label for="email-id-icon">Email</label>
                                                        <div class="position-relative">
                                                            <input type="email" class="form-control"
                                                            name="adminEmail" placeholder="Enter Email"
                                                            value="<?php echo $fetch['admin_email']; ?>">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-envelope"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group has-icon-left">
                                                        <label for="mobile-id-icon">Mobile</label>
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control"
                                                            name="adminMobile" placeholder="Enter Mobile Number"
                                                            value="<?php echo $fetch['admin_mobile']; ?>">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-phone"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group has-icon-left">
                                                        <label for="mobile-id-icon">Username</label>
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control"
                                                            name="adminUsername" placeholder="Enter Username"
                                                            value="<?php echo $fetch['admin_username']; ?>">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-person"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group has-icon-left">
                                                        <label for="password-id-icon">Password</label>
                                                        <div class="position-relative">
                                                            <input type="password" class="form-control"
                                                            name="adminPassword" placeholder="Enter Password"
                                                            value="<?php echo $fetch['admin_password']; ?>">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-lock"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" name="updateAdmin" class="btn btn-primary me-1 mb-1">Submit</button>
                                                    <button type="reset"
                                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <?php
                                        }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php
                        include 'includes/footer.php';
                    ?>
            </div>
        </div>
    </div>
    <?php include 'includes/scripts.php' ?>
</body>

</html>
