<?php
    session_start();
    //sebuah program dan library untuk mengirim dan mengambil data melalui URL
    $url='http://localhost:10234/TR2-RESTFUL/webresources/controller/delete';
    $ch=curl_init($url);//library - create curl resource - inisiasi
    $data=array(
        "id" => $_POST['id']
    );

    $dataencode=json_encode($data);//enkripsi: bentuk aneh - ubah ke json

//Sets an option on the given cURL session handle
    curl_setopt($ch, CURLOPT_POST, 1);//true to do a regular HTTP POST.(form)
    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataencode);//specify data to POST to server
    //(CURL *handle, CURLOPT_POSTFIELDS, char *postdata)
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    //An array of HTTP header fields to set, in the format
    $result=curl_exec($ch);
?>

<br><br>
<a href="index.php">Kembali ke Halaman Utama</a>