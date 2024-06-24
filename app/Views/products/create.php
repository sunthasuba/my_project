<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Create Product</title>
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
        .btn-submit {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create Product</h1>
        <form action="/products/store" method="post">
            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name:</label>
                <input type="text" id="product_name" name="product_name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="unit_price" class="form-label">Unit Price:</label>
                <input type="text" id="unit_price" name="unit_price" class="form-control">
            </div>
            <div class="mb-3">
                <label for="unit_type" class="form-label">Unit Type:</label>
                <input type="text" id="unit_type" name="unit_type" class="form-control">
            </div>
            <div class="mb-3">
                <label for="stock_level" class="form-label">Stock Level:</label>
                <input type="text" id="stock_level" name="stock_level" class="form-control">
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category:</label>
                <select id="category_id" name="category_id" class="form-select">
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['id'] ?>"><?= $category['label'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-submit">Create</button>
        </form>
    </div>
</body>
</html>
