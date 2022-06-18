<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=URL?>public/img/home/student.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Season</title>
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
    <h1 class="display-5 fw-light">계절</h1>
    <img src="<?=URL?>public/img/vocabulary/calendar.png" width="80" height="80">
    <p class="display-5 text-muted">SEASONS</p>
    </div>
</div>
</section>

<div class="album py-5 bg-light">
<div class="container">
    <div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/season/tree.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">봄</h5>
        <p class="card-text">Spring</p>        
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/season/coconut-tree.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">여름</h5>
        <p class="card-text">Summer</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/season/autumn-tree.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">가을</h5>
        <p class="card-text">Autumn</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/season/pine-tree.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">겨울</h5>
        <p class="card-text">Winter</p>
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