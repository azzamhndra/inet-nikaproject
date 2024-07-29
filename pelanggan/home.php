<?php
session_start(); // Memulai session

// Periksa apakah ID pelanggan tersedia di session
if (!isset($_SESSION['nohp'])) {
    // Jika session tidak tersedia, arahkan pengguna ke halaman login
    header("Location: ../login.php");
    exit();
}

echo $_SESSION['nohp'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/paket.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
    />
    <title>Document</title>
</head>
<body>

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
      <div class="col d-flex flex-column align-items-center mt-5">
        <h3 class="fw-bold">SELAMAT DATANG</h3>
        <div class="container">
            <div class="row list-paket mt-3">

              <div class="col-xl-3 col-lg-3">
                 <div class="paket border">
                    <div class="paket-header text-start px-4 py-2 ph1">
                      <h4>Paket Silver</h4>
                      <h4>Rp. 300.000</h4>
                    </div>
                    <div class="paket-body fw-bold fs-5 pt-5 pb-5 ps-3">
                        <p>Kecepatan 20 Mbps</p>
                        <p>Masa Aktif 30 hari</p>
                        <p>Unlimited</p>
                    </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-3">
                  <div class="paket border">
                    <div class="paket-header text-start px-4 py-2 ph2">
                      <h4>Paket Gold</h4>
                      <h4>Rp. 350.000</h4>
                    </div>
                    <div class="paket-body fw-bold fs-5 pt-5 pb-5 ps-3">
                      <p>Kecepatan 25 Mbps</p>
                      <p>Masa Aktif 30 hari</p>
                      <p>Unlimited</p>
                    </div>
                  </div>
              </div>

              <div class="col-xl-3 col-lg-3">
                <div class="paket border">
                  <div class="paket-header text-start px-4 py-2 ph3">
                      <h4>Paket Platinum</h4>
                      <h4>Rp. 425.000</h4>
                  </div>
                  <div class="paket-body fw-bold fs-5 pt-5 pb-5 ps-3">
                    <p>Kecepatan 35 Mbps</p>
                    <p>Masa Aktif 30 hari</p>
                    <p>Unlimited</p>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-3">
                <div class="paket border">
                  <div class="paket-header text-start px-4 py-2 ph4">
                    <h4>Paket Diamond</h4>
                    <h4>Rp. 475.000</h4>
                  </div>
                  <div class="paket-body fw-bold fs-5 pt-5 pb-5 ps-3">
                    <p>Kecepatan 40 Mbps</p>
                    <p>Masa Aktif 30 hari</p>
                    <p>Unlimited</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <?php include '../popup_modal/modals.html';?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
