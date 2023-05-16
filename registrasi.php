<?php
$is_regitrasi_error = false;
if (
    isset($_POST['nama']) &&
    isset($_POST['username']) &&
    isset($_POST['password']) &&
    isset($_POST['no_hp']) &&
    isset($_POST['email']) &&
    isset($_POST['alamat'])
) {
    require_once __DIR__ . "/db.php";
    $nama = $db->real_escape_string($_POST['nama']);
    $username = $db->real_escape_string($_POST['username']);
    $password = $db->real_escape_string($_POST['password']);
    $no_hp = $db->real_escape_string($_POST['no_hp']);
    $email = $db->real_escape_string($_POST['email']);
    $alamat = $db->real_escape_string($_POST['alamat']);

    $sql = "INSERT INTO user_pelanggan (username, nama, password, no_hp, email, alamat) VALUES ('$username','$nama',MD5('$password'),'$no_hp','$email','$alamat')";
    if ($conn->query($sql) === TRUE) {
        header('Location: /login.php');
        die();
    } else {
        $is_regitrasi_error = true;
    }
    $db->close();
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <div class="container pt-3">
        <div class="border rounded bg-body-tertiary shadow p-2">
            <p class="fs-2 fw-bold">Registrasi</p>
            <hr>
            <form method="POST" class="row" id="formRegistrasi">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="inputNama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="inputNama" name="nama" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="inputUsername" class="form-label">Username</label>
                        <input type="text" class="form-control" id="inputUsername" name="username" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword" name="password" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="inputPasswordConfirm" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="inputPasswordConfirm" name="konfirm_password" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="inputNoHP" class="form-label">No. HP</label>
                        <input type="tel" class="form-control" id="inputNoHP" name="no_hp" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="mb-3">
                        <label for="inputAlamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="inputAlamat" name="alamat" required></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary w-100">Registrasi</button>
                </div>
                <?php
                if ($is_regitrasi_error) {
                    echo "<div class=\"col-lg-12\"><div class=\"alert alert-danger mt-3\" role=\"alert\">Gagal menambakan user</div></div>";
                }
                ?>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(function() {
            $("#formRegistrasi").on("submit", function(event) {
                if ($('#inputPassword').val() != $('#inputPasswordConfirm').val()) {
                    event.preventDefault();
                    Swal.fire({
                        icon: 'error',
                        title: 'Invalid data',
                        text: 'Mohon isi konfirmasi password dengan benar'
                    });
                }
            });
        });
    </script>
</body>

</html>