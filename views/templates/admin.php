<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?? "Demo PHP | Admin" ?></title>

    <?php if(isset($assetsBaseUrl)): ?>
        <link rel="stylesheet" href="<?= $assetsBaseUrl ?>/main.css">
        <script src="<?= $assetsBaseUrl ?>/main.js"></script>
    <?php endif; ?>
</head>
<body class="d-flex" style="height: 100vh; overflow-y: hidden">
<div
        class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark"
        style="width: 280px"
>
    <a
            href="/"
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"
    >
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">Demo G4</span>
    </a>
    <hr />
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/admin" class="nav-link text-white" aria-current="page">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Accueil
            </a>
        </li>
        <li>
            <a href="/admin/dashboard" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#speedometer2"></use>
                </svg>
                Dashboard
            </a>
        </li>
    </ul>
    <hr />
    <div class="dropdown">
        <a
                href="#"
                class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                id="dropdownUser1"
                data-bs-toggle="dropdown"
                aria-expanded="false"
        >
            <img
                    src="https://github.com/mdo.png"
                    alt=""
                    width="32"
                    height="32"
                    class="rounded-circle me-2"
            />
            <strong>Maxime</strong>
        </a>
        <ul
                class="dropdown-menu dropdown-menu-dark text-small shadow"
                aria-labelledby="dropdownUser1"
        >
            <li><a class="dropdown-item" href="/logout">Deconnexion</a></li>
        </ul>
    </div>
</div>

<main class="container" style="overflow-y: scroll"><?= $content ?></main>

</body>
</html>
