<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: /login.php');
    die();
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">

    <style>
        #carouselHead .carousel-item img {
            object-fit: cover;
            object-position: center;
            overflow: hidden;
            height: 500px;
        }

        #carouselHead .carousel-item:before {
            content: "";
            background-image:
                linear-gradient(to bottom,
                    transparent, rgba(0, 0, 0, 0.5));
            display: block;
            position: absolute;
            top: 0;
            height: 500px;
        }
    </style>
</head>

<body>
    <?php include "navtop.php"; ?>
    <div class="container mt-3 shadow rounded bg-body p-1 mb-2">
        <div id="carouselHead" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselHead" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselHead" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselHead" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/banner1.jpg" class="d-block w-100" data-bs-interval="5000">
                </div>
                <div class="carousel-item">
                    <img src="/img/banner2.jpg" class="d-block w-100" data-bs-interval="5000">
                </div>
                <div class="carousel-item">
                    <img src="/img/banner3.jpg" class="d-block w-100" data-bs-interval="5000">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHead" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselHead" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container p-1">
        <div class="row">
            <div class="col">
                <div class="m-1 p-3 text-center border rounded bg-body-tertiary shadow">
                    <div class="fs-4 fw-semibold">JAM KERJA</div>
                    <hr>
                    <div class="fs-5">Senin => Jumat : 09:00 - 16:00</div>
                    <div class="fs-5">Sabtu => Minggu : 10:00 - 18:00</div>
                </div>
            </div>
            <div class="col">
                <div class="m-1 p-3 text-center border rounded bg-body-tertiary shadow">
                    <div class="fs-4 fw-semibold">TENTANG KAMI</div>
                    <hr>
                    <div class="fs-5"><a href="#">Profil Perusahaan</a></div>
                    <div class="fs-5">Jl. Raya Janti Jl. Majapahit No.143</div>
                </div>
            </div>
            <div class="col">
                <div class="m-1 p-3 text-center border rounded bg-body-tertiary shadow">
                    <div class="fs-4 fw-semibold">HUBUNGI KAMI</div>
                    <hr>
                    <div class="fs-5">Tia</div>
                    <div class="fs-5"><a href="http://wa.me/+6285743334590" target="_blank" rel="noopener noreferrer">+62 857-4333-4590</a></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>