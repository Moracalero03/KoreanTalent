<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=URL?>public/img/home/student.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Places</title>
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
    <h1 class="display-5 fw-light">장소</h1>
    <img src="<?=URL?>public/img/vocabulary/meeting-point.png" width="80" height="80">
    <p class="display-5 text-muted">PLACES</p>
    </div>
</div>
</section>

<div class="album py-5 bg-light">
<div class="container">
    <div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/place/school.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">학교</h5>
        <p class="card-text">school</p>        
    </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/place/classroom.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">교실</h5>
        <p class="card-text">classroom</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/place/library.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">도서관</h5>
        <p class="card-text">library</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/place/building.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">건물</h5>
        <p class="card-text">building</p>
        </div>
    </div>
</div> 

<div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/place/restaurant.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">식당</h5>
        <p class="card-text">restaurant</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/place/problem.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">어디</h5>
        <p class="card-text">where</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/place/dormitory.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">기숙사</h5>
        <p class="card-text">dormitory</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/place/bookstore.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">서점</h5>
        <p class="card-text">bookstore</p>
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