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
    <title>UAS | Shoul-Lin 2</title>
  </head>
  <body>
    <div class="container mt-100">
      <h3 style="color: #a60000"><?= $data['user']['username']; ?></h3>
        <div class="card">
            <div class="card-header text-center">Soal</div>
            <div class="card-body">
              
              <?php if($data['user']['login_status'] == 2): ?>
                <h2 class="text-center text-green">Anda sudah selesai mengerjakan soal.<br>Silahkan Logout!</h2>
                <?php else: ?>
                  <p class="px-5">
                      <!-- SOAL -->
                    <ol>
                      <li>Apa kegunaan dari Microsoft Power Point?</li>
                      <li>Jelaskan tentang transitions dan animations pada Microsoft Power Point!</li>
                      <li>Apa yang dimaksud dengan HTML? </li>
                      <li>Buatlah file HTML dengan ketentuan isi sebagai berikut: </li>
                        <ul>
                          <li>Struktur syntax HTML lengkap. </li>
                          <li>Terdapat Head dan Body. </li>
                          <li>Buat title pada bagian head dengan nama antum masing-masing. </li>
                          <li>Simpan file dengan nama “syntax.html”. </li>
                          <li>Kirim file HTML tersebut pada kolom nomor 4 di bawah. </li>
                        </ul>
                      <li>Buatlah file HTML yang dapat menghasilkan output seperti ini: </li>
                      <h3 style="color: green; background-color: yellow;">Santri Shoul-Lin 2 Ponpes At-Taqwa Depok </h1>
                      <h3 style="color: red; background-color: yellow;">Belajar HTML </h3>
                        <ul>
                            <li>Simpan file dengan nama “belajar.html”.  </li>
                            <li>Kirim file HTML tersebut pada kolom nomor 5 di bawah. </li>
                          </ul>
                    </ol>
                  </p>
              <?php endif; ?>

            </div>
            <div class="card-footer text-center">
                Jawaban
            </div>
            <div class="card-body">

            <?php if($data['user']['login_status'] == 0): ?>
            <form action="main/submitAnswer" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="a1" class="form-label">No. 1</label>
                    <textarea type="text" class="form-control" id="a1" placeholder="Jawaban 1" rows="5" name="a1"></textarea>
                    <br><br>
                    <label for="a2" class="form-label">No. 2</label>
                    <textarea type="text" class="form-control" id="a2" placeholder="Jawaban 2" rows="5" name="a2"></textarea>
                    <br><br>
                    <label for="a3" class="form-label">No. 3</label>
                    <textarea type="text" class="form-control" id="a3" placeholder="Jawaban 3" rows="5" name="a3"></textarea>
                    <br><br>
                    <label for="a4" class="form-label">No. 4</label>
                    <input class="form-control" type="file" id="a4" name="a4">
                    <br>
                    <label for="a5" class="form-label">No. 5</label>
                    <input class="form-control" type="file" id="a5" name="a5">
                    <input type="hidden" name="usersession" value="<?= $data['user']['usersession']?>">
                    <br><br>
                    <button type="submit" class="btn btn-primary">Kirim Jawaban</button>
                </div>
            </form>
            <?php elseif($data['user']['login_status'] === 2): ?>
              <div class="row text-center justify-content-center">
                  <a href="login/logout" class="text-center col-6"><button type="button" class="btn btn-danger col-6">Logout</button></a>
              </div>
            <?php endif; ?>

            </div>
        </div>
    </div>

    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="<?= BASEURL; ?>public/js/bootstrap.bundle.js"></script>
   
  </body>
</html>
