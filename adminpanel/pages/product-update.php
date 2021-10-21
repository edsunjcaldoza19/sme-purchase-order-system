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
                                <h3>Update Product Information</h3>
                                <p class="text-subtitle text-muted">For users to update product information</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <div class="breadcrumb-item">
                                            <p id="datetime" class="default-datetime">0:00</p>
                                        </div>
                                        <li class="breadcrumb-item active" aria-current="page">Product</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <section class="section">
                        <?php
                            $product_id = $_GET['id'];
                            require 'be/db/db_pdo.php';
                            $sql = $conn->prepare("SELECT * FROM tbl_product where `id` = '$product_id'");
                            $sql->execute();
                            while($fetch = $sql->fetch()){
                        ?>
                            <div class="card">
                                <div class="card-body">
                                <form action="be/product/product-update.php" method="POST" enctype="multipart/form-data">

                                        <input type="hidden" name="id" value="<?php echo $fetch['id'] ?>">
                                            <div class="form-group">
                                                <label>Product Name</label>
                                                <input type="text" value="<?php echo $fetch['product_name']?>" class="form-control" name="prodName" placeholder="Enter name">
                                            </div>
                                            <div class="form-group">
                                                <label>Product Description</label>
                                                <input type="text" value="<?php echo $fetch['product_description']?>"
                                                class="form-control" name="prodDescription" placeholder="Enter description" >
                                                </input>
                                            </div>
                                            <div class="form-group">
                                                                <label>Supplier</label>
                                                                <select class="choices form-select" name="prodSupplier">
                                                                <?php
                                                                    require 'be/db/db_pdo.php';
                                                                    $role = $conn->prepare("SELECT * FROM `tbl_supplier`");
                                                                    $role->execute();
                                                                    while($fetchrole = $role->fetch()){
                                                                ?>
                                                                    <option name="prodSupplier" value="<?php echo $fetchrole['id'] ?>">
                                                                    <?php echo $fetchrole['supplier_name'] ?></option>
                                                                <?php
                                                                    }
                                                                ?>
                                                                </select>
                                                            </div>
                                            <div class="form-group">
                                                <label>Product Price</label>
                                                <input type="text" value="<?php echo $fetch['product_price']?>" class="form-control" name="prodPrice" placeholder="Enter price">
                                            </div>
                                            <div class="form-group">
                                                <label>Stock Available</label>
                                                <input type="number" value="<?php echo $fetch['product_stock']?>" class="form-control" name="prodStock" placeholder="Enter stock">
                                            </div>
                                            <div class="form-group">
                                                <label>Manufacturing Date</label>
                                                <input type="date" value="<?php echo $fetch['product_manufacture_date']?>" class="form-control" name="prodManuDate">
                                            </div>
                                            <div class="form-group">
                                                <label>Expiration Date (optional)</label>
                                                <input type="date" value="<?php echo $fetch['product_expiration_date']?>" class="form-control" name="prodExpDate">
                                            </div>
                                            <div class="form-actions d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary ml-1"
                                                name="updateProduct">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Update Product</span>
                                            </button>
                                            <a href="product-info.php" class="btn btn-light-secondary"
                                                data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Cancek</span>
                                            </a>

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
