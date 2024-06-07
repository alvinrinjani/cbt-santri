<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Users</title>
</head>
<body>
    <h1>List User:</h1>
    <h3><?= $data['table']; ?></h3>

    <table border="solid black 1px" cellpadding = "5" cellspacing = "0">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Userpass</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data['user'] as $user): ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $user['username']; ?></td>
                <td><?= $user['userpass']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>