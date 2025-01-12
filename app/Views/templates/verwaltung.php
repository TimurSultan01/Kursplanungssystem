<div class="container mt-5">
<?php if ($useraction == 1): ?>  
        <div id="infoBox" class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Hinweis!</strong> Die Veranstaltung wurde erfolgreich gelöscht!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php elseif ($useraction == 2): ?>  
        <div id="infoBox" class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Hinweis!</strong> Die Veranstaltung wurde erfolgreich erstellt!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Veranstaltungen verwalten</h3>
        </div>
        <div class="card-body">
            <!-- Tabelle zur Anzeige der Veranstaltungen -->
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Titel</th>
                        <th>SWS</th>
                        <th>Raum</th>
                        <th>Art</th>
                        <th>Uhrzeit</th>
                        <th>
                            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                                <i class="fa fa-plus"></i>
                            </button>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand); ?>">Diskrete Strukturen</a></td>
                        <td>2</td>
                        <td>F55</td>
                        <td>Vorlesung</td>
                        <td>Montag 12:00-14:00</td>
                        <td>
                            <a href="<?= base_url('Veranstaltung/bearbeiten/' . $zustand . '/1'); ?>" class="btn btn-warning btn-sm">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="1">
                                <i class="fa fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand); ?>">Proseminar</a></td>
                        <td>5</td>
                        <td>H13</td>
                        <td>Seminar</td>
                        <td>Dienstag 08:00-10:00</td>
                        <td>
                            <a href="<?= base_url('Veranstaltung/bearbeiten/' . $zustand . '/1'); ?>" class="btn btn-warning btn-sm">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="2">
                                <i class="fa fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand); ?>">Datenbanksysteme</a></td>
                        <td>3</td>
                        <td>HS12</td>
                        <td>Prüfung</td>
                        <td>Donnerstag 16:00-18:00</td>
                        <td>
                            <a href="<?= base_url('Veranstaltung/bearbeiten/' . $zustand . '/1'); ?>" class="btn btn-warning btn-sm">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="3">
                                <i class="fa fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal zum Erstellen einer neuen Veranstaltung -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Neue Veranstaltung erstellen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formular für die Veranstaltung -->
                <form action="<?= base_url('Veranstaltung/update'); ?>" method="post">
                <div class="mb-3">
                    <label for="veranstaltungsname" class="form-label">Veranstaltungsname</label>
                    <input type="text" class="form-control" id="veranstaltungsname" name="veranstaltungsname" value="Diskrete Strukturen" required>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="veranstaltungsnummer" class="form-label">Veranstaltungsnummer</label>
                        <input type="number" class="form-control" id="veranstaltungsnummer" name="veranstaltungsnummer" value="12212" required>
                    </div>
                    <div class="col-md-6">
                        <label for="veranstaltungsart" class="form-label">Veranstaltungsart</label>
                        <input type="text" class="form-control" id="veranstaltungsart" name="veranstaltungsart" value="Vorlesung" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="dozent" class="form-label">Dozent</label>
                        <input type="text" class="form-control" id="dozent" name="dozent" value="Prof. Dr. Weyers" required>
                    </div>
                    <div class="col-md-6">
                        <label for="raum" class="form-label">Raum</label>
                        <input type="text" class="form-control" id="raum" name="raum" value="F 55" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="datum_beginn" class="form-label">Datum Beginn</label>
                        <input type="date" class="form-control" id="datum_beginn" name="datum_beginn" value="2024-10-23" required>
                    </div>
                    <div class="col-md-6">
                        <label for="zeitraum" class="form-label">Zeitraum</label>
                        <input type="text" class="form-control" id="zeitraum" name="zeitraum" value="12:00 - 14:00 Uhr" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="kurzbeschreibung" class="form-label">Kurzbeschreibung</label>
                    <textarea class="form-control" id="kurzbeschreibung" name="kurzbeschreibung" rows="4" required>Diskrete Strukturen befassen sich mit mathematischen Konzepten, die in der Informatik Anwendung finden, wie Graphen, Mengen, Relationen und Logik. Sie bieten die Grundlage für Algorithmen, Datenstrukturen und die Theorie der Berechenbarkeit. Ziel ist es, abstraktes Denken zu fördern und Probleme präzise zu modellieren.</textarea>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="semesterwochenstunden" class="form-label">Semesterwochenstunden</label>
                        <input type="number" class="form-control" id="semesterwochenstunden" name="semesterwochenstunden" value="2" required>
                    </div>
                    <div class="col-md-6">
                        <label for="modulbeschreibung" class="form-label">Modulbeschreibung</label>
                        <input type="url" class="form-control" id="modulbeschreibung" name="modulbeschreibung" value="#" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="weitere_daten" class="form-label">Weitere Daten</label>
                    <input type="url" class="form-control" id="weitere_daten" name="weitere_daten" value="#" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Abbrechen</button>
                <a href="<?= base_url('Veranstaltungsverwaltung/index/' . $zustand . '/2'); ?>" class="btn btn-success" id="saveEventBtn">Erstellen</a>
            </div>
        </div>
    </div>
</div>


<!-- Modal für die Bestätigung des Löschens -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Löschen bestätigen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Möchten Sie diese Veranstaltung wirklich löschen?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Abbrechen</button>
                <a href="<?= base_url('Veranstaltungsverwaltung/index/' . $zustand . '/1'); ?>" class="btn btn-danger" id="confirmDeleteBtn">Löschen</a>
            </div>
        </div>
    </div>
</div>

<script>
    // Dynamische ID des zu löschenden Elements setzen
    const deleteBtns = document.querySelectorAll('.btn-danger');
    const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');

    deleteBtns.forEach(button => {
        button.addEventListener('click', function () {
            const eventId = this.getAttribute('data-id');
            // Die URL anpassen, um die Veranstaltung mit der jeweiligen ID zu löschen
            confirmDeleteBtn.href = '<?= base_url('Veranstaltungsverwaltung/index/' . $zustand . '/1'); ?>';
        });
    });
</script>
