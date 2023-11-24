<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Ваши стили и скрипты могут быть подключены здесь -->
</head>
<body>
<div>
    <h2>Login</h2>

    <?php if (isset($error)): ?>
        <div style="color: red;"><?php echo $error; ?></div>
    <?php endif; ?>

    <?php echo form_open('login'); ?>
    <label for="username">Username:</label>
    <input type="text" name="username" required>

    <br>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <br>

    <button type="submit">Login</button>
    <?php echo form_close(); ?>
</div>
</body>
</html>
