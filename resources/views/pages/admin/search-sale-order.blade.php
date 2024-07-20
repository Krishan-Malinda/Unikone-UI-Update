<x-page-template>
    <div class="row">
        <h5 class="mb-3">Search Sale Order</h5>
        <div class="col-12">
            <div class="row px-4">
                <div class="input-group mb-3 d-flex align-items-center"> <span
                        class="input-group-text fa fa-search h-100 d-flex align-items-center" id="basic-addon1"></span>
                    <input type="search" id="searchBox" class="form-control" placeholder="Search...">
                    <button id="searchBtn" class="btn btn-success" style="border-radius: 5px;">Search</button>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="d-flex flex-column justify-content-center">
        <label for="formFile" class="form-label px-4">Upload file here...</label>
        <div class="input-group mb-3 px-4 d-flex align-items-center">
            <input class="form-control" type="file" id="formFile">
            <button id="uploadBtn" class="btn text-white"
                style="border-radius: 5px; background-color:#007BFF">Upload</button>
        </div>
        <button id="uploadBtn" class="btn text-white mb-3 align-self-center text-nowrap"
            style="border-radius: 5px; background-color:#007BFF">Download Excel File</button>
    </div>
    <hr>

    <div class="row mt-4 justify-content-center">
        <div class="table-responsive">
            <table id="showTable" class="table table-hover table-bordered table-striped text-center align-middle">
                <thead>
                    <tr class="bg-secondary text-white">
                        <th scope="col">SO No</th>
                        <th scope="col">Person Name</th>
                        <th scope="col">Emp No</th>
                        <th scope="col">Item Code</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Sale Date</th>
                        <th scope="col">Delivery Date</th>
                        <th scope="col">Return Date</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12345</td>
                        <td>Krishan Malinda</td>
                        <td>xxxx</td>
                        <td>xxxx</td>
                        <td>xxxx</td>
                        <td>xxxx</td>
                        <td>xxxx</td>
                        <td>xxxx</td>
                        <td>xxxx</td>
                        <td>xxxx</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-page-template>
