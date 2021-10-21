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
                                <h3>Order Purchases - Under Development</h3>
                                <p class="text-subtitle text-muted">For users to browse view order purchases</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <div class="breadcrumb-item">
                                            <p id="datetime" class="default-datetime">0:00</p>
                                        </div>
                                        <li class="breadcrumb-item active" aria-current="page">Order</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="section">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Transaction ID</th>
                                            <th>Cashier</th>
                                            <th>Order Total</th>
                                            <th>Money Received</th>
                                            <th>Change</th>
                                            <th>View Details</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            require 'be/db/db_pdo.php';
                                            $customerID =$_SESSION['cst_id'];
                                            $sql = $conn->prepare("SELECT * FROM tbl_order WHERE `order_customer_id` = $customerID");
                                            $sql->execute();
                                            while($fetch = $sql->fetch()){
                                        ?>
                                        <tr>
                                            <td><?php echo $fetch['order_transaction_id']?></td>
                                            <td><?php echo $fetch['order_cashier']?></td>
                                            <td><?php echo $fetch['order_total']?></td>
                                            <td><?php echo $fetch['order_money_received']?></td>
                                            <td><?php echo $fetch['order_change']?></td>
                                            <td>
                                                <a href="order-details.php?id=<?php echo $fetch['order_transaction_id']?>" class="btn btn-success btn-sm card-dashboard-button">View</button>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger btn-sm card-dashboard-button"
                                                data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $fetch['id']?>">Delete</button>
                                            </td>
                                        </tr>
                                        <?php
                                            include 'includes/modals/order/delete.php';
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
