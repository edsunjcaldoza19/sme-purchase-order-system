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
                            <h3>Suppliers</h3>
                            <p class="text-subtitle text-muted">For users to add supplier information</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <div class="breadcrumb-item">
                                            <p id="datetime" class="default-datetime">0:00</p>
                                        </div>
                                    <li class="breadcrumb-item active" aria-current="page">Suppliers</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h3>Supplier Information</h3>
                        </div>
                        <div class="card-body">
                        <div class="buttons">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal" >Add Supplier</button>
                        </div>
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Supplier Name</th>
                                        <th>Supplier Address</th>
                                        <th>Supplier Manufacturer</th>
                                        <th>Supplier Description</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                    <!-- populate table with db data -->
                                        <?php
                                        require 'be/db/db_pdo.php';
                                            $sql = $conn->prepare("SELECT * FROM tbl_supplier");
                                            $sql->execute();

                                            while($fetch = $sql->fetch()){
                                        ?>
                                            <tr>
                                                <td><?php echo $fetch['supplier_name']?></td>
                                                <td><?php echo $fetch['supplier_address']?></td>
                                                <td><?php echo $fetch['supplier_manufacturer']?></td>
                                                <td><?php echo $fetch['supplier_description']?></td>
                                                <td>
                                                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#updateModal<?php echo $fetch['id']?>">Update</button>
                                                </td>

                                                <td>
                                                    <button class="btn btn-danger btn-sm card-dashboard-button" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $fetch['id']?>">Delete</button>
                                                </td>
                                            </tr>
                                        <?php
                                            include 'includes/modals/supplier/update.php';
                                            include 'includes/modals/supplier/delete.php';
                                            };
                                        ?>
                                    </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
                <?php
                    include 'includes/modals/supplier/add.php';
                    include 'includes/footer.php';
                ?>
        </div>
        </div>
    </div>
    <?php include 'includes/scripts.php' ?>
</body>

</html>
