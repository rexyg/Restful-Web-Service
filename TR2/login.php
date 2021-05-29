<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Admin</title>
</head>

<style type="text/css">
  
.kotak {
  color: white;
  background-color: black;
  border-radius: 15px;
  padding-left: 20px;
  padding-right: 20px;
}

#kotakkotak {
    display: flex;
  align-items: center;
  justify-content: center;
}

.btn-custom {
  background-color: #0f0f0f;
  border-radius: 5px;
  color: white;
  width: 100px;
  height: 40px;
}

.btn-custom:hover {
  background-color: white;
  border-radius: 5px;
  color: black;
}



</style>



<body>



  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <p></p>
      </div>
      <div class="col-md-6 text-center">
        <div class="kotak" id="kotakkotak">
          <div class="isikotak">
            <h1>Selamat Datang</h1>
            <br>
            <form action="login.php" method="post">
              <div class="inputusername">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Username</span>
                  </div>
                  <input type="text"  name="username" aria-label="username" class="form-control">
                </div>
              </div>
              <br>
              <div class="inputpassword">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text ">Password</span>
                  </div>
                  <input type="password" name="password" aria-label="password " class="form-control">
                </div>
              </div>
              <br>
              <br>
              <button type="submit" class="btn-custom" name="login" >LOGIN</button>
              <br>
              <br>
            </form>
            <?php
            if(isset($_GET['pesan'])){
                ?>
            <div class="alert alert-danger" role="alert">
                <?php
                if($_GET['pesan']=="0"){
                    echo "Username Atau Password Salah!";
                }
                else if($_GET['pesan']=="3"){
                    echo "Anda Sudah Berhasil Logout";
                } 
                ?>
            </div>
                <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
