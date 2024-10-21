<?= $this->extend('templates/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Manage Carousel Items</h2>
        <a href="<?= base_url('admin/carousel/create') ?>" class="btn btn-primary">
            <i class="fas fa-plus"></i> Create New Carousel Item
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($carouselItems)): ?>
                    <?php foreach ($carouselItems as $item): ?>
                        <tr>
                            <td><img src="<?= esc($item['image_url']) ?>" alt="<?= esc($item['title']) ?>" width="100"></td>
                            <td><?= esc($item['title']) ?></td>
                            <td><?= esc($item['description']) ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('admin/carousel/edit/' . $item['id']) ?>" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="<?= base_url('admin/carousel/delete/' . $item['id']) ?>" class="btn btn-danger btn-sm" 
                                   onclick="return confirm('Are you sure you want to delete this item?');">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">No carousel items available</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
