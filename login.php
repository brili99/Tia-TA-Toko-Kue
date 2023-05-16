<?php
if (
    isset($_POST['username']) &&
    isset($_POST['password'])
) {
    require_once __DIR__ . "/db.php";
    $username = $db->real_escape_string($_POST['username']);
    $password = $db->real_escape_string($_POST['password']);

    $db->close();
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <div class="container pt-3">
        <div class="border rounded bg-body-tertiary shadow p-2">
            <p class="fs-2 fw-bold">Login</p>
            <hr>
            <form method="POST" class="row" id="formRegistrasi">
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
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </div>
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