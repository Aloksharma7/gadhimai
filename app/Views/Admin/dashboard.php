<?= $this->extend('templates/layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar shadow">
            <div class="position-sticky pt-3">
                <h4 class="sidebar-heading">Dashboard</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            Dashboard Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Add Data
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            View Entries
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Settings
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Welcome, <?= session()->get('email'); ?></h1>
            </div>

            <!-- Form to Add Data -->
            <div class="card shadow">
                <div class="card-body">
                    <h3>Add New Data</h3>
                    <form action="/admin/addData" method="post">
                        <!-- English Field -->
                        <div class="mb-3">
                            <label for="dataEnglish" class="form-label">Data (English)</label>
                            <input type="text" class="form-control" id="dataEnglish" name="data_english" placeholder="Enter data in English" required>
                        </div>
                        <!-- Nepali Field -->
                        <div class="mb-3">
                            <label for="dataNepali" class="form-label">Data (Nepali)</label>
                            <input type="text" class="form-control" id="dataNepali" name="data_nepali" placeholder="Enter data in Nepali" required>
                        </div>
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>

<?= $this->endSection() ?>
