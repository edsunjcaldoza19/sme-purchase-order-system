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
                                <h3>Add Product Information</h3>
                                <p class="text-subtitle text-muted">For users to add product information</p>
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
                            <div class="card">
                                <div class="card-body">
                                    <form action="be/product/product-add.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div  class="col-lg-6 col-md-6 col-sm-12">
                                        <h4 class="card-title">
                                            Product Image
                                        </h4>
                                        <hr>
                                            <div class="form-group">
                                                <p class="card-text">
                                                    Please upload the picture of the product.
                                                </p>
                                                <!-- Basic file uploader -->
                                                <input type="file" name="image" class="form-control" onchange="previewImage(event)">
                                            </div>

                                            <div class="form-group">
                                                <div class="alert alert-light-primary color-primary">
                                                    <i class="bi bi-exclamation-circle"></i>
                                                    Image uploaded will be previewed here.
                                                    Please select an image with same width and
                                                    height ratio.
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <img id="preview"  width="400px" height="350px" style="border: 2px solid;"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                        <h4 class="card-title">
                                            Product Information
                                        </h4>
                                        <hr>
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input type="text" class="form-control" name="prodName" placeholder="Enter name">
                                        </div>
                                        <div class="form-group">
                                            <label>Product Description</label>
                                            <textarea type="text" class="form-control" name="prodDescription" placeholder="Enter description" rows="5"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Supplier</label>
                                            <select class="choices form-select" name="prodSupplier">
                                            <?php
                                                require 'be/db/db_pdo.php';
                                                $sql = $conn->prepare("SELECT * FROM `tbl_supplier`");
                                                $sql->execute();
                                                while($fetch = $sql->fetch()){
                                            ?>
                                                <option name="prodSupplier" value="<?php echo $fetch['id'] ?>"><?php echo $fetch['supplier_name'] ?></option>
                                            <?php
                                                }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Price</label>
                                            <input type="number" class="form-control" name="prodPrice" placeholder="Enter price">
                                        </div>
                                        <div class="form-group">
                                            <label>Stock Available</label>
                                            <input type="number" class="form-control" name="prodStock" placeholder="Enter stock">
                                        </div>
                                        <div class="form-group">
                                            <label>Manufacturing Date</label>
                                            <input type="date" class="form-control" name="prodManuDate">
                                        </div>
                                        <div class="form-group">
                                            <label>Expiration Date (optional)</label>
                                            <input type="date" class="form-control" name="prodExpDate">
                                        </div>
                                        </div>
                                        <div class="form-actions d-flex justify-content-end">
                                            <button type="submit" name="addProduct" class="btn btn-primary me-1">Submit</button>
                                            <a href="product-info.php" class="btn btn-light-primary">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
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
    <script>
        var previewImage = function(event){
            var output = document.getElementById("preview");
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function(){
                URL.revokeObjectURL(output.src)
            }
            Toastify({
                text: "Image Successfully Uploaded.Please Check the Preview Image",
                duration: 5000,
                close:true,
                gravity:"top",
                position: "center",
                backgroundColor: "linear-gradient(315deg, #4c4177 0%, #2a5470 74%)",
            }).showToast();
        }
    </script>
</body>

</html>
