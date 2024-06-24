<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Optional: Custom styles specific to this page */
        .container {
            padding: 20px;
        }
        .btn {
            margin-bottom: 5px;
        }
    </style>
    <script>
        function confirmDelete(event) {
            if (!confirm("Are you sure you want to delete this category?")) {
                event.preventDefault();
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Categories</h1>
        <a href="/categories/create" class="btn btn-primary">Add Category</a>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Label</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category): ?>
                    <tr>
                        <td><?= $category['id'] ?></td>
                        <td><?= $category['label'] ?></td>
                        <td>
                            <a href="/categories/edit/<?= $category['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="/categories/delete/<?= $category['id'] ?>" class="btn btn-sm btn-danger" onclick="confirmDelete(event)">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
