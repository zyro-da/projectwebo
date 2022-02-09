<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
</head>
<body>    
    <h2>Login</h2>
    <form action="<?= BASE_URL . 'login/ceklogin' ?>" method="post">
        E-Mail
        <input type="email" name="email" required>
        <input type="password" name="password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>