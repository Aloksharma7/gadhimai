<?= $this->extend('templates/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm rounded">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Update News/Notice</h4>
                </div>
                <div class="card-body">
                    <!-- News/Notice Update Form -->
                    <form action="<?= base_url('admin/newsnotice/update/' . $newsnotice['id']) ?>" method="post" enctype="multipart/form-data">
    
                        <!-- News/Notice Title (English) -->
                        <div class="mb-3">
                            <label for="title" class="form-label">News/Notice Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="<?= esc($newsnotice['title']) ?>" required>
                        </div>

                        <!-- News/Notice Title (Nepali) -->
                        <div class="mb-3">
                            <label for="title_nepali" class="form-label">News/Notice Title (Nepali)</label>
                            <input type="text" name="title_nepali" id="title_nepali" class="form-control" value="<?= esc($newsnotice['title_nepali']) ?>" required>
                        </div>

                        <!-- News/Notice Content (English) -->
                        <div class="mb-3">
                            <label for="content" class="form-label">News/Notice Content</label>
                            <textarea name="content" id="content" class="form-control" rows="6" required><?= esc($newsnotice['content']) ?></textarea>
                        </div>

                        <!-- News/Notice Content (Nepali) -->
                        <div class="mb-3">
                            <label for="content_nepali" class="form-label">News/Notice Content (Nepali)</label>
                            <textarea name="content_nepali" id="content_nepali" class="form-control" rows="6" required><?= esc($newsnotice['content_nepali']) ?></textarea>
                        </div>

                        <!-- Category -->
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" name="category" id="category" class="form-control" value="<?= esc($newsnotice['category']) ?>" required>
                        </div>

                        <!-- Status -->
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select" required>
                                <option value="draft" <?= $newsnotice['status'] == 'draft' ? 'selected' : '' ?>>Draft</option>
                                <option value="published" <?= $newsnotice['status'] == 'published' ? 'selected' : '' ?>>Published</option>
                            </select>
                        </div>

                        <!-- Image Upload Section -->
                        <div class="mb-3">
                            <label for="img_url" class="form-label">Current Image</label><br>
                            <img src="<?= esc($newsnotice['img_url']) ?>" alt="Current Image" class="img-thumbnail mb-3" width="150"><br>

                            <label for="img_url" class="form-label">Upload New Image (optional)</label>
                            <input type="file" name="img_url" id="img_url" class="form-control">
                            <input type="hidden" name="current_img_url" value="<?= esc($newsnotice['img_url']) ?>">
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Update News/Notice</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
