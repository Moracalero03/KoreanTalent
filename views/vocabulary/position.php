<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=URL?>public/img/home/student.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Position</title>
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
    <h1 class="display-5 fw-light">위치</h1>
    <img src="<?=URL?>public/img/vocabulary/brand-positioning.png" width="80" height="80">
    <p class="display-5 text-muted">POSITION</p>
    </div>
</div>
</section>

<div class="album py-5 bg-light">
<div class="container">
    <div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/position/information.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">앞</h5>
        <p class="card-text">Front</p>        
    </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/position/businesswoman.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">뒤</h5>
        <p class="card-text">Behind</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/position/breakfast.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">옆</h5>
        <p class="card-text">Next to</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/position/dinner.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">위</h5>
        <p class="card-text">On</p>
        </div>
    </div>
</div> 

<div class="card-group">
    
    <div class="card">
        <img src="<?=URL?>public/img/position/tool.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">아래</h5>
        <p class="card-text">Under</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/position/between.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">사이에 </h5>
        <p class="card-text">Between</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/position/target.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">가운데</h5>
        <p class="card-text">In the middle of</p>
        </div>
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