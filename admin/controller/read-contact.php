<?php
if (session('user_rank') == 3 || !session('user_rank')) {
    header('Location:' . admin_url('login'));
    exit;
}
if (!permission('contact', 'show')) {
    die('Bu alanı görüntülemeye yetkiniz yok!');
}
$contact = $db->query('SELECT * FROM contact LEFT JOIN users ON users.user_id = contact.contact_reader WHERE contact_id = ' . get('id') . ' ')->fetch(PDO::FETCH_ASSOC);

if ($contact['contact_read_status'] == 0) {
    $query = $db->prepare(' UPDATE contact SET 
 contact_read_status = :contact_read_status, 
 contact_read_date = :contact_read_date,
  contact_reader = :contact_reader
   WHERE contact_id = ' . get('id') . ' ');
    $query->execute([
        'contact_read_status' => 1,
        'contact_read_date' => date('Y-m-d H:i:s'),
        'contact_reader' => session('user_id')
    ]);
}

require admin_view('read-contact');