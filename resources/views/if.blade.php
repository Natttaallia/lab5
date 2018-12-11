@extends('main')

@section('title')
HomePage
@endsection

@section('content')

<div class="container" id="If">
  <h1>Условия передачи</h1>
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Условия передачи животных

        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Животные отдаются новому или старому владельцу после подписания акта приема-передачи, а также после регистрации животного в Единой городской базе данных.

Если владелец желает забрать отловленное на улице, принадлежащее ему потерявшееся животное, согласно ст. 24 ЗУ "О защите животных от жестокого обращения" он обязан компенсировать предприятию расходы за доставку в приют, а также за содержание. 

При выписке животному за счет средств владельца проводится вакцинация против бешенства, если таковая не проводилась в течение года. 

Новые владельцы, помимо регистрации должны оплатить услуги по вакцинации и ветобработке животного. 

Обязательной стерилизации и кастрации подвергаются: 
        <ul>
  <li>породистые собаки любого пола;</li>
  <li>беспородные собаки женского пола; </li>
  <li>все кошки и коты. </li>
</ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          ПРАВИЛА ПОСЕЩЕНИЯ ПРИЮТА
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        ВСЕГДА предупреждать заранее о приезде (желательно с вечера)  работника приюта. Звонить. Приезжая в  первый раз, взять с собой ПАСПОРТ и одеться не по парадному. Если еще  нет паспорта, ученический билет и счет за коммунальные услуги, где  указан адрес вашего проживания. Без предъявления паспорта и заполнения  анкеты в приют незнакомые нам люди не допускаются.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Как подготовиться к жизни с питомцем?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        В первую очередь следует купить средство от блох и клещей и зоошампунь.

Заранее позаботьтесь о покупке корма. Правда лучше изначально посоветоваться с сотрудниками приюта о том, нет ли у животного  аллергии на какие-то ингредиенты.

Для кошки понадобятся миски, просторная переноска, лоток с наполнителем и когтеточка.

Кстати, не забудьте найти ближайшие к дому ветеринарные клиники, чтобы знать, куда обращаться за помощью.
      </div>
    </div>
  </div>
</div>


</div>

@endsection