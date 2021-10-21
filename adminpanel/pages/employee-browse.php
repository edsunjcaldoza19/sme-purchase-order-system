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
                            <h3>Browse Employees</h3>
                            <p class="text-subtitle text-muted">For users to browse product information</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <div class="breadcrumb-item">
                                        <p id="datetime" class="default-datetime">0:00</p>
                                    </div>
                                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <section id="content-types">
                <div class="row">
                    <?php
                        require 'be/db/db_pdo.php';
                        $sql = $conn->prepare("SELECT *, tbl_employee.id FROM
                        tbl_employee LEFT JOIN tbl_employee_role ON
                        tbl_employee_role.id=tbl_employee.employee_role_id");
                        $sql->execute();
                        while($fetch = $sql->fetch()){
                    ?>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 style="white-space: nowrap; width: 100%; overflow: hidden; text-overflow: ellipsis;"><?php echo $fetch['employee_name']; ?></h4>
                                    <p class="card-text">
                                        <?php echo $fetch['role_name']?>
                                    </p>
                                    <hr>
                                    <p class="card-text">
                                        <i class="bi bi-envelope-fill"></i>
                                         <?php echo $fetch['employee_email']?>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-phone-vibrate-fill"></i>
                                         <?php echo $fetch['employee_contact']?>
                                    </p>
                                    <p class="card-text">
                                    <i class="bi bi-telephone-inbound-fill"></i>
                                         <?php echo $fetch['employee_telephone']?>
                                    </p>
                                </div>
                                <?php
                                    $image = (!empty($fetch['employee_image'])) ? 'images/employee/'.$fetch['employee_image'] : 'images/employee/default-img-2021-8.jpg';
                                ?>
                                <img src="<?php echo $image; ?>" alt="Card image cap" width="100%" height="350px">
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <span>Salary <?php echo $fetch['role_salary'] ?></span>
                                <a href="employee-update.php?id=<?php echo $fetch['id']?>" class="btn btn-light-primary">Edit Details</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </section>
                <?php
                    include 'includes/footer.php';
                ?>
                <!-- main-content -->
            </div>
        <!-- main -->
        </div>
    <!--app-->
    </div>
    <?php include 'includes/scripts.php' ?>
</body>

</html>
