<?php
session_start();
// Redirect ke halaman login jika belum login
if (!isset($_SESSION["is_login"])) {
    $_SESSION["warninglogin"] = true;
    header("location: ../index.php");
    exit;
}
// logout
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: ../index.php');
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="d-flex justify-content-end">
    <main class="dashboard bg-info p-3 w-75 rounded-3">
        <h1>Welcome to the dashboard</h1>
        <h3>Selamat datang <?= $_SESSION["username"] ?></h3>
        <form action="dashboard.php" method="post">
            <button type="submit" name="logout">Logout</button>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>