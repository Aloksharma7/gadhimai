<?= $this->extend('templates/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4>Create Carousel Item</h4>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/carousel/store') ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group mb-3">
                            <label for="image_url" class="form-label">Image Upload</label>
                            <input type="file" name="image_url" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter title" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="4" placeholder="Enter description" required></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-100">Create Carousel Item</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
