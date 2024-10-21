<?= $this->extend('templates/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h2>Edit Carousel Item</h2>

    <!-- Display the current image if available -->
    <div class="mb-3">
        <label for="current_image" class="form-label">Current Image</label>
        <?php if (!empty($carouselItem['image_url'])): ?>
            <img src="<?= $carouselItem['image_url'] ?>" alt="Current Image" class="img-fluid mb-3" style="max-height: 200px;">
        <?php else: ?>
            <p>No current image available.</p>
        <?php endif; ?>
    </div>

    <form action="<?= base_url('admin/carousel/update/' . $carouselItem['id']) ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="image_url" class="form-label">Image Upload (Leave blank if not changing)</label>
            <input type="file" name="image_url" class="form-control">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="<?= esc($carouselItem['title']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3" required><?= esc($carouselItem['description']) ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Carousel Item</button>
    </form>
</div>

<?= $this->endSection() ?>
