<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=URL?>public/img/home/student.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Family</title>
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
    <h1 class="display-5 fw-light">가족</h1>
    <img src="<?=URL?>public/img/vocabulary/big-family.png" width="80" height="80">
    <p class="display-5 text-muted">FAMILY</p>
    </div>
</div>
</section>

<div class="album py-5 bg-light">
<div class="container">
    <div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/family/dad.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">아버지</h5>
        <p class="card-text">Father</p>        
    </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/family/mother.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">어머니</h5>
        <p class="card-text">Mother</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/family/brother.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">동생</h5>
        <p class="card-text">younger brother/sister</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/family/sisters.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">언니</h5>
        <p class="card-text">Older sister</p>
        </div>
    </div>
</div> 

<div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/family/sister.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">누나</h5>
        <p class="card-text">Older sister</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/family/siblings.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">오빠</h5>
        <p class="card-text">Older brother</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/family/baby-girl.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">아이</h5>
        <p class="card-text">Baby</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/family/people.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">형</h5>
        <p class="card-text">Older brother</p>
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