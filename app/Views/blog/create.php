<?= $this->extend('templates/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4>Create a New Blog Post</h4>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/blog/store') ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group mb-3">
                            <label for="post_title">Post Title</label>
                            <input type="text" name="post_title" class="form-control" placeholder="Enter post title" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="post_title_nepali">Post Title (Nepali)</label>
                            <input type="text" name="post_title_nepali" class="form-control" placeholder="नेपाली शीर्षक लेख्नुहोस्" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="post_content">Post Content</label>
                            <textarea name="post_content" class="form-control" rows="5" placeholder="Write your post content here" required></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="post_content_nepali">Post Content (Nepali)</label>
                            <textarea name="post_content_nepali" class="form-control" rows="5" placeholder="नेपाली सामग्री लेख्नुहोस्" required></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="post_category">Category</label>
                            <input type="text" name="post_category" class="form-control" placeholder="Enter post category" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" required>
                                <option value="draft">Draft</option>
                                <option value="published">Published</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="post_date">Post Date</label>
                            <input type="date" name="post_date" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="img_url">Upload Image</label>
                            <input type="file" name="img_url" class="form-control-file">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-100">Create Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
