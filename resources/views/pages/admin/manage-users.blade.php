<x-page-template>
    <div class="row">
        <h5 class="mb-1">Manage Users</h5>
        <div class="col-12">
            <div class="row mt-2">

                <div class="col-md-6">
                    <label for="username" class="form-label">Username</label>
                    <input id=""username class="form-control mb-3" type="text" placeholder="Username"
                        aria-label="default input example">
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" class="form-control mb-3" type="password" placeholder="Password"
                        aria-label="default input example">
                </div>
            </div>
            <div class="row">
                <div class="col d-flex gap-4 flex-wrap">
                    <div class="form-check">
                        <label class="form-check-label" for="MU_EM"><strong>EM</strong></label>
                        <input class="form-check-input" type="checkbox" value="" id="MU_EM">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="MU_CM"><strong>CM</strong></label>
                        <input class="form-check-input" type="checkbox" value="" id="MU_CM">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="MU_SM"><strong>SM</strong></label>
                        <input class="form-check-input" type="checkbox" value="" id="MU_SM">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="MU_SS"><strong>SS</strong></label>
                        <input class="form-check-input" type="checkbox" value="" id="MU_SS">
                    </div>
                </div>
            </div>
            <div class="row pb-2 pt-2">
                <div class="col-3 d-flex justify-content-start">
                    <input class="btnInit btn btn-success" type="submit" id="createBtn" type="Submit" value="Create">
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <h5 class="mb-3">Area Acess</h5>
        <div class="col d-flex gap-4 flex-wrap">
            <div class="form-check">
                <label class="form-check-label" for="AA_EM"><strong>EM</strong></label>
                <input class="form-check-input" type="checkbox" value="" id="AA_EM">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="AA_CM"><strong>CM</strong></label>
                <input class="form-check-input" type="checkbox" value="" id="AA_CM">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="AA_SM"><strong>SM</strong></label>
                <input class="form-check-input" type="checkbox" value="" id="AA_SM">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="AA_SS"><strong>SS</strong></label>
                <input class="form-check-input" type="checkbox" value="" id="AA_SS">
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col">
            <div class="row px-4 mt-3">
                <div class="input-group mb-3 d-flex align-items-center"> <span
                        class="input-group-text fa fa-search h-100 d-flex align-items-center" id="basic-addon1"></span>
                    <input type="search" id="searchBox" class="form-control" placeholder="Search...">
                    <input id="searchBtn" class="btn btn-success" style="border-radius: 5px;" type="submit"
                        value="Search">
                </div>
            </div>

            <div class="row">
                <div class="col mt-3 d-flex gap-2 justify-content-start">
                    <input id="activeUsers" class="btnInit btn btn-secondary p-1" type="submit"
                        value="Active Users">
                    <input id="inactiveUsers" class="btnInit btn btn-secondary p-1" type="submit"
                        value="Inactive Users">
                </div>
            </div>

            <div class="row mt-3 justify-content-center">
                <div class="table-responsive">
                    <table id="showTable" class="table table-hover table-bordered table-striped text-center align-middle">
                        <thead>
                            <tr class="bg-secondary text-white">
                                <th scope="col">Username</th>
                                <th scope="col">Access Area</th>
                                <th scope="col">Password</th>
                                <th scope="col">Action</th>
                                <th scope="col">Area Change</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Krishan Malinda</td>
                                <td>EM,CM,SM</td>
                                <td>
                                    <button class="btn btn-warning text-nowrap">Change Password</button>
                                </td>
                                <td>
                                    <button class="btn btn-danger text-nowrap">Inactive User</button>
                                </td>
                                <td>
                                    <button class="btn btn-primary text-nowrap">Change</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-page-template>
