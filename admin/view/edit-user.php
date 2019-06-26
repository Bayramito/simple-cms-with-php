<?php require admin_view('static/header') ?>

    <div class="content">
        <div class="box-">
            <h1>
                Edit User
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

        <div class="box-">
            <form action="" method="post" class="form label">
                <ul>
                    <li>
                        <label for="">Username</label>
                        <div class="form-content">
                            <input type="text"
                                   value="<?= post('username') ? post('username') : $user['username'] ?>"
                                   name="username" id="title">
                        </div>
                    </li>
                    <li>
                        <label for="">User E-mail</label>
                        <div class="form-content">
                            <input type="text"
                                   value="<?= post('email') ? post('email') : $user['email'] ?>"
                                   name="email" id="title">
                        </div>
                    </li>
                    <li>
                        <label for="">User Url</label>
                        <div class="form-content">
                            <input type="text"
                                   value="<?= post('user_url') ? post('user_url') : $user['user_url'] ?>"
                                   name="user_url" id="title">
                        </div>
                    </li>
                    <li>
                        <label for="">User Rank</label>
                        <div class="form-content">
                            <select name="user_rank">
                                <option <?= post('user_rank') == 1 || $user['user_rank'] == 1 ? ' selected' : NULL ?>
                                        value="1">Administrator
                                </option>
                                <option <?= post('user_rank') == 2 || $user['user_rank'] == 2 ? ' selected' : NULL ?>
                                        value="2">Editor
                                </option>
                                <option <?= post('user_rank') == 3 || $user['user_rank'] == 3 ? ' selected' : NULL ?>
                                        value="3">User
                                </option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <label>Permissions</label>
                        <div class="form-content">
                            <div class="permissions">
                                <?php foreach ($menus as $url => $menu): ?>
                                    <div>
                                        <h3> <?= $menu['title'] ?></h3>
                                        <div class="list">
                                            <?php foreach ($menu['permissions'] as $key => $action): ?>
                                                <label>
                                                    <input <?= isset($permissions[$url][$key]) && $permissions[$url][$key] == 1  ? ' checked' : NULL?> type="checkbox" name="permissions[<?= $url ?>][<?= $key ?>]" value="1">
                                                    <?= $action ?>
                                                </label>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>

                                <?php endforeach; ?>
                            </div>
                        </div>
                    </li>
                    <li class="submit">
                        <button name="submit" value="1" type="submit">Save Changes</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>

<?php require admin_view('static/footer') ?>