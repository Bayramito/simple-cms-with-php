<?php require view('static/header') ?>
    <div class="container">
        <div class="row justify-content-md-center mt-4">
            <div class="col-md-4">
                <form action="" method="post" enctype="multipart/form-data">
                    <h3 class="mb-3">Kayıt Ol</h3>
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
                    <div class="form-group">
                        <label for="username">Kullanıcı Adınız</label>
                        <input value="<?= post('username') ? post('username') : NULL ?>" type="text" name="username"
                               class="form-control" id="username"
                               placeholder="Kullanıcı adınızı yazın..">
                    </div>
                    <div class="form-group">
                        <label for="email">E-posta Adresiniz</label>
                        <input value="<?= post('email') ? post('email') : NULL ?>" type="text" name="email"
                               class="form-control" id="email"
                               placeholder="E-posta adresinizi yazın..">
                    </div>
                    <div class="form-group">
                        <label for="password">Şifreniz</label>
                        <input value="<?= post('password') ? post('password') : NULL ?>" type="password" name="password"
                               class="form-control" id="password" placeholder="*******">
                    </div>
                    <div class="form-group">
                        <label for="password-again">Şifreniz (Tekrar)</label>
                        <input value="<?= post('password_again') ? post('password_again') : NULL ?>" type="password"
                               name="password_again" class="form-control" id="password-again"
                               placeholder="*******">
                    </div>
                    <div class="form-group">
                        <label>Avatar</label>
                        <input type="file" id="imgInp" name="avatar">
                        <div class="preview">

                            <script>
                                function readURL(input) {
                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();
                                        reader.onload = function (e) {
                                            $('#blah').attr('src', e.target.result);
                                        }
                                        reader.readAsDataURL(input.files[0]);
                                    }
                                }

                                $("#imgInp").change(function () {
                                    readURL(this);
                                });
                            </script>
                            <img id="blah" src="" alt="">
                        </div>
                        <button type="submit" name="submit" value="1" class="btn btn-primary">Kayıt Ol</button>
                </form>
            </div>
        </div>
    </div>
<?php require view('static/footer') ?>