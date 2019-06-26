<!doctype html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <meta charset="UTF-8">
    <title>Admin Paneli</title>

    <!--styles-->
    <link rel="stylesheet" href="<?= admin_public_url('styles/main.css?v='.time()) ?>">
    <link rel="stylesheet" href="<?= admin_public_url('styles/tab.css?v='.time()) ?>">

    <!--scripts-->
    <script src="<?= admin_public_url('scripts/jquery-1.12.2.min.js') ?>"></script>
    <script src="<?= admin_public_url('scripts/api.js') ?>"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?= admin_public_url('scripts/admin.js') ?>"></script>
    <script>
        var api_url = '<?= admin_url('/api') ?>';
        var destroyTime = 1500,
            secondsCounter = 0;

        window.onclick = function(){
            secondsCounter = 0;
        }
        window.onmousemove = function(){
            secondsCounter = 0;
        }
        window.onkeypress = function () {
            secondsCounter = 0;
        }

        window.setInterval(count,1000);

        function count(){
            secondsCounter++;
           var showInactive = $('#inactive');
           if(showInactive){
               showInactive.html(destroyTime - secondsCounter);
               if(secondsCounter >= destroyTime){
                   document.location.href = 'logout';
               }
           }
        }


    </script>



</head>
<body>

<!--navbar-->
<div class="navbar">
    <ul dropdown>
        <li>
            <a href="<?= site_url(); ?>" target="_blank">
                <span class="fa fa-home"></span>
                <span class="title">
                  <?= setting('site_title'); ?>
                </span>
            </a>
        </li>
        <li style="right:150px!important; position: absolute;line-height: 32px; color:#fff">
           InActivity Time: <span style="color:red" id="inactive"></span>
        </li>
        <li style="right:20px!important; position: absolute">
            <a href="#">
                <span class="fa fa-user"></span>
                <span class="title"><?= session('username') ?></span>
            </a>
            <ul>
                <li>
                    <a href="<?= site_url('profile?id='.session('user_id')) ?>">
                      Profile
                    </a>
                </li>
                <li>
                    <a href="<?= admin_url('logout') ?>">
                       Logout
                    </a>
         </li>

    </ul>
</div>

<!--sidebar-->
<div class="sidebar">
    <ul>
        <?php foreach ($menus as $key => $menu): if(!permission($key, 'show')) continue ?>
            <li class="<?= $key == route(1) || isset($menu['submenu'][route(1)]) ? ' active' : NULL ?>">
                <a href="<?= admin_url($key) ?>">
                    <span class="fa fa-<?= $menu['icon'] ?>"></span>
                    <span class="title">
                    <?= $menu['title'] ?>
                </span>
                </a>
                <?php if (isset($menu['submenu'])): ?>
                    <ul class="sub-menu">
                        <?php foreach ($menu['submenu'] as $subKey => $submenu): ?>
                            <li>
                                <a href="<?= admin_url($subKey) ?>">
                                    <?= $submenu; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
        <li class="line">
            <span></span>
        </li>
    </ul>
    <a href="#" class="collapse-menu">
        <span class="fa fa-arrow-circle-left"></span>
        <span class="title">
            Collapse menu
        </span>
    </a>
</div>

