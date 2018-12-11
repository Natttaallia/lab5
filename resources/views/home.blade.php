@extends('main')

@section('title')
HomePage
@endsection

@section('content')
<div class="container">
<div class="row align-items-center">
  <div class="col-12 col-md-4">
    <img src="img/cat1.png" class="img-fluid">
  </div>
  <div class="banner col text-center">
    <div>А ты завёл кошечку? </div>
    <p class="text-right">(с) Я причиняю радость и несу нежность!</p>
  </div>
</div>  
<div class="jumbotron">
  <h1 class="display-4">Приюти котика!</h1>
  <p class="lead">В городском приюте тоскуют более сотни бездомных животных, которые готовы к тому, чтобы стать частью Вашей жизни!</p>
  <hr class="my-4">
  <p>Каждое животное приюта имеет свой характер и особенности. Есть молодые и активные, есть спокойные, не требующие сильных нагрузок. Есть кошки с характером, красивые и независимые. Есть нежные, безопасные для деток. Воспользуйтесь своим шансом найти четверолапого друга, дайте им шанс на лучшую жизнь, докажите, что человек способен не только на жестокое обращение, но и на такие чувства, как любовь, забота, терпение...</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#Hello" role="button">Познакомиться с котиками</a>
  </p>
</div>
</div>
<div class="container-fluid">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/cat17.png" alt="First slide">
      <div class="carousel-caption d-none d-md-block align-middle">
    <h1>Доброе дело</h1>
    <h2>Перед тем, как покупать породистого котика - зайдите к нам </h2>
    <p class="lead">
 Исследования показывают, что кошки помогают хозяевам справиться с трудными ситуациями, даже такими, как потеря близкого человека.
</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/cat15.png" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h1>Благотворительность</h1>
    <h2 >Проблема бездомного зверья очень остро стоит в социуме, особенно в городском</h2>
    <p class="lead">
 Когда вы гладите своего любимца, в организме повышается уровень окситоцина. Окситоцин известен как «гормон любви», поскольку «активируется» за счет прикосновений и приносит ощущение счастья.
</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/cat16.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h1>Благодарность</h1>
    <h2>В приюте кошки страдают от своей ничейности, особенно, если у них ранее был опыт жизни с людьми</h2>
    <p class="lead">
 Безусловная любовь кошки к своему владельцу привела исследователей к мысли, что эти питомцы могут помочь хозяину пережить даже депрессию в тяжелой форме. 
</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>	

	

@endsection