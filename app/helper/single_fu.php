<?php

function singleFileupload($file)
{
    $result = [];
    //Hata kontrolü yap
    if ($file['error'] == 4) {

        $result['error'] = 'Lütfen en az bir dosya seçiniz!';

    } elseif ($file['error'] != 0) {

        $result['error'] = 'Dosya yüklenemedi! <br> #' . $file['name'];

    }

    //Format kontrolü yap
  if (!isset($result['error'])) {

        global $fileTypes;

        $fileTypes = $fileTypes ? $fileTypes : ['image/jpeg'];

        if (!in_array($file['type'], $fileTypes)) {

            $result['error'] = 'Seçtiğiniz dosya formatı uygun değil! <br> #' . $file['name'];

        }

    }

    //Dosya boyut kontrolü yap
    if (!isset($result['error'])) {

        global $max_file_size;

        $max_file_size = $max_file_size ? (1024 * 1024) * $max_file_size : (1024 * 1024);

        $format_size = substr($file['size'] / (1024 * 1024), 0, 4);

        if ($file['size'] > $max_file_size) {

            $result['error'] = 'Seçtiğiniz dosya boyutu limiti aşıyor. <br> #' . $file['name'] . '<strong> ' . $format_size . 'MB </strong>';

        }

    }

    //Dosyayı yükle
    if (!isset($result['error'])) {

        global $fileDir;

        if (!is_dir($fileDir)) {

            mkdir($fileDir);

        }

        $fileName = $file['name'];
        // $fileName = uniqid();
        // $fileType = explode('.',$file['name']);
        $upload = move_uploaded_file($file['tmp_name'], $fileDir . '/' . $fileName);

        if ($upload) {

            $result['file'] = URL . '/avatars/' . $fileName;

        } else {

            $result['error'] = 'Dosya yüklenirken bir sorunla karşılaştı. <br> #' . $file['name'];

        }

    }
    return $result;
}

/* AYARLAR */

//Kabul etmek istediğiniz dosya tiplerini *DİZE/ARRAY* cinsinden buraya giriniz!
$fileTypes = ['image/jpeg','image/jpg'];

//Kabul etmek istediğiniz maksimum dosya boyutunu *RAKAM/INTEGER* cinsinden buraya giriniz!
$max_file_size = null;

//Dosyaların kopyalanmasını istediğiniz kounumu *STRING* olarak giriniz!
$fileDir = PATH . '/avatars/';

/* AYARLAR */
