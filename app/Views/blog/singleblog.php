<?= $this->extend('templates/layout') ?>
<?= $this->section('styles') ?>
<!-- Linking to your custom CSS file for single blog -->
<link rel="stylesheet" href="<?= base_url("assets/css/singleblog.css") ?> ">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <!-- Blog Post Header -->
            <h1 class="text-center mb-4 display-4"><?= esc($blog['post_title']) ?></h1>
            <img src="/assets/image/divider.svg" class="divider img-fluid mx-auto d-block mb-4" />
            
            <!-- Blog Post Details -->
            <div class="card shadow-sm mb-4 blog-post">
                <!-- Blog Image -->
                <img src="<?= esc($blog['img_url']) ?>" alt="<?= esc($blog['slug']) ?>" class="card-img-top img-fluid rounded">
                
                <div class="card-body">
                    <!-- Date and Category -->
                    <p class="text-muted mb-2">
                        <small>
                            Posted on <?= date('F j, Y', strtotime($blog['updated_at'])) ?> | 
                            <span class="badge bg-secondary"><?= esc($blog['post_category']) ?></span>
                        </small>
                    </p>

                    <!-- Blog Content -->
                    <div class="mt-4">
                        <p class="lead"><?= esc($blog['post_content']) ?></p>
                    </div>
                    
                    <!-- Nepali Title and Content (if available) -->
                    <?php if (!empty($blog['post_title_nepali']) && !empty($blog['post_content_nepali'])) : ?>
                        <div class="mt-5">
                            <h3 class="mb-3"><?= esc($blog['post_title_nepali']) ?></h3>
                            <p><?= esc($blog['post_content_nepali']) ?></p>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Back to Blogs Button -->
                    <a href="<?= site_url('blog') ?>" class="btn btn-outline-primary mt-4">← Back to Blogs</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
