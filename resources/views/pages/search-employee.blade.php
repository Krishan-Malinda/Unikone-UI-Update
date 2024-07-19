<x-page-template>

    <div class="row">
        <h5 class="mb-1">Search Employee</h5>
        <div class="col-12">
            <form class="input-group p-4 justify-content-center">
                <div class="d-flex align-items-center justify-content-center flex-wrap gap-4 mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="filter" id="firstName">
                        <label class="form-check-label" for="firstName">First Name</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="filter" id="employeeNo">
                        <label class="form-check-label" for="employeeNo">Employee No</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="filter" id="phoneNo">
                        <label class="form-check-label" for="phoneNo">Phone No</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="filter" id="nicNo">
                        <label class="form-check-label" for="nicNo">NIC</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="filter" id="whatsappNo">
                        <label class="form-check-label" for="whatsappNo">Whatsapp No</label>
                    </div>
                </div>
                <div class="input-group mb-3 d-flex align-items-center"> <span
                        class="input-group-text fa fa-search h-100 d-flex align-items-center" id="basic-addon1"></span>
                    <input type="search" id="searchBox" class="form-control" placeholder="Search...">
                    <button id="searchBtn" class="btn btn-success" style="border-radius: 5px;">Search</button>
                </div>
                <span class="d-flex justify-content-center flex-wrap gap-1">Please Use <strong>Name,</strong><strong>
                        Employee No,</strong><strong>Phone No,</strong><strong>NIC</strong></span>
            </form>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col p-2">
            <button class="btn btn-secondary mb-3" id="clearBtn" name="clear">Inactive</button>
            <div class="row justify-content-center tableRow">
                <div class="table-responsive">
                    <table id="showTable" class="table table-hover table-bordered table-striped m-0">
                        <thead>
                            <tr class="bg-secondary text-white">
                                <th scope="col">Name</th>
                                <th scope="col">Emp No</th>
                                <th scope="col">NIC</th>
                                <th scope="col">City</th>
                                <th scope="col">Province</th>
                                <th scope="col">Bank</th>
                                <th scope="col">Mobile 1</th>
                                <th scope="col">Details</th>
                                <th scope="col">Password</th>
                                <th scope="col">Inactive</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dilrukshan Jayawardane</td>
                                <td>USD10300</td>
                                <td>199933710480</td>
                                <td>Rathnapura</td>
                                <td>Rathnapura</td>
                                <td>Commertial</td>
                                <td>0776253125</td>
                                <td><input class="btnTable btn btn-warning" type="submit" id="editBtn" name="editBtn"
                                        value="Edit"></td>
                                <td><input class="btnTable btn btn-secondary" type="submit" id="resetBtn"
                                        name="resetBtn" value="Reset"></td>
                                <td><input class="btnTable btn btn-danger" type="submit" id="deleteBtn"
                                        name="deleteBtn" value="Delete"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-page-template>
