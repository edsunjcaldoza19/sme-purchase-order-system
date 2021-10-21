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
                        <p>Change User credentials. Changes will be applied on the next login session.</p>
                    </div>
                    <div class="card-body">
                    <form action="be/setting/account-update.php" method="post" enctype="multipart/form-data">
                    <?php
                        require 'be/db/db_pdo.php';
                        $cashierID = $_SESSION['cashier_id'];
                        $sql = $conn->prepare("SELECT * FROM `tbl_account_cashier` WHERE `id` = $cashierID");
                        $sql->execute();
                        $fetch = $sql->fetch();
                    ?>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="hidden" name="cashierID" value="<?php echo $fetch['id']; ?>">
                            <input type="text" value="<?php echo $fetch['cashier_name']; ?>" name="cashierName" class="form-control form-control-xl" placeholder="Name" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" value="<?php echo $fetch['cashier_email']; ?>" name="cashierEmail" class="form-control form-control-xl" placeholder="Email" required>
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" value="<?php echo $fetch['cashier_username']; ?>" name="cashierUsername" class="form-control form-control-xl" placeholder="Username" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" value="<?php echo $fetch['cashier_password']; ?>" name="cashierPassword" class="form-control form-control-xl" placeholder="Password" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button type="submit" name="cashierUpdate" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Update</button>
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
