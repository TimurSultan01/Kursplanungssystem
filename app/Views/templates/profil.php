<?php if ($zustand == 1 && $bearbeiten == 0): ?>
    <div class="container mt-5">
    <?php if ($speichern == 1): ?>  
        <div id="infoBox" class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Hinweis!</strong> Ihre Änderungen wurden erfolgreich gespeichert!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-11">
                    <h2>Dein Studentenproflil</h2>
                </div>
                <div class="col-md-1 text-end">
                    <!-- Bearbeitungs-Icon -->
                    <a href="<?= base_url('Profil/index/'. $zustand . '/1'); ?>" title="Profil bearbeiten">
                        <i class="fa-solid fa-pen text-primary fs-4"></i>
                    </a>
                </div>
            </div>

            <!-- Name und Vorname -->
            <div class="mb-3">
                <p><strong>Name:</strong> Muster</p>
            </div>
            <div class="mb-3">
                <p><strong>Vorname:</strong> Max</p>
            </div>

            <!-- Geburtsdatum und Geburtsort -->
            <div class="mb-3">
                    <p><strong>Geburtsdatum:</strong> 01.01.2000</p>
            </div>
            <div class="mb-3">
                <p><strong>Geburtsort:</strong> 12345, Berlin, Deutschland</p>
            </div>

            <!-- Staatsangehörigkeit -->
            <div class="mb-3">
                <p><strong>Staatsangehörigkeit:</strong> Deutsch</p>
            </div>

            <!-- Geschlecht -->
            <div class="mb-3">
                <p><strong>Geschlecht:</strong> Männlich</p>
            </div>

            <!-- Adresse -->
            <div class="mb-3">
                <p><strong>Adresse:</strong> Musterstraße 1, 12345 Musterstadt</p>
            </div>

            <!-- Telefonnummer -->
            <div class="mb-3">
                <p><strong>Telefonnummer:</strong> +49 123 456789</p>
            </div>

            <!-- E-Mail -->
            <div class="mb-3">
                <p><strong>E-Mail:</strong> max.muster@student.uni.de</p>
            </div>
        </div>
    </div>
</div>


<?php elseif ($zustand == 1 && $bearbeiten == 1): ?> 
    <div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title mb-4">Dein Studentenprofil bearbeiten</h3>

            <!-- Name und Vorname -->
            <div class="mb-3">
                <label for="name" class="form-label"><strong>Name</strong></label>
                <input type="text" class="form-control" id="name" value="Muster" placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="vorname" class="form-label"><strong>Vorname</strong></label>
                <input type="text" class="form-control" id="vorname" value="Max" placeholder="Vorname">
            </div>

            <!-- Geburtsdatum und Geburtsort -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="geburtsdatum" class="form-label"><strong>Geburtsdatum</strong></label>
                    <input type="date" class="form-control" id="geburtsdatum" value="2000-01-01">
                </div>
                <div class="col-md-6">
                    <label for="geburtsort" class="form-label"><strong>Geburtsort</strong></label>
                    <input type="text" class="form-control" id="geburtsort" value="12345, Berlin, Deutschland" placeholder="PLZ, Ort, Land">
                </div>
            </div>

            <!-- Staatsangehörigkeit -->
            <div class="mb-3">
                <label for="staatsangehoerigkeit" class="form-label"><strong>Staatsangehörigkeit</strong></label>
                <input type="text" class="form-control" id="staatsangehoerigkeit" value="Deutsch" placeholder="Staatsangehörigkeit">
            </div>

            <!-- Geschlecht -->
            <div class="mb-3">
                <label for="geschlecht" class="form-label"><strong>Geschlecht</strong></label>
                <select class="form-select" id="geschlecht">
                    <option value="male" selected>Männlich</option>
                    <option value="female">Weiblich</option>
                    <option value="diverse">Divers</option>
                </select>
            </div>

            <!-- Adresse -->
            <div class="mb-3">
                <label for="adresse" class="form-label"><strong>Adresse</strong></label>
                <input type="text" class="form-control" id="adresse" value="Musterstraße 1, 12345 Musterstadt" placeholder="Adresse">
            </div>

            <!-- Telefonnummer -->
            <div class="mb-3">
                <label for="telefonnummer" class="form-label"><strong>Telefonnummer</strong></label>
                <input type="text" class="form-control" id="telefonnummer" value="+49 123 456789" placeholder="Telefonnummer">
            </div>

            <!-- E-Mail -->
            <div class="mb-3">
                <label for="email" class="form-label"><strong>E-Mail</strong></label>
                <input type="email" class="form-control" id="email" value="max.muster@student.uni.de" placeholder="E-Mail">
            </div>
        </div>

        <!-- Card Footer mit Buttons -->
        <div class="card-footer d-flex justify-content-between">
            <!-- Speichern-Button -->
            <button class="btn btn-success" onclick="showSpeichernModal(event)">Speichern</button>

            <!-- Abbrechen-Button -->
            <a href="<?= base_url('Profil/index/' . $zustand . '/0'); ?>" class="btn btn-secondary">Abbrechen</a>
        </div>
    </div>

    <!-- Modal für die Bestätigung des Speicherns -->
    <div class="modal fade" id="speicherModal" tabindex="-1" aria-labelledby="speicherModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="speicherModalLabel">Speichern bestätigen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Möchten Sie Ihre Änderungen wirklich Speichern?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Abbrechen</button>
                    <a href="<?= base_url('Profil/index/' . $zustand . '/0' . '/1'); ?>" class="btn btn-success">Speichern</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php elseif ($zustand == 2 && $bearbeiten == 0): ?> 
