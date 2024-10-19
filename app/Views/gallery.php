<?= $this->extend('templates/layout') ?>
<?= $this->section('styles') ?>
<!-- all css linking here  -->
<link rel="stylesheet" href="<?= base_url("assets/css/gallery.css") ?> ">

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- put html inside this  -->
<!-- Page Heading -->
<div class="container py-5">
  <h2 class="text-center mb-4">Photo Gallery</h2>
  <img src="/assets/image/divider.svg" class="divider img-fluid mx-auto d-block mb-5" />

  <!-- Category Buttons -->
  <div class="d-flex justify-content-center mb-4">
    <button class="btn btn-outline-primary mx-2" onclick="filterCategory('all')">All</button>
    <button class="btn btn-outline-primary mx-2" onclick="filterCategory('festival')">Festival</button>
    <button class="btn btn-outline-primary mx-2" onclick="filterCategory('temple')">Temple</button>
    <button class="btn btn-outline-primary mx-2" onclick="filterCategory('devotees')">Devotees</button>
  </div>

  <!-- Gallery Section -->
  <div class="row" id="gallery">
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 filter-item festival">
      <img src="/assets/image/gallery/festival1.webp" class="img-fluid" alt="Festival Image">
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 filter-item temple">
      <img src="/assets/image/gallery/temple1.webp" class="img-fluid" alt="Temple Image">
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 filter-item devotees">
      <img src="/assets/image/gallery/devotees1.webp" class="img-fluid" alt="Devotees Image">
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 filter-item festival">
      <img src="/assets/image/gallery/festival2.webp" class="img-fluid" alt="Festival Image">
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 filter-item temple">
      <img src="/assets/image/gallery/temple2.webp" class="img-fluid" alt="Temple Image">
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 filter-item devotees">
      <img src="/assets/image/gallery/devotees2.webp" class="img-fluid" alt="Devotees Image">
    </div>
  </div>
</div>

<script>
  function filterCategory(category) {
    var items = document.getElementsByClassName('filter-item');
    for (var i = 0; i < items.length; i++) {
      if (category === 'all') {
        items[i].style.display = 'block';
      } else if (items[i].classList.contains(category)) {
        items[i].style.display = 'block';
      } else {
        items[i].style.display = 'none';
      }
    }
  }
</script>


<?= $this->endSection() ?>
