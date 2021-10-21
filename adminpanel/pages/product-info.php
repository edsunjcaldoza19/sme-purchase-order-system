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
                                <h3>Products</h3>
                                <p class="text-subtitle text-muted">For users to add product information</p>
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
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h3>Product Information</h3>
                            </div>
                            <div class="card-body">
                            <div class="buttons">
                                <a href="product-add.php" class="btn btn-success">Add Product</a>
                            </div>
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Product Description</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Supplier</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- populate table with db data -->
                                        <?php
                                                require 'be/db/db_pdo.php';
                                                $sql = $conn->prepare("SELECT *, tbl_product.id FROM
                                                tbl_product LEFT JOIN tbl_supplier ON
                                                tbl_supplier.id=tbl_product.product_supplier_id");
                                                $sql->execute();
                                                while($fetch = $sql->fetch()){
                                        ?>
                                            <tr>
                                                <td><?php echo $fetch['product_name']?></td>
                                                <td><?php echo $fetch['product_description']?></td>
                                                <td><?php echo $fetch['product_price']?></td>
                                                <td><?php echo $fetch['product_stock']?></td>
                                                <td><?php echo $fetch['supplier_name']?></td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm" href="product-update.php?id=<?php echo $fetch['id'] ?>">Update</a>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger btn-sm card-dashboard-button" data-bs-toggle="modal" data-bs-target="#delete<?php echo $fetch['id']?>">Delete</button>
                                                </td>
                                            </tr>
                                            <?php
                                                include 'includes/modals/product/delete.php';
                                                }
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
            </div>
        </div>
    </div>
    <?php include 'includes/scripts.php' ?>
</body>

</html>
