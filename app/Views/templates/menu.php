<!-- Navigationsleiste -->
<header>
    <nav class="navbar bg-primary navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('Dashboard/index/' . $zustand); ?>" title="Startseite">
                <img src="<?= base_url('public/uni_logo.png'); ?>" alt="Logo" width="90px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <!--Linke Seite -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('Stundenplan/index/' . $zustand); ?>">Stundenplan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Veranstaltungsplaner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Studip</a>
                    </li>
                </ul>

                 <!-- Rechte Seite -->
                 <ul class="navbar-nav ms-auto d-flex">
                    <li class= "nav-item">
                        <form class="d-flex ms-auto">
                            <input class="form-control me-2 navbar-search" type="search" placeholder="Menü durchsuchen" aria-label="Suche">
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" title="Profil"><i class="fa-solid fa-user"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" title="Benachrichtigungen"><i class="fa-solid fa-bell"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" title="Gebäudeplan"><i class="fa-solid fa-building-columns"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" title="An/Abmeldung"><i class="fa-solid fa-right-to-bracket"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>