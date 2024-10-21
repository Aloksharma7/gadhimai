<?= $this->extend('templates/layout') ?>
<?= $this->section('content') ?>



<div class="container mt-5">
    
    <h3>Create a New Blog Post</h3>
    <form action="/admin/posts/create" method="post" enctype="multipart/form-data">
        <!-- Title -->
        <div class="mb-3">
            <label for="post_title" class="form-label">Post Title</label>
            <input type="text" class="form-control" id="post_title" name="post_title" placeholder="Enter title" required>
        </div>

        <!-- Content (CKEditor) -->
        <div class="mb-3">
            <label for="post_content" class="form-label">Post Content</label>
            <textarea id="editor" name="post_content" required></textarea>
        </div>

        <!-- Image Upload (Multiple) -->
        <div class="mb-3">
            <label for="post_images" class="form-label">Upload Images</label>
            <input type="file" class="form-control" id="post_images" name="post_images[]" multiple>
        </div>

        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>


<?= $this->endSection() ?>
