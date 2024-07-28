<?php
session_start();
require 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nohp = $_POST['nohp'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if ($role == 'Pelanggan') {
        $stmt = $conn->prepare("SELECT password FROM pelanggan WHERE no_hp = ?");
    } else if ($role == 'Petugas') {
        $stmt = $conn->prepare("SELECT password FROM petugas WHERE no_hp = ?");
    }

    if ($stmt) {
        $stmt->bind_param("s", $nohp);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($stored_password);
            $stmt->fetch();

            if ($password === $stored_password) {
                $_SESSION['nohp'] = $nohp;
                $_SESSION['role'] = $role;

                if ($role == 'Pelanggan') {
                    header("Location: pelanggan/home.php");
                } else if ($role == 'Petugas') {
                    header("Location: b.php");
                }
                exit();
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with that ID and role.";
        }

        $stmt->close();
    } else {
        echo "Failed to prepare the SQL statement.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-5 col-md-6 col-sm-8 bg-white rounded-4 px-4 py-4 shadow">
                <div class="login-form-header my-4">
                    <h4 class="text-center">LOGIN</h4>
                </div>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nohp">No. HP</label>
                        <input type="text" name="nohp" id="nohp" class="form-control" required placeholder="Masukan No. HP">
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required placeholder="Masukan Password">
                    </div>
                    <div class="form-group mt-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="role" id="pelanggan" value="Pelanggan" required>
                            <label class="form-check-label" for="pelanggan">Pelanggan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="role" id="petugas" value="Petugas" required>
                            <label class="form-check-label" for="petugas">Petugas</label>
                        </div>
                    </div>
                    <div class="form-group text-center mt-5">
                        <button type="submit" class="btn login-btn">Login</button>
                    </div>
                </form>
                <div class="login-form-footer text-center mt-2">
                    <p>Belum memiliki akun? <a href="register.php">Buat Akun.</a></p>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>