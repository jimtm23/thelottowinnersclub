<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<?= view('Auth\Views\_notifications') ?>
    <div class="row justify-content-md-center">
        <div class="col-lg-4 col-sm-6">
        <br>
            <h1>Member Details</h1>
            <form method="POST" action="/members/saveCustomer" accept-charset="UTF-8"
                onsubmit="saveButton.disabled = true; return true;">
                <?= csrf_field() ?>

                <div class="form-group">
                    <label><?= lang('Auth.email') ?></label><br />
                    <input required type="email" name="user_id" value="<?= $userdata['user_id']?>" readonly  class="form-control"/>
                </div>
        
                <!-- user details -->
                <h2>User Details</h2>
                <div class="form-group">
                    <label><?= lang('Auth.firstname') ?></label><br />
                    <input required minlength="2" type="text" name="firstName" value="<?= $userdata['first_name']?>"  class="form-control"/>
                </div>
                <div class="form-group">
                    <label><?= lang('Auth.middleName') ?></label><br />
                    <input minlength="2" type="text" name="middleName" value="<?= $userdata['middle_name']?>"  class="form-control"/>
                </div>
                <div class="form-group">
                    <label><?= lang('Auth.lastName') ?></label><br />
                    <input required minlength="2" type="text" name="lastName" value="<?= $userdata['last_name']?>"  class="form-control"/>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label><?= lang('Auth.suffix') ?></label><br />
                            <input minlength="2" type="text" name="suffix" value="<?= $userdata['suffix']?>"  class="form-control"/>
                        </div>
                    </div>
                </div>
             
                <!-- end user details -->
                <br/>
                <!-- address -->
                <h2>Address</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label><?= lang('Auth.addr_num') ?></label><br />
                            <input minlength="2" type="text" name="addr_num" value="<?= $userdata['addr_no']?>"  class="form-control"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label><?= lang('Auth.addr_bldg') ?></label><br />
                            <input minlength="2" type="text" name="addr_bldg" value="addr_bldg"  class="form-control"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label><?= lang('Auth.addr_street') ?></label><br />
                    <input required minlength="2" type="text" name="addr_street" value="<?= $userdata['addr_street']?>"  class="form-control"/>
                </div>
                <div class="form-group">
                    <label><?= lang('Auth.addr_state') ?></label><br />
                    <input required minlength="2" type="text" name="addr_state" value="<?= $userdata['addr_state']?>"  class="form-control"/>
                </div>
                <div class="form-group">
                    <label><?= lang('Auth.addr_country') ?></label><br />
                    <input required minlength="2" type="text" name="addr_country" value="<?= $userdata['addr_country']?>"  class="form-control"/>
                </div>
                <div class="form-group">
                    <label><?= lang('Auth.addr_zipcode') ?></label><br />
                    <input required minlength="2" type="text" name="addr_zipcode" value="<?= $userdata['addr_zipcode']?>"  class="form-control"/>
                </div>
                <!-- end address -->
                <div class="form-group">
                    <label><?= lang('Auth.contact_no') ?></label><br />
                    <input required type="tel" pattern="[+][0-9]{11,14}" name="contact_no" value="<?= $userdata['contact_no']?>"  class="form-control"/>
                </div>
                <p>
                <button  class="btn lwc-btn" name="saveButton" type="submit">Save</button>
                <button  class="btn lwc-btn" name="cancelButton" type="submit">Cancel</button>
                </p>            

            </form>
        </div>
    </div>
<?= $this->endSection() ?>