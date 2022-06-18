<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=URL?>public/img/home/student.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Past Time</title>
    <!-- JavaScript Bundle with Popper -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <h1 class="fw-light">PAST TIME</h1>
    <img src="<?=URL?>public/img/vocabulary/schedule.png" width="80" height="80">
    </div>
</div>
</section>

<div class="album py-5 bg-light">
<div class="container">

    <div class="col">
            <div class="card shadow-sm">
            <img class="p-3 bd-placeholder-img card-img-top" src="<?=URL?>public/img/grammar/-었-.png">
                <div class="card-body">
                    <p class="display-6 text-center card-text">-었-</p>
                    <h4 class="text-center card-text">
                    It is attached after a verb, an adjective, ‘이다’, or ‘아니다’ to indicate that the situation or the 
                    action has taken place in the past.</h4>
                    <button class="btn btn-primary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#toggle16" aria-expanded="false" aria-controls="toggle16">
                    Examples
                    </button>
                    <br>
                    <br>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="collapse" id="toggle16">
                    <div class="card card-body">
                    <img class="p-3 bd-placeholder-img card-img-top" src="<?=URL?>public\img\grammar\ePast\examplesPast.png">
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>


</body></html>