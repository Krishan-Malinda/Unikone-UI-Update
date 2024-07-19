<x-page-template>
    <form action="" class="row">
        <h5 class="mb-3">Complete Sale Order</h5>
        <div class="col-md-6 d-flex justify-content-center align-items-center gap-4 mb-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="filter" id="phone">
                <label class="form-check-label" for="phone">Phone No</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="filter" id="userId">
                <label class="form-check-label" for="userId">User ID</label>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="input-group d-flex align-items-center">
                <input type="search" id="searchBox" class="form-control" placeholder="Search...">
                <button id="searchBtn" class="btn btn-success" style="border-radius: 5px;">Search</button>
            </div>
        </div>
    </form>
    <hr>

    <div class="row mt-4 justify-content-center">
        <div class="table-responsive">
            <table id="showTable" class="table table-hover table-bordered table-striped text-center">
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
                        <td>Dilrukshan Jayawardane</td>
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
