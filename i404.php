<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title></title>

  <meta name="viewport" content="width=device-width,initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js""></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <!--script src="js/jasny.js"></script-->

  <!--link rel="stylesheet" href="css/jasny-bootstrap.min.css" /-->
  <link rel="stylesheet" href="css/left-nav-style.css">
  <link rel="stylesheet" href="css/style.css" />
  <!--link href="http://allfont.ru/allfont.css?fonts=open-sans" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" /-->
</head>
<body>
    <header id="header">
        <div class="top">
            <input type="checkbox" id="nav-toggle" hidden>
            <nav class="nav" id='naav'>
             <div class="dop_top">
                <label for="nav-toggle" class="nav-toggle2" onclick>Назад</label>
                <ul>
                    <li><a href="#1">Учетная запись</a></li>
                    <li><a href="#2">Личный кабинет</a></li>
                    <li><a href="#3">Корзина</a></li>
                    <li><a href="#4">История заказов</a></li>
                    <li><a href="#5">Выход</a></li>
                </ul>
            </div>
            <div class="dopnik">
                <div class="col d-fl2">
                    <span class="inst_top">Инструментальная  компания</span>
                </div>
                <div class="tel1">
                    <a href='tel:89527417033'>+7 (952) 741-70-33</a>
                </div>
                <div class="tel2">
                    <a href='tel:2002292'>+7 (343) 200-22-92</a>
                </div>
                <div class="mail">
                    <a href='mailto:2002292@bk.ru'>mailto:2002292@bk.ru</a>
                </div>

                <div class="city_in">
                    <a>620017, г. Екатеринбург, Орджоникидзевский район, ул. Фронтовых бригад, 8</a>
                </div>
            </div>
        </nav>
        <div class="mask-content"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col d-fl0">
                    <label for="nav-toggle" class="nav-toggle2" id='grid' onclick><img src='img/burger.png' alt='burger' ></label>
                </div>
                <div class="col d-fl1">
                    <img src='img/logo.png' class="logo" alt='logo'>
                </div>
                <div class="col d-fl2">
                    <span class="inst_top">Инструментальная  компания</span>
                </div>
                <div class="col d-fl3">
                  <div class="tel1">
                    <a href='tel:89527417033'>+7 (952) 741-70-33</a>
                </div>
                <div class="tel2">
                    <a href='tel:2002292'>+7 (343) 200-22-92</a>
                </div>
            </div>
            <div class="col d-fl4">
                <div class="mail">
                    <a href='mailto:2002292@bk.ru'>mailto:2002292@bk.ru</a>
                </div>
            </div>
            <div class="col d-fl5">
                <div class="city">
                    <a href=''>Екатеринбург</a>
                </div>

                <div class="fruit">
                <div class="lafix">
                    <div class="la1 fix"></div>
                        <div id="form_top" class='stuk'>
                            <form method="get" class="form-inline my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Поиск по сайту" aria-label="Поиск" value="">
                                <img id='fikus_top' class="dugru" src="img/x.png" alt="img">
                            </form>
                        </div>
                </div>
                    <div class="cart la2" onclick="window.location.href='/cart/'">
                        <font>1</font>
                    </div>
                    <div class="la3" onclick="window.location.href='/'"></div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container" id='hitr'>
    <div class="row">
        <div class="col in_sop1"><a href="" class="asv">Каталог</a></div>
        <div class="col in_sop2"><a href="" class="asv">Спецпредложения</a></div>
        <div class="col in_sop3"><a href="" class="asv">О компании</a></div>
        <div class="col in_sop4"><a href="" class="asv">Контакты</a></div>
        <div class="col in_sop5"><a href="" class="asv">Оплата и доставка</a></div>
    </div>
</div>

</header>
<div class="container-fluid fixed-top" id='hitr2'>
    <div class="container">
        <div class="row1">
            <div class="col"><img src="img/logo.png" class="logo" alt="logo"></div>
            <div class="col in_sop1"><a href="" class="asv">Каталог</a></div>
            <div class="col in_sop2"><a href="" class="asv">Спецпредложения</a></div>
            <div class="col in_sop3"><a href="" class="asv">О компании</a></div>
            <div class="col in_sop4"><a href="" class="asv">Контакты</a></div>
            <div class="col in_sop5"><a href="" class="asv">Оплата и доставка</a></div>
            <div class="col d-fl5">
                <div class="fruit">
                <div class="lafix">
                    <div class="la1 fix"></div>
                        <div id="form_top" class='stuk'>
                            <form method="get" class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Поиск по сайту" aria-label="Поиск" value="">
                                <img id='fikus_top' class="dugru" src="img/x.png" alt="img">
                            </form>
                        </div>
                </div>
                    <div class="cart la2" onclick="window.location.href='/cart/'">
                        <font>1</font>
                    </div>
                    <div class="la3" onclick="window.location.href='/'"></div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function(){

        $('.la1').click(function() {
            $('.stuk').addClass('fi');
        });
        $('.dugru').on('click',function() {
            $('.stuk').removeClass('fi');
        });


        $('#hitr2').hide();
            if ($(window).scrollTop()>=150 ){
                $('#hitr2').show();
            }
        $(window).on('scroll resize', function() {
            if ($(window).scrollTop()>=100){
                $('#hitr2').show();
            }else{
                $('#hitr2').hide();
            }
            if ($(window).scrollTop()>=70){
                $('.top').addClass('dili');
            }
            if($(window).scrollTop()<2){
                $('.top').removeClass('dili');
            }
        });
    });
