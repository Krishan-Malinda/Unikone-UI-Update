<x-page-template>
    <div class="row">
        <h5 class="mb-4">Wallets</h5>
        <form id="formId">
            <div class="d-flex flex-column flex-sm-row align-items-center justify-content-center gap-3">
                <div>
                    <label for="startdate">Start Date</label>
                    <input id="startdate" name="startdate" class="form-control mb-3" type="date">
                </div>
                <div>
                    <label for="enddate">End Date</label>
                    <input id="enddate" name="enddate" class="form-control mb-3" type="date">
                </div>
                <div>
                    <button type="button" id="startEnd" class="btn btn-success text-nowrap">Generate Report</button>
                </div>
            </div>
        </form>
    </div>
    <hr>

    <div class="row">
        <div class="d-flex flex-column justify-content-center m-auto" style="max-width: 600px">
            <label for="formFile" class="form-label px-4">Upload file here...</label>
            <div class="input-group mb-3 px-4 d-flex align-self-center">
                <input class="form-control" type="file" id="formFile">
                <button id="uploadBtn" class="btn text-white"
                    style="border-radius: 5px; background-color:#007BFF">Upload</button>
            </div>
            <button id="uploadBtn" class="btn text-white mb-3 align-self-center text-nowrap"
                style="border-radius: 5px; background-color:#007BFF">Download Excel File</button>
        </div>
    </div>
    <hr>


    <div class="row">
        <div class="d-flex gap-1">
            <label for="rowsPerPage" class="mr-2">Records per page:</label>
            <select id="rowsPerPage" class="align-self-center mb-3" style="border-radius: 5px;">
                <option value="5">5</option>
                <option value="10" selected>10</option>
                <option value="20">20</option>
                <option value="50">50</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="table-responsive">
            <table id="showTables" class="table table-hover table-bordered table-striped mb-2">
                <thead>
                    <tr class="text-nowrap bg-secondary text-white">
                        <th scope="col">Id</th>
                        <th scope="col">Person Name</th>
                        <th scope="col">Emp No</th>
                        <th scope="col">Ref No</th>
                        <th scope="col">Acc No</th>
                        <th scope="col">Total Earning</th>
                        <th scope="col">Total Payment</th>
                        <th scope="col">Direct Commission</th>
                        <th scope="col">Indirect Commission</th>
                        <th scope="col">Last Payment Date</th>
                        <th scope="col">Due Commission</th>
                        <th scope="col">Payment Due</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="walletTable">
                    <tr>
                        <td>ujdxfgjk</td>
                        <td>ujdxfgjk</td>
                        <td>ujdxfgjk</td>
                        <td>ujdxfgjk</td>
                        <td>ujdxfgjk</td>
                        <td>ujdxfgjk</td>
                        <td>ujdxfgjk</td>
                        <td>ujdxfgjk</td>
                        <td>ujdxfgjk</td>
                        <td>ujdxfgjk</td>
                        <td>ujdxfgjk</td>
                        <td>ujdxfgjk</td>
                        <td>ujdxfgjk</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="pagination">
            {{-- Pagination goes here --}}
        </div>
    </div>



</x-page-template>
