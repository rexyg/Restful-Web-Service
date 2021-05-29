<?php
    session_start();
    
    $url='http://localhost:10234/TR2-RESTFUL/webresources/controller/updateData';
    $ch=curl_init($url);
    $data=array(
        "nama" => $_POST['nama'],
        "progdi" => $_POST['progdi'],
        "nim" => $_POST['nim'],
        "id" => $_POST['id']
    );

    $dataencode=json_encode($data);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataencode);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    $result=curl_exec($ch);
?>
<br><br>
<a href="index.php">Kembali ke Halaman Utama</a>