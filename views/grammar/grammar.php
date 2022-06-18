<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=URL?>public/img/home/student.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grammar</title>
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
    <h1 class="fw-light">문법</h1>
    <img src="<?=URL?>public/img/grammar/presentation.png" width="80" height="80">
    <p class="lead text-muted">Some grammar learned on my first korean course.</p>
    </div>
</div>
</section>

<div class="album py-5 bg-light">
<div class="container">

    <div class="row">
    <div class="col">
            <div class="card shadow-sm">
            <div class="card-body">
            <center><img src="<?=URL?>public/img/vocabulary/mental-health.png" width="80" height="80"></center>              
                    <p class="display-6 text-center card-text">DESCRIBERS</p>
                    <div class="btn-group">
                    <a href="<?=URL?>grammar/이다" class="btn btn-sm btn-outline-secondary">View</a>
                    </div>
                </div>
            </div> 
    </div> 

    <div class="col">
            <div class="card shadow-sm">
                <div class="card-body">
                <center><img src="<?=URL?>public/img/vocabulary/candidates.png" width="80" height="80"></center>
                    <p class="display-6 text-center card-text">MARKERS</p>
                    <div class="btn-group">
                    <a href="<?=URL?>grammar/markers" class="btn btn-sm btn-outline-secondary">View</a>
                    </div>
                </div>
            </div> 
    </div>
    </div> 

    <br>
    <br>

    <div class="row">
    <div class="col">
            <div class="card shadow-sm">
                <div class="card-body">
                <center><img src="<?=URL?>public/img/grammar/hard-work.png" width="80" height="80"></center>
                    <p class="display-6 text-center card-text">LOCATION/TIME</p>
                    <div class="btn-group">
                    <a href="<?=URL?>grammar/locationtime" class="btn btn-sm btn-outline-secondary">View</a>
                    </div>
                </div>
            </div> 
    </div> 

    <div class="col">
            <div class="card shadow-sm">
                <div class="card-body">
                <center><img src="<?=URL?>public/img/vocabulary/schedule.png" width="80" height="80"></center> 
                    <p class="display-6 text-center card-text">PAST TIME</p>
                    <div class="btn-group">
                    <a href="<?=URL?>grammar/past" class="btn btn-sm btn-outline-secondary">View</a>
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