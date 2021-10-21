    <!--Add Modal -->
    <div class="modal fade text-left" id="updateModal<?php echo $fetch['id']?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel110" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
        role="document">
            <div class="modal-content">
            <form action="be/employee-role/role-update.php" method="POST" enctype="multipart/form-data">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title white" id="myModalLabel110">Update Role
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $fetch['id'] ?>">
                        <div class="form-group">
                            <label>Employee Role</label>
                            <input type="text" value="<?php echo $fetch['role_name'] ?>" class="form-control" name="roleName" placeholder="Enter Role" required>
                        </div>
                        <div class="form-group">
                            <label>Role Description</label>
                            <input type="select" value="<?php echo $fetch['role_description'] ?>" class="form-control" name="roleDescription" placeholder="Enter Description" required>
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="number" value="<?php echo $fetch['role_salary'] ?>" class="form-control" name="roleSalary" placeholder="Enter Salary" required>
                        </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary"
                    data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>

                <button type="submit" class="btn btn-primary ml-1"
                    name="updateRole">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Update Role</span>
                </button>
                </div>
            </form>
        </div>
    </div>
</div>