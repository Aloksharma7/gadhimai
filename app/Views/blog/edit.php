<?= $this->extend('templates/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm rounded">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Update Blog Post</h4>
                </div>
                <div class="card-body">
                    <!-- Blog Post Update Form -->
                    <form action="<?= base_url('admin/blog/update/' . $post['id']) ?>" method="post" enctype="multipart/form-data">
    

                        <!-- Post Title (English) -->
                        <div class="mb-3">
                            <label for="post_title" class="form-label">Post Title</label>
                            <input type="text" name="post_title" id="post_title" class="form-control" value="<?= esc($post['post_title']) ?>" required>
                        </div>

                        <!-- Post Title (Nepali) -->
                        <div class="mb-3">
                            <label for="post_title_nepali" class="form-label">Post Title (Nepali)</label>
                            <input type="text" name="post_title_nepali" id="post_title_nepali" class="form-control" value="<?= esc($post['post_title_nepali']) ?>" required>
                        </div>

                        <!-- Post Content (English) -->
                        <div class="mb-3">
                            <label for="post_content" class="form-label">Post Content</label>
                            <textarea name="post_content" id="post_content" class="form-control" rows="6" required><?= esc($post['post_content']) ?></textarea>
                        </div>

                        <!-- Post Content (Nepali) -->
                        <div class="mb-3">
                            <label for="post_content_nepali" class="form-label">Post Content (Nepali)</label>
                            <textarea name="post_content_nepali" id="post_content_nepali" class="form-control" rows="6" required><?= esc($post['post_content_nepali']) ?></textarea>
                        </div>

                        <!-- Post Category -->
                        <div class="mb-3">
                            <label for="post_category" class="form-label">Category</label>
                            <input type="text" name="post_category" id="post_category" class="form-control" value="<?= esc($post['post_category']) ?>" required>
                        </div>

                        <!-- Post Status -->
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select" required>
                                <option value="draft" <?= $post['status'] == 'draft' ? 'selected' : '' ?>>Draft</option>
                                <option value="published" <?= $post['status'] == 'published' ? 'selected' : '' ?>>Published</option>
                            </select>
                        </div>

                        <!-- Image Upload Section -->
                        <div class="mb-3">
                            <label for="img_url" class="form-label">Current Image</label><br>
                            <img src="<?= esc($post['img_url']) ?>" alt="Current Image" class="img-thumbnail mb-3" width="150"><br>

                            <label for="img_url" class="form-label">Upload New Image (optional)</label>
                            <input type="file" name="img_url" id="img_url" class="form-control">
                            <input type="hidden" name="current_img_url" value="<?= esc($post['img_url']) ?>">
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Update Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
