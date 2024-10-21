<?= $this->extend('templates/layout') ?>
<?= $this->section('styles') ?>
<!-- Linking to your custom CSS file for single news/notice -->
<link rel="stylesheet" href="<?= base_url("assets/css/singlenewsnotice.css") ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <!-- News/Notice Header -->
            <h1 class="text-center mb-4 display-4"><?= esc($newsnotice['title']) ?></h1>
            <img src="/assets/image/divider.svg" class="divider img-fluid mx-auto d-block mb-4" />
            
            <!-- News/Notice Details -->
            <div class="card shadow-sm mb-4 news-notice-post">
                <!-- News/Notice Image -->
                <img src="<?= esc($newsnotice['img_url']) ?>" alt="<?= esc($newsnotice['slug']) ?>" class="card-img-top img-fluid rounded">
                
                <div class="card-body">
                    <!-- Date and Category -->
                    <p class="text-muted mb-2">
                        <small>
                            Posted on <?= date('F j, Y', strtotime($newsnotice['updated_at'])) ?> | 
                            <span class="badge bg-secondary"><?= esc($newsnotice['category']) ?></span>
                        </small>
                    </p>

                    <!-- News/Notice Content -->
                    <div class="mt-4">
                        <p class="lead"><?= esc($newsnotice['content']) ?></p>
                    </div>
                    
                    <!-- Nepali Title and Content (if available) -->
                    <?php if (!empty($newsnotice['title_nepali']) && !empty($newsnotice['post_content_nepali'])) : ?>
                        <div class="mt-5">
                            <h3 class="mb-3"><?= esc($newsnotice['title_nepali']) ?></h3>
                            <p><?= esc($newsnotice['content_nepali']) ?></p>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Back to News/Notices Button -->
                    <a href="<?= site_url('newsnotice') ?>" class="btn btn-outline-primary mt-4">← Back to News/Notices</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
