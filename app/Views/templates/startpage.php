<?php if ($zustand != 0): ?>
    <div class="container my-5">
        <div class="row">
            <!-- Linke Spalte: Anstehende Prüfungen -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Anstehende Prüfungen</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="<?= base_url('Veranstaltung/index/' . $zustand . '/1'); ?>" class="text-decoration-none text-dark">
                                    Lineare Algebra
                                </a>
                                <span class="badge bg-primary">01.03.2024</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="<?= base_url('Veranstaltung/index/' . $zustand . '/1'); ?>" class="text-decoration-none text-dark">
                                    Datenbanksysteme
                                </a>
                                <span class="badge bg-primary">15.03.2024</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="<?= base_url('Veranstaltung/index/' . $zustand . '/1'); ?>" class="text-decoration-none text-dark">
                                    Elementare Logik
                                </a>
                                <span class="badge bg-primary">22.03.2024</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Rechte Spalte: Nächste Veranstaltung -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Nächste Veranstaltung</h5>
                    </div>
                    <div class="card-body">
                        <p>Die nächste Veranstaltung ist ein Tutorium für Diskrete Strukturen, das am 03.03.2024 in Raum F55 um 12:00 Uhr stattfindet.</p>
                        <a href="<?= base_url('Veranstaltung/index/' . $zustand . '/1'); ?>" class="btn btn-success">Zur Veranstaltung</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Zusätzliche Inhalte unter den Karten -->
        <div class="row">
            <div class="col-md-12">
                <!-- Beispiel für ein weiteres Element, das später angepasst werden kann -->
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


<?php else: ?> 
    <div class="container mt-5">
        <div class="row">
            <!-- Linke Spalte: Navigation und Tutorial -->
            <div class="col-md-6">
                <h3>Navigation</h3>
                <div class="mb-3">
                    <a href="#" class="btn btn-primary w-100">Infos zur Bewerbung</a>
                </div>
                <div class="mb-3">
                    <a href="#" class="btn btn-secondary w-100">Tagesaktuelle Veranstaltungen</a>
                </div>
                <div class="mb-3">
                    <a href="#" class="btn btn-secondary w-100">Veranstaltungen suchen</a>
                </div>
                <div class="mb-3">
                    <a href="#" class="btn btn-secondary w-100">Gebäudeplan anzeigen</a>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title">Wie komme ich zum Tutorial?</h5>
                        <p>Um zum Tutorial zu gelangen, klicken Sie auf den folgenden Link:</p>
                        <a href="#" class="btn btn-info w-100">Tutorial ansehen</a>
                    </div>
                </div>
            </div>

            <!-- Rechte Spalte: Bewerbungsprozess und Info-Texte -->
            <div class="col-md-6">
                <div class="button-container mb-3">
                    <a href="#" class="btn btn-success w-100">Bewerbungsprozess starten</a>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title">Bewerbungsdaten vergessen?</h5>
                        <p>Falls Sie Ihre Bewerbungsdaten vergessen haben, können Sie hier Ihre Daten zurücksetzen:</p>
                        <a href="#" class="btn btn-warning w-100">Bewerbungsdaten zurücksetzen</a>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">ZIMK-Kennung vergessen?</h5>
                        <p>Falls Sie Ihre ZIMK-Kennung vergessen haben, klicken Sie hier, um Ihre Kennung zurückzusetzen:</p>
                        <a href="#" class="btn btn-warning w-100">ZIMK-Kennung zurücksetzen</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>