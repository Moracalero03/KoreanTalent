<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=URL?>public/img/home/student.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Object</title>
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
    <h1 class="display-5 fw-light">사물</h1>
    <img src="<?=URL?>public/img/vocabulary/camping.png" width="80" height="80">
    <p class="display-5 text-muted">Objects</p>
    </div>
</div>
</section>

<div class="album py-5 bg-light">
<div class="container">
    <div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/object/book.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">책</h5>
        <p class="card-text">Book</p>        
    </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/object/notebook.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">공책</h5>
        <p class="card-text">Notebook</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/object/pencil.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">연필</h5>
        <p class="card-text">Pencil</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/object/desk.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">책상</h5>
        <p class="card-text">Desk</p>
        </div>
    </div>
</div> 

<div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/object/chair.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">의자</h5>
        <p class="card-text">Chair</p>
        </div>
    </div>
    <div class="card border-0">
        
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