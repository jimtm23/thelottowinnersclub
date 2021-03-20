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
                <p>
                    <label><?= lang('Auth.name') ?></label><br />
                    <input required minlength="2" type="text" name="name" value="<?= old('name') ?>"  class="form-control"/>
                </p>
                <p>
                    <label><?= lang('Auth.email') ?></label><br />
                    <input required type="email" name="email" value="<?= old('email') ?>"  class="form-control"/>
                </p>
                <p>
                    <label><?= lang('Auth.password') ?></label><br />
                    <input required minlength="5" type="password" name="password" value=""  class="form-control"/>
                </p>
                <p>
                    <label><?= lang('Auth.passwordAgain') ?></label><br />
                    <input required minlength="5" type="password" name="password_confirm" value=""  class="form-control"/>
                </p>
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