</script>
<div class="sticky-top">tttttt...</div>




<div class="container" id='main'>
    <!-- 404  -->
    <div class="cent_er">
        <img src='img/i404.png' class="i404" alt='img'>
    </div>
    <div class="te">
        <div class="zab">Страница не найдена.</div><br>
        <div class="do_ry">
            К сожалению, страница, которую Вы запросили, не была найдена (ошибка 404).
            Вы можете перейти на главную страницу или воспользоваться каталогом товаров.
            Если эта ошибка будет повторяться, обратитесь, пожалуйста, в службу поддержки.
            <br><br>
            Вернуться на <a href="" class="er">главную страницу</a><br>
            Посмотреть <a href="" class="er">каталог товаров</a>
            <br><br>
        </div>
    </div>
    <!-- 404  -->
    <!-- Библиотека ГОСТов  -->
    <div class="row">
        <div class="col in_sopl"><a href="" class="asvw">Главная</a> / <span>услуги</span></div>
    </div>
    <div class="zag">
        Библиотека ГОСТов
    </div>
    <div class="text">
        <div class="do_ry">
            Здесь вы сможете найти текст 40838 ГОСТов. Вся информация доступна абсолютно бесплатно. Дата актуализации базы ГОСТов - 01.07.2018. Тексты представлены в формате PDF.
        </div>
        <div class="midd">Все ГОСТы</div>
        <div class="gost row">
            <div class="col-12 col-md-6">
                <div class="di spis">1</div>
                <div class="di spis2">ГОСТ 2679-93 Фрезы прорезные и отрезные.</div>
            </div>
            <div class="col-12 col-md-6">
                <div class="di spis">1</div>
                <div class="di spis2">ГОСТ 2679-93 Фрезы прорезные и отрезные.</div>
            </div>            
        </div>
    </div>
</div>


<div class="cont">
    <div class="container-fluid d-lg-none px-0">
        <div id="accordion" class="accordion">
            <div class="card mb-0">
                <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                    <a class="card-title">
                        Навигация
                    </a>
                </div>
                <div id="collapseOne" class="card-body collapse" data-parent="#accordion" >
                    <div class="col">
                        <div class="col in_sop1"><a href="" class="asv">Каталог</a></div>
                        <div class="col in_sop2"><a href="" class="asv">Спецпредложения</a></div>
                        <div class="col in_sop3"><a href="" class="asv">О компании</a></div>
                        <div class="col in_sop4"><a href="" class="asv">Контакты</a></div>
                        <div class="col in_sop5"><a href="" class="asv">Оплата и доставка</a></div>
                    </div>
                </div>
                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    <a class="card-title">
                      Информация
                  </a>
              </div>
              <div id="collapseTwo" class="card-body collapse" data-parent="#accordion" >
                <div class="col">
                    <div class="col in_sop1"><a href="" class="asv">Каталог</a></div>
                    <div class="col in_sop2"><a href="" class="asv">Спецпредложения</a></div>
                    <div class="col in_sop3"><a href="" class="asv">О компании</a></div>
                    <div class="col in_sop4"><a href="" class="asv">Контакты</a></div>
                    <div class="col in_sop5"><a href="" class="asv">Оплата и доставка</a></div>
                </div>
            </div>
            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                <a class="card-title">
                  Контакты
              </a>
          </div>
          <div id="collapseThree" class="collapse" data-parent="#accordion" >
           <div class="dopnik col">               
            <div class="col d-fl2">
                <span class="inst_top">Инструментальная  компания</span>
            </div>

            <div class="tel1">
                <a href='tel:89527417033'>+7 (952) 741-70-33</a>
            </div>
            <div class="tel2">
                <a href='tel:2002292'>+7 (343) 200-22-92</a>
            </div>


            <div class="mail">
                <a href='mailto:2002292@bk.ru'>mailto:2002292@bk.ru</a>
            </div>

            <div class="city_in">
                <a>620017, г. Екатеринбург, Орджоникидзевский район, ул. Фронтовых бригад, 8</a>
            </div>
        </div>
    </div>

    <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
        <a class="card-title">
          Время работы
      </a>
  </div>
  <div  class="collapse" data-parent="#accordion" id="collapseFour">
    <div class="card-body">
        <div class="col">
            <div class="col in_sop1">Пн. <span class='dispa'>09:00-21:00</span></div>
            <div class="col in_sop2">Вт. <span class='dispa'>09:00-21:00</span></div>
            <div class="col in_sop3">Ср. <span class='dispa'>09:00-21:00</span></div>
            <div class="col in_sop4">Чт. <span class='dispa'>09:00-21:00</span></div>
            <div class="col in_sop5">Пт. <span class='dispa'>09:00-21:00</span></div>
            <div class="col in_so"><span class='dispwa'>Сб.</span> <span class='dispa'>09:00-21:00</span></div>
            <div class="col in_so"><span class='dispwa'>Вс.</span> <span class='dispa'>09:00-21:00</span></div>                    
        </div>
    </div>
