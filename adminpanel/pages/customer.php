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
                            <h3>Reports</h3>
                            <p class="text-subtitle text-muted">For users to browse view reports</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <div class="breadcrumb-item">
                                        <p id="datetime" class="default-datetime">0:00</p>
                                    </div>
                                    <li class="breadcrumb-item active" aria-current="page">Reports</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h3>Customers Information</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Customer Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Birthdate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <!-- populate table with db data -->
                                            <?php
                                            require 'be/db/db_pdo.php';
                                                $sql = $conn->prepare("SELECT * FROM tbl_account_customer");
                                                $sql->execute();

                                                while($fetch = $sql->fetch()){
                                            ?>
                                                <tr>
                                                    <td><?php echo $fetch['cst_name']?></td>
                                                    <td><?php echo $fetch['cst_email']?></td>
                                                    <td><?php echo $fetch['cst_gender']?></td>
                                                    <td><?php echo $fetch['cst_birthdate']?></td>
                                                </tr>
                                            <?php
                                                };
                                            ?>
                                        </tbody>
                                </table>
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
