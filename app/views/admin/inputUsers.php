<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>public/css/bootstrap.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>public/css/style.css">
    <title>Admin | Input Users</title>
  </head>
  <body>

    <form action="addUser" method="post">
      <div class="container mt-100">
        <div class="col-6">
          <div class="mb-3">
              <label for="username" class="form-label">USERNAME</label>
              <input type="text" class="form-control" id="username" name="username">
          </div>
          <div class="mb-3">
              <label for="usersession" class="form-label">USERSESSION</label>
              <input type="text" class="form-control" id="usersession" name="usersession">
          </div>
          <div class="mb-3">
              <label for="userpass" class="form-label">USERPASS</label>
              <input type="text" class="form-control" id="userpass" name="userpass">
          </div>
          <div class="mb-3">
              <button type="submit" class="btn btn-primary" name="addUser">Add User</button>          
          </div>
        </div>
          
      </div>
    </form>
   
    <script src="<?= BASEURL; ?>public/js/bootstrap.bundle.js"></script>
   
  </body>
</html>
