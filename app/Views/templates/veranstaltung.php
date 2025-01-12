<div class="container mt-5">
    <?php if ($useraction == 1 && $zustand == 1): ?>
        <div id="infoBox" class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Hinweis!</strong> Du hast dich erfolgreich abgemeldet!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php elseif ($useraction == 0 && $zustand == 1): ?>  
        <div id="infoBox" class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Hinweis!</strong> Du hast dich erfolgreich angemeldet!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
    <?php elseif ($useraction == 1 && $zustand == 2): ?>  
        <div id="infoBox" class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Hinweis!</strong> Ihre Änderungen wurden erfolgreich gespeichert!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Veranstaltungsdetails</h3>
        </div>
        <div class="card-body">
            <h4 class="mb-3">Veranstaltungsname: <strong> Diskrete Strukturen </strong></h4>
            <div class="row mb-3">
                <div class="col-md-6">
                    <p><strong>Veranstaltungsnummer:</strong> 12212 </p>
                </div>
                <div class="col-md-6">
                    <p><strong>Veranstaltungsart:</strong> Vorlesung </p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <p><strong>Dozent:</strong> Prof. Dr. Weyers
                    <a href="<?= base_url('Profil/index/'. '2'); ?>" class="ms-2" title="Professorprofil anzeigen">
                            <i class="fa-solid fa-address-card text-primary"></i> </a> 
                    </p>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <p><strong>Raum:</strong> F 55
                        <a href="#" class="ms-2" title="Raumdetails anzeigen">
                            <i class="fa-solid fa-building-columns text-primary"></i> </a>
                    </p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <p><strong>Datum Beginn:</strong> 23.10.2024 </p>
                </div>
                <div class="col-md-6">
                    <p><strong>Zeitraum:</strong> 12:00 - 14:00 Uhr </p>
                </div>
            </div>
            <p><strong>Kurzbeschreibung:</strong> Diskrete Strukturen befassen sich mit mathematischen Konzepten, die
                in der Informatik Anwendung finden, wie Graphen, Mengen, Relationen und Logik. Sie bieten die Grundlage für Algorithmen,
                Datenstrukturen und die Theorie der Berechenbarkeit. Ziel ist es, abstraktes Denken zu fördern und Probleme präzise zu modellieren</p>
            <div class="row mb-3">
                <div class="col-md-6">
                    <p><strong>Semesterwochenstunden:</strong> 2 </p>
                </div>
                <div class="col-md-6">
                    <p><strong>Modulbeschreibung:</strong> <a href="#" class="text-decoration-underline">Hier klicken</a></p>
                </div>
            </div>
            <p><strong>Weitere Daten:</strong> <a href="#" class="text-decoration-underline">Hier klicken</a></p>
        </div>
            <?php if ($zustand == 1): ?>
                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <?php if ($angemeldet == 1): ?>
                            <!-- Anmelde-Button -->
                            <button class="btn btn-success" onclick="showAnmeldeModal(event)">
                                Anmelden
                            </button>
                        <?php elseif ($angemeldet == 0): ?>
                            <!-- Abmelde-Button -->
                            <button class="btn btn-danger" onclick="showAbmeldeModal(event)">
                                Abmelden
                            </button>
                        <?php endif; ?>

                        <!-- Vorschau-Button -->
                        <?php if ($angemeldet == 1): ?>
                            <a href="<?= base_url('Stundenplan/vorschau/' . $zustand); ?>" class="btn btn-info">Vorschau</a>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Modal für die Bestätigung der Abmeldung -->
                <div class="modal fade" id="abmeldeModal" tabindex="-1" aria-labelledby="abmeldeModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="abmeldeModalLabel">Abmeldung bestätigen</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Möchten Sie sich wirklich abmelden?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Abbrechen</button>
                                <a href="<?= base_url('Veranstaltung/index/' . $zustand . '/1' . '/1'); ?>" class="btn btn-danger">Abmelden</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal für die Bestätigung der Anmeldung -->
                <div class="modal fade" id="anmeldeModal" tabindex="-1" aria-labelledby="anmeldeModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="anmeldeModalLabel">Anmeldung bestätigen</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Möchten Sie sich wirklich anmelden?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Abbrechen</button>
                                <a href="<?= base_url('Veranstaltung/index/' . $zustand . '/0' . '/0'); ?>" class="btn btn-success">Anmelden</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php elseif ($zustand == 2): ?>
                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <!-- Veranstaltung bearbeiten Button (links) -->
                        <a href="<?= base_url('Veranstaltung/bearbeiten/' . $zustand); ?>" class="btn btn-warning">
                            Bearbeiten
                        </a>
                        
                        <!-- Veranstaltung löschen Button (rechts) -->
                        <button class="btn btn-danger" onclick="showDeleteModal(event)">
                            Löschen
                        </button>
                    </div>
                </div>

                <!-- Modal für die Löschung der Veranstaltung -->
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Löschen bestätigen</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Möchten Sie die Veranstaltung wirklich löschen?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Abbrechen</button>
                                    <a href="<?= base_url('Veranstaltungsverwaltung/index/' . $zustand . '/1'); ?>" class="btn btn-danger">Löschen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>


<script>
function showAnmeldeModal(event) {
    event.preventDefault();
    var anmeldeModal = new bootstrap.Modal(document.getElementById('anmeldeModal'));
    anmeldeModal.show();
}

function showAbmeldeModal(event) {
    event.preventDefault();
    var abmeldeModal = new bootstrap.Modal(document.getElementById('abmeldeModal'));
    abmeldeModal.show();
}

function showDeleteModal(event) {
        event.preventDefault();
        var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
        deleteModal.show();
    }

</script>