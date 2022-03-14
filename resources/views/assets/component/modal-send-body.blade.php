<div class="action-sheet-content">
    <form>
        <div class="form-group basic mb-2">
            <div class="input-wrapper">
                <label class="label" for="send1">กระเป๋าเงินของ</label>
                <div class="input-col">
                    <input type="text" id="send1" class="form-control form-control-lg pe-0"
                        id="send1" value="smadropship" maxlength="14" disabled>
                </div>
            </div>
        </div>

        <div class="form-group basic mb-2">
            <div class="input-wrapper">
                <label class="label" for="send2">เลือกบัญชีธนาคาร</label>
                <select class="form-control custom-select" id="send2">
                    <option value="0">Savings (*** 5019)</option>
                    <option value="1">Investment (*** 6212)</option>
                    <option value="2">Mortgage (*** 5021)</option>
                </select>
            </div>
        </div>

        <div class="form-group basic">
            <div class="input-wrapper">
                <label class="label" for="send3">ใส่จำนวนเงิน</label>
                <div class="exchange-group small">
                    <div class="input-col">
                        <input type="text" class="form-control form-control-lg pe-0" id="send3"
                            placeholder="0" value="0" maxlength="14">
                    </div>
                    <div class="select-col">
                        <select class="form-select form-select-lg currency" id="send3">
                            <option value="THB" selected>THB</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group basic mb-2">
            <div class="input-wrapper">
                <label class="label" for="send4">วันที่โอน</label>
                <input class="form-control datetimepicker-input" type="date" id="send4" name="send4"
                    placeholder="MM/DD/YYY" />
            </div>
        </div>

        <div class="form-group basic mb-2">
            <div class="input-wrapper">
                <label class="label" for="send5">เวลาที่โอน</label>
                <input class="form-control datetimepicker-input" type="time" id="send5" name="send5"
                    placeholder="MM/DD/YYY" />
            </div>
        </div>

        <div class="mt-2">
            <button type="button" class="btn btn-primary btn-lg btn-block"
                data-bs-dismiss="modal">Send</button>
        </div>

    </form>
</div>