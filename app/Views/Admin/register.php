<?= $this->extend('templates/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Bootstrap card for styling -->
            <div class="card shadow-lg">
                <div class="card-body p-4">
                    <h3 class="card-title text-center mb-4">Register Form</h3>
                    <form action="register" method="post">
                        <!-- Username input field -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                        </div>
                        <!-- Email input field -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email">
                        </div>
                        <!-- Password input field -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                        </div>
                        <?php if (isset($validation)): ?>
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <?= $validation->listErrors() ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>

                    <!-- Link to login page -->
                    <div class="mt-3 text-center">
                        <p>Already have an account? <a href="/admin/login">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
