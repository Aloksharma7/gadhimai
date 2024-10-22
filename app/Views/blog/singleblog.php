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
            <?php if (session()->get('language') === 'ne') : ?>
                <h1 class="text-center mb-4 display-4"><?= esc($blog['post_title_nepali']) ?></h1>
                <?php else: ?>
            <h1 class="text-center mb-4 display-4"><?= esc($blog['post_title']) ?></h1>
            <?php endif ?>
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
                    <?php if (session()->get('language') === 'ne') : ?>
                        <p class="lead"><?= esc($blog['post_content_nepali']) ?></p>
                        <?php else: ?>
                        <p class="lead"><?= esc($blog['post_content']) ?></p>
                        <?php endif ?>
                    </div>
                    
                    
                    <!-- Back to Blogs Button -->
                    <a href="<?= site_url('blog') ?>" class="btn btn-outline-primary mt-4">← Back to Blogs</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
