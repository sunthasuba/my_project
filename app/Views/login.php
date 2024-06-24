<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>"> <!-- Adjust the path if needed -->
</head>
<body>
    <div class="container">
        <h1>Login Form</h1>
        <?php if (session()->getFlashdata('error')): ?>
            <p><?= session()->getFlashdata('error') ?></p>
        <?php endif; ?>
        <form action="<?= base_url('/login') ?>" method="post">
            <label for="username">Email:</label><br>
            <input type="email" id="username" name="username" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
