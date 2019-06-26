<?php require view('static/header') ?>
    <div class="container">
        <div class="row justify-content-md-center mt-4">
            <div class="col-md-4">
                <?php if (isset($success)): ?>
                    <div class="alert alert-success" role="alert">
                        <?= $success; ?>
                    </div>
                <?php endif; ?>
                <?php if (isset($error)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $error; ?>
                    </div>
                <?php endif; ?>
                <form action="" method="post">
                    <h3 class="mb-3">Giriş Yap</h3>
                    <div class="form-group">
                        <label for="username">Kullanıcı Adınız</label>
                        <input type="text" value="<?= post('username') ? post('username') : NULL ?>" name="username"
                               class="form-control" id="username" placeholder="Kullanıcı adınızı yazın..">
                    </div>
                    <div class="form-group">
                        <label for="password">Şifreniz</label>
                        <input type="password" value="<?= post('password') ? post('password') : NULL ?>" name="password"
                               class="form-control" id="password" placeholder="*******">
                    </div>
                    <button type="submit" name="submit" value="1" class="btn btn-primary">Giriş Yap</button>
                </form>
            </div>
        </div>
    </div>
<?php require view('static/footer') ?>