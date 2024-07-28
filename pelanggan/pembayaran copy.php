<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="nav-bar row">
            <a href="" class="col-1">
                <p>Home</p>
            </a>
            <a href="" class="col-1">
                <p>Paket</p>
            </a>
            <a href="" class="col-1">
                <p>Pembayaran</p>
            </a>
            <a href="" class="col-1">
                <p>Pengaduan</p>
            </a>
        </div>
        <div class="bg-white wrapper row px-4 py-5 rounded-4 shadow">
            <div class="logo-inet col-2">
                <img src="../assets/logo-inet.png" alt="Logo Internet" width="150px">
            </div>
            <div class="row justify-content-center">
                <div class="col-10 d-flex flex-column align-items-center justify-content-center">
                    <div class="login-form-header mb-4">
                        <h4 class="text-center fw-bold">Pembayaran Tagihan</h4>
                    </div>
                    <form action="" method="post">
                        <div class="form-group row mb-2">
                            <label for="nama" class="col-6 col-form-label fw-semibold">Paket Anda</label>
                            <div class="col">
                                <input type="text" name="nama" id="nama" class="form-control" required >
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="alamat" class="col-6 col-form-label fw-semibold">Tagihan</label>
                            <div class="col">
                                <input type="text" name="alamat" id="alamat" class="form-control" required >
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="tgl_lahir" class="col-6 col-form-label fw-semibold">Denda</label>
                            <div class="col">
                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required >
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="nohp" class="col-6 col-form-label fw-semibold">Total</label>
                            <div class="col">
                                <input type="text" name="nohp" id="nohp" class="form-control" required >
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="username" class="col-6 col-form-label fw-semibold">Metode Pembayaran</label>
                            <div class="col">
                                <input type="text" name="username" id="username" class="form-control" required >
                            </div>
                        </div>
                        <div class="form-group row mb-2">
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
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>