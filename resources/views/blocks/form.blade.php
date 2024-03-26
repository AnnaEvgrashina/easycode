<form action="update_settings" method="post" id="form-settings">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <label class="fs-6 form-label fw-bolder text-dark">Настройки входа</label>
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-4">
                            <input id="email" type="email" class="form-control form-control-solid" name="email" value="" placeholder="Email">
                        </div>
                        <div class="col-12 col-sm-6 mb-4">
                            <input id="password" type="password" class="form-control form-control-solid" name="password" value="" placeholder="Password">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div> Подтвердить через:</div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="communication_method" id="inlineRadio1" value="sms" checked>
            <label class="form-check-label" for="inlineRadio1">
                СМС
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="communication_method" id="inlineRadio2" value="tg">
            <label class="form-check-label" for="inlineRadio2">
                Telegram
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="communication_method" id="inlineRadio3" value="email">
            <label class="form-check-label" for="inlineRadio3">
                Email
            </label>
        </div>
        <div class="my-8"></div>
        <div class="d-flex align-items-center justify-content-end">
            <input type="submit" class="btn btn-primary" value="Сохранить данные">
        </div>
    </div>
</form>
<div class="separator separator-dashed mb-4"></div>
