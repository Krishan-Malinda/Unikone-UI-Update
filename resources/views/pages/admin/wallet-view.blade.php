<x-page-template>
    <div class="row justify-content-center">
        <div class="col cRound p-2 shadow" style="border:1px solid #e9ecef; max-width:700px;">
            <div class="d-flex gap-2 justify-content-center mt-2">
                <i class="fas fa-wallet mr-4" style="font-size: 25px;"></i>
                <h4>Wallet</h4>
            </div>
            <div class="row mb-2">
                <div class="col d-flex justify-content-center">
                    <form class="overflow-x-auto" style="max-width:400px;">
                        <table id="walletTable" class="table table-sm text-nowrap align-middle">
                            <tr>
                                <td>Username</td>
                                <td>
                                    <input id="username" name="username" class="form-control" style="min-width:200px;" type="text"
                                        readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>User ID</td>
                                <td>
                                    <input id="userId" name="userId" class="form-control" style="min-width:200px;" type="text"
                                        readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>Direct Commission (LKR)</td>
                                <td>
                                    <input id="directCommition" name="directCommition" class="form-control" style="min-width:200px;"
                                        type="text" readonly value="100000.00">
                                </td>
                            </tr>
                            <tr>
                                <td>Indirect Commission (LKR)</td>
                                <td>
                                    <input id="inDirectCommition" name="inDirectCommition" class="form-control" style="min-width:200px;"
                                        type="text" readonly value="100000.00">
                                </td>
                            </tr>
                            <tr>
                                <td>Total Earnings (LKR)</td>
                                <td>
                                    <input id="totalEarnings" name="totalEarnings" class="form-control" style="min-width:200px;"
                                        type="text" readonly value="100000.00">
                                </td>
                            </tr>
                            <tr>
                                <td>Payment (LKR)</td>
                                <td>
                                    <input id="payment" name="payment" class="form-control" style="min-width:200px;" type="text"
                                        readonly value="100000.00">
                                </td>
                            </tr>
                            <tr>
                                <td>Last Payment Date</td>
                                <td>
                                    <input id="lastPaymentDate" name="lastPaymentDate" class="form-control" style="min-width:200px;"
                                        type="text" readonly value="100000.00">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 d-flex justify-content-center">
                    <button id="editWallet" name="editWallet" class="btn btn-warning mb-2">Edit Wallet</button>
                </div>
                <div class="col-sm-6 d-flex justify-content-center">
                    <button id="resetWallet" name="resetWallet" class="btn btn-danger mb-2">Reset Wallet</button>
                </div>

            </div>
        </div>
    </div>
</x-page-template>
