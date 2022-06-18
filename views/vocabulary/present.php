<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=URL?>public/img/home/student.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Present</title>
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
    <h1 class="display-5 fw-light">선물</h1>
    <img src="<?=URL?>public/img/vocabulary/cake.png" width="80" height="80">
    <p class="display-5 text-muted">PRESENT</p>
    </div>
</div>
</section>

<div class="album py-5 bg-light">
<div class="container">
    <div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/present/giftbox.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">선물</h5>
        <p class="card-text">present</p>        
    </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/present/love-letter.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">카드</h5>
        <p class="card-text">card</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/present/writing.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">편지</h5>
        <p class="card-text">letter</p>
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