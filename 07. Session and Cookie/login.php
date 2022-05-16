<?php

if (isset($_POST['submit'])) {
    if ($_POST['username'] == '672019084' && $_POST['password'] == '1sampai8') {
        session_start();
        $_SESSION['user'] = 'Carens Kurniawan Wijaya';
        header('Location: rmk.php');
    } else {
        header('Location: login.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
</head>

<body>
    <form action="" method="post">
        Username: <input type="text" name="username">
        <br>
        <br>
        Password: <input type="password" name="password">
        <br>
        <br>
        <input type="submit" name="submit" value="LOGIN"></input>
    </form>
</body>

</html>