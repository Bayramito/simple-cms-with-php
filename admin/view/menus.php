<?php require admin_view('static/header') ?>
    <div class="content">
        <div class="box-">
            <h1>
                Menü Yönetimi
                <?php if (permission('menus', 'add')): ?>
                    <a href="<?= admin_url('add-menu') ?>">Yeni Ekle</a>
                <?php endif; ?>
            </h1>
        </div>

        <div class="clear" style="height: 10px;"></div>
        <div class="table">
            <table>
                <thead>
                <tr>
                    <th>Menu Title</th>
                    <th>Date Created</th>
                    <th>Menu ID</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($pages as $menu): ?>
                    <tr>
                        <td>
                            <span><?= $menu['menu_title'] ?></span>
                        </td>
                        <td>
                            <span><?= $menu['menu_date'] ?></span>
                        </td>
                        <td>
                            <span><?= $menu['menu_id'] ?></span>
                        </td>
                        <td>
                            <?php if (permission('menus', 'edit')): ?>
                                <a href="<?= admin_url('edit-menu?id=' . $menu['menu_id'] . ' ') ?>"
                                   class="btn">Edit</a>
                            <?php endif; ?>
                            <?php if (permission('menus', 'delete')): ?>
                                <?php if (count($menu) != 1): ?>
                                    <a href="<?= admin_url('delete?table=menus&column=menu_id&id=' . $menu['menu_id'] . '') ?>"
                                       class="btn">Delete</a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php if ($totalRecords > $PaginationLimit): ?>
            <div class="pagination">
                <ul>
                    <?= $Pagination->View(admin_url(route(1) . '?' . $paramName . '=[page]')) ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
<?php require admin_view('static/footer') ?>