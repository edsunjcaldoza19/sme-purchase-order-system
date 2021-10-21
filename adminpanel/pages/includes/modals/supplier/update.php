<!-- Update Modal -->
<div class="modal fade text-left" id="updateModal<?php echo $fetch['id']?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel110" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
        role="document">
            <div class="modal-content">
            <form action="be/supplier/supplier-update.php" method="POST" enctype="multipart/form-data">
                <div class="modal-header bg-primary">
                        <h5 class="modal-title white" id="myModalLabel110">Update Supplier
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $fetch['id']?>">
                        <div class="form-group">
                            <label>Supplier Name</label>
                            <input type="text" value="<?php echo $fetch['supplier_name']?>" class="form-control" name="supplierName" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label>Supplier Address</label>
                            <input type="text" value="<?php echo $fetch['supplier_address']?>" class="form-control" name="supplierAddress" placeholder="Enter address">
                        </div>
                        <div class="form-group">
                            <label>Manufacturer</label>
                            <input type="text" value="<?php echo $fetch['supplier_manufacturer']?>" class="form-control" name="supplierManufacturer" placeholder="Enter manufacturer">
                        </div>
                        <div class="form-group">
                            <label>Supplier Description</label>
                            <input type="text" value="<?php echo $fetch['supplier_description']?>" class="form-control" name="supplierDescription" placeholder="Enter description">
                        </div>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary"
                            data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>

                        <button type="submit" class="btn btn-primary ml-1"
                            name="updateSupplier">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Accept</span>
                        </button>
                </div>
            </form>
        </div>
    </div>
</div>