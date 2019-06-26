<?php

if ($data = form_control('registered_user')) {

    if (!filter_var($data['contact_email'], FILTER_VALIDATE_EMAIL)) {
        $json['error'] = 'Lütfen geçerli bir e-posta adresi giriniz!';
    } else {

        $query = $db->prepare('INSERT INTO contact SET contact_name = :contact_name, contact_email = :contact_email, contact_phone = :contact_phone, contact_subject = :contact_subject, message = :message, registered_user = :registered_user');
        $result = $query->execute([
            'contact_name' => $data['contact_name'],
            'contact_email' => $data['contact_email'],
            'contact_phone' => $data['contact_phone'],
            'contact_subject' => $data['contact_subject'],
            'message' => $data['message'],
            'registered_user' => $data['registered_user']
        ]);

        if ($result) {
            $json['success'] = 'Mesajınız gönderildi.Teşekkür ederiz!';
        } else {
            $json['error'] = 'Mesaj gönderilemedi.Lütfen daha sonra tekrar deneyiniz!';
        }

    }

} else {
    $json['error'] = 'Lütfen boş alan bırakmayınız!';
}