<div class="container mt-5">
    <?php if ($speichern == 1): ?>  
        <div id="infoBox" class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Hinweis!</strong> Ihre Änderungen wurden erfolgreich gespeichert!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-body">
            <!-- Professorenbild und Name -->
            <div class="row">
                <div class="col-md-2">
                    <img src="<?= base_url('public/prof.jpg'); ?>" alt="Professorenbild" class="img-fluid mb-3" style="width: 150px; height: 150px;">
                </div>
                <div class="col-md-9">
                    <h2>Prof. Dr. Benjamin Weyers</h2>
                    <p><strong>Raum:</strong> F55</p>
                </div>
                <div class="col-md-1 text-end">
                    <!-- Bearbeitungs-Icon -->
                    <a href="<?= base_url('Profil/index/'. $zustand . '/1'); ?>" title="Profil bearbeiten">
                        <i class="fa-solid fa-pen text-primary fs-4"></i>
                    </a>
                </div>
            </div>

            <!-- Sprechzeiten -->
            <div class="mt-4">
                <h4>Sprechzeiten:</h4>
                <p>Montags und Mittwochs, 14:00 - 16:00 Uhr</p>
            </div>

            <!-- Kurse -->
            <div class="mt-4">
                <h4>Kurse:</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="<?= base_url('Veranstaltung/index/' . $zustand); ?>" class="text-decoration-none">
                            Diskrete Strukturen
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?= base_url('Veranstaltung/index/' . $zustand); ?>" class="text-decoration-none">
                            Lineare Algebra
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?= base_url('Veranstaltung/index/' . $zustand); ?>" class="text-decoration-none">
                            Mathematik für Informatiker
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<?php elseif ($zustand == 2 && $bearbeiten == 1): ?> 
    <div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <!-- Professorenbild und Name -->
            <div class="row">
                <div class="col-md-2 position-relative">
                    <img src="<?= base_url('public/prof.jpg'); ?>" alt="Professorenbild" class="img-fluid mb-3" style="width: 150px; height: 150px;">
                    <!-- Symbol für Bild ändern -->
                    <i class="fa-solid fa-camera position-absolute text-primary fs-4" style="bottom: 10px; right: 10px; cursor: pointer;" title="Bild ändern"></i>
                </div>
                <div class="col-md-10">
                    <h4>Name:</h4>
                    <input type="text" class="form-control mb-3" value="Prof. Dr. Benjamin Weyers">
                    <h4>Raum:</h4>
                    <input type="text" class="form-control mb-3" value="F55">
                </div>
            </div>

            <!-- Sprechzeiten -->
            <div class="mt-4">
                <h4>Sprechzeiten:</h4>
                <textarea class="form-control mb-3" rows="3">Montags und Mittwochs, 14:00 - 16:00 Uhr</textarea>
            </div>

            <!-- Kurse -->
            <div class="mt-4">
                <h4>Kurse:</h4>
                <div id="kurse-container">
                    <!-- Beispielkurs 1 -->
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" value="Diskrete Strukturen">
                        <button class="btn btn-danger remove-course-btn" type="button" title="Kurs entfernen"> 
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                    <!-- Beispielkurs 2 -->
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" value="Lineare Algebra">
                        <button class="btn btn-danger remove-course-btn" type="button" title="Kurs entfernen"> 
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                    <!-- Beispielkurs 3 -->
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" value="Mathematik für Informatiker">
                        <button class="btn btn-danger remove-course-btn" type="button" title="Kurs entfernen"> 
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </div>
                <!-- Button zum Kurs hinzufügen -->
                <button id="add-course-btn" class="btn btn-primary mt-2" type="button">
                    <i class="fa-solid fa-plus"></i> Kurs hinzufügen
                </button>
            </div>
        </div>

        <!-- Card Footer mit Buttons -->
        <div class="card-footer d-flex justify-content-between">
            <!-- Speichern-Button -->
            <button class="btn btn-success" onclick="showSpeichernModal(event)">Speichern</button>

            <!-- Abbrechen-Button -->
            <a href="<?= base_url('Profil/index/' . $zustand); ?>" class="btn btn-secondary">Abbrechen</a>
        </div>
    </div>

    <!-- Modal für die Bestätigung des Speicherns -->
    <div class="modal fade" id="speicherModal" tabindex="-1" aria-labelledby="speicherModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="speicherModalLabel">Speichern bestätigen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Möchten Sie Ihre Änderungen wirklich Speichern?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Abbrechen</button>
                    <a href="<?= base_url('Profil/index/' . $zustand . '/0' . '/1'); ?>" class="btn btn-success">Speichern</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php endif; ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const kurseContainer = document.getElementById('kurse-container');
        const addCourseBtn = document.getElementById('add-course-btn');

        // Kurs hinzufügen
        addCourseBtn.addEventListener('click', () => {
            const newCourseInput = document.createElement('div');
            newCourseInput.classList.add('input-group', 'mb-2');
            newCourseInput.innerHTML = `
                <input type="text" class="form-control" placeholder="Neuer Kurs">
                <button class="btn btn-danger remove-course-btn" type="button" title="Kurs entfernen">
                    <i class="fa-solid fa-trash"></i>
                </button>
            `;
            kurseContainer.appendChild(newCourseInput);

            // Event Listener für neuen "Kurs entfernen"-Button
            newCourseInput.querySelector('.remove-course-btn').addEventListener('click', function () {
                this.parentElement.remove();
            });
        });

        // Kurs entfernen
        document.querySelectorAll('.remove-course-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                this.parentElement.remove();
            });
        });
    });

    function showSpeichernModal(event) {
    event.preventDefault();
    var anmeldeModal = new bootstrap.Modal(document.getElementById('speicherModal'));
    anmeldeModal.show();
    }
</script>