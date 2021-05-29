<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Client</title>
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Selamat Datang</h1>
      </div>
      
      <div class="col-md-12 text-center">
        <h4>Tabel Data Mahasiswa</h4>
      </div>
      <div class="col-md-12 text-center">
        <h5>SAMSAN TECH</h5>
      </div>
    </div>
  </div>

<br>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col" class="text-center">Nomor</th>
        <th scope="col" class="text-center">ID</th>
        <th scope="col" class="text-center">Nama</th>
        <th scope="col" class="text-center">Progdi</th>
        <th scope="col" class="text-center">NIM</th>
      </tr>
    </thead>
    <tbody>

    <?php

    
        $sumber = 'http://localhost:10234/TR2-RESTFUL/webresources/controller/getData';
        $konten = file_get_contents($sumber);
        $data = json_decode($konten,true);
        
        for ($a=0;$a< count($data);$a++){
            ?>

      <tr>
      <th scope="row" class="text-center"><?php echo $a+1; ?></th>
      <td class="text-center"><?php echo $data[$a]['id'] ?></td>
      <td class="text-center"><?php echo $data[$a]['nama'] ?></td>
      <td class="text-center"><?php echo $data[$a]['progdi'] ?></td>
      <td class="text-center"><?php echo $data[$a]['nim'] ?></td>
    
    <?php
        }
        ?>  
    
    
    </tbody>
  </table>

<br><br>
<div class="d-flex justify-content-start">
<div class="container">
    <div class="row">
    <div class="col text-center">
    <div class="btn-group btn-group-justified">
    <a class="btn btn-outline-primary" href="testtambah.php" role="button" style="color: black; border-color: black">Tambah Data</a>
    <a class="btn btn-outline-primary" href="delete.php" role="button" style="color: black; border-color: black">Hapus Data</a>
    <a class="btn btn-outline-primary" href="edit.php" role="button" style="color: black; border-color: black" >Edit Data</a>
    </div>
    </div>
  </div>
</div>
</div>



  </body>
</html>
