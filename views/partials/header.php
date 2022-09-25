<header class="d-flex justify-content-center py-3">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a href="/" class="nav-link <?= $pathname === "/" ? "active" : "" ?>" aria-current="page">Accueil</a>
        </li>
        <li class="nav-item">
            <a href="/search" class="nav-link <?= $pathname === "/search" ? "active" : "" ?>">Recherche</a>
        </li>
        <li class="nav-item">
            <a href="/about" class="nav-link <?= $pathname === "/about" ? "active" : "" ?>">À propos</a>
        </li>
        <li class="nav-item">
            <a href="/login" class="nav-link <?= $pathname === "/login" ? "active" : "" ?>">Connexion</a>
        </li>
    </ul>
</header>
