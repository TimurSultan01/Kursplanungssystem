<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Bewerbung/Immatrikulation</h3>
        </div>
        <div class="card-body">
            <form id="applicationForm">
                <!-- Name und Vorname -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="lastName" class="form-label"><strong>Nachname:</strong></label>
                        <input type="text" class="form-control" id="lastName" placeholder="Ihr Nachname" required>
                    </div>
                    <div class="col-md-6">
                        <label for="firstName" class="form-label"><strong>Vorname:</strong></label>
                        <input type="text" class="form-control" id="firstName" placeholder="Ihr Vorname" required>
                    </div>
                </div>

                <!-- Geburtsdatum und Geburtsort -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="dob" class="form-label"><strong>Geburtsdatum:</strong></label>
                        <input type="date" class="form-control" id="dob" required>
                    </div>
                    <div class="col-md-6">
                        <label for="birthPlace" class="form-label"><strong>Geburtsort (Land):</strong></label>
                        <input type="text" class="form-control" id="birthPlace" placeholder="Land" required>
                    </div>
                </div>

                <!-- Staatsangehörigkeit -->
                <div class="mb-3">
                    <label for="nationality" class="form-label"><strong>Staatsangehörigkeit:</strong></label>
                    <input type="text" class="form-control mb-2" id="nationality" placeholder="Ihre Staatsangehörigkeit" required>
                    <input type="text" class="form-control" id="secondNationality" placeholder="Zweite Staatsangehörigkeit (falls vorhanden)">
                </div>

                <!-- Geschlecht -->
                <div class="mb-3">
                    <label for="gender" class="form-label"><strong>Geschlecht:</strong></label>
                    <select class="form-select" id="gender" required>
                        <option value="" disabled selected>Wählen Sie Ihr Geschlecht</option>
                        <option value="male">Männlich</option>
                        <option value="female">Weiblich</option>
                        <option value="diverse">Divers</option>
                    </select>
                </div>

                <!-- Adresse -->
                <div class="mb-3">
                    <label for="address" class="form-label"><strong>Adresse:</strong></label>
                    <input type="text" class="form-control mb-2" id="street" placeholder="Straße und Hausnummer" required>
                    <input type="text" class="form-control mb-2" id="addressPLZ" placeholder="PLZ" required>
                    <input type="text" class="form-control" id="addressCity" placeholder="Ort" required>
                </div>

                <!-- Telefonnummer und E-Mail -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="phone" class="form-label"><strong>Telefonnummer:</strong></label>
                        <input type="tel" class="form-control" id="phone" placeholder="Ihre Telefonnummer" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label"><strong>E-Mail:</strong></label>
                        <input type="email" class="form-control" id="email" placeholder="Ihre E-Mail-Adresse" required>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-begin">
                    <button type="submit" class="btn btn-success">
                        Absenden
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Bestätigung</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Schließen"></button>
            </div>
            <div class="modal-body">
                Ihre Bewerbung wurde erfolgreich gesendet. Eine Bestätigungsmail wurde an die angegebene E-Mail-Adresse geschickt.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info text-white">
                    <i class="fa-solid fa-paper-plane text-white"></i> Nochmals senden
                </button>
                <a href="<?= base_url('Immatrikulation/login/' . '0'); ?>" class="btn btn-success">
                    <i class="fa-solid fa-arrow-right"></i> Weiter
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('applicationForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var modal = new bootstrap.Modal(document.getElementById('confirmationModal'));
        modal.show();
    });
</script>
