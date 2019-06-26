<?php require admin_view('static/header') ?>

    <div class="content">

        <div class="box-">
            <h1>
                Users
            </h1>
        </div>

        <div class="clear" style="height: 10px;"></div>

        <div class="table">
            <table>
                <thead>
                <tr>
                    <th>Username</th>
                    <th>E-mail</th>
                    <th>URL</th>
                    <th>Profile Image</th>
                    <th>Registiration Date</th>
                    <th>User Rank</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td class="hide">
                        <?= $user['username'] ?>
                        </td>
                        <td class="hide">
                            <span><?= $user['email'] ?></span>
                        </td>
                        <td class="hide">
                            <span><?= $user['user_url'] ?></span>
                        </td>
                        <td class="hide">
                            <div class="usrProfileImage"><a target="_blank" href="<?= $user['user_avatar'] ?>"><img
                                            src="<?= $user['user_avatar'] ?>" alt=""></a></div>
                        </td>
                        <td class="hide">
                            <span><?= $user['registered_date'] ?></span>
                        </td>
                        <td class="hide">
                        <span>
                            <?php if ($user['user_rank'] == 1): ?>
                                <?= 'Administrator' ?>
                            <?php elseif ($user['user_rank'] == 2): ?>
                                <?= 'Editor' ?>
                            <?php else: ?>
                                <?= 'User' ?>
                            <?php endif; ?>
                        </span>
                        </td>
                        <td class="hide">
                            <a href="<?= admin_url('edit-user?id=' . $user['user_id']) ?>" class="btn">EDIT</a>
                            <a href="<?= admin_url('delete?table=users&column=user_id&id=' . $user['user_id']) ?>"
                               class="btn">DELETE</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="pagination">
            <ul>
                <?= $Pagination->View(admin_url(route(1) . '?' . $paramName . '=[page]')); ?>
            </ul>
        </div>

    </div>

<?php require admin_view('static/footer') ?>