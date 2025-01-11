g<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Veranstaltungsdetails bearbeiten</h3>
        </div>
        <div class="card-body">
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
                
                <!-- Speichern-Button -->
                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#speichernModal">Speichern</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal für die Bestätigung des Speicherns -->
<div class="modal fade" id="speichernModal" tabindex="-1" aria-labelledby="speichernModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="speichernModalLabel">Änderungen bestätigen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Möchten Sie Ihre Änderungen speichern und fortfahren?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Abbrechen</button>
                <a href="<?= base_url('Veranstaltung/index/' . $zustand . '/0/1'); ?>" class="btn btn-success">Speichern</a>
            </div>
        </div>
    </div>
</div>
