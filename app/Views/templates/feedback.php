<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Feedback und Fehler melden</h3>
        </div>
        <div class="card-body">
            <form>
                <!-- Dropdown zur Auswahl der Art des Feedbacks -->
                <div class="mb-3">
                    <label for="feedbackType" class="form-label"><strong>Art des Feedbacks:</strong></label>
                    <select class="form-select" id="feedbackType">
                        <option value="Fehler">Fehler melden</option>
                        <option value="Vorschlag">Vorschlag einreichen</option>
                        <option value="Allgemein">Allgemeines Feedback</option>
                    </select>
                </div>

                <!-- Textfeld für das Feedback -->
                <div class="mb-3">
                    <label for="feedbackText" class="form-label"><strong>Ihr Feedback:</strong></label>
                    <textarea class="form-control" id="feedbackText" rows="5" placeholder="Bitte geben Sie Ihr Feedback oder die Beschreibung des Fehlers ein."></textarea>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">
                        <i class="fa-solid fa-paper-plane"></i> Senden
                    </button>
                    <button type="reset" class="btn btn-secondary">
                         Abbrechen
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
