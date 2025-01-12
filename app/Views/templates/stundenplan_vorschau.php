<div class="container mt-5">
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead class="bg-primary text-white">
                <tr>
                    <th>Zeit</th>
                    <th>Montag</th>
                    <th>Dienstag</th>
                    <th>Mittwoch</th>
                    <th>Donnerstag</th>
                    <th>Freitag</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $startTime = 8; 
                $endTime = 20; 
                for ($hour = $startTime; $hour < $endTime; $hour += 2): 
                ?>
                <tr>
                    <td><strong><?= $hour ?>:00 - <?= $hour + 2 ?>:00</strong></td>
                    <td>
                        <?php if ($hour == 12): ?>
                            <div class="bg-info text-white p-2 rounded">
                                <span class="badge bg-info">V</span>
                                <strong>Diskrete Strukturen</strong><br>
                                Raum: F55<br>
                                Prof. Dr. Weyers<br>
                            </div>
                        <?php endif; ?>
                        <?php if ($hour == 14): ?>
                                <div class="bg-primary text-white p-2 rounded">
                                    <span class="badge bg-primary">VL</span>
                                    <strong>Datenbanksysteme</strong><br>
                                    Raum: F55<br>
                                    Prof. Dr. Weyers<br>
                                </div>
                            </a>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if ($hour == 8): ?>
                                <div class="bg-success text-white p-2 rounded">
                                    <span class="badge bg-success">SE</span>
                                    <strong>Proseminar</strong><br>
                                    Raum: S1<br>
                                    Prof. Dr. Weyers<br>
                                </div>
                            </a>
                        <?php endif; ?>
                    </td>
                    <td></td>
                    <td>
                        <?php if ($hour == 16): ?>
                                <div class="bg-danger text-white p-2 rounded">
                                    <span class="badge bg-danger">PR</span>
                                    <strong>Datenbanksysteme</strong><br>
                                    Raum: HS12<br>
                                    Prof. Dr. Weyers<br>
                                    15.03.2025<br>
                                </div>
                            </a>
                        <?php endif; ?>
                    </td>
                    <td></td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>

    <div class="mt-3 d-flex justify-content-between align-items-center mb-4">
    <!-- Legende -->
        <div>
            <h4>Legende:</h4>
            <ul class="list-inline mb-0">
                <li class="list-inline-item">
                    <span class="badge bg-primary">VL</span> Vorlesung
                </li>
                <li class="list-inline-item">
                    <span class="badge bg-success">SE</span> Seminar
                </li>
                <li class="list-inline-item">
                    <span class="badge bg-danger">PR</span> Prüfung
                </li>
                <li class="list-inline-item">
                    <span class="badge bg-warning">UE</span> Übung
                </li>
                <li class="list-inline-item">
                    <span class="badge bg-info">V</span> Vorschau
                </li>
            </ul>
        </div>
        <div>
            <a href="<?= base_url('Veranstaltung/index/' . $zustand); ?>" class="btn btn-info">Vorschau beenden</a>
        </div>
    </div>
</div>
