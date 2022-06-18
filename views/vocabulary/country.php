<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=URL?>public/img/home/student.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Country</title>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>

<body>
<?php
    require_once('views/header.php')
    ?>

<main>

<section class="py-5 text-center container">
    <br>
    <br>
<div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
    <h1 class="display-5 fw-light">나라</h1>
    <img src="<?=URL?>public/img/vocabulary/countries.png" width="80" height="80">
    <p class="display-5 text-muted">COUNTRIES</p>
    </div>
</div>
</section>

<div class="album py-5 bg-light">
<div class="container">
    <div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/country/south-korea.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">한국</h5>
        <p class="card-text">Korea</p>        
    </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/country/russia.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">러시아</h5>
        <p class="card-text">Russia</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/country/united-states.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">미국</h5>
        <p class="card-text">United States</p>
        </div>
    </div>
</div> 

<div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/country/vietnam.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">베트남</h5>
        <p class="card-text">Vietnam</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/country/mexico.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">멕시코</h5>
        <p class="card-text">Mexico</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/country/china.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">중국</h5>
        <p class="card-text">China</p>
        </div>
    </div>
</div>
</div>
</div>

</main>

<?php
    require_once('views/footer.php')
    ?>  


<script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>