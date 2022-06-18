<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=URL?>public/img/home/student.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vocabulary</title>
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
    <h1 class="fw-light">어휘</h1>
    <img src="<?=URL?>public/img/vocabulary/dictionary.png" width="80" height="80">
    <p class="lead text-muted">Some words learned on my first korean course.</p>
    </div>
</div>
</section>

<div class="album py-5 bg-light">
<div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <div class="col">
        <div class="card shadow-sm">
        <img class="p-3 bd-placeholder-img card-img-top" src="<?=URL?>public/img/vocabulary/countries.png"   width="200" height="245">
        <div class="card-body">
            <p class="display-6 text-center card-text">나라</p>
            <p class="display-6 text-center card-text">Country</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="<?=URL?>vocabulary/country" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col">
                <div class="card shadow-sm">
        <img class="p-3 bd-placeholder-img card-img-top" src="<?=URL?>public/img/vocabulary/businessman.png"   width="200" height="245">
        <div class="card-body">
            <p class="display-6 text-center card-text">직업</p>
            <p class="display-6 text-center card-text">Job</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="<?=URL?>vocabulary/job" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col">
                <div class="card shadow-sm">
        <img class="p-3 bd-placeholder-img card-img-top" src="<?=URL?>public/img/vocabulary/big-family.png"   width="200" height="245">
        <div class="card-body">
            <p class="display-6 text-center card-text">가족</p>
            <p class="display-6 text-center card-text">Family</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="<?=URL?>vocabulary/family" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col">
                <div class="card shadow-sm">
        <img class="p-3 bd-placeholder-img card-img-top" src="<?=URL?>public/img/vocabulary/mental-health.png"   width="200" height="245">
        <div class="card-body">
            <p class="display-6 text-center card-text">일상생활</p>
            <p class="display-6 text-center card-text">Daily life</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="<?=URL?>vocabulary/life" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col">
                <div class="card shadow-sm">
        <img class="p-3 bd-placeholder-img card-img-top" src="<?=URL?>public/img/vocabulary/action.png"   width="200" height="245">
        <div class="card-body">
            <p class="display-6 text-center card-text">동사</p>
            <p class="display-6 text-center card-text">Verbs</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="<?=URL?>vocabulary/verb" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col">
                <div class="card shadow-sm">
        <img class="p-3 bd-placeholder-img card-img-top" src="<?=URL?>public/img/vocabulary/candidates.png"   width="200" height="245">
        <div class="card-body">
            <p class="display-6 text-center card-text">형용사</p>
            <p class="display-6 text-center card-text">Adjectives</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="<?=URL?>vocabulary/adjective" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col">
                <div class="card shadow-sm">
        <img class="p-3 bd-placeholder-img card-img-top" src="<?=URL?>public/img/vocabulary/meeting-point.png"   width="200" height="245">
        <div class="card-body">
            <p class="display-6 text-center card-text">장소</p>
            <p class="display-6 text-center card-text">Place</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="<?=URL?>vocabulary/place" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col">
                <div class="card shadow-sm">
        <img class="p-3 bd-placeholder-img card-img-top" src="<?=URL?>public/img/vocabulary/weather-news.png"   width="200" height="245">
        <div class="card-body">
            <p class="display-6 text-center card-text">날씨</p>
            <p class="display-6 text-center card-text">Weather</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="<?=URL?>vocabulary/weather" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col">
                <div class="card shadow-sm">
        <img class="p-3 bd-placeholder-img card-img-top" src="<?=URL?>public/img/vocabulary/calendar.png"  width="200" height="245">
        <div class="card-body">
            <p class="display-6 text-center card-text">계절</p>
            <p class="display-6 text-center card-text">Season</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="<?=URL?>vocabulary/season" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col">
                <div class="card shadow-sm">
        <img class="p-3 bd-placeholder-img card-img-top" src="<?=URL?>public\img\vocabulary\cake.png"   width="200" height="245">
        <div class="card-body">
            <p class="display-6 text-center card-text">선물</p>
            <p class="display-6 text-center card-text">Present</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="<?=URL?>vocabulary/present" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col">
                <div class="card shadow-sm">
        <img class="p-3 bd-placeholder-img card-img-top" src="<?=URL?>public\img\vocabulary\camping.png"   width="200" height="245">
        <div class="card-body">
            <p class="display-6 text-center card-text">사물</p>
            <p class="display-6 text-center card-text">Objects</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="<?=URL?>vocabulary/object" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col">
                <div class="card shadow-sm">
        <img class="p-3 bd-placeholder-img card-img-top" src="<?=URL?>public\img\vocabulary\brand-positioning.png"  width="200" height="245">
        <div class="card-body">
            <p class="display-6 text-center card-text">위치</p>
            <p class="display-6 text-center card-text">Position</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="<?=URL?>vocabulary/position" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col">
                <div class="card shadow-sm">
        <img class="p-3 bd-placeholder-img card-img-top" src="<?=URL?>public\img\vocabulary\numbers.png"   width="200" height="245">
        <div class="card-body">
            <p class="display-6 text-center card-text">한자어 수</p>
            <p class="display-6 text-center card-text">Sino-Korean numbers</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="<?=URL?>vocabulary/chinesenumber" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col">
                <div class="card shadow-sm">
        <img class="p-3 bd-placeholder-img card-img-top" src="<?=URL?>public\img\vocabulary\schedule.png"   width="200" height="245">
        <div class="card-body">
            <p class="display-6 text-center card-text">날짜</p>
            <p class="display-6 text-center card-text">Dates</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="<?=URL?>vocabulary/date" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col">
                <div class="card shadow-sm">
        <img class="p-3 bd-placeholder-img card-img-top" src="<?=URL?>public\img\vocabulary\triangle.png"  width="200" height="245">
        <div class="card-body">
            <p class="display-6 text-center card-text">운동</p>
            <p class="display-6 text-center card-text">Exercises</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="<?=URL?>vocabulary/exercise" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
            </div>
        </div>
        </div>
    </div> 

    <div class="col">
                <div class="card shadow-sm">
        <img class="p-3 bd-placeholder-img card-img-top" src="<?=URL?>public\img\vocabulary\schedule (1).png"   width="200" height="245">
        <div class="card-body">
            <p class="display-6 text-center card-text">부사</p>
            <p class="display-6 text-center card-text">Adverbs</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="<?=URL?>vocabulary/adverb" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
        <img class="p-3 bd-placeholder-img card-img-top" src="<?=URL?>public\img\vocabulary\number-blocks.png"   width="200" height="245">
        <div class="card-body">
            <p class="display-6 text-center card-text">고유어 수</p>
            <p class="display-6 text-center card-text">Native-Korean numbers</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="<?=URL?>vocabulary/koreannumber" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col">
                <div class="card shadow-sm">
        <img class="p-3 bd-placeholder-img card-img-top" src="<?=URL?>public\img\vocabulary\hourglass.png"  width="200" height="245">
        <div class="card-body">
            <p class="display-6 text-center card-text">시간</p>
            <p class="display-6 text-center card-text">Time</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="<?=URL?>vocabulary/time" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
            </div>
        </div>
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

    


</body></html>