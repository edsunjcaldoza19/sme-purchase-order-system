    <!--Add Modal -->
    <div class="modal fade text-left" id="addModal" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel110" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
        role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title white" id="myModalLabel110">Add Employee
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <label>Employee Name</label>
                            <input type="text" class="form-control" name="employeeName" placeholder="Enter Name" required>
                            <p><small class="text-muted">Last Name, First Name, Middle Name</small></p>
                        </div>
                        <div class="form-group">
                        <label>Employee Role</label>
                                <select class="form-select" id="basicSelect" name="employeeRole">
                                <option>IT</option>
                                <option>Blade Runner</option>
                                <option>Thor Ragnarok</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="employeeAddress" placeholder="Enter Address" required>
                            <p><small class="text-muted">House Number, Street Name, Brgy, Municipality/City, Province</small></p>
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="number" class="form-control" name="employeeAge" placeholder="Enter Age" required>
                        </div>
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" class="form-control" name="employeeDateOfBIrth" required>
                        </div>
                        <div class="form-group">
                            <label>Place of Birth</label>
                            <input type="text" class="form-control" name="employeePlaceOfBIrth" placeholder="Enter Place of Birth" required>
                        </div>
                        <div class="form-group">
                            <label>Nationality</label>
                            <input type="text" class="form-control" name="employeeNationality" placeholder="Enter Nationality" required>
                        </div>
                        <div class="form-group">
                            <label>Religion</label>
                            <input type="text" class="form-control" name="employeeReligion" placeholder="Enter Religion" required>
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="number" class="form-control" name="employeeContact Number" placeholder="Enter Contact Number" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="employeeEmail" placeholder="Enter Email" required>
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
                    <span class="d-none d-sm-block">Save</span>
                </button>
                </div>
        </div>
    </div>
</div>