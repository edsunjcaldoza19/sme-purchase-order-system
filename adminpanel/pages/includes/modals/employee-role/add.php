    <!--Add Modal -->
    <div class="modal fade text-left" id="addModal" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel110" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
        role="document">
            <div class="modal-content">
            <form action="be/employee-role/role-add.php" method="POST" enctype="multipart/form-data">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title white" id="myModalLabel110">Add Employee Role
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <label>Employee Role</label>
                            <input type="text" class="form-control" name="roleName" placeholder="Enter Role" required>
                        </div>
                        <div class="form-group">
                            <label>Role Description</label>
                            <input type="select" class="form-control" name="roleDescription" placeholder="Enter Description" required>
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="number" class="form-control" name="roleSalary" placeholder="Enter Salary" required>
                        </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary"
                    data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>

                <button type="submit" class="btn btn-primary ml-1"
                    name="addRole">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Add Role</span>
                </button>
                </div>
            </form>
        </div>
    </div>
</div>