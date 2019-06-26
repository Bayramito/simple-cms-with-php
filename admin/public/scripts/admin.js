/**
 * @author      Tayfun Erbilen
 * @web         http://erbilen.net
 * @mail        tayfunerbilen@gmail.com
 */
$(function () {

    $('.box >h3').append('<button type="button" class="toggle"><span class="fa fa-caret-up"></span></button>');

    $(document).on('click', 'button.toggle', function (e) {
        var id = $(this).closest('.box').attr('id');
        $(this).parent().next().toggle();
        if ($('.fa', this).hasClass('fa-caret-up')) {
            $('.fa', this).removeClass('fa-caret-up').addClass('fa-caret-down');
            if (id != 'undefined') {
                localStorage.setItem('box_' + id, true);
            }
        } else {
            $('.fa', this).removeClass('fa-caret-down').addClass('fa-caret-up');
            if (id != 'undefined') {
                delete localStorage['box_' + id];
            }
        }
        e.preventDefault();
    });

    function checkToggle() {
        $.each(localStorage, function (key, val) {
            if (!key.indexOf('box_')) {
                $('#' + (key.replace('box_', '')) + ' .toggle').trigger('click');
            }
        });
    }

    checkToggle();

    $('.sidebar >ul >li:not(.line)').hover(function () {
        if (!$('.sub-menu:visible', this).length) {
            $('.dropdown-menu', this).show();
            $(this).addClass('hover');
        }
    }, function () {
        $('.dropdown-menu', this).hide();
        $(this).removeClass('hover');
    });

    $('[dropdown] >li').hover(function () {
        $('ul', this).show();
        $(this).addClass('active');
    }, function () {
        $('ul', this).hide();
        $(this).removeClass('active');
    });

    $('.sidebar >ul >li').each(function () {
        if ($('.sub-menu', this).length) {
            var html = $('.sub-menu', this).html();
            $(this).append('<ul dropdown class="dropdown-menu">' + html + '</ul>');
        }
    });

    $('.collapse-menu').on('click', function (e) {
        $('.sidebar').toggleClass('fix');
        if ($('.fa', this).hasClass('fa-arrow-circle-left')) {
            $('.sidebar >ul >li.active .sub-menu').hide();
            $('.fa', this).removeClass('fa-arrow-circle-left').addClass('fa-arrow-circle-right');
            localStorage.setItem('sidebar', true);
        } else {
            $('.fa', this).removeClass('fa-arrow-circle-right').addClass('fa-arrow-circle-left');
            $('.sidebar >ul >li.active .sub-menu').show();
            delete localStorage['sidebar'];
        }
        e.preventDefault();
    });

    function sidebarCheck() {
        if (localStorage.getItem('sidebar')) {
            $('.sidebar .collapse-menu').trigger('click');
        }
    }

    sidebarCheck();

    if ($('#editor').length) {
        CKEDITOR.replace('editor');
    }

    //Menü İşlemleri
    $('#add-menu').on('click', function (e) {
        $('#menu').append('<li>\n' +
            '                    <div class="handle"></div><div class="menu-item">\n' +
            '                        <a href="#" class="delete-menu">\n' +
            '                            <i class="fa fa-times"></i>\n' +
            '                        </a>\n' +
            '                        <input type="text" name="title[]" placeholder="Menü Adı">\n' +
            '                        <input type="text" name="url[]" placeholder="Menü Linki">\n' +
            '                    </div>\n' +
            '                    <div class="sub-menu"><ul class="menu"></ul></div>\n' +
            '                    <a href="#" class="add-submenu btn">Alt Menü Ekle</a>\n' +
            '                </li>');
        $('.menu').sortable();
        e.preventDefault();
    });

    //ADD SUB-MENU
    $(document.body).on('click', '.add-submenu', function (e) {
        var index = $(this).closest('li').index();
        $(this).prev('.sub-menu').find('ul').append('<li>\n' +
            '           <div class="handle"></div><div class="menu-item">\n' +
            '              <a href="#" class="delete-menu">\n' +
            '          <i class="fa fa-times"></i>\n' +
            '                </a>\n' +
            '                <input type="text" name="sub_title' + index + '[]" placeholder="Menü Adı">\n' +
            '                <input type="text" name="sub_url' + index + '[]" placeholder="Menü Linki">\n' +
            '               </div>\n' +
            '             </li>');
        e.preventDefault();
    });

    //DELETE MENU
    $(document.body).on('click', '.delete-menu', function (e) {
        if ($('#menu li').length === 1) {
            alert('En az 1 menü içeriği olmak zorundadır!');
        } else {
            $(this).closest('li').remove();
        }
        e.preventDefault();
    });


    $('.menu').sortable({
        handle: ".handle",
        revert: true,
        start: function (event, ui) {
            ui.placeholder.height(ui.item.height());
        },
        update: function (e,ui) {
            $('#menu > li').each(function () {
                var index = $(this).index();
                $(this).find('.sub-menu').find('li').each(function(){
                   $('.menu-item',this).find('input:eq(0)').attr('name','sub_title'+index+'[]');
                   $('.menu-item',this).find('input:eq(1)').attr('name','sub_url'+index+'[]');
                });

            })
        },
        forcePlaceholderSize: true
    });

    $('[tab]').each(function () {
        var tabList = $('[tabList] li', this),
            tabContent = $('[tabContent]', this);

        tabList.filter(':first').addClass('active');
        tabContent.filter(':not(:first)').hide();
        tabList.on('click', function (e) {
            var index = $(this).index();
            tabList.removeClass('active').filter(this).addClass('active');
            tabContent.hide().filter(':eq('+index+')').fadeIn(300);
            e.preventDefault();
        });
    });

});