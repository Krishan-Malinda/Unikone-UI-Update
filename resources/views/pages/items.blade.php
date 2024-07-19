<x-page-template>
    <div class="row">
        <h5 class="mb-3">Items</h5>
        <form class="col">
            <div class="row">
                <div class="col-md-2">
                    <label for="itemCode" class="form-label">Item Code</label>
                    <input id="itemCode" class="form-control mb-3" type="text" placeholder="Item Code">
                </div>
                <div class="col-md-2">
                    <label for="commiName" class="form-label">Item Name</label>
                    <input id="commiName" class="form-control mb-3" type="text" placeholder="Item Name">
                </div>
                <div class="col-md-2">
                    <label for="price" class="form-label">Price</label>
                    <input id="price" class="form-control mb-3" type="text" placeholder="Price Amount">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <label for="level1" class="form-label">LV 01</label>
                    <input id="level1" class="form-control mb-3" type="text" placeholder="Value">
                </div>
                <div class="col-sm-2">
                    <label for="level2" class="form-label">LV 02</label>
                    <input id="level2" class="form-control mb-3" type="text" placeholder="Value">
                </div>
                <div class="col-sm-2">
                    <label for="level3" class="form-label">LV 03</label>
                    <input id="level3" class="form-control mb-3" type="text" placeholder="Value">
                </div>
                <div class="col-sm-2">
                    <label for="level4" class="form-label">LV 04</label>
                    <input id="level4" class="form-control mb-3" type="text" placeholder="Value">
                </div>
                <div class="col-sm-2">
                    <label for="level5" class="form-label">LV 05</label>
                    <input id="level5" class="form-control mb-3" type="text" placeholder="Value">
                </div>
                <div class="col-sm-2">
                    <label for="level6" class="form-label">LV 06</label>
                    <input id="level6" class="form-control mb-3" type="text" placeholder="Value">
                </div>
            </div>

            <div class="row">
                <div class="col d-flex justify-content-start">
                    <input class="btnInit btn btn-success mb-3" type="submit" id="createBtn" type="Submit"
                        value="Create">
                </div>
            </div>
        </form>

        <hr>

        <div class="row">
            <div class="col">
                <div class="row px-4 mt-3">
                    <div class="input-group mb-3 d-flex align-items-center"> <span
                            class="input-group-text fa fa-search h-100 d-flex align-items-center"
                            id="basic-addon1"></span>
                        <input type="search" id="searchBox" class="form-control" placeholder="Search...">
                        <input id="searchBtn" class="btn btn-success" style="border-radius: 5px;" type="submit"
                            value="Search">
                    </div>
                </div>

                <div class="row">
                    <div class="col my-3 d-flex gap-2 justify-content-start">
                        <button id="loadActive" class="btn btn-secondary">Load Active</button>
                        <button id="loadInactive" class="btn btn-secondary">Load Active</button>
                    </div>
                </div>

                <div class="row mt-3 justify-content-center">
                    <div class="table-responsive">
                        <table id="showTable" class="table table-hover table-bordered table-striped text-center">
                            <thead>
                                <tr class="bg-secondary text-white">
                                    <th scope="col">Code</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">LV 1</th>
                                    <th scope="col">LV 2</th>
                                    <th scope="col">LV 3</th>
                                    <th scope="col">LV 4</th>
                                    <th scope="col">LV 5</th>
                                    <th scope="col">LV 6</th>
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
            </div>
        </div>
    </div>
</x-page-template>
