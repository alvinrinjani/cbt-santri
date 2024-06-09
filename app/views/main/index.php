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
    <title>UJIAN AKHIR | PRISTAC 2</title>
  </head>
  <body>
    <div class="container mt-100">
      <h3><?= $data['user']['username']; ?></h3>
        <form action="main/submitAnswer" method="post" enctype="multipart/form-data">
            <div class="card">
                <div class="card-header text-center">UPLOAD JAWABAN</div>
                <?php if($data['user']['login_status'] == '2'): ?>
                    <h3 class="text-center my-3 text-green">Anda telah mengirimkan jawaban. Terima kasih!</h3>
                    <div class="card-footer text-center">
                            <a href="login/logout"><button type="button" class="btn btn-info">LOGOUT</button></a>
                    </div>
                <?php else: ?>
                <div class="card-body">
                    <p class="px-5">
                        <label for="a1" class="form-label">Jawaban No. 1</label>
                        <input class="form-control" type="file" id="a1" name="a1">
                        <br>
                        <label for="a2" class="form-label">Jawaban No. 2</label>
                        <input class="form-control" type="file" id="a2" name="a2">
                        <input type="hidden" name="usersession" value="<?= $data['user']['usersession']?>">
                        <br><br>
                    </p>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" name="submit" class="btn btn-primary">KIRIM</button>
                </div>
                <?php endif; ?>
        </div>
        </form>
    </div>

    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="<?= BASEURL; ?>public/js/bootstrap.bundle.js"></script>
   
  </body>
</html>
