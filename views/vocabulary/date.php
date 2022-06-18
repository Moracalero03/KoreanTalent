<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=URL?>public/img/home/student.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dates</title>
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
    <h1 class="display-5 fw-light">날짜</h1>
    <img src="<?=URL?>public/img/vocabulary/schedule.png" width="80" height="80">
    <p class="display-5 text-muted">DATES</p>
    </div>
</div>
</section>

<div class="album py-5 bg-light">
<div class="container">
    <div class="card-group">
    <div class="card">
        <img src="<?=URL?>public\img\date\schedule.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">언제</h5>
        <p class="card-text">When</p>        
    </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public\img\date\february.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">월</h5>
        <p class="card-text">Month</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public\img\date\number-15.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">일</h5>
        <p class="card-text">Day</p>
        </div>
    </div>
</div> 

<div class="card-group">
    <div class="card">
        <img src="<?=URL?>public\img\date\weekend.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">주말</h5>
        <p class="card-text">Weekend</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public\img\date\morning.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">오전</h5>
        <p class="card-text">a.m.</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public\img\date\afternoon.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">오후 </h5>
        <p class="card-text">p.m</p>
        </div>
    </div>
</div>

<div class="card-group">
    <div class="card">
        <img src="<?=URL?>public\img\date\monday.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">월요일</h5>
        <p class="card-text">Monday</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public\img\date\tuesday.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">화요일</h5>
        <p class="card-text">Tuesday</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public\img\date\wednesday.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">수요일</h5>
        <p class="card-text">Wednesday</p>
        </div>
    </div>
</div>

<div class="card-group">
    <div class="card">
        <img src="<?=URL?>public\img\date\thursday.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">목요일</h5>
        <p class="card-text">Thursday</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public\img\date\friday.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">금요일</h5>
        <p class="card-text">Friday</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public\img\date\sunday.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">토요일</h5>
        <p class="card-text">Sunday</p>
        </div>
    </div>
</div>

<div class="card-group">
    <div class="card">
        <img src="<?=URL?>public\img\date\saturday.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">일요일</h5>
        <p class="card-text">Saturday</p>
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