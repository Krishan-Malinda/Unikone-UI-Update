<x-page-template>
    <div class="row">
        <h5 class="mb-3">Create Sale Order</h5>
        <form class="col-12">
            <div class="row">
                <div class="col-md-4">
                    <label for="salesEmpID" class="form-label">Sales Employee ID</label>
                    <select id="salesEmpID" class="form-select mb-3">
                        <option value="" selected disabled>Select Item Code</option>
                        <option value="Employee ID 1">Employee ID 1</option>
                        <option value="Employee ID 2">Employee ID 2</option>
                        <option value="Employee ID 3">Employee ID 3</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="contPerson" class="form-label">Contact Person</label>
                    <input id="contPerson" class="form-control mb-3" type="text" readonly
                        placeholder="Contact Person">
                </div>
                <div class="col-md-4">
                    <label for="mobNumber" class="form-label">Mobile Number</label>
                    <input id="mobNumber" class="form-control mb-3" type="text" readonly placeholder="Mobile Number">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="address" class="form-label">Address</label>
                    <div class="input-group">
                        <textarea id="address" name="address" class="form-control textArea mb-3" rows="3" cols="50"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="saleDate" class="form-label">Sale Date</label>
                    <input id="saleDate" class="form-control mb-3" type="date">
                </div>
            </div>
        </form>
    </div>

    <hr>

    <div class="row">
        <h5 class="mb-3">Sale Order Items</h5>
        <form class="col-12"">
            <div class="row">
                <div class="col-md-3">
                    <label for="itemCode" class="form-label">Item Code</label>
                    <select id="itemCode" class="form-select mb-3">
                        <option value="" selected disabled>Select Item Code</option>
                        <option value="Item Code 1">Item Code 1</option>
                        <option value="Item Code 2">Item Code 2</option>
                        <option value="Item Code 3">Item Code 3</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="itemName" class="form-label">Item Name</label>
                    <select id="itemName" class="form-select mb-3">
                        <option value="" selected disabled>Select Item Name</option>
                        <option value="Item Name 1">Item Name 1</option>
                        <option value="Item Name 2">Item Name 2</option>
                        <option value="Item Name 3">Item Name 3</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Price</label>
                    <input id="price" class="form-control mb-3" type="text" placeholder="Price">
                </div>
                <div class="col-md-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input id="quantity" class="form-control mb-3" type="text" placeholder="Quantity">
                </div>
            </div>

            <div class="row">
                <div class="col mb-3 d-flex gap-2 justify-content-start">
                    <button id="addMore" name="Add more" class="btn btn-secondary">Add more</button>
                    <button id="submit" name="Submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>

        <div class="col-12 mt-3">
            <div class="table-responsive">
                <table id="showTable" class="table table-hover table-bordered table-striped align-middle">
                    <thead>
                        <tr class="bg-secondary text-white">
                            <th scope="col">Item ID</th>
                            <th scope="col">Item Code</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col">Item ID</td>
                            <td scope="col">Item Code</td>
                            <td scope="col">Item Name</td>
                            <td scope="col">Unit Price</td>
                            <td scope="col">Quantity</td>
                            <td scope="col">Amount</td>
                            <td>
                                <input id="removeBtn" class="btnTable btn btn-danger" type="submit" value="Remove">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end mr-5">
                <h4 style="color: rgb(212, 0, 0);">Total Amount: &emsp;</h4>
            </div>
        </div>
    </div>
</x-page-template>
