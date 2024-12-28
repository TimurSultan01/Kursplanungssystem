<?php if ($zustand != 0): ?>
    
<?php else: ?> 
    <div class="container-fluid">
    <div class="row">
        <!-- Linke Spalte: Navigation -->
        <div class="col-md-4 bg-light p-4">
            <h3>Startseite Navigation</h3>
            <div class="accordion" id="accordionExample">
                <!-- Menüpunkt 1: Bewerbung -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Bewerbung
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li><a href="#">Bewerbung Übersicht</a></li>
                                <li><a href="#">Bewerbungsprozess starten</a></li>
                                <li><a href="#">Bewerbungsdaten vergessen</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Menüpunkt 2: Studienangebot -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Studienangebot
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li><a href="#">Studiengang A</a></li>
                                <li><a href="#">Studiengang B</a></li>
                                <li><a href="#">Studiengang C</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Menüpunkt 3: Weitere Links -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Weitere Links
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li><a href="#">Studip</a></li>
                                <li><a href="#">Kursangebote</a></li>
                                <li><a href="#">ZIMK</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tutorial Button -->
            <div class="mt-4">
                <a href="#" class="btn btn-info w-100">Tutorial ansehen</a>
            </div>
        </div>

        <!-- Rechte Spalte: Inhalte -->
        <div class="col-md-8 p-4">
            <h3>Willkommen zur Startseite</h3>
            <p>Hier kannst du wichtige Informationen und Aktionen durchführen:</p>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bewerbungsprozess starten</h5>
                    <p class="card-text">Klicke hier, um den Bewerbungsprozess zu starten und mehr über die Anforderungen zu erfahren.</p>
                    <a href="#" class="btn btn-primary">Bewerbung starten</a>
                </div>
            </div>

            <div class="mt-4">
                <h5>Hast du deine Bewerbungsdaten vergessen?</h5>
                <p>Falls du deine Bewerbungsdaten vergessen hast, kannst du hier deine Informationen zurücksetzen.</p>
                <a href="#" class="btn btn-warning">Daten zurücksetzen</a>
            </div>

            <div class="mt-4">
                <h5>Hast du deine ZIMK-Kennung vergessen?</h5>
                <p>Wenn du deine ZIMK-Kennung vergessen hast, kannst du hier Hilfe anfordern.</p>
                <a href="#" class="btn btn-danger">ZIMK-Kennung zurücksetzen</a>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>