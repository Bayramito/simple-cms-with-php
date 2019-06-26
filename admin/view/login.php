<!doctype html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <meta charset="UTF-8">
    <title>Document</title>

    <!--styles-->
    <link rel="stylesheet" href="<?= admin_public_url('styles/main.css') ?>">

    <!--scripts-->
    <script src="<?= admin_public_url('scripts/jquery-1.12.2.min.js') ?>"></script>
    <script src="https://cdn.ckeditor.com/4.5.7/basic/ckeditor.js"></script>
    <script src="<?= admin_public_url('scripts/admin.js') ?>"></script>

</head>
<body>

<!--login screen-->
<div class="login-screen">

    <!--login logo-->
    <div class="login-logo">
        <a href="#">
            <img src="<?= admin_public_url('images/logo.png') ?>" alt="">
        </a>
    </div>
    <?php if (isset($error)): ?>
        <div class="message error box-">
            <?= $error; ?>
        </div>
    <?php endif; ?>
    <?php if (isset($success)): ?>
        <div class="message success box-">
            <?= $success; ?>
        </div>
    <?php endif; ?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input name="username" value="<?= post('username') ? post('username') : NULL ?>" type="text"
                       id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input name="password" value="<?= post('username') ? post('username') : NULL ?>" type="password"
                       id="password">
            </li>
            <li>
                <button style="margin-left:5px"><a  style="color:#fff;" href="<?= site_url('register') ?>">Kaydol</a></button>
                <button name="submit" value="1" type="submit">Login</button>
                <label for="remember" class="checkbox">
                    <input type="checkbox" id="remember"> Remember me
                </label>
            </li>
        </ul>
    </form>

    <!--    <div class="login-links">
            <a href="#" class="lost-password">
                Have you lost your mind?
            </a>
            <a href="#">
                <span class="fa fa-long-arrow-left"></span> Back to the future?
            </a>
        </div>-->

</div>

</body>
</html>