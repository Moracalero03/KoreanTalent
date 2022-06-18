<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=URL?>public/img/home/student.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verb</title>
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
    <h1 class="display-5 fw-light">동사</h1>
    <img src="<?=URL?>public/img/vocabulary/action.png" width="80" height="80">
    <p class="display-5 text-muted">VERBS</p>
    </div>
</div>
</section>

<div class="album py-5 bg-light">
<div class="container">
    <div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/verb/to-do-list.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">하다</h5>
        <p class="card-text">Do</p>        
    </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/verb/appreciation.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">좋아하다</h5>
        <p class="card-text">Like</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/verb/go-to-work.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">가다</h5>
        <p class="card-text">Go</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/verb/healthy.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">먹다</h5>
        <p class="card-text">Eat</p>
        </div>
    </div>
</div> 

<div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/verb/listening.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">듣다</h5>
        <p class="card-text">listen</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/verb/study.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">공부하다 </h5>
        <p class="card-text">Study</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/verb/start.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">시작하다</h5>
        <p class="card-text">Start</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/verb/giving.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">주다</h5>
        <p class="card-text">Give</p>
        </div>
    </div>
</div>

<div class="card-group">
    <div class="card">
        <img src="<?=URL?>public/img/verb/express-delivery.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">보내다 </h5>
        <p class="card-text">Send</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/verb/writing.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">쓰다</h5>
        <p class="card-text">Write</p>
        </div>
    </div>
    <div class="card">
        <img src="<?=URL?>public/img/verb/meeting.png" class="p-3 card-img-top">
        <div class="card-body">
        <h5 class="card-title">만나다</h5>
        <p class="card-text">Meet</p>
        </div>
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