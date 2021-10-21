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
                                <h3>Employee Information</h3>
                                <p class="text-subtitle text-muted">For users to add employee information</p>
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
                        <section class="section">
                        <?php
                            $employee_id = $_GET['id'];
                            require 'be/db/db_pdo.php';
                            $sql = $conn->prepare("SELECT * FROM tbl_employee where `id` = '$employee_id'");
                            $sql->execute();
                            while($fetch = $sql->fetch()){
                        ?>
                            <div class="card">
                                <div class="card-body">
                                    <form action="be/employee/employee-update.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                    <div class="col-lg-6 col-md-6 xs-12">
                                        <div class="form-group">
                                            <h4 class="card-title">Personal Information</h4>
                                        </div>
                                        <input type="hidden" name="id" value="<?php echo $fetch['id']; ?>">
                                        <div class="form-group">
                                            <label>Employee Name</label>
                                            <input type="text" value="<?php echo $fetch['employee_name'];?>"
                                            class="form-control" name="employeeName" placeholder="Enter Name" required>
                                            <p><small class="text-muted">Last Name, First Name, Middle Name</small></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Supplier</label>
                                            <select class="choices form-select" name="employeeRole">
                                            <?php
                                                require 'be/db/db_pdo.php';
                                                $role = $conn->prepare("SELECT * FROM `tbl_employee_role`");
                                                $role->execute();
                                                while($fetchrole = $role->fetch()){
                                            ?>
                                                <option name="employeeRole" value="<?php echo $fetchrole['id'] ?>">
                                                <?php echo $fetchrole['role_name'] ?></option>
                                            <?php
                                                }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" value="<?php echo $fetch['employee_address'];?>"
                                            class="form-control" name="employeeAddress" placeholder="Enter Address" required>
                                            <p><small class="text-muted">House Number, Street Name, Brgy, Municipality/City, Province</small></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Age</label>
                                            <input type="number" value="<?php echo $fetch['employee_age'];?>"
                                             class="form-control" name="employeeAge" placeholder="Enter Age" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="date" value="<?php echo $fetch['employee_date_birth'];?>"
                                            class="form-control" name="employeeDateOfBirth" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Place of Birth</label>
                                            <input type="text" value="<?php echo $fetch['employee_place_birth'];?>"
                                            class="form-control" name="employeePlaceOfBirth" placeholder="Enter Place of Birth" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nationality</label>
                                            <input type="text" value="<?php echo $fetch['employee_nationality'];?>"
                                            class="form-control" name="employeeNationality" placeholder="Enter Nationality" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Religion</label>
                                            <input type="text" value="<?php echo $fetch['employee_religion'];?>"
                                             class="form-control" name="employeeReligion" placeholder="Enter Religion" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                    <h4 class="card-title">Contact Information</h4>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" value="<?php echo $fetch['employee_email'];?>"
                                             class="form-control" name="employeeEmail" placeholder="Enter Email">
                                            <p><small class="text-muted">e.g. example@gmail.com</small></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input type="number" value="<?php echo $fetch['employee_contact'];?>"
                                             class="form-control" name="employeeContactNumber" placeholder="Enter Contact Number" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone Number</label>
                                            <input type="number" value="<?php echo $fetch['employee_telephone'];?>"
                                             class="form-control" name="employeeTelephoneNumber" placeholder="Enter Telephone Number">
                                        </div>
                                    </div>
                                    <div class="form-actions d-flex justify-content-end">
                                        <button type="submit" name="updateEmployee" class="btn btn-primary me-1">Update</button>
                                        <a href="employee.php" class="btn btn-light-primary">Cancel</a>
                                    </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </section>
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
