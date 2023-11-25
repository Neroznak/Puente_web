<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/login.css" rel="stylesheet">

    <title>Login</title>
</head>

<body>


<!--<header>-->
<!--    <div class="container-fluid">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12 header">-->
<!---->
<!--            </div>-->
<!--</header>-->
<div class="mega-block">

    <div class="login-form">
        <h2>Восстановление пароля</h2>

        <?php if (isset($error)): ?>
            <div style="color: red;"><?php echo $error; ?></div>
        <?php endif; ?>

<!--        --><?php //echo form_open('login'); ?>
        <label for="username">Имя пользователя:</label>
        <input class="input-nero" type="text" name="username" required>

        <br>


        <br>
        <a href="/home">
            <button type="submit" class="go_button">Восстановить пароль</button>
        </a>
<!--        --><?php //echo form_close(); ?>


    </div>

    <!--<footer>-->
    <!--    <div class="container-fluid header">-->
    <!--        <p>Designed by Neroznak studio</p>-->
    <!--    </div>-->
    <!--</footer>-->
</body>
</html>
