<?= $this->extend('templates/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <!-- Bootstrap card for styling -->
            <div class="card shadow-lg">
                <div class="card-body p-4">
                    <h3 class="card-title text-center mb-4">Login Form</h3>
                    <form action="login" method="post">
                        <!-- Email input field -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter your email">
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
                        <p>Don't have account ?  <a href="/admin/register">Register here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>