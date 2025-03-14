<?php
require_once("BukuTamu.php");
session_start();

if (!isset($_SESSION['bukutamu'])) {
    $_SESSION['bukutamu'] = [];
}

if (isset($_POST['submit'])) {
    // Membuat objek dari class BukuTamu
    $bukutamu = new BukuTamu();

    // Mengisi data objek BukuTamu
    // Y-m-d H:i:s artinya 2025-3-14 09:42:30
    $bukutamu->timestamp =  date("Y-m-d H:i:s");

    $bukutamu->fullname = $_POST['fullname'];
    $bukutamu->email = $_POST['email'];
    $bukutamu->message = $_POST['message'];

    array_push($_SESSION['bukutamu'], $bukutamu);
    header('location: kunjungan.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Buku Tamu</title>
    </head>
    <body>
        <h1>Formulir Buku Tamu</h1>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container my-5">
        <h2 class="mb-4">Daftar Kunjungan</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Timestamp</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION["bukutamu"] as $entry): ?>
                    <tr>
                        <td>
                            <?php echo htmlspecialchars ($entry->timestamp); ?>
                        </td>
                        <td>
                            <?php echo htmlspecialchars ($entry->fullname); ?>
                        </td>
                        <td>
                            <?php echo htmlspecialchars ($entry->email); ?>
                        </td>
                        <td>
                            <?php echo htmlspecialchars ($entry->message); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index.php">&lt;&lt;&lt; Kembali</a>
    </div>
</body>

</html>