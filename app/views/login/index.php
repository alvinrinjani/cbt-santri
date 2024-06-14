<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?= BASEURL; ?>public/css/bootstrap.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>public/css/style.css">
    <title>Login | Shoul-Lin 2</title>
  </head>
  <body>
      <div class="card mx-auto mt-200" style="width: 36rem;">
        <div class="card-body">
          <h5 class="card-title text-center"><span class="text-marun">Silahkan Login</span><br>Untuk Melihat dan Menjawab Soal Ujian</h5>
          <form action="login/auth" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="username">
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="userpass">
            </div>
            <div class="col text-center">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
        </div>
      </div>

    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="<?= BASEURL; ?>public/js/bootstrap.bundle.js"></script>

  </body>
</html>