</div>
</div>
<div class='container'>
    <div id='dikro2' class='row justify-content-end'>
        <form id='fikro2' class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Поиск по сайту" aria-label="Поиск">
            <button id='fikus2' class="mq" type="submit"><img src="img/im/search.png" alt="img"></button>
        </form>
    </div>
</div>


</div>
</div>


<div class="container-fluid d-none d-lg-block  px-0 ">
    <div class="card-group container">  
        <div class="card">  
            <a class="card-title">
                Навигация
            </a>
            <div class="card-body" >
                <div class="col">
                    <div class="col in_sop1"><a href="" class="asv">Металлорежущий инструмент</a></div>
                    <div class="col in_sop2"><a href="" class="asv">Измерительный инструмент</a></div>
                    <div class="col in_sop3"><a href="" class="asv">Слесарный инструмент</a></div>
                    <div class="col in_sop4"><a href="" class="asv">Оснастка для станков</a></div>
                    <div class="col in_sop5"><a href="" class="asv">Абразивный инструмент</a></div>
                    <div class="col in_sop5"><a href="" class="asv">Алмазный инструмент</a></div>
                </div>
            </div>
        </div>
        <div class="card">
            <a class="card-title">
              Информация
            </a>
          <div class="card-body">
            <div class="col">
                <div class="col in_sop1"><a href="" class="asv">Форма заказа</a></div>
                <div class="col in_sop2"><a href="" class="asv">Каталог</a></div>
                <div class="col in_sop3"><a href="" class="asv">Контакты</a></div>
                <div class="col in_sop4"><a href="" class="asv">Новости</a></div>
                <div class="col in_sop5"><a href="" class="asv">О компании</a></div>
            </div>
        </div>
    </div>
    <div class="card">
        <a class="card-title">
          Контакты
        </a>
      <div class="card-d">
       <div class="dopnik col">
        <div class="tel1">
            <a href='tel:89527417033'>+7 (952) 741-70-33</a>
        </div>
        <div class="tel2">
            <a href='tel:2002292'>+7 (343) 200-22-92</a>
        </div>
        <div class="mail">
            <a href='mailto:2002292@bk.ru'>mailto:2002292@bk.ru</a>
        </div>
        <div class="city_in">
            <a>620017, г. Екатеринбург, Орджоникидзевский район, ул. Фронтовых бригад, 8</a>
        </div>
    </div>
</div>
</div>

<div class="card" id='dsus'>
    <a class="card-title">
      Время работы
  </a>
  <div class="card-body">
    <div class="col">
        <div class="col in_sop1">Пн. <span class='dispa'>09:00-21:00</span></div>
        <div class="col in_sop2">Вт. <span class='dispa'>09:00-21:00</span></div>
        <div class="col in_sop3">Ср. <span class='dispa'>09:00-21:00</span></div>
        <div class="col in_sop4">Чт. <span class='dispa'>09:00-21:00</span></div>
        <div class="col in_sop5">Пт. <span class='dispa'>09:00-21:00</span></div>
        <div class="col in_so"><span class='dispwa'>Сб.</span> <span class='dispa'>09:00-21:00</span></div>
        <div class="col in_so"><span class='dispwa'>Вс.</span> <span class='dispa'>09:00-21:00</span></div>                    
    </div>
</div>
</div>
</div>

<div class='container'>
    <div id='dikro' class='row justify-content-end'>
        <form id='fikro' class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Поиск по сайту" aria-label="Поиск">
            <button id='fikus' class="my-2 my-sm-0" type="submit"><img src="img/im/search.png" alt="img"></button>
        </form>
    </div>
</div>

</div>
</div>






<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>


</body>
</html>