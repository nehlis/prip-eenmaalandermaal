<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand mb-0 h1" href="/">
        EenmaalAndermaal
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav w-100">
            <li class="nav-item dropdown ml-auto">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> <?= $_SESSION['name'] ?? 'Account' ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <h6 class="dropdown-header">Account</h6>
                    <div class="dropdown-divider"></div>
                    <?php

                    use App\Core\Router;
                    use App\Services\AuthService;

                    if (AuthService::isLoggedIn()) :
                    ?>

                        <a class="dropdown-item" href="/profiel">Profiel</a>
                        <a class="dropdown-item" href="/uitloggen">Uitloggen</a>
                    <?php else : ?>
                        <a href="#">Test: <?= $_GET['referrer'] ?></a>
                        <a class="dropdown-item" href="/inloggen<?= Router::getReferrer(['/', '/inloggen', '/registreren', '/uitloggen']) ?>">Inloggen</a>
                        <a class="dropdown-item" href="/registreren">Registreren</a>
                    <?php endif; ?>
                </div>
            </li>
        </ul>
    </div>
</nav>