<x-page-template>
    <div class="row">
        <h5 class="mb-1">Send SMS</h5>
        <div class="col-12 d-flex justify-content-end">
            <div class="input-group p-2 w-25">
                <input id="noticeBox" class="form-control mb-3 noticeBox cRound text-center py-1" type="text" readonly
                    placeholder="Message Count">
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-center gap-4">
        <div class="col-sm-5 p-3 cRound shadow" style="border: 1px solid #e9ecef; max-width:500px">
            <div class="d-flex align-items-center justify-content-center flex-wrap my-3">
                <h6 class="text-danger text-center fw-bold">Use employee ID to push notification</h6>
            </div>
            <div>
                <h6>Custom Employee ID</h6>
                <textarea id="address" name="address" class="form-control textArea mb-3" rows="3"
                    placeholder="Type Employee IDs here..."></textarea>
                <button id="addIdsButton" class="btn btn-success w-100">Add IDs</button>
            </div>

            <hr>

            <form id="fileUploadForm">
                <h6>Upload Exel File</h6>
                <div class="input-group mb-3 d-flex align-items-center">
                    <input class="form-control" type="file" id="inputFile" accept=".xlsx, .xls" multiple>
                    <button id="uploadBtn" class="btn btn-success"
                        style="border-radius: 5px; background-color:#007BFF">Upload</button>
                </div>

                <div class=" cRound px-2" style="max-height: 150px; overflow-y: auto; border: 1px solid #e9ecef;">
                    <h6 id="teleMsg"></h6>
                    <ul id="fileUploadList" class="list-group">
                        <!-- Telephone numbers will be appended here -->
                    </ul>
                </div>
            </form>
        </div>

        <form class="col-sm-5 p-3 cRound shadow pt-4" style="border: 1px solid #e9ecef; max-width:500px">
            <label for="msgList" class="form-label">Select Message</label>
            <select id="msgList" class="form-select mb-3">
                <option value="" selected disabled>Select Message</option>
                <option value="Message 1">Message 1</option>
                <option value="Message 2">Message 2</option>
                <option value="Message 3">Message 3</option>
            </select>
            <div>
                <label for="msgTitle" class="form-label">Message Title</label>
                <input id="secMobile" class="form-control mb-3" type="text" placeholder="Edit message title here...">
            </div>
            <div>
                <h6>Compose SMS Message</h6>
                <textarea id="smsMessage" class="form-control textArea mb-3" rows="3" placeholder="Enter your message here..."></textarea>
                <button id="sendSMSButton" class="btn btn-success w-100">Send SMS</button>
            </div>
        </form>
    </div>
</x-page-template>
