<x-page-template>
    <div class="row">
        <div class="col cRound p-4 d-flex flex-column align-items-center shadow" style="border:1px solid #e9ecef;">
            <h1 class="text-nowrap">Dilrukshan Jayawardene</h1>
            <input id="userLabel" class="form-control text-center text-white bg-success" type="text"
                Value="USC10300 Active" readonly style="max-width: 200px">
        </div>
    </div>

    <div class="row d-flex justify-content-center pt-4 gap-2 text-black">
        <div class="col-md-3 pt-3 cRound mt-3 shadow" style="border:1px solid #e9ecef; max-width:300px;">
            <div class="cRound p-3" style="background-color: rgb(241, 220, 183);">
                <div class="div">
                    <h1 style="font-weight: 700;" class="text-center text-black">LKR</h1>
                </div>
                <div class="div">
                    <h3 style="font-weight: 700;" class="text-center text-black">10,000,000.00</h3>
                </div>
            </div>
            <div>
                <h5 class="text-center">Total<br>Earnings</h5>
            </div>
        </div>
        <div class="col-md-3 pt-3 cRound  mt-3 shadow" style="border:1px solid #e9ecef; max-width:300px;">
            <div class="cRound p-3" style="background-color: #c0ec9f;">
                <div class="div">
                    <h1 style="font-weight: 700;" class="text-center text-black">LKR</h1>
                </div>
                <div class="div">
                    <h3 style="font-weight: 700;" class="text-center text-black">10,000,000.00</h3>
                </div>
            </div>
            <div>
                <h5 class="text-center">Total Paid<br>Earnings</h5>
            </div>
        </div>
        <div class="col-md-3 pt-3 cRound  mt-3 shadow" style="border:1px solid #e9ecef; max-width:300px;">
            <div class="cRound p-3" style="background-color: rgba(245, 165, 165, 0.8);">
                <div class="div">
                    <h1 style="font-weight: 700;" class="text-center text-black">LKR</h1>
                </div>
                <div class="div">
                    <h3 style="font-weight: 700;" class="text-center text-black">10,000,000.00</h3>
                </div>
            </div>
            <div>
                <h5 class="text-center">Pending<br>Payments</h5>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-5 p-3 cRound d-flex flex-column align-items-center shadow" style="border:1px solid #e9ecef;">
            <h3 style="font-weight: 700;">Sale Code & Items</h3>
            <div>
                <button id="show" name="show" class="btn btn-secondary">Show</button>
                <button id="info" name="info" class="btn btn-secondary">User Info</button>
            </div>
        </div>
    </div>

    <div class="row justify-content-center p-3 mt-4">
        <div class="col pt-3 cRound shadow" style="border:1px solid #e9ecef;">
            <h4 class="text-center">Direct Commissions</h4>
            <h3 class="text-center">Total Earnings (Rs):</h3>
            <div class="table-responsive">
                <table id="directTable" class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr class="bg-secondary text-white text-nowrap">
                            <th scope="col" class="text-black">Item Name</th>
                            <th scope="col" class="text-black">Quantity</th>
                            <th scope="col" class="text-black">Commission</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>hsdfhsdf sdfhsidfh</td>
                            <td>fghfgh</td>
                            <td>fdghfgh</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row justify-content-center p-3 mt-3">
        <div class="col pt-3 cRound shadow" style="border:1px solid #e9ecef;">
            <h4 class="text-center">Indirect Commissions</h4>
            <h3 class="text-center">Total Earnings (Rs):</h3>
            <div class="table-responsive">
                <table id="inDirectTable" class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr class="bg-secondary text-white text-nowrap">
                            <th scope="col" class="text-black">Item Name</th>
                            <th scope="col" class="text-black">Quantity</th>
                            <th scope="col" class="text-black">Commission</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>hsdfhsdf sdfhsidfh</td>
                            <td>fgdfgd</td>
                            <td>dfgdfg</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row justify-content-center p-3 mt-3">
        <div class="col pt-3 cRound shadow" style="border:1px solid #e9ecef;">
            <h4 class="text-center">Downgrade</h4>
            <div class="table-responsive">
                <table id="downgradeTable" class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr class="bg-secondary text-white text-nowrap">
                            <th scope="col" class="text-black">Employee ID</th>
                            <th scope="col" class="text-black">Reference ID</th>
                            <th scope="col" class="text-black">Level</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>usc2348</td>
                            <td>usc2348</td>
                            <td>dfgdfg</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-page-template>
