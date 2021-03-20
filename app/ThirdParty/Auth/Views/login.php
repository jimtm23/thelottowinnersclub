
    <?= $this->extend($config->viewLayout) ?>
    <?= $this->section('main') ?>



    <?= view('Auth\Views\_notifications') ?>
    <div class="row justify-content-md-center">
        <div class="col-lg-4 col-sm-6">
            <br>
            <h1><?= lang('Auth.login') ?></h1>
            <form method="POST" action="<?= site_url('login'); ?>" accept-charset="UTF-8">
                <p>
                    <label><?= lang('Auth.email') ?></label><br />
                    <input required type="email" name="email" value="<?= old('email') ?>" class="form-control"/>
                </p>
                <p>
                    <label><?= lang('Auth.password') ?></label><br />
                    <input required minlength="5" type="password" name="password" value="" class="form-control"/>
                </p>
                <p>
                    <?= csrf_field() ?>
                    <button type="submit" class="btn lwc-btn"><?= lang('Auth.login') ?></button>
                </p>
                <br>
                <p>
                    <a href="/register">Register</a>
                    <a href="<?= site_url('forgot-password'); ?>" class="float-right"><?= lang('Auth.forgotYourPassword') ?></a>
                </p>
            </form>
        </div>
    </div>

    <?= $this->endSection() ?>
