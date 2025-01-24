<?php if ($building == 0): ?>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12 text-start">
                <p class="lead">Klicken Sie auf ein Gebäude oder einen Raum, um hineinzuzoomen.</p>
                <div class="position-relative">
                    <a href="<?= base_url('Gebauedeplan/index/' . $zustand . '/1'); ?>">
                        <img src="<?= base_url('public/full_gebaeude.png'); ?>" alt="Gebäudeplan" style="width: 60%; height: auto;">
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php else:?>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12 text-start">
                <p class="lead">Klicken Sie auf den Plan, um wieder rauszuzoomen.</p>
                <div class="position-relative">
                    <a href="<?= base_url('Gebauedeplan/index/' . $zustand . '/0'); ?>">
                        <img src="<?= base_url('public/part_gebaeude.png'); ?>" alt="Gebäudeplan" style="width: 60%; height: auto;">
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>