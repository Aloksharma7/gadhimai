<?= $this->extend('templates/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Manage Events</h2>
        <a href="<?= base_url('admin/events/create') ?>" class="btn btn-primary">
            <i class="fas fa-plus"></i> Create New Event
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Event Title</th>
                    <th>Event Date</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($events)): ?>
                    <?php foreach ($events as $event): ?>
                        <tr>
                            <td><?= esc($event['event_title']) ?></td>
                            <td><?= esc($event['event_date']) ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('admin/events/edit/' . $event['id']) ?>" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="<?= base_url('admin/events/delete/' . $event['id']) ?>" class="btn btn-sm btn-danger" 
                                   onclick="return confirm('Are you sure you want to delete this event?');">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="text-center">No events available</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
