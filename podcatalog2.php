<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <title></title>

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js""></script>
  <script src=" https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"> </script> <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!--script src="js/jasny.js"></script-->

    <!--link rel="stylesheet" href="css/jasny-bootstrap.min.css" /-->
    <link rel="stylesheet" href="css/left-nav-style.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
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
                        <span class="inst_top">Инструментальная компания</span>
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
                        <label for="nav-toggle" class="nav-toggle2" id='grid' onclick><img src='img/burger.png' alt='burger'></label>
                    </div>
                    <div class="col d-fl1">
                        <img src='img/logo.png' class="logo" alt='logo'>
                    </div>
                    <div class="col d-fl2">
                        <span class="inst_top">Инструментальная компания</span>
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
    <div class="container" id='main'>
        <div class="row">
                <div class="col-12 col-lg-3 pr-0 pr-lg-3 pl-0 hide992">

                        <!-- left menu-->
            <div id="accordion-left" class="accordion s992">
                <div class="card mb-0">
                    <div class="card-header collapsed px-1" data-toggle="collapse" href="#colla1">
                        <div class="sr1 stab row" onclick="">
                            <div class="col-1">
                                 <img class='h100' src="img/im/x1.png" alt="img">
                            </div>
                            <div class="col-10 px-0">
                                 Металлорежущий инструмент
                            </div>
                        </div>
                    </div>
                    <div id="colla1" class="card-body collapse" data-parent="#accordion">
                                <div class="cin_sop"><a href="" class="asv">Штангенциркули</a></div>
                                <div class="cin_sop"><a href="" class="asv">Уровни</a></div>
                                <div class="cin_sop"><a href="" class="asv">Микрометры</a></div>
                                <div class="cin_sop"><a href="" class="asv">Глубиномеры, шаблоны, 
