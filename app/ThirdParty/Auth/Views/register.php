<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<?= view('Auth\Views\_notifications') ?>
    <div class="row justify-content-md-center">
        <div class="col-lg-4 col-sm-6">
        <br>
            <h1><?= lang('Auth.registration') ?></h1>
            <form method="POST" action="<?= route_to('register'); ?>" accept-charset="UTF-8"
                onsubmit="registerButton.disabled = true; return true;">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label><?= lang('Auth.name') ?></label><br />
                    <input required minlength="2" type="text" name="name" value="<?= old('name') ?>"  class="form-control"/>
                </div>
                <div class="form-group">
                    <label><?= lang('Auth.email') ?></label><br />
                    <input required type="email" name="email" value="<?= old('email') ?>"  class="form-control"/>
                </div>
                <div class="form-group">
                    <label><?= lang('Auth.password') ?></label><br />
                    <input required minlength="5" type="password" name="password" value=""  class="form-control"/>
                </div>
                <div class="form-group">
                    <label><?= lang('Auth.passwordAgain') ?></label><br />
                    <input required minlength="5" type="password" name="password_confirm" value=""  class="form-control"/>
                </div>
                <br/>
                <!-- user details -->
                <h2>User Details</h2>
                <div class="form-group">
                    <label><?= lang('Auth.firstname') ?></label><br />
                    <input required minlength="2" type="text" name="firstName" value=""  class="form-control"/>
                </div>
                <div class="form-group">
                    <label><?= lang('Auth.middleName') ?></label><br />
                    <input minlength="2" type="text" name="middleName" value=""  class="form-control"/>
                </div>
                <div class="form-group">
                    <label><?= lang('Auth.lastName') ?></label><br />
                    <input required minlength="2" type="text" name="lastName" value=""  class="form-control"/>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label><?= lang('Auth.suffix') ?></label><br />
                            <input minlength="2" type="text" name="suffix" value=""  class="form-control"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label><?= lang('Auth.status') ?></label><br />
                    <select required name="status" value=""  class="form-control">
                        <option value=""> -Select Status- </option>
                        <option value="1"> Single </option>
                        <option value="2"> Married </option>
                    </select>
                </div>
                <!-- end user details -->
                <br/>
                <!-- address -->
                <h2>Address</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label><?= lang('Auth.addr_num') ?></label><br />
                            <input minlength="2" type="text" name="addr_num" value=""  class="form-control"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label><?= lang('Auth.addr_bldg') ?></label><br />
                            <input minlength="2" type="text" name="addr_bldg" value=""  class="form-control"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label><?= lang('Auth.addr_street') ?></label><br />
                    <input required minlength="2" type="text" name="addr_street" value=""  class="form-control"/>
                </div>
                <div class="form-group">
                    <label><?= lang('Auth.addr_state') ?></label><br />
                    <input required minlength="2" type="text" name="addr_state" value=""  class="form-control"/>
                </div>
                <div class="form-group">
                    <label><?= lang('Auth.addr_country') ?></label><br />
                    <input required minlength="2" type="text" name="addr_country" value=""  class="form-control"/>
                </div>
                <div class="form-group">
                    <label><?= lang('Auth.addr_zipcode') ?></label><br />
                    <input required minlength="2" type="text" name="addr_zipcode" value=""  class="form-control"/>
                </div>
                <!-- end address -->
                <p>
                <button  class="btn lwc-btn" name="registerButton" type="submit"><?= lang('Auth.register') ?></button>
                </p>
                <p>
                <a href="<?= site_url('login'); ?>" class="float-right"><?= lang('Auth.alreadyRegistered') ?></a>
                </p>

            </form>
        </div>
    </div>
<?= $this->endSection() ?>