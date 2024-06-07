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
    <title>Main Page | ATCO 1</title>
  </head>
  <body>
    <div class="container mt-100">
      <h3><?= $data['user']['username']; ?></h3>
        <div class="card">
            <div class="card-header text-center">Soal</div>
            <div class="card-body">
              <p class="px-5">
                <?php highlight_file('public/questions/' . $data['user']['question']); ?>
              </p>
            </div>
            <div class="card-footer text-center">
                Jawaban
            </div>
            <div class="card-body">

            <?php if($data['user']['login_status'] == NULL): ?>
            <form action="main/submitAnswer" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <input type="hidden" class="form-control" name="usersession" value="<?= $data['user']['usersession']; ?>">
                    <input type="file" class="form-control" placeholder="Upload Jawaban" name="answer">
                    <button type="submit" class="btn btn-success">Submit Jawaban</button>
                </div>
            </form>
            <?php elseif($data['user']['login_status'] === '2'): ?>
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
