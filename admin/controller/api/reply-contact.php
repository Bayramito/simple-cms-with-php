<?php

if( $data = form_control()){

    $send = sendEmail($data['email'], $data['name'], $data['subject'], $data['message']);

    if($send){
        $json['success'] = 'Mesaj başarıyla gönderildi!';
    }else{
        $json['error'] = 'Mesaj gönderilemedi!';
    }

}else{
    $json['error'] = 'Lütfen tüm alanları doldurun!';
}