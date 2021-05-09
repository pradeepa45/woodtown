<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    
    <link href="style.css" rel="stylesheet">
    <script src="script.js"></script>
    <title>Welcome to Woodtown!</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm sticky-sm-top bg-gradient bg-dark" id="my-nav" style="background-color: grey;">
        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-shop-window"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.html">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.html" >Sign Up</a>
            </li>
          </ul>
    </nav>
    <div class="container-sm" id="carousel-cont">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="https://i.ibb.co/ThVPpcw/3.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="https://i.ibb.co/2hHMvq0/2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://i.ibb.co/bW3gH6Y/1.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <footer class="bg-dark bg-gradient">
    
        <hr />
        <p>Copy right @ WoodTown.</p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
    crossorigin="anonymous"></script>

</html>