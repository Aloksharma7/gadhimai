<?= $this->extend('templates/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Manage News/Notices</h2>
        <a href="<?= base_url('admin/newsnotice/create') ?>" class="btn btn-primary">
            <i class="fas fa-plus"></i> Create New Notice
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($newsnotices)): ?>
                    <?php foreach ($newsnotices as $newsNotice): ?>
                        <tr>
                            <td><?= esc($newsNotice['title']) ?></td>
                            <td><?= esc($newsNotice['category']) ?></td>
                            <td>
                                <span class="badge bg-<?= $newsNotice['status'] == 'published' ? 'success' : 'secondary' ?>">
                                    <?= ucfirst($newsNotice['status']) ?>
                                </span>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('admin/newsnotice/edit/' . $newsNotice['id']) ?>" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="<?= base_url('admin/newsnotice/delete/' . $newsNotice['id']) ?>" class="btn btn-sm btn-danger" 
                                   onclick="return confirm('Are you sure you want to delete this notice?');">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">No notices available</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
