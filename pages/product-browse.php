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
                            <h3>BrowseProducts</h3>
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
                        $sql = $conn->prepare("SELECT *, tbl_product.id FROM
                        tbl_product LEFT JOIN tbl_supplier ON
                        tbl_supplier.id=tbl_product.product_supplier_id");
                        $sql->execute();
                        while($fetch = $sql->fetch()){
                    ?>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="card border-primary mb-3">
                            <div class="card-content">
                                <?php
                                    $image = (!empty($fetch['product_image'])) ? '../adminpanel/pages/images/product/'.$fetch['product_image'] : '../adminpanel/pages/images/product/default-8-1-2021.jpg';
                                ?>
                                <img src="<?php echo $image; ?>" alt="Card image cap"  width="100%" height="350px">
                                <div class="card-body">
                                    <h2 style="white-space: nowrap; width: 100%; overflow: hidden; text-overflow: ellipsis;"><?php echo $fetch['product_name'] ?></h2>
                                    <p class="card-text">
                                        <?php echo $fetch['product_description'] ?>
                                    </p>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-primary text-white">Price: <?php echo $fetch['product_price']; ?></li>
                                <li class="list-group-item">Stock: <?php echo $fetch['product_stock']; ?></li>
                                <li class="list-group-item">Supplier: <?php echo $fetch['supplier_name']; ?></li>
                            </ul>
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
