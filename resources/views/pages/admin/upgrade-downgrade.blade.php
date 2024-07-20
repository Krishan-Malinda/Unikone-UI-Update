<x-page-template>
    <div class="row">
        <h5 class="mb-3">Upgrade / Downgrade</h5>
        <div class="col-md-6 m-auto d-flex flex-column justify-content-center align-items-center">
            <form class="input-group mb-3 d-flex align-items-center">
                <span class="input-group-text fa fa-search d-flex align-items-center" style="padding-block: 10px"></span>
                <input type="search" id="searchBox" class="form-control" placeholder="Search...">
                <button id="viewUpDown" class="btn btn-success" style="border-radius: 5px;">View Up and Down</button>
            </form>
            <button id="uploadBtn" class="btn text-white mb-3 text-nowrap"
                style="border-radius: 5px; background-color:#007BFF">Download Excel File</button>
        </div>
    </div>
    <hr>


    <div class="row justify-content-center p-3">
        <h4>Upward Results</h4>
        <div class="table-responsive">
            <table id="showTable1" class="table table-hover table-bordered table-striped align-middle">
                <thead>
                    <tr class="bg-secondary text-white">
                        <th scope="col">Employee ID</th>
                        <th scope="col">Reference ID</th>
                        <th scope="col">Level</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>USD10300</td>
                        <td>USD10300</td>
                        <td>Level 1</td>
                    </tr>
                    <tr>
                        <td>USD10300</td>
                        <td>USD10300</td>
                        <td>Level 1</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row justify-content-center p-3">
        <h4>Downgrade Results</h4>
        <div class="table-responsive">
            <table id="showTable2" class="table table-hover table-bordered table-striped align-middle">
                <thead>
                    <tr class="bg-secondary text-white">
                        <th scope="col">Employee ID</th>
                        <th scope="col">Reference ID</th>
                        <th scope="col">Level</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>USD10300</td>
                        <td>USD10300</td>
                        <td>Level 1</td>
                    </tr>
                    <tr>
                        <td>USD10300</td>
                        <td>USD10300</td>
                        <td>Level 1</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-page-template>
