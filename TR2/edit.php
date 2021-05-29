<style>
.error {color: #FF0000;}
</style>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Client</title>
</head>
<body>  

	


	<form method="POST" action="tambah.php"> 
<fieldset>

<!-- Form Name -->
<legend>Form Edit Data</legend>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prodi"></label>  
  <div class="col-md-4">
ID:  <input  name="id" type="number" placeholder="Masukan ID " class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-4">
 NIM: <input  name="nim" type="number" placeholder="Masukan NIM " class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nama"></label>  
  <div class="col-md-4">
 Nama: <input  name="nama" type="text" placeholder="Masukan Nama" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prodi"></label>  
  <div class="col-md-4">
Progdi:  <input  name="progdi" type="text" placeholder="Masukan Progdi " class="form-control input-md">
    
  </div>
</div>



<!-- Button -->
<input type="submit" value="Submit">  
</fieldset>
</form>