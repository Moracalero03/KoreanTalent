<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=URL?>public/img/home/student.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Time</title>
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
    <h1 class="display-5 fw-light">시간</h1>
    <img src="<?=URL?>public/img/vocabulary/hourglass.png" width="80" height="80">
    <p class="display-5 text-muted">TIME</p>
    </div>
</div>
</section>

<div class="album py-5 bg-light">
<div class="container">
    <div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/time/24-hours.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">시</h5>
        <p class="card-text">Hours</p>        
    </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/time/60-minutes.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">분</h5>
        <p class="card-text">Minutes</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/time/what time.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">몇</h5>
        <p class="card-text">What time</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/time/morning.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">아침</h5>
        <p class="card-text">Morning</p>
        </div>
    </div>
</div> 

<div class="card-group">
    
    <div class="card">
        <img src="<?=URL?>public/img/time/lunch-time.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">점심</h5>
        <p class="card-text">Lunch</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/time/night.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">저녁</h5>
        <p class="card-text">Evening</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/time/time.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">시간이 있다</h5>
        <p class="card-text">Have time</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/time/notime.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">시간이 없다</h5>
        <p class="card-text">Have no time</p>
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