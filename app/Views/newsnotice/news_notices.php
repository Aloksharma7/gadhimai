<?= $this->extend('templates/layout') ?>
<?= $this->section('styles') ?>
<!-- all css linking here  -->
<link rel="stylesheet" href="<?= base_url("assets/css/newsnotice.css") ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- News/Notices Section -->
<div class="container py-5">
  <h2 class="text-center mb-4 heading"><?= lang('General.news_notice') ?></h2>
  <img src="/assets/image/divider.svg" class="divider img-fluid mx-auto d-block mb-5" />

  <!-- News/Notices List -->
  <div class="row justify-content-center">
    <?php if (!empty($newsnotices)) : ?>
      <?php foreach ($newsnotices as $newsnotice) : ?>
        <div class="col-lg-3 col-md-6 col-10 mb-4">
          <div class="card h-100 shadow">
            <div class="card-body newsnotice-body">
              <img src="<?= esc($newsnotice['img_url']) ?>" alt="<?= esc($newsnotice['slug']) ?>" class="rounded mb-2">
              <span class="badge text-bg-secondary mb-1"><?= esc($newsnotice['category']) ?></span>
              <?php if (session()->get('language') === 'ne'): ?>
                <h5 class="card-title"><?= esc($newsnotice['title_nepali']) ?></h5>
                <p class="card-text">
                  <?php
                  // Show a short snippet (first 100 characters or 20 words)
                  helper('text'); // Load CodeIgniter text helper
                  echo word_limiter(esc($newsnotice['content_nepali']), 20); // Adjust number of words as needed
                  ?>
                  ...
                </p>
              <?php else: ?>
                <h5 class="card-title"><?= esc($newsnotice['title']) ?></h5>
                <p class="card-text">
                  <?php
                  // Show a short snippet (first 100 characters or 20 words)
                  helper('text'); // Load CodeIgniter text helper
                  echo word_limiter(esc($newsnotice['content']), 20); // Adjust number of words as needed
                  ?>
                  ...
                </p>
              <?php endif ?>
              <small class="text-body-secondary ms-1">
                <?php
                // Format the date (e.g., January 1, 2024)
                echo date('F j, Y', strtotime($newsnotice['updated_at']));
                ?>
              </small>
              <a href="<?= site_url('newsnotice/view/' . $newsnotice['slug']) ?>" class="btn btn-outline-primary mt-1">Read More</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else : ?>
      <p class="text-center">No news/notices found.</p>
    <?php endif; ?>
  </div>
</div>

<?= $this->endSection() ?>
