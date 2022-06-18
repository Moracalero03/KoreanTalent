<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?=URL?>public/img/home/student.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>  
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>
    <?php
    require_once('views/header.php')
    ?>


<div class="container">
        <div class="row justify-content-center">

    <div class="col-10 mt-4">
    <section class="py-5 text-center container">
<div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
    <h1 class="fw-light">대고 공부하다 파이팅!!</h1>
    <img src="<?=URL?>public/img/home/student.png" width="60" height="60">
    <p class="lead text-muted">넌 할 수있어!!</p>
    </div>
</div>
</section>
    <div id="phrases" class="carousel carousel-dark slide" data-bs-ride="carousel" width="400" height="440">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#phrases" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#phrases" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#phrases" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" width="400" height="440">
        <div class="carousel-item active" data-bs-interval="10000">
        <img src="<?=URL?>public/img/home/perseverance.png" class="d-block w-100" width="400" height="440">
        <div class="carousel-caption d-none d-md-block" style="background-color: white;opacity: 0.8;">
            <h5>멈추지 말고 계속 해나가기만 한다면 늦어도 상관없다.</h5>
            <p>It does not matter how slowly you go as long as you do not stop.</p>
            <p>No importa lo lento que vayas mientras no te detengas.</p>
        </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
        <img src="<?=URL?>public/img/home/travel.jpg" class="d-block w-100" width="400" height="440">
        <div class="carousel-caption d-none d-md-block" style="background-color: white;opacity: 0.8;">
            <h5>어디든 가치가 있는 곳으로 가려면 지름길은 없다.</h5>
            <p>There are no short cuts to any place worth going.</p>
            <p>No hay atajos hacia los lugares que valen la pena ir.</p>

        </div>
        </div>
        <div class="carousel-item">
        <img src="<?=URL?>public/img/home/happiness.jpg" class="d-block w-100" width="400" height="440" >
        <div class="carousel-caption d-none d-md-block" style="background-color: white;opacity: 0.8;">
            <h5>행복은 이미 완성된 것이 아니라, 당신의 행동으로부터 오는 것이다.</h5>
            <p>Happiness is not something readymade. It comes from your own actions.</p>
            <p>La felicidad no es algo prefabricado. Eso viene por tus propias acciones.</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#phrases" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#phrases" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

            </div>
                </div>
            </div>
        </div>
    </div> 
    <br>
    <br>
    <br>
</div>
</main>
    <?php
    require_once('views/footer.php')
    ?>   
    <script src="/path/to/cdn/jquery.slim.min.js"></script>
</body>
</html>