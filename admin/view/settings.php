<?php require admin_view('static/header') ?>

    <div class="content">
        <div class="box-">
            <h1>
                Site Settings
            </h1>
        </div>
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
        <div class="clear" style="height: 10px;"></div>

        <div class="box-" tab>
            <div tabList class="settings-tab">
                <ul>
                    <li><a href="#">General Settings</a></li>
                    <li><a href="#">Maintenence Settings</a></li>
                    <li><a href="#">Theme Settings</a></li>
                    <li><a href="#">Social Settings</a></li>
                    <li><a href="#">SMTP Settings</a></li>
                </ul>
            </div>
            <form action="" method="post" class="form label">
            <div class="tab-container">
                <div tabContent>
                    <ul>
                        <li>
                            <label for="">Site Title</label>
                            <div class="form-content">
                                <input type="text"
                                       value="<?= post('site_title') ? post('site_title') : setting('site_title') ?>"
                                       name="settings[site_title]" id="title">
                            </div>
                        </li>
                        <li>
                            <label for="">Site Keywords</label>
                            <div class="form-content">
                                <input type="text"
                                       value="<?= post('site_keywords') ? post('site_keywords') : setting('site_keywords') ?>"
                                       name="settings[site_keywords]" id="title">
                            </div>
                        </li>
                        <li>
                            <label for="">Author</label>
                            <div class="form-content">
                                <input type="text"
                                       value="<?= post('author') ? post('author') : setting('author') ?>"
                                       name="settings[author]" id="title">
                            </div>
                        </li>
                        <li>
                            <label for="">Site Description Title</label>
                            <div class="form-content">
                                <input type="text"
                                       value="<?= post('site_description_title') ? post('site_description_title') : setting('site_description_title') ?>"
                                       name="settings[site_description_title]" id="title">
                            </div>
                        </li>
                        <li>
                            <label for="">Site Description</label>
                            <div class="form-content">
                        <textarea name="settings[site_description]" cols="30"
                                  rows="5"><?= post('site_description') ? post('site_description') : setting('site_description') ?></textarea>
                            </div>
                        </li>
                        <li>
                            <label for="">Site Copyright</label>
                            <div class="form-content">
                                <input type="text"
                                       value="<?= post('site_copyright') ? post('site_copyright') : setting('site_copyright') ?>"
                                       name="settings[site_copyright]" id="title">
                            </div>
                        </li>
                        <li>
                            <label for="">Site Status</label>
                            <div class="form-content">
                                <select name="settings[site_status]">
                                    <option <?= setting('site_status') == 1 ? ' selected' : null ?> value="1">On
                                    </option>
                                    <option <?= setting('site_status') == 2 ? ' selected' : null ?> value="2">Off
                                    </option>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
                <div tabContent>
                    <ul>
                        <li>
                            <label for="">Maintenence Mode</label>
                            <div class="form-content">
                                <select name="settings[maintenence_mode]">
                                    <option <?= setting('maintenence_mode') == 1 ? ' selected' : null ?> value="1">On
                                    </option>
                                    <option <?= setting('maintenence_mode') == 2 ? ' selected' : null ?> value="2">Off
                                    </option>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
                <div tabContent>
                    <ul>
                        <li>
                            <label for="">Site Theme</label>
                            <div class="form-content">
                                <select name="settings[site_theme]">
                                    <?php foreach ($themes as $theme): ?>
                                        <option <?= setting('site_theme') == $theme ? ' selected' : NULL ?>
                                                value="<?= $theme ?>"><?= $theme ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
                <div tabContent>
                    <ul>
                        <li>
                            <label for="">Facebook</label>
                            <div class="form-content">
                                <input type="text"
                                       value="<?= post('social_facebook') ? post('social_facebook') : setting('social_facebook') ?>"
                                       name="settings[social_facebook]" id="title"
                                       placeholder="This name will be displayed on the Front-End">
                            </div>
                        </li>
                        <li>
                            <label for="">Twitter</label>
                            <div class="form-content">
                                <input type="text"
                                       value="<?= post('social_twitter') ? post('social_twitter') : setting('social_twitter') ?>"
                                       name="settings[social_twitter]" id="title"
                                       placeholder="This name will be displayed on the Front-End">
                            </div>
                        </li>
                        <li>
                            <label for="">Instagram</label>
                            <div class="form-content">
                                <input type="text"
                                       value="<?= post('social_instagram') ? post('social_instagram') : setting('social_instagram') ?>"
                                       name="settings[social_instagram]" id="title"
                                       placeholder="This name will be displayed on the Front-End">
                            </div>
                        </li>
                        <li>
                            <label for="">Linkedin</label>
                            <div class="form-content">
                                <input type="text"
                                       value="<?= post('social_linkedin') ? post('social_linkedin') : setting('social_linkedin') ?>"
                                       name="settings[social_linkedin]" id="title"
                                       placeholder="This name will be displayed on the Front-End">
                            </div>
                        </li>
                    </ul>
                </div>
                <div tabContent>
                    <ul>
                        <li>
                            <label for="">SMTP Host</label>
                            <div class="form-content">
                                <input type="text"
                                       value="<?= post('smtp_host') ? post('smtp_host') : setting('smtp_host') ?>"
                                       name="settings[smtp_host]">
                            </div>
                        </li>
                        <li>
                            <label for="">SMTP Username</label>
                            <div class="form-content">
                                <input type="text"
                                       value="<?= post('smtp_username') ? post('smtp_username') : setting('smtp_username') ?>"
                                       name="settings[smtp_username]">
                            </div>
                        </li>
                        <li>
                            <label for="">SMTP Password</label>
                            <div class="form-content">
                                <input type="password"
                                       value="<?= post('smtp_password') ? post('smtp_password') : setting('smtp_password') ?>"
                                       name="settings[smtp_password]">
                            </div>
                        </li>
                        <li>
                            <label for="">SMTP Secure</label>
                            <div class="form-content">
                                <select name="settings[smtp_secure]">
                                    <option <?= setting('smtp_secure') == 'tls' ? ' selected' : NULL ?> value="tls">TLS
                                    </option>
                                    <option <?= setting('smtp_secure') == 'ssl' ? ' selected' : NULL ?> value="ssl">SSL
                                    </option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <label for="">SMTP Port</label>
                            <div class="form-content">
                                <input type="text"
                                       value="<?= post('smtp_port') ? post('smtp_port') : setting('smtp_port') ?>"
                                       name="settings[smtp_port]">
                            </div>
                        </li>
                        <li>
                            <label for="">SMTP Visible E-Mail</label>
                            <div class="form-content">
                                <input type="text"
                                       value="<?= post('smtp_visible_email') ? post('smtp_visible_email') : setting('smtp_visible_email') ?>"
                                       name="settings[smtp_visible_email]">
                            </div>
                        </li>
                        <li>
                            <label for="">SMTP Visible Name</label>
                            <div class="form-content">
                                <input type="text"
                                       value="<?= post('smtp_visible_name') ? post('smtp_visible_name') : setting('smtp_visible_name') ?>"
                                       name="settings[smtp_visible_name]">
                            </div>
                        </li>
                    </ul>
                </div>
                <ul>
                    <li class="submit">
                        <button name="submit" value="1" type="submit">Save Changes</button>
                    </li>
                </ul>
            </div>
            </form>
        </div>
    </div>
<?php require admin_view('static/footer') ?>