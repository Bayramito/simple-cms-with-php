<?php require admin_view('static/header') ?>
<div class="content">


    <div class="box- menu-container">
        <button class="btn" onclick="javascript:history.back(-1)">Geri</button>
        <br><br>
        <h2>Menü Ekle</h2>
        <?php if (isset($error)): ?>
            <div class="message error box-">
                <?= $error ?>
            </div>
        <?php endif; ?>
        <?php if (isset($success)): ?>
            <div class="message success box-">
                <?= $success ?>
            </div>
        <?php endif; ?>
        <form action="" method="post" id="form">
            <div class="menu-item">
                <input value="<?= post('menu_title') ? post('menu_title') : null ?>" type="text" required pattern=".*\S+.*" id="menu_title" name="menu_title"
                       placeholder="Menü Başlığı"
                       style="max-width:400px;margin-bottom:20px">
            </div>
            <ul id="menu" class="menu">
                <li>
                    <div class="handle"></div>
                    <div class="menu-item">
                        <a href="#" class="delete-menu">
                            <i class="fa fa-times"></i>
                        </a>
                        <input type="text" name="title[]" placeholder="Menü Adı">
                        <input type="text" name="url[]" placeholder="Menü Linki">
                    </div>
                    <div class="sub-menu">
                        <ul class="menu"></ul>
                    </div>
                    <a href="#" class="add-submenu btn">Alt Menü Ekle</a>
                </li>

            </ul>
            <div class="menu-btn">
                <a href="#" id="add-menu" class="btn">Menü Ekle</a>
                <button type="submit" value="1" name="submit">Kaydet</button>
            </div>
        </form>
    </div>
</div>
<?php require admin_view('static/footer') ?>
