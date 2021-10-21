<!-- Add Modal -->
<div class="modal fade text-left" id="addModal" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel110" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
        role="document">
            <div class="modal-content">
            <form action="be/product/product-add.php" method="POST" enctype="multipart/form-data">
                <div class="modal-header bg-success">
                        <h5 class="modal-title white" id="myModalLabel110">Add Product
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" name="prodName" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <input type="text" class="form-control" name="prodDescription" placeholder="Enter description">
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
                <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary"
                            data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>

                        <button type="submit" class="btn btn-success ml-1"
                            name="addProduct">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Add Product</span>
                        </button>
                </div>
            </form>
        </div>
    </div>
</div>