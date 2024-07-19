<x-page-template>
        <div class="row">
            <h5 class="">Create Employee</h5>
            <div class="col-12 backTheam cRound p-4">
                <div class="row">

                    <div class="col-md-4">
                        <label for="firstName" class="form-label">First Name</label>
                        {{-- <input class="inputBox" id="firstName" type="text" placeholder="First Name"> --}}
                        <input class="form-control mb-3" type="text" placeholder="First Name"
                            aria-label="Default input example">
                    </div>
                    <div class="col-md-4">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input class="form-control mb-3" type="text" placeholder="Last Name"
                            aria-label="Default input example">
                    </div>
                    <div class="col-md-4">
                        <label for="nicNumber" class="form-label">NIC Number</label>
                        <input id="nicNumber" class="form-control mb-3" type="text" placeholder="NIC Number"
                            aria-label="Default input example">
                    </div>
                </div>

                <div class="row pb-2 pt-2">
                    <div class="col-md-4">
                        <label for="refNumber" class="form-label">Reference Number</label>
                        <select class="form-select mb-3" id="refNumber" aria-label="Default select example">
                            <option selected="">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="priMobile" class="form-label">Primary Mobile Number</label>
                        <input id="priMobile" class="form-control mb-3" type="text"
                            placeholder="+94  Primary Mobile Number" aria-label="default input example">
                    </div>
                    <div class="col-md-4">
                        <label for="secMobile" class="form-label">Secondary Mobile Number</label>
                        <input id="secMobile" class="form-control mb-3" type="text"
                            placeholder="+94  Secondary Mobile Number" aria-label="default input example">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="address" class="form-label">Address</label>
                        <div class="input-group">
                            <textarea id="address" name="address" class="form-control textArea" rows="4" cols="50"
                                style="width: calc(100% - 2rem);"></textarea>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="province" class="form-label">Province</label>
                        <select id="province" class="form-select mb-3" aria-label="Default select example">
                            <option value="" selected disabled>Select Province</option>
                            <option value="province 1">Province 1</option>
                            <option value="province 2">Province 2</option>
                            <option value="province 3">Province 3</option>
                        </select>

                        <label for="distName" class="form-label">District name</label>
                        <select id="distName" class="form-select mb-3" aria-label="Default select example">
                            <option value="" selected disabled>Select District</option>
                            <option value="District 1">District 1</option>
                            <option value="District 2">District 2</option>
                            <option value="District 3">District 3</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label for="townCity" class="form-label">Town/City</label>

                        <select id="townCity" class="form-select mb-3" aria-label="Default select example">
                            <option value="" selected disabled>Select Town/City</option>
                            <option value="Town/City 1">Town/City 1</option>
                            <option value="Town/City 2">Town/City 2</option>
                            <option value="Town/City 3">Town/City 3</option>
                        </select>

                        <label for="postCode" class="form-label">Postal Code</label>
                        <input class="form-control mb-3" type="text" placeholder="postCode" readonly
                            aria-label="default input example">

                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <h5 class="mb-1">Bank Informations</h5>
            <div class="col-12 backTheam cRound p-4">
                <div class="row pb-2 pt-2">
                    <div class="col-md-3">
                        <label for="bankName" class="form-label">Bank Name</label>
                            <select id="bankName" class="form-select mb-3" aria-label="Default select example">
                                <option value="" selected disabled>Select Bank Name</option>
                                <option value="Bank Name 1">Bank Name 1</option>
                                <option value="Bank Name 2">Bank Name 2</option>
                                <option value="Bank Name 3">Bank Name 3</option>
                            </select>
                    </div>

                    <div class="col-md-3">
                        <label for="bankCode" class="form-label">Bank Code</label>
                        <input id="bankCode" class="form-control mb-3" type="text" readonly aria-label="default input example">
                    </div>

                    <div class="col-md-3">
                        <label for="branchName" class="form-label">Branch Name</label>
                            <select id="branchName" class="form-select mb-3" aria-label="Default select example">
                                <option value="" selected disabled>Select Branch Name</option>
                                <option value="Branch Name 1">Branch Name 1</option>
                                <option value="Branch Name 2">Branch Name 2</option>
                                <option value="Branch Name 3">Branch Name 3</option>
                            </select>
                    </div>

                    <div class="col-md-3">
                        <label for="branchCode" class="form-label">Branch Code</label>
                        <input id="branchCode" class="form-control mb-3" type="text" readonly aria-label="default input example">
                    </div>
                </div>

                <div class="row pb-2 pt-2">
                    <div class="col-md-3">
                        <label for="accHolder" class="form-label">Account Holder Name</label>
                        <input id="accHolder" class="form-control mb-3" type="text" placeholder="Account Holder Name" aria-label="default input example">
                    </div>
                    <div class="col-md-3">
                        <label for="accNumber" class="form-label">Account Number</label>
                        <input id="accNumber" class="form-control mb-3" type="text" placeholder="Account Number" aria-label="default input example">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col d-flex gap-2">
                <input class="btn btn-success w-50" type="submit" id="createBtn" name="create"
                value="Create">
            <input class="btn btn-secondary w-50" type="submit" id="clearBtn" name="clear"
                value="Clear">
            </div>
        </div>

    </x-page-template>
