    <!--Add Modal -->
    <div class="modal fade text-left" id="addModal" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel110" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
        role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title white" id="myModalLabel110">Add Supplier
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" name="supplierName" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label>Product Supplier</label>
                            <input type="select" class="form-control" name="supplierAddress" placeholder="Enter address" required>
                        </div>
                        <div class="form-group">
                            <label>No. Of Stock</label>
                            <input type="number" class="form-control" name="supplierManufacturer" placeholder="Enter stock" required>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control" name="supplierDescription" placeholder="Enter price" required>
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <input type="text" class="form-control" name="supplierDescription" placeholder="Enter Description" required>
                        </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary"
                    data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>

                <button type="submit" class="btn btn-primary ml-1"
                    data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Accept</span>
                </button>
                </div>
        </div>
    </div>
</div>