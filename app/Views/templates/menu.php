<!-- Navigationsleiste -->
<header>
    <?php if ($zustand != 0): ?>
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
                            <a class="nav-link text-white"  href="#"><?php echo $zustand == 1 ? 'Veranstaltungsplaner' : 'Veranstaltungsverwaltung'; ?></a>
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
                            <a class="nav-link text-white" href="#" title="Abmeldung" onclick="showLogoutModal(event)">
                                <i class="fa-solid fa-right-to-bracket"></i>
                            </a>
                        </li>
                        <!-- Bootstrap Modal für Bestätigung -->
                        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="logoutModalLabel">Abmeldung bestätigen</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Möchten Sie sich wirklich abmelden?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Abbrechen</button>
                                        <button type="button" class="btn btn-danger" onclick="logoutConfirmed()">Abmelden</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

        
    <?php else: ?>
        <nav class="navbar bg-primary navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= base_url('Dashboard/index/' . $zustand); ?>" title="Startseite">
                    <img src="<?= base_url('public/uni_logo.png'); ?>" alt="Logo" width="90px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                    <!-- Rechte Seite -->
                    <ul class="navbar-nav ms-auto d-flex">
                    <li class="nav-item">
                            <form action="#" method="POST" class="d-flex ms-auto">
                                <!-- Benutzerkennung -->
                                <input type="text" class="form-control me-2" name="benutzerkennung" placeholder="Benutzerkennung" required>
                                <!-- Passwort -->
                                <input type="password" class="form-control me-2" name="passwort" placeholder="Passwort" required>
                                <!-- Anmelden-Button -->
                                <button type="submit" class="btn btn-info">Anmelden</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <?php endif; ?>
</header>

<script>
    // Funktion zum Anzeigen des Modals
    function showLogoutModal(event) {
        // Verhindert das Standardverhalten des Links
        event.preventDefault();

        // Öffnet das Modal
        var logoutModal = new bootstrap.Modal(document.getElementById('logoutModal'));
        logoutModal.show();
    }

    // Funktion, die nach Bestätigung des Logouts ausgeführt wird
    function logoutConfirmed() {
        // Schließt das Modal
        var logoutModal = bootstrap.Modal.getInstance(document.getElementById('logoutModal'));
        logoutModal.hide();

        // Weiterleitung zur Seite
        window.location.href = "<?= base_url('/Dashboard/index/0') ?>";
    }
</script>