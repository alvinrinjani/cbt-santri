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
                    <th>Password</th>
                    <td class="text-center">Submit Answer</td>
                    <td>Time</td>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;?>
                <?php foreach ($data['user'] as $user): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <?php if($user['login_status'] == '2') : ?>
                      <td class='bg-success text-white'><?= $user['username']; ?></td>
                      <td class='bg-success text-white'><?= $user['userpass']; ?></td>
                      <td class="bg-success text-white text-center"><?= $user['login_status']; ?></td>
                      <td class="bg-success text-white"><?= $user['time_stamp']; ?></td>
                      <?php else :?>
                        <td><?= $user['username']; ?></td>
                        <td><?= $user['userpass']; ?></td>
                        <td class="text-center"><?= $user['login_status']; ?></td>
                        <td><?= $user['time_stamp']; ?></td>
                    <?php endif; ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div>
          <a href="login/logout"><button class="btn btn-danger mb-5" type="button">Logout</button></a>
        </div>
    </div>

    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="<?= BASEURL; ?>public/js/bootstrap.bundle.js"></script>
   
  </body>
</html>
