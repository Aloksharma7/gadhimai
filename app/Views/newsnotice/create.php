<?= $this->extend('templates/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4>Create a New News/Notice</h4>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/newsnotice/store') ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group mb-3">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter title" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="title_nepali">Title (Nepali)</label>
                            <input type="text" name="title_nepali" class="form-control" placeholder="नेपाली शीर्षक लेख्नुहोस्" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="content">Content</label>
                            <textarea name="content" class="form-control" rows="5" placeholder="Write the content here" required></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="content_nepali">Content (Nepali)</label>
                            <textarea name="content_nepali" class="form-control" rows="5" placeholder="नेपाली सामग्री लेख्नुहोस्" required></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="category">Category</label>
                            <input type="text" name="category" class="form-control" placeholder="Enter category" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" required>
                                <option value="draft">Draft</option>
                                <option value="published">Published</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="news_notice_date">news /Notice Date</label>
                            <input type="date" name="news_notice_date" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="img_url">Upload Image</label>
                            <input type="file" name="img_url" class="form-control-file">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-100">Create News/Notice</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
