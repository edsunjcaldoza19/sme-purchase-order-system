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
                                <h3>Employee</h3>
                                <p class="text-subtitle text-muted">For users to add employee role information</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <div class="breadcrumb-item">
                                            <p id="datetime" class="default-datetime">0:00</p>
                                        </div>
                                        <li class="breadcrumb-item active" aria-current="page">Employee</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <div class="card">
                            <div class="card-body">
                            <div class="buttons">
                                <a href="employee-add.php" class="btn btn-success">Add Employee</a>
                            </div>
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Role</th>
                                            <th>Address</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Telephone</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <!-- populate table with db data -->
                                            <?php
                                            require 'be/db/db_pdo.php';
                                                $sql = $conn->prepare("SELECT *, tbl_employee.id FROM
                                                tbl_employee LEFT JOIN tbl_employee_role ON
                                                tbl_employee_role.id=tbl_employee.employee_role_id");
                                                $sql->execute();

                                                while($fetch = $sql->fetch()){
                                            ?>
                                                <tr>
                                                    <td><?php echo $fetch['employee_name']?></td>
                                                    <td><?php echo $fetch['role_name']?></td>
                                                    <td><?php echo $fetch['employee_address']?></td>
                                                    <td><?php echo $fetch['employee_email']?></td>
                                                    <td><?php echo $fetch['employee_contact']?></td>
                                                    <td><?php echo $fetch['employee_telephone']?></td>
                                                    <td>
                                                        <a href="employee-update.php?id=<?php echo $fetch['id'];?>" class="btn btn-primary btn-sm">Update</a>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger btn-sm card-dashboard-button" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $fetch['id']?>">Delete</button>
                                                    </td>
                                                </tr>
                                            <?php
                                                include 'includes/modals/employee/delete.php';
                                                };
                                            ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
                <?php
                    include 'includes/footer.php';
                ?>
            <!-- main-content -->
            </div>
        <!-- layout-navbar -->
        </div>
        <!-- app -->
    </div>
    <?php include 'includes/scripts.php' ?>
</body>

</html>
