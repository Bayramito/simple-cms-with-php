<?php require view('static/header')?>

<div class="profile">
    <p><?= $row['username'] ?></p>
    <p><?= $row['email'] ?></p>
    <img src="<?= $row['user_avatar'] ?>" alt="">
</div>
<?php require view('static/footer')?>