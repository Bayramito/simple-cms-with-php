<?php require view('static/header') ?>
    <section class="jumbotron text-center">
        <div class="container">
            <h1>İLETİŞİM</h1>
            <div class="breadcrumb-custom">
                <a href="#">Anasayfa</a> /
                <a href="#" class="active">İletişim</a>
            </div>
        </div>
    </section>
    <form action="" id="contact-form" onsubmit="return false">
        <div class="container">
            <div class="alert alert-danger" role="alert" style="display: none;" id="contact-form-error"></div>
            <div class="alert alert-success" role="alert" style="display: none;" id="contact-form-success"></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Ad-Soyad</label>
                        <input type="hidden" name="registered_user" value="<?= session('user_id') ? session('user_id') : NULL ?>">
                        <input type="text" name="contact_name" class="form-control" id="name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">E-posta Adresi</label>
                        <input type="email" name="contact_email" class="form-control" id="email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone">Telefon Numarası</label>
                        <input type="text" name="contact_phone" class="form-control" id="phone">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="subject">Mesaj Konusu</label>
                        <input type="text" name="contact_subject" class="form-control" id="subject">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="message">Mesaj İçeriği</label>
                        <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <button type="submit" onclick="contact('#contact-form')" class="btn btn-primary">Gönder</button>
                </div>
            </div>
    </form>
<?php require view('static/footer') ?>