<?php
  function cekBg($param) {
    $bg = `class="bg-info"`;
    
    if($param == 2) {
      echo $bg;
    }
    return;
  }
?>

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
    <title>Main Page | PRISTAC 2</title>
  </head>
  <body>
    <div class="container mt-100">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>A1</th>
                    <th>A2</th>
                    <th>A3</th>
                    <th>A4</th>
                    <th>A5</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;?>
                <?php foreach ($data['jawaban'] as $user): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $user['username'];?></td>
                    <td><?= $user['a1']; ?></td>
                    <td><?= $user['a2']; ?></td>
                    <td><?= $user['a3']; ?></td>
                    <td><?= $user['a4']; ?></td>
                    <td><?= $user['a5']; ?></td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

        <div>
          <a href="<?= BASEURL; ?>admin/"><button class="btn btn-primary mb-5" type="button">Back</button></a>
          <a href="<?= BASEURL; ?>login/logout"><button class="btn btn-danger mb-5" type="button">Logout</button></a>
        </div>
    </div>

    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="<?= BASEURL; ?>public/js/bootstrap.bundle.js"></script>
   
  </body>
</html>
