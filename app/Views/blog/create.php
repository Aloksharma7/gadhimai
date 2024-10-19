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

                    <!-- Check if validation errors exist and display them -->
                    <?php if (isset($validation)): ?>
                        <div class="alert alert-danger">
                            <?= $validation->listErrors() ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('admin/blog/store') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?> <!-- CSRF protection -->

                        <div class="form-group mb-3">
                            <label for="post_title">Post Title</label>
                            <input type="text" name="post_title" class="form-control <?= (isset($validation) && $validation->hasError('post_title')) ? 'is-invalid' : '' ?>" value="<?= old('post_title') ?>" placeholder="Enter post title" required>
                            <?php if (isset($validation) && $validation->hasError('post_title')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('post_title') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group mb-3">
                            <label for="post_title_nepali">Post Title (Nepali)</label>
                            <input type="text" name="post_title_nepali" class="form-control <?= (isset($validation) && $validation->hasError('post_title_nepali')) ? 'is-invalid' : '' ?>" value="<?= old('post_title_nepali') ?>" placeholder="नेपाली शीर्षक लेख्नुहोस्" required>
                            <?php if (isset($validation) && $validation->hasError('post_title_nepali')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('post_title_nepali') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group mb-3">
                            <label for="post_content">Post Content</label>
                            <textarea name="post_content" class="form-control <?= (isset($validation) && $validation->hasError('post_content')) ? 'is-invalid' : '' ?>" rows="5" placeholder="Write your post content here" required><?= old('post_content') ?></textarea>
                            <?php if (isset($validation) && $validation->hasError('post_content')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('post_content') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group mb-3">
                            <label for="post_content_nepali">Post Content (Nepali)</label>
                            <textarea name="post_content_nepali" class="form-control <?= (isset($validation) && $validation->hasError('post_content_nepali')) ? 'is-invalid' : '' ?>" rows="5" placeholder="नेपाली सामग्री लेख्नुहोस्" required><?= old('post_content_nepali') ?></textarea>
                            <?php if (isset($validation) && $validation->hasError('post_content_nepali')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('post_content_nepali') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group mb-3">
                            <label for="post_category">Category</label>
                            <input type="text" name="post_category" class="form-control <?= (isset($validation) && $validation->hasError('post_category')) ? 'is-invalid' : '' ?>" value="<?= old('post_category') ?>" placeholder="Enter post category" required>
                            <?php if (isset($validation) && $validation->hasError('post_category')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('post_category') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group mb-3">
                            <label for="status">Status</label>
                            <select name="status" class="form-control <?= (isset($validation) && $validation->hasError('status')) ? 'is-invalid' : '' ?>" required>
                                <option value="draft" <?= old('status') == 'draft' ? 'selected' : '' ?>>Draft</option>
                                <option value="published" <?= old('status') == 'published' ? 'selected' : '' ?>>Published</option>
                            </select>
                            <?php if (isset($validation) && $validation->hasError('status')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('status') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group mb-3">
                            <label for="img_url">Upload Image</label>
                            <input type="file" name="img_url" class="form-control-file <?= (isset($validation) && $validation->hasError('img_url')) ? 'is-invalid' : '' ?>">
                            <?php if (isset($validation) && $validation->hasError('img_url')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('img_url') ?>
                                </div>
                            <?php endif; ?>
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
