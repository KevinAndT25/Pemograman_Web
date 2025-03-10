<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION["loggedin_user"])) {
    header("Location: login.php");
    exit;
}

// Ambil semua data pengguna yang telah terdaftar
$users = isset($_SESSION["registered_user"]) ? $_SESSION["registered_user"] : [];

// Proses logout
if (isset($_GET["logout"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
            position: relative;
        }
        .logout-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #dc3545;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }
        .logout-btn:hover {
            background: #c82333;
        }
        .table-container {
            width: 100%;
            overflow-x: auto;
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .password-cell {
            max-width: 200px;
            overflow-x: auto;
            white-space: nowrap;
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="?logout=1" class="logout-btn">Logout</a>
        <h1>Dashboard</h1>
        <p>Selamat datang, <strong><?php echo htmlspecialchars($_SESSION["loggedin_user"]["name"]); ?></strong>!</p>

        <h3>Daftar Pengguna Terdaftar</h3>
        <div class="table-container">
            <table>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password (Encrypted)</th>
                    <th>Tanggal Registrasi</th>
                </tr>
                <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($user["name"]); ?></td>
                    <td><?php echo htmlspecialchars($user["email"]); ?></td>
                    <td><div class="password-cell"><?php echo htmlspecialchars($user["password"]); ?></div></td>
                    <td><?php echo $user["registration_time"]; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>