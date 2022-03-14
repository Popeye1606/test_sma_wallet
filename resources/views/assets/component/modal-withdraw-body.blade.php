<div class="action-sheet-content">
    <form>
        <div class="form-group basic mb-2">
            <div class="input-wrapper">
                <label class="label" for="withdraw1">กระเป๋าเงินของ</label>
                <div class="input-col">
                    <input type="text" id="withdraw1" class="form-control form-control-lg pe-0"
                        id="withdraw1" value="smadropship" maxlength="14" disabled>
                </div>
            </div>
        </div>

        <div class="form-group basic mb-2">
            <div class="input-wrapper">
                <label class="label" for="withdraw2">เลือกบัญชีธนาคาร</label>
                <select class="form-control custom-select" id="withdraw2">
                    <option value="0">Savings (*** 5019)</option>
                    <option value="1">Investment (*** 6212)</option>
                    <option value="2">Mortgage (*** 5021)</option>
                </select>
            </div>
        </div>

        <div class="form-group basic">
            <div class="input-wrapper">
                <label class="label" for="withdraw3">ใส่จำนวนเงิน</label>
                <div class="exchange-group small">
                    <div class="input-col">
                        <input type="text" class="form-control form-control-lg pe-0" id="withdraw3"
                            placeholder="0" value="0" maxlength="14">
                    </div>
                    <div class="select-col">
                        <select class="form-select form-select-lg currency" id="withdraw3">
                            <option value="THB" selected>THB</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-2">
            <button type="button" class="btn btn-primary btn-lg btn-block"
                data-bs-dismiss="modal">Withdraw</button>
        </div>

    </form>
</div>