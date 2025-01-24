<div class="container mt-5">
    <!-- Button-Gruppe für die verschiedenen Ansichten -->
    <div class="d-flex justify-content-begin mb-3">
        <a href="<?= base_url('Veranstaltungsplaner/index/' . $zustand . '/0'); ?>" class="btn btn-info mx-1">
            Übersicht
        </a>
        <a href="<?= base_url('Veranstaltungsplaner/index/' . $zustand . '/1'); ?>" class="btn btn-primary mx-1">
            Veranstaltungsvorschläge
        </a>
        <a href="<?= base_url('Veranstaltungsplaner/index/' . $zustand . '/2'); ?>" class="btn btn-success mx-1">
            Veranstaltung suchen
        </a>
    </div>


    <?php if ($art == 1): ?>
    <div class="card">
    <div class="card-header bg-primary text-white">
        <h3 class="mb-4">Veranstaltungsvorschläge</h3>
    </div>
    <div class="card-body">
    
    <!-- Einführungstext -->
    <p class="mb-4">Laut Studienverlaufsplan sollen die folgenden Veranstaltungen belegt werden:</p>
    
    <!-- Tabelle mit Veranstaltungsvorschlägen -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Titel</th>
                <th>SWS</th>
                <th>Art</th>
                <th>Raum</th>
                <th>Wochentag</th>
                <th>Professor</th>
            </tr>
        </thead>
        <tbody>
            <!-- Beispielhafte Veranstaltungen -->
            <tr>
                <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand . '/1'); ?>">Diskrete Strukturen</a></td>
                <td>2</td>
                <td>Vorlesung</td>
                <td>F55</td>
                <td>Montag, 12:00 - 14:00 Uhr</td>
                <td>Prof. Dr. Benjamin Weyers</td>
            </tr>
            <tr>
                <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand . '/1'); ?>">Lineare Algebra</a></td>
                <td>3</td>
                <td>Vorlesung</td>
                <td>HS12</td>
                <td>Dienstag, 14:00 - 16:00 Uhr</td>
                <td>Prof. Dr. Maria Müller</td>
            </tr>
            <tr>
                <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand . '/1'); ?>">Datenbanksysteme</a></td>
                <td>2</td>
                <td>Vorlesung</td>
                <td>F42</td>
                <td>Mittwoch, 10:00 - 12:00 Uhr</td>
                <td>Prof. Dr. Markus Schmidt</td>
            </tr>
            <tr>
                <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand . '/1'); ?>">Theoretische Informatik</a></td>
                <td>2</td>
                <td>Vorlesung</td>
                <td>F53</td>
                <td>Donnerstag, 16:00 - 18:00 Uhr</td>
                <td>Prof. Dr. Anna Meier</td>
            </tr>
            <tr>
                <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand . '/1'); ?>">Software Engineering</a></td>
                <td>3</td>
                <td>Vorlesung</td>
                <td>F12</td>
                <td>Freitag, 09:00 - 12:00 Uhr</td>
                <td>Prof. Dr. Peter Schwarz</td>
            </tr>
            <tr>
                <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand . '/1'); ?>">Mathematik für Informatiker</a></td>
                <td>3</td>
                <td>Seminar</td>
                <td>F11</td>
                <td>Montag, 10:00 - 12:00 Uhr</td>
                <td>Prof. Dr. Maria Müller</td>
            </tr>
        </tbody>
    </table>
    </div>
    </div>
    <?php elseif ($art == 2): ?>
        <!-- Überschrift und Suchform -->
    <div class="card">
    <div class="card-header bg-success text-white">
    <h3 class="mb-4">Veranstaltungen suchen</h3>
    </div>
    <div class="card-body">
    <!-- Filterformular -->
    <form method="GET" action="<?= base_url('Veranstaltungsplaner/index/suchen'); ?>" class="mb-4">
        <div class="row">
            <div class="col-md-2">
                <label for="search-title" class="form-label">Titel</label>
                <input type="text" class="form-control" id="search-title" name="title" placeholder="Titel eingeben">
            </div>
            <div class="col-md-2">
                <label for="search-art" class="form-label">Art</label>
                <select class="form-select" id="search-weekday" name="weekday">
                    <option value="">Alle</option>
                    <option value="Vorlesung">Vorlesung</option>
                    <option value="Seminar">Seminar</option>
                    <option value="Prüfung">Prüfung</option>
                    <option value="Übung">Übung</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="search-weekday" class="form-label">Wochentag</label>
                <select class="form-select" id="search-weekday" name="weekday">
                    <option value="">Alle</option>
                    <option value="Montag">Montag</option>
                    <option value="Dienstag">Dienstag</option>
                    <option value="Mittwoch">Mittwoch</option>
                    <option value="Donnerstag">Donnerstag</option>
                    <option value="Freitag">Freitag</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="search-room" class="form-label">Raum</label>
                <input type="text" class="form-control" id="search-room" name="room" placeholder="Raum eingeben">
            </div>
            <div class="col-md-2">
                <label for="search-professor" class="form-label">Professor</label>
                <input type="text" class="form-control" id="search-professor" name="professor" placeholder="Professor eingeben">
            </div>
            <div class="col-md-2 mt-3">
                <button type="submit" class="btn btn-primary mt-3">Suchen</button>
            </div>
        </div>
    </form>

    <!-- Tabelle mit den Veranstaltungen -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Titel</th>
                <th>SWS</th>
                <th>Art</th>
                <th>Raum</th>
                <th>Wochentag</th>
                <th>Professor</th>
            </tr>
        </thead>
        <tbody>
            <!-- Beispielhafte Veranstaltungen -->
            <tr>
                <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand . '/1'); ?>">Diskrete Strukturen</a></td>
                <td>2</td>
                <td>Vorlesung</td>
                <td>F55</td>
                <td>Montag, 12:00 - 14:00 Uhr</td>
                <td>Prof. Dr. Benjamin Weyers</td>
            </tr>
            <tr>
                <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand . '/1'); ?>">Lineare Algebra</a></td>
                <td>3</td>
                <td>Seminar</td>
                <td>HS12</td>
                <td>Dienstag, 14:00 - 16:00 Uhr</td>
                <td>Prof. Dr. Maria Müller</td>
            </tr>
            <tr>
                <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand . '/1'); ?>">Datenbanksysteme</a></td>
                <td>2</td>
                <td>Vorlesung</td>
                <td>F42</td>
                <td>Mittwoch, 10:00 - 12:00 Uhr</td>
                <td>Prof. Dr. Markus Schmidt</td>
            </tr>
            <tr>
                <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand . '/1'); ?>">Theoretische Informatik</a></td>
                <td>2</td>
                <td>Seminar</td>
                <td>F53</td>
                <td>Donnerstag, 16:00 - 18:00 Uhr</td>
                <td>Prof. Dr. Anna Meier</td>
            </tr>
            <tr>
                <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand . '/1'); ?>">Software Engineering</a></td>
                <td>3</td>
                <td>Übung</td>
                <td>F12</td>
                <td>Freitag, 09:00 - 12:00 Uhr</td>
                <td>Prof. Dr. Peter Schwarz</td>
            </tr>
            <tr>
                <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand . '/1'); ?>">Mathematik für Informatiker</a></td>
                <td>3</td>
                <td>Prüfung</td>
                <td>F11</td>
                <td>Montag, 10:00 - 12:00 Uhr</td>
                <td>Prof. Dr. Maria Müller</td>
            </tr>
            <tr>
                <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand . '/1'); ?>">Programmierung 1</a></td>
                <td>4</td>
                <td>Übung</td>
                <td>F44</td>
                <td>Dienstag, 08:00 - 12:00 Uhr</td>
                <td>Prof. Dr. Benjamin Weyers</td>
            </tr>
            <tr>
                <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand . '/1'); ?>">Netzwerktechnologien</a></td>
                <td>2</td>
                <td>Prüfung</td>
                <td>HS2</td>
                <td>Mittwoch, 14:00 - 16:00 Uhr</td>
                <td>Prof. Dr. Markus Schmidt</td>
            </tr>
            <tr>
                <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand . '/1'); ?>">Künstliche Intelligenz</a></td>
                <td>3</td>
                <td>Übung</td>
                <td>F45</td>
                <td>Donnerstag, 12:00 - 14:00 Uhr</td>
                <td>Prof. Dr. Anna Meier</td>
            </tr>
            <tr>
                <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand . '/1'); ?>">Computergrafik</a></td>
                <td>2</td>
                <td>Prüfung</td>
                <td>HS11</td>
                <td>Freitag, 13:00 - 15:00 Uhr</td>
                <td>Prof. Dr. Peter Schwarz</td>
            </tr>
        </tbody>
    </table>
    </div>
    </div>


    <!-- Card mit der Veranstaltungstabelle, die standardmäßig die Übersicht anzeigt -->
    <?php else: ?>
        <div class="card">
        <div class="card-header bg-info text-white">
            <h3>Veranstaltungsübersicht</h3>
        </div>
        <div class="card-body">
            <!-- Veranstaltungen Tabelle -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Titel</th>
                        <th>SWS</th>
                        <th>Art</th>
                        <th>Raum</th>
                        <th>Wochentag</th>
                        <th>Professor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand . '/0'); ?>">Diskrete Strukturen</a></td>
                        <td>2</td>
                        <td>Vorlesung</td>
                        <td>F55</td>
                        <td>Montag, 14:00 - 16:00 Uhr</td>
                        <td>Prof. Dr. Benjamin Weyers</td>
                    </tr>
                    <tr>
                        <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand . '/0'); ?>">Lineare Algebra</a></td>
                        <td>3</td>
                        <td>Prüfung</td>
                        <td>HS12</td>
                        <td>Donnerstag, 16:00 - 18:00 Uhr</td>
                        <td>Prof. Dr. Maria Müller</td>
                    </tr>
                    <tr>
                        <td><a title="Veranstaltungdetails anzeigen" class="text-decoration-none text-dark" href="<?= base_url('Veranstaltung/index/' . $zustand . '/0'); ?>">Datenbanksysteme</a></td>
                        <td>2</td>
                        <td>Seminar</td>
                        <td>F42</td>
                        <td>Freitag, 10:00 - 12:00 Uhr</td>
                        <td>Prof. Dr. Markus Schmidt</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php endif; ?>

</div>

 
