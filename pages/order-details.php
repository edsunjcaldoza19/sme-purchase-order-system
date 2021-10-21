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
                            <h3>Order Details</h3>
                            <p class="text-subtitle text-muted">For users to view details of specific order</p>
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
                <?php
                    $orderID = $_GET['id'];
                    require 'be/db/db_pdo.php';
                        $sql = $conn->prepare("SELECT * FROM tbl_order where `order_transaction_id` = '$orderID'");
                        $sql->execute();
                        while($fetch = $sql->fetch()){
                ?>
                <div class="box-body">
                  <div class="col-md-12" style="overflow-x:auto;">
                  <h2>SME Purchase Order Receipt</h2>
                    <div class="card">
                        <div class="card-header">
                            <h4>ORDER DETAILS</h4>
                            <hr>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Cashier: </label>
                                        <input type="text" name="orderCashier" class="form-control" value="<?php echo $fetch['order_cashier'];?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Order ID</label>
                                        <input type="text" name="orderID" value="<?php echo $fetch['order_transaction_id']; ?>" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                                <div class="form-group">
                                        <label class="col-form-label">Date: </label>
                                        <input type="text" class="form-control" value="<?php echo $fetch['order_date']; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Time: </label>
                                        <input type="text" class="form-control" value="<?php echo $fetch['order_time']; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                    <div class="card-header">
                            <h4>PRODUCT DETAILS</h4>
                            <hr>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $details = $conn->prepare("SELECT *, tbl_order_details.id FROM
                                        tbl_order_details LEFT JOIN tbl_product ON
                                        tbl_product.id=tbl_order_details.order_product_id WHERE `order_id` = '$orderID'");
                                        $details->execute();
                                        while($fetchDetails = $details->fetch()){
                                    ?>
                                    <tr>
                                        <td><?php echo $fetchDetails['product_name'];?></td>
                                        <td><?php echo $fetchDetails['product_price'];?></td>
                                        <td><?php echo $fetchDetails['order_quantity'];?></td>
                                        <td><?php echo $fetchDetails['order_subtotal'];?></td>
                                        </tr>
                                    <?php
                                            }
                                    ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="box-body">
                    <div class="card">
                        <div class="card-header">
                            <h4>ORDER SUMMARY</h4>
                            <hr>
                        </div>
                        <div class="card-body">
                        <div class="col-md-offset-1 col-md-6">
                        <div class="form-group">
                            <label>Total</label>
                            <div class="input-group">
                            <input type="text" value="<?php echo $fetch['order_total']; ?>" class="form-control pull-right" name="total" id="total" required readonly>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label>Money Received</label>
                            <div class="input-group">
                            <input type="text" value="<?php echo $fetch['order_money_received']; ?>" class="form-control pull-right" name="paid" id="paid" required>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label>Change</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                            </div>
                            <input type="text" value="<?php echo $fetch['order_change']; ?>" class="form-control pull-right" name="due" id="due" required readonly>
                            </div>
                            <!-- /.input group -->
                        </div>
                        </div>
                        </div>
                    </div>
                </div>

                <?php
                }
                    include 'includes/footer.php';
                ?>
            </div>
        </div>
    </div>
    <?php include 'includes/scripts.php' ?>
</body>

</html>
