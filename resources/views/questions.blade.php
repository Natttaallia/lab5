@extends('main')

@section('title')
Questions and Answers
@endsection

@section('content')
<div class="container" id="Question">
<h1>Задайте свой вопрос</h1>  <br>
<div class="row">
  <div class="col-12 col-md-6">
    <!-- комменты в списке -->
<ul class="list-unstyled">
  <li class="media">
    <img class="mr-3" src="img/person.png" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1 text-uppercase">КАК МОЖНО ПЕРЕДАТЬ ЖИВОТНОЕ В ПРИЮТ?   <span class="badge badge-secondary">New</span></h5>
      Приют не место для животного. Тут они не чувствуют себя единственными любимыми, живут друг у друга на головах. Мы физически не в состоянии уделить им столько внимания, сколько они заслуживают.Приведя его в приют, Вы просто сбросите ответственность с себя на нас. Это не сделает Вас хорошим человеком, скорее хитрым.Если жалко бездомное животное, но нет возможности самим лично этим заниматься, возможно Вам придётся просто пройти мимо.
    </div>
  </li>
  <li class="media my-4">
    <img class="mr-3" src="img/person2.png" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1 text-uppercase">БЕЗОПАСНО ЛИ БРАТЬ ЖИВОТНОЕ ИЗ ПРИЮТА? БОЛЬНЫЕ, СТАРЫЕ…</h5>
      Больные животные, или животные недостаточно подготовленные морально не предлагаются потенциальным хозяевам. Существует миф, что нужно брать исключительно котят и щенят, а иначе Вы не сможете их воспитать и наладить контакт. Это непрада. Во-первых, 1-2-3-4-5годовалое животное не старое, оно молодое. Впереди ещё лет 10 жизни. Во-вторых, взяв подрощенного кота или собаку, Вы сразу сможете наслаждаться Вашими отношениями. Не придётся приучать к горшку\выгулу и мыть полы от мочи по 15 раз в день, учить хорошим манерам, не будет бессонных ночей, потому что малыши ооочень активны ночью и т.д. Детский возраст безусловно интересен и прекрасен, но если у Вас реально не так много времени с этим детством справляться, то Вам нужен готовый, подрощенный, воспитанный член семьи.
    </div>
  </li>
  <li class="media">
    <img class="mr-3" src="img/person4.png" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1 text-uppercase">Что такое регистрация домашних животных и для чего она нужна?</h5>
     Регистрация даст возможность привлечь нарушителя к административной или уголовной ответственности. Например, в *** районе был покусан человек собакой породы ***. По базе данных выявляем количество проживающих собак этой породы в указанном районе и определяем владельца — нарушителя. Согласно ст.1187 Гражданского Кодекса Украины собаки, как и автотранспорт, являются источником повышенной опасности. Поэтому, они, как и машины, должны стоять на учете. Ежегодно  теряются тысячи собак и кошек, до настоящего времени в городе не было единого реестра животных. Людям, нашедшим потерявшееся животное, некуда было обратиться. Регистрация же дает возможность быстро вернуть хозяину его питомца. Например, найдена собака с жетоном на шее (на жетоне нанесен номер животного). По звонку в КП «Центр обращения с животными» нашедший потеряшку может определить владельца собаки.
    </div>
  </li>
</ul>
  </div>
<div class="col-12 col-md-6">
  
<!-- комменты в списке -->
<ul class="list-unstyled">
  <li class="media">
    <img class="mr-3" src="img/person3.png" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1 text-uppercase">Действительно ли стерилизация – лучший способ решить проблему бездомных животных?<span class="badge badge-secondary">New</span></h5>
      Стерилизация – эффективный способ регулирования численности бездомных животных. Это сравнительно гуманный и простой метод, ведь практически в каждом городе можно найти ветеринара, который сможет стерилизовать животное.Но нужно учитывать, что сама по себе стерилизация не решает проблему бездомных животных. Довольно большая часть бродячих  – это выброшенные или потерянные домашние любимцы. К тому же стерилизация – дорогое мероприятие. Операция для одного бездомного животного (включая медикаменты и передержку) обойдется в среднем в 1500 грн. 
    </div>
  </li>
  <li class="media my-4">
    <img class="mr-3" src="img/person.png" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1 text-uppercase">Кто в Украине работает в этой сфере – все тянут только волонтеры или есть государственные инициативы?</h5>
      Понятно, что, когда в стране идет война и очень много людей нуждаются в помощи, бездомные животные для государства уходят на второй план. Поэтому волонтеры сегодня – движущая сила в решении этой проблемы. Каждый день к нам пишут и звонят совершенно разные люди и предлагают свою помощь. Кто-то жертвует деньги, кто-то помогает в приютах, а у кого-то полным-полно полезных идей. Это огромная волна добра и поддержки. Что касается помощи государства, то важным шагом было ратифицирование Верховной Радой Европейской конвенции о защите домашних животных. Для зоозащитников это стало знаковым событием.
    </div>
  </li>
  <li class="media">
    <img class="mr-3" src="img/person2.png" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1 text-uppercase">Кто берет животных из приюта?</h5>
      Преимущественно собачек из приютов берут женщины 30-50 лет и люди, которые живут в частных домах. Кому-то из них нужен друг, кому-то охранник, но чаще и то, и другое одновременно. Впрочем, в приюты приходят совершенно разные люди: студенты и пенсионеры, госслужащие и бизнесмены. Как-то одну из наших собачек забрал бывший посол Чехии в Украине.
    </div>
  </li>
</ul>

</div>
</div>


<button type="button" class="btn btn-info btn-lg btn-block dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="20,0">
    Задать свой вопрос
</button>
<div class="container">
  <div class="row">
  <div class="dropdown-menu col-md" aria-labelledby="dropdownMenuButton">
<div class="container">

  <div class="form-group">
    <label for="exampleDropdownFormEmail2">Email</label>
    <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
  </div>
  <div class="form-group">
    <label for="exampleDropdownFormPassword2">Вопрос</label>
    <input type="text" class="form-control" id="exampleDropdownFormQuestion2" placeholder="Ваш вопрос">
  </div>

<div class="row justify-content-center">
<button type="button" class="btn btn-outline-primary" >
  Задать вопрос
</button></div>
</div>
</div>
</div>
</div>
</div>
@endsection