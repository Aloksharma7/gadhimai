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
                        <a class="nav-link active" aria-current="page" href="<?= base_url('admin/dashboard') ?>">
                            Dashboard Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/carousel') ?>">
                            Manage Carousel (<?= $carouselCount ?>)
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/events') ?>">
                            Manage Events (<?= $eventCount ?>)
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/blog') ?>">
                            Manage Blogs (<?= $blogCount ?>)
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/newsnotice') ?>">
                            Manage News Notices (<?= $newsNoticeCount ?>)
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/logout') ?>">
                            Logout
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

            <!-- Overview Cards -->
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Total Carousel Items</h5>
                            <h1 class="display-4"><?= $carouselCount ?></h1>
                            <a href="<?= base_url('admin/carousel') ?>" class="btn btn-primary">View Carousel</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Total Events</h5>
                            <h1 class="display-4"><?= $eventCount ?></h1>
                            <a href="<?= base_url('admin/events') ?>" class="btn btn-primary">View Events</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Total Blogs</h5>
                            <h1 class="display-4"><?= $blogCount ?></h1>
                            <a href="<?= base_url('admin/blog') ?>" class="btn btn-primary">View Blogs</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Total News Notices</h5>
                            <h1 class="display-4"><?= $newsNoticeCount ?></h1>
                            <a href="<?= base_url('admin/newsnotice') ?>" class="btn btn-primary">View News Notices</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Latest Items Section -->
            <h3 class="mb-3">Latest Carousel Items</h3>
            <div class="row mb-4">
                <?php foreach ($latestCarouselItems as $item): ?>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="<?= esc($item['image_url']) ?>" class="card-img-top" alt="<?= esc($item['title']) ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= esc($item['title']) ?></h5>
                                <p class="card-text"><?= esc($item['description']) ?></p>
                                <a href="<?= base_url('admin/carousel/edit/' . $item['id']) ?>" class="btn btn-warning">Edit</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <h3 class="mb-3">Latest Events</h3>
            <div class="row mb-4">
                <?php foreach ($latestEvents as $event): ?>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?= esc($event['event_title']) ?></h5>
                                <p class="card-text"><?= esc($event['event_description']) ?></p>
                                <a href="<?= base_url('admin/events/edit/' . $event['id']) ?>" class="btn btn-warning">Edit</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <h3 class="mb-3">Latest Blog Posts</h3>
            <div class="row mb-4">
                <?php foreach ($latestBlogs as $blog): ?>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?= esc($blog['post_title']) ?></h5>
                                <p class="card-text"><?= esc($blog['slug']) ?></p>
                                <a href="<?= base_url('admin/blog/edit/' . $blog['id']) ?>" class="btn btn-warning">Edit</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </main>
    </div>
</div>

<?= $this->endSection() ?>
