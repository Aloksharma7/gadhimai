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
                        <button type="submit" class="btn btn-primary btn-block">Login
                        <svg id="MDI_arrow-left-thin-circle-outline" data-name="MDI / arrow-left-thin-circle-outline" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                        <g id="Boundary" fill="#FFAF42" stroke="rgba(0,0,0,0)" stroke-width="1" opacity="0">
                            <rect width="22" height="22" stroke="none"/>
                            <rect x="0.5" y="0.5" width="21" height="21" fill="none"/>
                        </g>
                        <path id="Path_arrow-left-thin-circle-outline" data-name="Path / arrow-left-thin-circle-outline" d="M18.528,11.167a7.361,7.361,0,1,1-7.361-7.361,7.39,7.39,0,0,1,7.361,7.361m1.806,0a9.167,9.167,0,1,0-9.167,9.167,9.147,9.147,0,0,0,9.167-9.167m-7.755-.917V7.5l3.63,3.667-3.63,3.667v-2.75H6.125V10.25" transform="translate(-0.167 -0.167)" fill="#FFAF42"/>
                        </svg>
                        </button>
                    </form>

                    <!-- Link to login page -->
                    <div class="mt-3 text-center ">
                        <p>Don't have account ?  <a href="/admin/register" class="login">Register here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>