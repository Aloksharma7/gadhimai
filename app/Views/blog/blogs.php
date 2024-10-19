<?= $this->extend('templates/layout') ?>
<?= $this->section('styles') ?>
<!-- all css linking here  -->
<link rel="stylesheet" href="<?= base_url("assets/css/blogs.css") ?> ">

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- put html inside this  -->
<div class="container py-5">
  <h2 class="text-center mb-4">Blog</h2>
  <img src="/assets/image/divider.svg" class="divider img-fluid mx-auto d-block mb-5" />

  <!-- Blog List Section -->
  <div class="row">
    <?php if (!empty($blogs)) : ?>
      <?php foreach ($blogs as $blog) : ?>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100 shadow">
            <div class="card-body">
              <h5 class="card-title"><?= esc($blog['post_title']) ?></h5>
              <p class="card-text"><?= esc($blog['post_content']) ?></p>
              <a href="<?= site_url('blog/view/' . $blog['slug']) ?>" class="btn btn-outline-primary">Read More</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else : ?>
      <p class="text-center">No blog posts found.</p>
    <?php endif; ?>
  </div>
</div>

<?= $this->endSection() ?>
