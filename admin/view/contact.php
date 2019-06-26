<?php require admin_view('static/header') ?>

    <div class="content">

        <div class="box-">
            <h1>
                Contact Messages
            </h1>
        </div>

        <div class="clear" style="height: 10px;"></div>

        <div class="table">
            <table>
                <thead>
                <tr>
                    <th width="10"></th>
                    <th>Sender</th>
                    <th>Profile Image</th>
                    <th>Subject</th>
                    <th>Recieved Date</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($contacts as $user): ?>
                    <tr>
                        <td class="hide">
                            <?php if ($user['contact_read_status'] == 1): ?>
                                <div style="background: green;text-align: center;padding: 6px 8px;font-weight: 400;color: #fff;font-size: 16px;border-radius: 3px">
                                    Okundu
                                </div>
                            <?php else: ?>
                                <div style="background: darkred;text-align: center;;padding: 6px 8px;font-weight: 400;color: #fff;font-size: 16px;border-radius: 3px">
                                    Okunmadı
                                </div>
                            <?php endif; ?>
                        </td>
                        <td class="hide">
                            <div>
                                <?= $user['contact_name'] ?>
                                <?php foreach ($reader as $read): ?>
                                    <?php if ($user['registered_user'] == $read['user_id']): ?>
                                        <?php if (isset($user['registered_user'])): ?>
                                            (<a href="<?= admin_url('edit-user?id=' . $read['user_id']) ?>"><?= $read['username'] ?></a>)
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                            <div><?= $user['contact_email'] ?></div>
                            <?php if (isset($user['contact_phone'])): ?>
                                <?= $user['contact_phone'] ?>
                            <?php endif; ?>
                        </td>
                        <td class="hide">
                            <?php foreach ($reader as $read): ?>
                                <?php if ($user['registered_user'] == $read['user_id']): ?>
                                    <div class="usrProfileImage"><a target="_blank"
                                                                    href="<?= $read['user_avatar'] ?>"><img
                                                    src="<?= $read['user_avatar'] ?>" alt=""></a></div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </td>
                        <td>
                            <span>
                            <?= $user['contact_subject'] ?>
                            </span>
                        </td>
                        <td class="hide">
                            <span><?= timeConvert($user['contact_date']) ?></span>
                            <?php if ($user['contact_read_status'] == 1): ?>
                                <div style="font-size: 12px; color: #999;">
                                    <?= timeConvert($user['contact_read_date']) ?> okundu
                                </div>
                                <strong><?= $user['username'] ?></strong> okudu
                            <?php endif; ?>
                        </td>
                        <td class="hide">
                            <a href="<?= admin_url('read-contact?id=' . $user['contact_id']) ?>" class="btn">READ</a>
                            <a href="<?= admin_url('delete?table=contact&column=contact_id&id=' . $user['contact_id']) ?>"
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