штатитвы</a></div>
                                <div class="cin_sop"><a href="" class="asv">Индикаторы, стойки</a></div>
                                <div class="cin_sop"><a href="" class="asv">Угломеры</a></div>
                    </div>
                   <div class="card-header collapsed px-1" data-toggle="collapse" href="#colla2">
                        <div class="sr1 stab row" onclick="">
                            <div class="col-1">
                                 <img class='h100' src="img/im/x2.png" alt="img">
                            </div>
                            <div class="col-10 px-0">
                                 Измерительный инструмент
                            </div>
                        </div>
                    </div>
                    <div id="colla2" class="card-body collapse" data-parent="#accordion">
                                <div class="cin_sop"><a href="" class="asv">Металлорежущий инструмент</a></div>
                                <div class="cin_sop"><a href="" class="asv">Измерительный инструмент</a></div>
                                <div class="cin_sop"><a href="" class="asv">Слесарный инструмент</a></div>
                                <div class="cin_sop"><a href="" class="asv">Оснастка для станков</a></div>
                                <div class="cin_sop"><a href="" class="asv">Абразивный инструмент</a></div>
                                <div class="cin_sop"><a href="" class="asv">Алмазный инструмент</a></div>
                    </div>
                    <div class="card-header collapsed px-1" data-toggle="collapse" href="#colla3">
                        <div class="sr1 stab row" onclick="">
                            <div class="col-1">
                                 <img class='h100' src="img/im/x3.png" alt="img">
                            </div>
                            <div class="col-10 px-0">
                                 Слесарный инструмент
                            </div>
                        </div>
                    </div>
                    <div id="colla3" class="card-body collapse" data-parent="#accordion">
                                <div class="cin_sop"><a href="" class="asv">Металлорежущий инструмент</a></div>
                                <div class="cin_sop"><a href="" class="asv">Измерительный инструмент</a></div>
                                <div class="cin_sop"><a href="" class="asv">Слесарный инструмент</a></div>
                                <div class="cin_sop"><a href="" class="asv">Оснастка для станков</a></div>
                                <div class="cin_sop"><a href="" class="asv">Абразивный инструмент</a></div>
                                <div class="cin_sop"><a href="" class="asv">Алмазный инструмент</a></div>
                    </div>
                    <div class="card-header collapsed px-1" data-toggle="collapse" href="#colla3">
                        <div class="sr1 stab row" onclick="">
                            <div class="col-1">
                                 <img class='h100' src="img/im/x4.png" alt="img">
                            </div>
                            <div class="col-10 px-0">
                                 Оснастка для станков
                            </div>
                        </div>
                    </div>
                    <div class="card-header collapsed px-1" data-toggle="collapse" href="#colla3">
                        <div class="sr1 stab row" onclick="">
                            <div class="col-1">
                                 <img class='h100' src="img/im/x5.png" alt="img">
                            </div>
                            <div class="col-10 px-0">
                                 Абразивный инструмент
                            </div>
                        </div>
                    </div>
                    <div class="card-header collapsed px-1" data-toggle="collapse" href="#colla3">
                        <div class="sr1 stab row" onclick="">
                            <div class="col-1">
                                 <img class='h100' src="img/im/x6.png" alt="img">
                            </div>
                            <div class="col-10 px-0">
                                 Алмазный инструмент
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                            <br><br>
                            <div class="card card-face card-face-black">
                                <div class="vash-men">Ваш менеджер</div>
                             <img class="im_face" src="http://dummyimage.com/80x80/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                                <a class="card-title ati">
                                    Иванова Анна Андреевна
                                </a>
                                <div class="lred"></div>
                                <div class="card-body">
                                    <div class="teli">
                                        <a href="tel:89001007022">+7 (900) 100-70-22</a>
                                    </div>
                                    <div class="scypi">
                                        <a>400-50-40-22-33</a>
                                    </div>
                                    <div class="maili">
                                        <a href="mailto:123@burusov.ru">123@burusov.ru</a>
                                    </div>
                                </div>
                            </div>
                        <!-- end two card left -->
                </div>
                <div class="col-lg-9 col-md-12 bread">
                    <div class="row">
                        <div class="col in_sopl"><a href="" class="asvw">Главная</a> / <a href="" class="asvw">Каталог</a> / <span>Металлорежущий инструмент</span></div>
                    </div>
                    <div class="zag">
                        Металлорежуший инструмент
                    </div>
                    <div class="row">
                        <a href='' class="col-lg-3 shade-min text-center">
                             <img src="img/kol1.png" alt="img">
                             <div class="texx-body">
                                Фрезы дисковые трехсторонние
                             </div>
                        </a>
                        <a href='' class="col-lg-3 shade-min text-center">
                             <img src="img/kol2.png" alt="img">
                             <div class="texx-body">
                                Фрезы дисковые 
                                пазовые
                             </div>
                        </a>
                         <a href='' class="col-lg-3 shade-min text-center">
                             <img src="img/kol3.png" alt="img">
                             <div class="texx-body">
                                Фрезы дисковые полукруглые
                             </div>
                        </a>
                        <a href='' class="col-lg-3 shade-min text-center">
                             <img src="img/kol1.png" alt="img">
                             <div class="texx-body">
                                Фрезы зубонарезные дисковые модульные
                             </div>
                        </a>
                        <a href='' class="col-lg-3 shade-min text-center">
                             <img src="img/kol2.png" alt="img">
                             <div class="texx-body">
                                Фрезы концевые с коническим хвостовиком
                             </div>
                        </a>
                         <a href='' class="col-lg-3 shade-min text-center">
                             <img src="img/kol3.png" alt="img">
                             <div class="texx-body">
                                Фрезы концевые с цилиндрическим хвостовиком
                             </div>
                        </a>
                        <a href='' class="col-lg-3 shade-min text-center">
                             <img src="img/kol1.png" alt="img">
                             <div class="texx-body">
                                Фрезы дисковые трехсторонние
                             </div>
                        </a>
                        <a href='' class="col-lg-3 shade-min text-center">
                             <img src="img/kol2.png" alt="img">
                             <div class="texx-body">
                                Фрезы дисковые 
                                пазовые
                             </div>
                        </a>
                         <a href='' class="col-lg-3 shade-min text-center">
                             <img src="img/kol3.png" alt="img">
                             <div class="texx-body">
                                Фрезы дисковые полукруглые
                             </div>
                        </a>
                        <a href='' class="col-lg-3 shade-min text-center">
                             <img src="img/kol1.png" alt="img">
                             <div class="texx-body">
                                Фрезы зубонарезные дисковые модульные
                             </div>
                        </a>
                        <a href='' class="col-lg-3 shade-min text-center">
                             <img src="img/kol2.png" alt="img">
                             <div class="texx-body">
                                Фрезы концевые с коническим хвостовиком
                             </div>
                        </a>
                         <a href='' class="col-lg-3 shade-min text-center">
                             <img src="img/kol3.png" alt="img">
                             <div class="texx-body">
                                Фрезы концевые с цилиндрическим хвостовиком
                             </div>
                        </a>
                    </div>
               </div>
            <div class="tver-form">
                <form name="adminForm" id="adminForm2" class="map-form row">
                    <div class="map-info__title mx-auto">Оставьте заявку</div>
                    <div class="map-info__min mx-auto">и мы свяжемся с Вами!</div>
        <div class="row w-100">
            <div class="col-12 col-lg-6">
                    <input class="animated map-form__input-text" name="f_Name" type="text" placeholder="Ваше имя *">
                    <input class="animated map-form__input-text phone-field" name="f_Tel" type="text" placeholder="Ваш телефон *">
            </div>
            <div class="col-12 col-lg-6">
                    <input class="animated map-form__input-text phone-field" name="f_email" type="text" placeholder="Ваша почта">
            </div>
        </div>
                    <div class="map-form__box row">
                        <div class="map-form__checkbox col-2">
                            <input class="map-form__input-checkbox" value="1" data-helper="Подтвердите согласие на использование персональных данных" type="checkbox" id="checkbox-17" checked="">
                            <label class="map-form__label-checkbox checkbox checked" for="checkbox-17"></label>
                        </div>
                        <div class="map-form__checkbox-info col-10">Я согласен(а) га обработку моих <span class="personal-info">персональных данных</span>.</div>
                    </div>
                    <input class="map-form__input-submit animated mx-auto" type="submit" value="Отправить заявку">
                </form>
            </div>
        </div>
    </div>
    <!-- конец main -->

    <div class="cont">
        <div class="container-fluid d-none d-lg-block  px-0 ">
            <div class="card-group container">
                <div class="card">
                    <a class="card-title">
                        Навигация
                    </a>
                    <div class="card-body">
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


    <script src="js/script.js"></script>



    <script>
        document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
    </script>


</body>

</html>