<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=URL?>public/img/home/student.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercise</title>
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
    <h1 class="display-5 fw-light">운동</h1>
    <img src="<?=URL?>public/img/vocabulary/triangle.png" width="80" height="80">
    <p class="display-5 text-muted">EXERCISE</p>
    </div>
</div>
</section>

<div class="album py-5 bg-light">
<div class="container">
    <div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/exercise/fitness.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">운동</h5>
        <p class="card-text">Exercises</p>        
    </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/exercise/swimming.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">수영</h5>
        <p class="card-text">Swimming</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/exercise/soccer-player.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">축구</h5>
        <p class="card-text">Soccer</p>
        </div>
    </div>
</div> 

<div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/exercise/basketball-player.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">농구</h5>
        <p class="card-text">Basketball</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/exercise/baseball.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">야구</h5>
        <p class="card-text">Baseball</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/exercise/like.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">잘하다</h5>
        <p class="card-text">Be good at</p>
        </div>
    </div>
</div>

<div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/exercise/yoga.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">연습</h5>
        <p class="card-text">Practice</p>
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