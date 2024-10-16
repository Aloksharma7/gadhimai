<?= $this->extend('templates/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h3>Edit Post</h3>

    <form action="/blog/update/<?= $post['id']; ?>" method="post">
        <div class="mb-3">
            <label for="post_title" class="form-label">Title</label>
            <input type="text" class="form-control" id="post_title" name="post_title" value="<?= $post['post_title']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="post_content" class="form-label">Content</label>
            <textarea class="form-control" id="post_content" name="post_content" rows="5" required><?= $post['post_content']; ?></textarea>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" id="category" name="category" value="<?= $post['category']; ?>">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status">
                <option value="draft" <?= $post['status'] == 'draft' ? 'selected' : ''; ?>>Draft</option>
                <option value="published" <?= $post['status'] == 'published' ? 'selected' : ''; ?>>Published</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>

<?= $this->endSection() ?>
