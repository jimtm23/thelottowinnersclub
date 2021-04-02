<body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
        <a class="navbar-brand" href="/">The Lotto Winners Club</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="admin">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/members">Members</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/rules">Rules</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
            </li>
            </ul>
            <?php if (!session()->has('userData')) : ?>
                <div class="ml-auto">
                    <a class="nav-link lwc-btn" href="/login">Sign in</a>
                </div>
            <?php else: ?>
                <div class="ml-auto">
                    <span class="greeting"><?= lang('Auth.loggedInWelcome', [session('userData.email')]) ?> &nbsp;|&nbsp;</span>
                    <a class="greeting"href="<?= site_url('logout') ?>"><?= lang('Auth.logout') ?> &rarr;</a>
                </div>
            <?php endif ?>
        </div>
        </div>
    </nav>