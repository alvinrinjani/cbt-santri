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
        <table class="table">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>File Jawaban</td>
                    <td>Raw File</td>
                    <td>Soal</td>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;?>
                <?php foreach ($data['user'] as $user): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $user['username']; ?></td>
                    <td><a href="<?= BASEURL; ?>public/answer/<?= $user['php_answer'];?>"><?= $user['php_answer']; ?></a></td>
                    <td><?php highlight_file('public/answer/' . $user['php_answer']); ?></td>
                    <td><?php highlight_file('public/questions/' . $user['question']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="<?= BASEURL; ?>public/js/bootstrap.bundle.js"></script>
   
  </body>
</html>
