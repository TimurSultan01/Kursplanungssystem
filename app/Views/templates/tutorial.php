<!DOCTYPE html>
<html lang="de" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
          rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .tooltip {
            position: fixed;
            z-index: 1050;
            background: rgba(254, 254, 254, 0.7);
            color: white;
            padding: 15px;
            border-radius: 8px;
            max-width: 400px;
            text-align: center;
            font-size: 16px;
            border: 3px solid red;
            display: block;
        }

        .overlay {
            position: fixed;
            z-index: 1049;
            background: rgba(0, 0, 0, 0.7);
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: block;
        }

        .highlight {
            position: relative;
            z-index: 1001;
            box-shadow: 0 0 10px 5px rgba(255, 0, 0, 0.5);
            border-radius: 5px;
        }
    </style>

</head>
<body class="d-flex flex-column h-100">
<header>
    <nav class="navbar bg-primary navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" data-step="1" data-description="Über dieses Icon können sie jederzeit auf diese Startseite kommen." href="<?= base_url('Dashboard/index/' . $zustand); ?>" title="Startseite">
                <img src="<?= base_url('public/uni_logo.png'); ?>" alt="Logo" width="90px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <!--Linke Seite -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" data-step="2" data-description="Hier finden Sie einen Stundenplan, der all Ihre Veranstaltungen vermerkt" href="<?= base_url('Stundenplan/index/' . $zustand); ?>">Stundenplan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" data-step="3" data-description="Hier können sie all ihre Veranstaltungen sehen und sich für weitere anmelden."  href="<?= base_url('Veranstaltungsplaner/index/' . $zustand); ?>"> Veranstaltungsplaner</a>
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
                        <a class="nav-link text-white" data-step="4" data-description="Über dieses Icon können sie ihr Profil aufrufen." href="<?= base_url('Profil/index/' . $zustand); ?>" title="Profil"><i class="fa-solid fa-user"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" data-step="5" data-description="Über dieses Icon können sie ihre Benachrichtigungen einsehen." href="#" title="Benachrichtigungen"><i class="fa-solid fa-bell"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" data-step="6" data-description="Über dieses Icon können den Gebäudeplan aufrufen, um Räume zu finden." href="#" title="Gebäudeplan"><i class="fa-solid fa-building-columns"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" data-step="7" data-description="Über dieses Icon können sie sich abmelden." href="#" title="Abmeldung">
                            <i class="fa-solid fa-right-to-bracket"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container my-5">
    <div class="row">
        <!-- Linke Spalte: Anstehende Prüfungen -->
        <div class="col-md-6 mb-4" data-step="8" data-description="Hier finden sie eine Übersicht von anstehenden Prüfungen.">
            <div class="card">
                <div class="card-header">
                    <h5>Anstehende Prüfungen</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="<?= base_url('Veranstaltung/index/' . $zustand . '/0'); ?>" class="text-decoration-none text-dark">
                                Lineare Algebra
                            </a>
                            <span class="badge bg-primary">01.03.2024</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="<?= base_url('Veranstaltung/index/' . $zustand . '/0'); ?>" class="text-decoration-none text-dark">
                                Datenbanksysteme
                            </a>
                            <span class="badge bg-primary">15.03.2024</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="<?= base_url('Veranstaltung/index/' . $zustand . '/0'); ?>" class="text-decoration-none text-dark">
                                Elementare Logik
                            </a>
                            <span class="badge bg-primary">22.03.2024</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Rechte Spalte: Nächste Veranstaltung -->
        <div class="col-md-6 mb-4" data-step="9" data-description="Hier finden sie die nächste stattfindende Veranstaltung.">
            <div class="card">
                <div class="card-header">
                    <h5>Nächste Veranstaltung</h5>
                </div>
                <div class="card-body">
                    <p>Die nächste Veranstaltung ist ein Tutorium für Diskrete Strukturen, das am 03.03.2024 in Raum F55 um 12:00 Uhr stattfindet.</p>
                    <a href="<?= base_url('Veranstaltung/index/' . $zustand . '/0'); ?>" class="btn btn-success">Zur Veranstaltung</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Zusätzliche Inhalte unter den Karten -->
    <div class="row">
        <div class="col-md-12" data-step="10" data-description="Hier werden sämtliche Neuigkeiten zu allerlei Dingen aufgelistet.">
            <div class="card">
                <div class="card-header">
                    <h5>Neuigkeiten und Updates</h5>
                </div>
                <div class="card-body">
                    <p>Hier könnten Neuigkeiten, Ankündigungen oder wichtige System-Updates für die Benutzer erscheinen. Zum Beispiel könnten Informationen über neue Kurse, Änderungen im Stundenplan oder andere relevante Nachrichten hier angezeigt werden.</p>
                    <button class="btn btn-info">Mehr erfahren</button>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer mt-auto bg-primary">
    <div class="container-fluid mt-3">
        <div class="row m-0">
            <div class="col d-flex justify-content-between align-items-center">
                <!-- Linke Seite -->
                <ul class="list-unstyled d-flex align-items-start m-0">
                    <li class="p-2">
                        <a class="nav-link text-white" href="#">Impressum</a>
                    </li>
                    <li class="p-2">
                        <a class="nav-link text-white" href="#">Datenschutz</a>
                    </li>
                    <li class="p-2">
                        <a class="nav-link text-white" data-step="11" data-description="Hier können sie Feedback zum System geben, sei es für Wünsche, Bugs oder sonstige Anmerkungen" href="<?= base_url('Feedback/index/' . $zustand); ?>">Feedback</a>
                    </li>
                </ul>
                <!-- Rechte Seite -->
                <ul class="list-unstyled d-flex align-items-center m-0">
                    <li class="p-2 position-relative" data-step="12" data-description="Über dieses Icon können sie jederzeit ein Tutorial der momentanten Seite abrufen">
                        <a href="#" title="Tutorial"><i class="fa-solid fa-chalkboard-user text-white ms-2"></i></a>
                    </li>
                    <li class="p-2 position-relative" data-step="13" data-description="Über dieses Icon können sie die Schriftgröße anpassen">
                        <a href="#" title="Textgröße"><i class="fa-solid fa-text-height text-white ms-2"></i></a>
                    </li>
                    <li class="p-2 position-relative" data-step="14" data-description="Über dieses Icon können sie die Funktion der Gebärdensprache aktivieren.">
                        <a href="#" title="Gebärdensprache"><i class="fa-solid fa-hands text-white ms-2"></i></a>
                    </li>
                    <li class="p-2 position-relative" data-step="15" data-description="Über dieses Icon können sie die Farben der Seite anpassen, falls sie eine Farbblindheit haben.">
                        <a href="#" title="Farbblindheit"><i class="fa-solid fa-eye text-white ms-2"></i></a>
                    </li>
                    <li class="p-2 position-relative">
                        <a href="#" title="Sitemap"><i class="fa-solid fa-bezier-curve text-white ms-2"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let step = 1; // Start beim ersten Schritt
        const elements = [...document.querySelectorAll("[data-step]")].sort((a, b) =>
            a.getAttribute("data-step") - b.getAttribute("data-step")
        );

        // Tooltip erstellen
        const tooltip = document.createElement("div");
        tooltip.classList.add("tooltip");
        tooltip.style.position = "fixed";
        tooltip.style.display = "none";
        tooltip.style.zIndex = "1002";
        tooltip.style.top = "50%";
        tooltip.style.left = "50%";
        tooltip.style.transform = "translate(-50%, -50%)";
        tooltip.style.background = "rgba(0, 0, 0, 0.8)";
        tooltip.style.color = "#fff";
        tooltip.style.padding = "15px";
        tooltip.style.borderRadius = "8px";
        tooltip.style.textAlign = "center";
        tooltip.style.maxWidth = "400px";
        tooltip.style.fontSize = "16px";
        document.body.appendChild(tooltip);

        // Overlay erstellen
        const overlay = document.createElement("div");
        overlay.classList.add("overlay");
        overlay.style.position = "fixed";
        overlay.style.top = "0";
        overlay.style.left = "0";
        overlay.style.width = "100%";
        overlay.style.height = "100%";
        overlay.style.background = "rgba(0, 0, 0, 0.7)";
        overlay.style.zIndex = "1001";
        overlay.style.display = "none";
        document.body.appendChild(overlay);

        function showTooltip(element) {
            const description = element.getAttribute("data-description");

            // Tooltip-Inhalt setzen
            tooltip.textContent = description;
            tooltip.style.display = "block";

            // Element hervorheben
            element.classList.add("highlight");
            overlay.style.display = "block";
        }

        function hideTooltip(element) {
            tooltip.style.display = "none";
            element.classList.remove("highlight");
            overlay.style.display = "none";
        }

        function nextStep() {
            if (step > 1) hideTooltip(elements[step - 2]); // Vorheriges Element ausblenden
            if (step <= elements.length) {
                showTooltip(elements[step - 1]);
                step++;
            } else {
                // Tutorial beenden
                tooltip.textContent = "Das Tutorial ist hiermit beendet.";
                tooltip.style.display = "block";
                overlay.style.display = "block";

                setTimeout(() => {
                    window.location.href = "<?= base_url('Dashboard/index/1'); ?>"; // Zielseite
                }, 3000); // Nach 3 Sekunden weiterleiten
            }
        }

        // Tutorial starten
        showTooltip(elements[0]);

        // Klick auf Overlay oder Tooltip, um weiterzumachen
        overlay.addEventListener("click", nextStep);
        tooltip.addEventListener("click", nextStep);
    });
</script>

</body>
</html>