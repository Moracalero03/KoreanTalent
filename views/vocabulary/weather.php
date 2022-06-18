<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=URL?>public/img/home/student.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weather</title>
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
    <h1 class="display-5 fw-light">날씨</h1>
    <img src="<?=URL?>public/img/vocabulary/weather-news.png" width="80" height="80">
    <p class="display-5 text-muted">WEATHER</p>
    </div>
</div>
</section>

<div class="album py-5 bg-light">
<div class="container">
    <div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/weather/pronostico-del-tiempo.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">날씨</h5>
        <p class="card-text">Weather</p>        
    </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/weather/soleado.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">맑다</h5>
        <p class="card-text">Clear</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/weather/nube.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">흐리다</h5>
        <p class="card-text">Cloudy</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/weather/lluvioso (1).png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">비</h5>
        <p class="card-text">Rain</p>
        </div>
    </div>
</div> 

<div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/weather/nevando.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">눈</h5>
        <p class="card-text">Snow</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/weather/snow-fall.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">오다/내리다</h5>
        <p class="card-text">Come/Fall</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/weather/hot.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">덥다</h5>
        <p class="card-text">Hot</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/weather/cold.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">춥다</h5>
        <p class="card-text">Cold</p>
        </div>
    </div>
</div>

<div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/weather/hot (1).png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">따뜻하다</h5>
        <p class="card-text">Warm</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/weather/fan.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">시원하다</h5>
        <p class="card-text">Cool</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/weather/wind.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">바람</h5>
        <p class="card-text">Wind</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/weather/wind (1).png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">불다</h5>
        <p class="card-text">Blow</p>
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