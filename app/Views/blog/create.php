<?= $this->extend('templates/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h3>Create a New Post</h3>

    <form action="/admin/blog/store" method="post">
        <div class="mb-3">
            <label for="post_title" class="form-label">Title</label>
            <input type="text" class="form-control" id="post_title" name="post_title" required>
        </div>

        <div class="mb-3">
            <label for="post_content" class="form-label">Content</label>
            <textarea class="form-control" id="post_content" name="post_content" rows="5" required></textarea>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" id="category" name="category">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status">
                <option value="draft">Draft</option>
                <option value="published">Published</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>

<?= $this->endSection() ?>
