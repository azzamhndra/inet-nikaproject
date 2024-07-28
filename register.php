<?php
session_start();
require 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['nohp'];
    $username = $_POST['username'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $password = $_POST['password'];

    $sql = "INSERT INTO pelanggan (nama, alamat, no_hp, id_pelanggan, tanggal_lahir password) VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nama, $alamat, $no_hp, $username, $tgl_lahir, $password);

    if ($stmt->execute()) {
        header("Location: login.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class=" bg-white wrapper rounded-4 shadow">
            <div class="logo-inet ps-5 pt-3">
                <img src="assets/logo-inet.png" alt="Logo Internet" width="150px">
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-10 bg-white px-4">
                    <div class="login-form-header my-4">
                        <h4 class="text-center fw-bold">Pendaftaran Pelanggan</h4>
                    </div>
                    <form action="" method="post">
                        <div class="form-group row mb-2">
                            <label for="nama" class="col-3 col-form-label fw-semibold">Nama</label>
                            <div class="col">
                                <input type="text" name="nama" id="nama" class="form-control" required >
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="alamat" class="col-3 col-form-label fw-semibold">Alamat</label>
                            <div class="col">
                                <input type="text" name="alamat" id="alamat" class="form-control" required >
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="tgl_lahir" class="col-3 col-form-label fw-semibold">Tanggal Lahir</label>
                            <div class="col">
                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required >
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="nohp" class="col-3 col-form-label fw-semibold">No. HP</label>
                            <div class="col">
                                <input type="text" name="nohp" id="nohp" class="form-control" required >
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="username" class="col-3 col-form-label fw-semibold">Username</label>
                            <div class="col">
                                <input type="text" name="username" id="username" class="form-control" required >
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="password" class="col-3 col-form-label fw-semibold">Password</label>
                            <div class="col">
                                <input type="password" name="password" id="password" class="form-control" required >
                            </div>
                        </div>
                        <div class="form-group text-center mt-5">
                            <button type="submit" class="btn daftar-btn">Daftar</button>
                        </div>
                    </form>
                    <div class="paket-footer d-flex justify-content-center mt-2">
                        <p class="">Sudah memiliki akun? <a href="login.php">Login.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>