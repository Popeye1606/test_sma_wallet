<div class="action-sheet-content">
    <form>
        <div class="form-group basic">
            <div class="input-wrapper">
                <label class="label" for="account1">From</label>
                <select class="form-control custom-select" id="account1">
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


        <div class="form-group basic">
            <button type="button" class="btn btn-primary btn-block btn-lg"
                data-bs-dismiss="modal">Deposit</button>
        </div>
    </form>
</div>