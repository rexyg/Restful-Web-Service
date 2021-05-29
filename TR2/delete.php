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

<form method="POST" action="next_delete.php"> 
<fieldset>

<!-- Form Name -->
<legend>Form Hapus ID</legend>

<!-- Text input-->
<div class="form-group">
  
  <div class="col-md-4">
  ID:<input id="textinput" name="id" type="number" placeholder="Masukan ID yang mau dihapus" class="form-control input-md">
  
  </div>
</div>
<input type="submit" value="Submit"> 
</fieldset>
</form>