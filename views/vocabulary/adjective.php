<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=URL?>public/img/home/student.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adjective</title>
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
    <h1 class="display-5 fw-light">형용사</h1>
    <img src="<?=URL?>public/img/vocabulary/candidates.png" width="80" height="80">
    <p class="display-5 text-muted">ADJECTIVES</p>
    </div>
</div>
</section>

<div class="album py-5 bg-light">
<div class="container">
    <div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/adjectives/big-fish.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">크다</h5>
        <p class="card-text">Big</p>        
    </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/adjectives/small.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">작다</h5>
        <p class="card-text">Small</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/adjectives/woman.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">예쁘다</h5>
        <p class="card-text">Pretty</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/adjectives/thumbs-up.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">좋다</h5>
        <p class="card-text">Good</p>
        </div>
    </div>
</div> 

<div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/adjectives/gota-de-agua.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">있다</h5>
        <p class="card-text">There is[are]</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/adjectives/no-hay-agua.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">없다</h5>
        <p class="card-text">There is[are] no</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/adjectives/regalos.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">많다</h5>
        <p class="card-text">A lot of</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/adjectives/wide.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">넓다</h5>
        <p class="card-text">wide(big)</p>
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