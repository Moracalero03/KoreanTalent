<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=URL?>public/img/home/student.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job</title>
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
    <h1 class="display-5 fw-light">직업</h1>
    <img src="<?=URL?>public/img/vocabulary/businessman.png" width="80" height="80">
    <p class="display-5 text-muted">JOBS</p>
    </div>
</div>
</section>

<div class="album py-5 bg-light">
<div class="container">
    <div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/job/teacher.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">선생님</h5>
        <p class="card-text">Teacher</p>        
    </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/job/students.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">학생</h5>
        <p class="card-text">Student</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/job/singer.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">가수</h5>
        <p class="card-text">Singer</p>
        </div>
    </div>
</div> 

<div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/job/actor.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">배우</h5>
        <p class="card-text">Actor</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/job/digital-nomad.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">회사원</h5>
        <p class="card-text">Office worker</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/job/doctor.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">의사 </h5>
        <p class="card-text">Doctor</p>
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