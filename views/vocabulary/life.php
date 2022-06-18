<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=URL?>public/img/home/student.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Life</title>
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
    <h1 class="display-5 fw-light">일상생활</h1>
    <img src="<?=URL?>public/img/vocabulary/mental-health.png" width="80" height="80">
    <p class="display-5 text-muted">DAILY LIFE</p>
    </div>
</div>
</section>

<div class="album py-5 bg-light">
<div class="container">
    <div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/life/vynil.png" class="p-4 card-img-top">
        <div class="card-body">
        <h5 class="card-title">노래</h5>
        <p class="card-text">Song</p>        
    </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/life/drama.png" class="p-4 card-img-top">
        <div class="card-body">
        <h5 class="card-title">드라마</h5>
        <p class="card-text">Drama</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/life/diet.png" class="p-4 card-img-top">
        <div class="card-body">
        <h5 class="card-title">음식</h5>
        <p class="card-text">Food</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/life/phone-call.png" class="p-4 card-img-top">
        <div class="card-body">
        <h5 class="card-title">전화</h5>
        <p class="card-text">Call</p>
        </div>
    </div>
</div> 

<div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/life/apreton-de-manos.png" class="p-4 card-img-top">
        <div class="card-body">
        <h5 class="card-title">반갑다</h5>
        <p class="card-text">Glad</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/life/preguntas-mas-frecuentes.png" class="p-4 card-img-top">
        <div class="card-body">
        <h5 class="card-title">실례하다</h5>
        <p class="card-text">Excuse me</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/life/gracias (1).png" class="p-4 card-img-top">
        <div class="card-body">
        <h5 class="card-title">고맙다</h5>
        <p class="card-text">Thank</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/life/gracias.png" class="p-4 card-img-top">
        <div class="card-body">
        <h5 class="card-title">감사하다</h5>
        <p class="card-text">Thank</p>
        </div>
</div>

</div>

<div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/life/perdon.png" class="p-4 card-img-top">
        <div class="card-body">
        <h5 class="card-title">미안하다</h5>
        <p class="card-text">Sorry</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public\img\life\perdon (2).png" class="p-4 card-img-top">
        <div class="card-body">
        <h5 class="card-title">죄송하다</h5>
        <p class="card-text">Sorry</p>
        </div>
    </div>
    <div class="card border-0">

    </div>
    <div class="card border-0">

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