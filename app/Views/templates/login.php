<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Login</h3>
                </div>
                <div class="card-body">
                    <form id="loginForm">
                        <!-- Benutzername -->
                        <div class="mb-3">
                            <label for="username" class="form-label"><strong>Benutzername:</strong></label>
                            <input type="text" class="form-control" id="username" placeholder="Benutzername eingeben" required>
                        </div>

                        <!-- Passwort -->
                        <div class="mb-3">
                            <label for="password" class="form-label"><strong>Passwort:</strong></label>
                            <input type="password" class="form-control" id="password" placeholder="Passwort eingeben" required>
                        </div>

                        <!-- Login Button -->
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url('Tutorial/index/1'); ?>" class="btn btn-primary">
                                <i class="fa-solid fa-sign-in-alt"></i> Login
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>