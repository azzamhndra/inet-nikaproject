<?php
session_start();
require '../conn.php';

if (!isset($_SESSION['nohp'])) {
    header("Location: ../login.php");
    exit();
}

$nohp = $_SESSION['nohp'];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $nama = $_POST['nama'];
    // $alamat = $_POST['alamat'];
    // $tgl_lahir = $_POST['tgl_lahir'];
    // $nohp = $_POST['nohp'];
    // $username = $_POST['username'];
    $file_name = $_FILES['formFile']['name'];
    $file_tmp = $_FILES['formFile']['tmp_name'];

    // Path untuk menyimpan file
    $upload_dir = "uploads/";
    $target_file = $upload_dir . basename($file_name);

    // Memindahkan file ke directory tujuan
    if (move_uploaded_file($file_tmp, $target_file)) {
        $sql = "INSERT INTO transaksi (file_path)
        VALUES ('$target_file')";

        if ($conn->query($sql) === TRUE) {
            echo "Record berhasil ditambahkan.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Terjadi kesalahan saat mengunggah file.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/pembayaran.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
    />
    <title>Document</title>
</head>
<body>

<!-- <div class="container-fluid custom-container d-flex flex-column justify-content-center align-items-center">
        <div class="nav-bar d-flex align-self-start gap-5 mb-3 ms-5">
            <div class="nav-bar-list">
                <a href="home.php" class="d-flex align-items-center justify-content-center fw-bold fs-5 gap-2">
                    <i class="nav-icon ri-home-2-fill"></i>
                    <p class="nav-text">Home</p>
                </a>
            </div>
            <div class="nav-bar-list">
                <a href="paket.php" class="d-flex align-items-center justify-content-center fw-bold fs-5 gap-2">
                    <i class="nav-icon ri-briefcase-fill"></i>
                    <p class="nav-text">Paket</p>
                </a>
            </div>
            <div class="nav-bar-list">
                <a href="pembayaran.php" class="d-flex align-items-center justify-content-center fw-bold fs-5 gap-2">
                    <i class="nav-icon ri-bank-card-fill"></i>
                    <p class="nav-text">Pembayaran</p>
                </a>
            </div>
            <div class="nav-bar-list">
                <a href="pengaduan.php" class="d-flex align-items-center justify-content-center fw-bold fs-5 gap-2">
                    <i class="nav-icon ri-file-list-line"></i>
                    <p class="nav-text">Pengaduan</p>
                </a>
            </div>
        </div>
        <div class="wrapper bg-white row px-4 py-4 rounded-4 shadow">
            <div class="logo-inetbg-primary">
                <img src="../assets/logo-inet.png" alt="Logo Internet" width="150px">
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center mt-5 w-100">
                <div class="login-form-header mb-4">
                    <h4 class="text-center fw-bold">Pembayaran Tagihan</h4>
                </div>
                <form action="" method="post">
                    <div class="form-group d-flex mb-2">
                        <label for="nama" class="col-6 col-form-label fw-semibold">Paket Anda</label>
                        <div>
                            <input type="text" name="nama" id="nama" class="form-control" required >
                        </div>
                    </div>
                    <div class="form-group d-flex mb-2">
                        <label for="alamat" class="col-6 col-form-label fw-semibold">Tagihan</label>
                        <div>
                            <input type="text" name="alamat" id="alamat" class="form-control" required >
                        </div>
                    </div>
                    <div class="form-group d-flex mb-2">
                        <label for="tgl_lahir" class="col-6 col-form-label fw-semibold">Denda</label>
                        <div class="col">
                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required >
                        </div>
                    </div>
                    <div class="form-group d-flex mb-2">
                        <label for="nohp" class="col-6 col-form-label fw-semibold">Total</label>
                        <div class="col">
                            <input type="text" name="nohp" id="nohp" class="form-control" required >
                        </div>
                    </div>
                    <div class="form-group d-flex mb-2">
                        <label for="username" class="col-6 col-form-label fw-semibold">Metode Pembayaran</label>
                        <div class="col">
                            <input type="text" name="username" id="username" class="form-control" required >
                        </div>
                    </div>
                    <div class="form-group d-flex mb-2">
                        <label for="password" class="col-6 col-form-label fw-semibold">Bukti Pembayaran</label>
                        <div class="col">
                            <input type="password" name="password" id="password" class="form-control" required >
                        </div>
                    </div>
                    <div class="form-group text-end mt-5">
                        <button type="submit" class="btn kirim-btn bg-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->

    <div class="container-fluid custom-container d-flex flex-column justify-content-center align-items-center">
    <div class="nav-bar d-flex align-self-start gap-5 mb-3 ms-5">
        <div class="nav-bar-list">
            <a href="home.php" class="d-flex align-items-center justify-content-center fw-bold fs-5 gap-2">
                <i class="nav-icon ri-home-2-fill"></i>
                <p class="nav-text">Home</p>
            </a>
        </div>
        <div class="nav-bar-list">
            <a href="paket.php" class="d-flex align-items-center justify-content-center fw-bold fs-5 gap-2">
                <i class="nav-icon ri-briefcase-fill"></i>
                <p class="nav-text">Paket</p>
            </a>
        </div>
        <div class="nav-bar-list">
            <a href="pembayaran.php" class="d-flex align-items-center justify-content-center fw-bold fs-5 gap-2">
                <i class="nav-icon ri-bank-card-fill"></i>
                <p class="nav-text">Pembayaran</p>
            </a>
        </div>
        <div class="nav-bar-list">
            <a href="pengaduan.php" class="d-flex align-items-center justify-content-center fw-bold fs-5 gap-2">
                <i class="nav-icon ri-file-list-line"></i>
                <p class="nav-text">Pengaduan</p>
            </a>
        </div>
    </div>
    <div class="wrapper bg-white row px-4 py-4 rounded-4 shadow">
      <div class="col-2 logo-inet">
          <img src="../assets/logo-inet.png" alt="Logo Internet" width="200px">
      </div>
      <div class="col d-flex flex-column align-items-center mt-5 pe-5">
        <h3 class="fw-bold">Pembayaran Tagihan</h3>
        <div class="container d-flex justify-content-center fs-5 mt-5">
        <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group d-flex mb-2 gap-3">
        <label for="nama" class="col-6 col-form-label fw-semibold">Paket Anda</label>
        <div class="col">
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
    </div>
    <div class="form-group d-flex mb-2 gap-3">
        <label for="alamat" class="col-6 col-form-label fw-semibold">Tagihan</label>
        <div class="col">
            <input type="text" name="alamat" id="alamat" class="form-control" required>
        </div>
    </div>
    <div class="form-group d-flex mb-2 gap-3">
        <label for="tgl_lahir" class="col-6 col-form-label fw-semibold">Denda</label>
        <div class="col">
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required>
        </div>
    </div>
    <div class="form-group d-flex mb-2 gap-3">
        <label for="nohp" class="col-6 col-form-label fw-semibold">Total</label>
        <div class="col">
            <input type="text" name="nohp" id="nohp" class="form-control" required>
        </div>
    </div>
    <div class="form-group d-flex mb-2 gap-3">
        <label for="username" class="col-6 col-form-label fw-semibold">Metode Pembayaran</label>
        <div class="col">
            <input type="text" name="username" id="username" class="form-control" required>
        </div>
    </div>
    <div class="d-flex mb-2 gap-3">
        <label for="formFile" class="col-6 col-form-label fw-semibold">Bukti Pembayaran</label>
        <div class="col">
            <input class="form-control" type="file" name="formFile" id="formFile">
        </div>
    </div>
    <div class="form-group text-end mt-5">
        <button type="submit" class="btn konfirmasi-btn btn-primary">Kirim</button>
    </div>
</form>

        </div>
      </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>