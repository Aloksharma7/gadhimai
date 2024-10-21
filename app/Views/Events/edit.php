<?= $this->extend('templates/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4>Edit Event</h4>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/events/update/' . $event['id']) ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group mb-3">
                            <label for="event_title">Event Title</label>
                            <input type="text" name="event_title" class="form-control" value="<?= esc($event['event_title']) ?>" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="event_description">Description</label>
                            <textarea name="event_description" class="form-control" rows="5" required><?= esc($event['event_description']) ?></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="event_date">Event Date</label>
                            <input type="date" name="event_date" class="form-control" value="<?= esc($event['event_date']) ?>" required>
                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-100">Update Event</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
