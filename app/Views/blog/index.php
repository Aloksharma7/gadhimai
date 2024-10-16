<?= $this->extend('templates/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h3>Blog Posts</h3>
    <button class="btn">
    <a href="/admin/blog/create" class="btn btn-primary">Create New Post</a>
    </button>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
                <tr>
                    <td><?= $post['post_title']; ?></td>
                    <td><?= $post['category']; ?></td>
                    <td><?= $post['status']; ?></td>
                    <td>
                        <a href="/admin/blog/edit/<?= $post['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="/admin/blog/delete/<?= $post['id']; ?>" method="post" style="display:inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
