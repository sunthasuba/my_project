<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Products</title>
    <style>
        /* Custom styles specific to this page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            background: #fff;
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            margin-bottom: 20px;
        }
        .btn-add {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
        }
        table th, table td {
            text-align: left;
            padding: 10px;
        }
        table th {
            background-color: #007bff;
            color: white;
        }
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .btn-action {
            margin-right: 5px;
        }
    </style>
    <script>
        function confirmDelete(event) {
            if (!confirm("Are you sure you want to delete this product?")) {
                event.preventDefault();
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Products</h1>
        <a href="/products/create" class="btn btn-primary btn-add">Add Product</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Type</th>
                    <th>Stock Level</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['product_name'] ?></td>
                        <td><?= $product['unit_price'] ?></td>
                        <td><?= $product['unit_type'] ?></td>
                        <td><?= $product['stock_level'] ?></td>
                        <td><?= $product['category_id'] ?></td>
                        <td>
                            <a href="/products/edit/<?= $product['id'] ?>" class="btn btn-sm btn-primary btn-action">Edit</a>
                            <a href="/products/delete/<?= $product['id'] ?>" class="btn btn-sm btn-danger btn-action" onclick="confirmDelete(event)">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
