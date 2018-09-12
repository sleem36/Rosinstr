<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <title></title>

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ui.css">

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
        <div class="row drop-korz">
            <div class="col-12 d-none col-lg-3 d-lg-block pr-3 pl-0">
                <!-- two card left -->
                <div class="card card-face">
                    <img class="im_face" src="http://dummyimage.com/80x80/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                    <a class="card-title ati">
                        Иванов Сергей Андреевич
                    </a>
                    <div class="lred"></div>
                    <div class="card-body">
                        <div class="colin"><a href="" class="anod">Личный кабинет</a></div>
                        <div class="colin"><a href="" class="anod">Корзина</a></div>
                        <div class="colin"><a href="" class="anod">История заказов</a></div>
                        <div class="colin"><a href="" class="anod">Выход</a></div>
                    </div>
                </div><br><br>
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
                    <div class="col in_sopl"><a href="" class="asvw">Главная</a> / <span>услуги</span></div>
                </div>
                <div class="zag">
                    Фрезы дисковые трехсторонние
                </div>

                <!-- Корзина до 992 пикс  -->
                <div class="row d-none d-lg-flex">
                    <div class="col-12">
                        Дисковые фрезы предназначены для обработки плоскостей, уступов и пазов. Основным типом дисковых фрез являются трехсторонние. Они имеют зубья на цилиндрической поверхности и на
                        обоих торцах. Их применяют для обработки уступов и более глубоких пазов. Они обеспечивают более высокий класс шероховатости боковых стенок паза или уступа.
                    </div>

                    <div class="col-12">
                        <div class="gosti">Описание</div><br>
                        <div class="do_ry">
                            Здесь вы сможете найти текст 40838 ГОСТов. Вся информация доступна абсолютно бесплатно. Дата актуализации базы ГОСТов - 01.07.2018. Тексты представлены в формате PDF.
                        </div>
                        <div class="gosti">ГОСТы</div>
                        <div class="gost row">
                            <div class="col-12 col-md-12">
                                <a href="" class="di spis2">ГОСТ 2679-93 Фрезы прорезные и отрезные.</a>
                                <a href="" class="di spis2">ГОСТ 2679-93 Фрезы прорезные и отрезные.</a>
                            </div>
                        </div>
                        <div class="gosti">Обозначения</div><br>
                        <img src="img/obozn.png" alt="обозначения">
                        <br><br>
                    </div>



                    <div id="form_top2" class="stuk fi col-12">
                        <form method="get" class="form-inline my-lg-0">
                            <input class="form-control" type="search" placeholder="Поиск по каталогу" aria-label="Поиск" value="">
                            <img id="fikus_top2" class="dugru2" src="img/lupa.png" alt="img">
                        </form>
                        <div class="pokaz-par">
                            <div class="doppar-n">
                                <a class="doppar">Показать дополнительные параметры</a>
                            </div>
                            <div class="novinka">Новинка</div>
                            <div class="raspord">Распродажа</div>
                            <div class="w-100"></div>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <span class="htot">Цена</span>
                                    <div class="catalog__filter-range">
                                        <div class="catalog__filter-range-price">
                                            <span class="catalog__filter-range-input-t">от</span>
                                            <input name="filter_Price[]" class="catalog__filter-range-input hist" type="text" id="amount1">
                                            <span class="catalog__filter-range-input-t">до</span>
                                            <input name="filter_Price[]" class="catalog__filter-range-input hist" type="text" id="amount2">
                                        </div>
                                        <div class="catalog__filter-range-line" id="slider-range"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <span class="htot" for="radio">Наличие</span>
                                    <label for="male" class="lab-for samovivoz">
                                        <input id="male" type="radio" name="dostavka" value="male">
                                        В наличии</label>
                                    <label for="female" class="lab-for gidost">
                                        <input class="p505" id="female" type="radio" name="dostavka" value="female">
                                        Под заказ</label>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <span class="htot" for="radio">Обозначение по ГОСТу</span>
                                    <label for="male" class="lab-for samovivoz">
                                        <input placeholder='Введите' name="filter_Price[]" class="catalog__filter-range-input hist w-100" type="text" id="amount1">
                                </div>
                                <div class="w-100"></div><br>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <span class="htot">Диаметр D, мм</span>
                                    <div class="catalog__filter-range">
                                        <div class="catalog__filter-range-price">
                                            <span class="catalog__filter-range-input-t">от</span>
                                            <input name="filter_Price[]" class="catalog__filter-range-input hist" type="text" id="amount3">
                                            <span class="catalog__filter-range-input-t">до</span>
                                            <input name="filter_Price[]" class="catalog__filter-range-input hist" type="text" id="amount4">
                                        </div>
                                        <div class="catalog__filter-range-line" id="slider-range4"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <span class="htot">Длина общая L, мм</span>
                                    <div class="catalog__filter-range">
                                        <div class="catalog__filter-range-price">
                                            <span class="catalog__filter-range-input-t">от</span>
                                            <input name="filter_Price[]" class="catalog__filter-range-input hist" type="text" id="dlina-obshaya1">
                                            <span class="catalog__filter-range-input-t">до</span>
                                            <input name="filter_Price[]" class="catalog__filter-range-input hist" type="text" id="dlina-obshaya2">
                                        </div>
                                        <div class="catalog__filter-range-line" id="dlina-obshaya"></div>
                                    </div>
                                </div>
                                <div class="w-100"></div><br>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <span class="htot">Длина режущей части I, мм</span>
                                    <div class="catalog__filter-range">
                                        <div class="catalog__filter-range-price">
                                            <span class="catalog__filter-range-input-t">от</span>
                                            <input name="filter_Price[]" class="catalog__filter-range-input hist" type="text" id="dlina-rej-chasti1">
                                            <span class="catalog__filter-range-input-t">до</span>
                                            <input name="filter_Price[]" class="catalog__filter-range-input hist" type="text" id="dlina-rej-chasti2">
                                        </div>
                                        <div class="catalog__filter-range-line" id="dlina-rej-chasti"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <span class="htot" for="radio">Материал</span>
                                    <select class="custom-select hist catalog__filter-range-input w-100">
                                        <option selected="">Выберите</option>
                                        <option value="1">Boots</option>
                                        <option value="2">Shoes</option>
                                        <option value="3">Feet</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <span class="htot" for="radio">Тип (<i>класс точности</i>)</span>
                                    <select class="custom-select hist catalog__filter-range-input w-100">
                                        <option selected="">Выберите</option>
                                        <option value="1">Boots</option>
                                        <option value="2">Shoes</option>
                                        <option value="3">Feet</option>
                                    </select>
                                </div>
                                <div class="w-100"></div><br>
                                <div class="col-12 charka-bott">
                                    <button type="button" class="btn btn-light filtr-butt filtr-butt-light">Отмена</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button type="submit" class="btn btn-danger red_butt filtr-butt">Применить</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <table class="red-korz-1">
                        <thead>
                            <tr class="red-korz">
                                <th><img src="img/minikorz.png" alt="img"></th>
                                <th>Артикул</th>
                                <th>Товар</th>
                                <th>Цена без <br>НДС в &#8381;</th>
                                <th>Остаток</th>
                                <th>Заказать</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class='nadcharks'>
                                <td>
                                    <label class="dop-check">
                                        <input type="checkbox" autocomplete="off" checked="">
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </label>
                                </td>
                                <td>29000029</td>
                                <td class='vscrit'><a class='peit-arr procent'>Фреза дисковая 3-х стор.</a></td>
                                <td>3 000</td>
                                <td>12 000</td>
                                <td class="qty">
                                    <div class="number">
                                        <img class="minus" src="img/minus.png" alt="img">
                                        <input type="text" name="cart[33][83]" value="1" class="qty83">
                                        <img class="plus" src="img/plus.png" alt="img">
                                    </div>
                                    <a class="a-ud" href=""><img src="img/red-korzina.png" alt=""></a>
                                </td>
                            </tr>
                            <tr class='tr-charks'>
                                <td colspan="6">
                                    <div class="row pl3">
                                        <div class="col-3">
                                            <img src="http://dummyimage.com/100x100/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                                        </div>
                                        <div class="col-9">
                                            <div class="harki">
                                                <div class="row">
                                                    <div class="col-6 charka"><span class='tire-start'>ГОСТ:</span>
                                                        <span class='tire-center'>...........................................................................................................</span>
                                                        <span class='tire-end'>456</span>
                                                    </div>
                                                    <div class="col-6 charka"><span class='tire-start'>ГОСТ:</span>
                                                        <span class='tire-center'>...........................................................................................................</span>
                                                        <span class='tire-end'>456</span>
                                                    </div>
                                                    <div class="col-6 charka"><span class='tire-start'>ГОСТ:</span>
                                                        <span class='tire-center'>...........................................................................................................</span>
                                                        <span class='tire-end'>456</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--  Корзина менее 992  -->
                <div class="d-lg-none">
                    <div class="row korz-min ">
                        <div class="col-11">
                            <div class="grey-sm">Арт.: 29000029</div>
                            <div class="raspord">Распродажа</div>
                            <a href='' class="turl">Фреза дисковая 3-х стор. фреза.</a>
                            <div class="grey-sm">Остаток: <span class="korz-t">300 000</span></div>
                            <div class="grey-sm color-27">Цена без НДС в &#8381; :
                                <span class="korz-t float-right t16">3 000</span>
                            </div>
                            <div class="row">
                                <div class="qty qty-min col-7">
                                    <div class="number">
                                        <img class="minus" src="img/minus2.png" alt="img">
                                        <input type="text" name="cart[33][83]" value="1" class="qty83">
                                        <img class="plus" src="img/plus2.png" alt="img">
                                    </div>
                                    <span class="a-udal clear-input" href=""></span>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="col-1 raspord-h h100"></div>
                        <div class="tr-charks py-3">
                            <div class="row text-center">
                                <div class="col-3">
                                    <img src="http://dummyimage.com/100x100/4d494d/686a82.gif&amp;text=placeholder+image" alt="placeholder+image">
                                </div>
                                <div class="col-9">
                                    <div class="harki harki-min">
                                        <div class="row">
                                            <div class="col-12 charka"><span class="tire-start">ГОСТ:</span>
                                                <span class="tire-center">...........................................................................................................</span>
                                                <span class="tire-end">456</span>
                                            </div>
                                            <div class="col-12 charka"><span class="tire-start">Диаметр,D:</span>
                                                <span class="tire-center">...........................................................................................................</span>
                                                <span class="tire-end">456</span>
                                            </div>
                                            <div class="col-12 charka"><span class="tire-start">Длина:</span>
                                                <span class="tire-center">...........................................................................................................</span>
                                                <span class="tire-end">456</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row korz-min">
                        <div class="col-11">
                            <div class="grey-sm">Арт.: 29000029</div>
                            <div class="raspord">Распродажа</div>
                            <a href='' class="turl">Фреза дисковая 3-х стор. фреза.</a>
                            <div class="grey-sm">Остаток: <span class="korz-t">300 000</span></div>
                            <div class="grey-sm color-27">Цена без НДС в &#8381; :
                                <span class="korz-t float-right t16">3 000</span>
                            </div>
                            <div class="row">
                                <div class="qty qty-min col-7">
                                    <div class="number">
                                        <img class="minus" src="img/minus2.png" alt="img">
                                        <input type="text" name="cart[33][83]" value="1" class="qty83">
                                        <img class="plus" src="img/plus2.png" alt="img">
                                    </div>
                                    <span class="a-udal clear-input" href=""></span>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="col-1 raspord-h h100"></div>
                        <div class="tr-charks py-3">
                            <div class="row text-center">
                                <div class="col-3">
                                    <img src="http://dummyimage.com/100x100/4d494d/686a82.gif&amp;text=placeholder+image" alt="placeholder+image">
                                </div>
                                <div class="col-9">
                                    <div class="harki harki-min">
                                        <div class="row">
                                            <div class="col-12 charka"><span class="tire-start">ГОСТ:</span>
                                                <span class="tire-center">...........................................................................................................</span>
                                                <span class="tire-end">456</span>
                                            </div>
                                            <div class="col-12 charka"><span class="tire-start">Диаметр,D:</span>
                                                <span class="tire-center">...........................................................................................................</span>
                                                <span class="tire-end">456</span>
                                            </div>
                                            <div class="col-12 charka"><span class="tire-start">Длина:</span>
                                                <span class="tire-center">...........................................................................................................</span>
                                                <span class="tire-end">456</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--  Корзина менее 992  -->

                <div class="row">
                    <div class="col-12 charka-bott">
                        <span class="tire-start-bott">Количество товаров в наличии:</span>
                        <span class="tire-end-bott">5 шт.</span>
                    </div>
                    <div class="col-12 charka-bott">
                        <span class="tire-start-bott">Количество товаров под заказ:</span>
                        <span class="tire-end-bott">5 шт.</span>
                    </div>
                    <div class="col-12 charka-bott">
                        <span class="tire-start-bott t18">Итого к оплате:</span>
                        <span class="tire-end-bott t30">35 000 <span class="tire-rub">руб</span></span>
                    </div>
                    <div class="col-12 charka-bott-gray">
                        <span class="tire-start-bott t-smal-gray">*Стоимость указана без учета доставки</span>
                    </div>
                    <div class="col-12 charka-bott">
                        <button type="submit" class="btn btn-danger red_butt">Оформить заказ</button>
                    </div>
                </div>

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
<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <title></title>

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ui.css">

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
        <div class="row drop-korz">
            <div class="col-12 d-none col-lg-3 d-lg-block pr-3 pl-0">
                <!-- two card left -->
                <div class="card card-face">
                    <img class="im_face" src="http://dummyimage.com/80x80/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                    <a class="card-title ati">
                        Иванов Сергей Андреевич
                    </a>
                    <div class="lred"></div>
                    <div class="card-body">
                        <div class="colin"><a href="" class="anod">Личный кабинет</a></div>
                        <div class="colin"><a href="" class="anod">Корзина</a></div>
                        <div class="colin"><a href="" class="anod">История заказов</a></div>
                        <div class="colin"><a href="" class="anod">Выход</a></div>
                    </div>
                </div><br><br>
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
                    <div class="col in_sopl"><a href="" class="asvw">Главная</a> / <span>услуги</span></div>
                </div>
                <div class="zag">
                    Фрезы дисковые трехсторонние
                </div>

                <!-- Корзина до 992 пикс  -->
                <div class="row d-none d-lg-flex">
                    <div class="col-12">
                        Дисковые фрезы предназначены для обработки плоскостей, уступов и пазов. Основным типом дисковых фрез являются трехсторонние. Они имеют зубья на цилиндрической поверхности и на
                        обоих торцах. Их применяют для обработки уступов и более глубоких пазов. Они обеспечивают более высокий класс шероховатости боковых стенок паза или уступа.
                    </div>

                    <div class="col-12">
                        <div class="gosti">Описание</div><br>
                        <div class="do_ry">
                            Здесь вы сможете найти текст 40838 ГОСТов. Вся информация доступна абсолютно бесплатно. Дата актуализации базы ГОСТов - 01.07.2018. Тексты представлены в формате PDF.
                        </div>
                        <div class="gosti">ГОСТы</div>
                        <div class="gost row">
                            <div class="col-12 col-md-12">
                                <a href="" class="di spis2">ГОСТ 2679-93 Фрезы прорезные и отрезные.</a>
                                <a href="" class="di spis2">ГОСТ 2679-93 Фрезы прорезные и отрезные.</a>
                            </div>
                        </div>
                        <div class="gosti">Обозначения</div><br>
                        <img src="img/obozn.png" alt="обозначения">
                        <br><br>
                    </div>

                    <div id="form_top2" class="stuk fi col-12">


                        <div class="pokaz-par">768
                            <div class="doppar-n">
                                <a class="doppar">Показать дополнительные параметры</a>
                            </div>
                            <div class="novinka">Новинка</div>
                            <div class="raspord">Распродажа</div>
                            <div class="w-100"></div>
                        </div>


                        <div class="pokaz-par">
                            <div class="doppar-n">
                                <a class="doppar">Показать дополнительные параметры</a>
                            </div>
                            <div class="novinka">Новинка</div>
                            <div class="raspord">Распродажа</div>
                            <div class="w-100"></div>

                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <span class="htot">Цена</span>
                                    <div class="catalog__filter-range">
                                        <div class="catalog__filter-range-price">
                                            <span class="catalog__filter-range-input-t">от</span>
                                            <input name="filter_Price[]" class="catalog__filter-range-input hist" type="text" id="amount1">
                                            <span class="catalog__filter-range-input-t">до</span>
                                            <input name="filter_Price[]" class="catalog__filter-range-input hist" type="text" id="amount2">
                                        </div>
                                        <div class="catalog__filter-range-line" id="slider-range"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <span class="htot" for="radio">Наличие</span>
                                    <label for="male" class="lab-for samovivoz">
                                        <input id="male" type="radio" name="dostavka" value="male">
                                        В наличии</label>
                                    <label for="female" class="lab-for gidost">
                                        <input class="p505" id="female" type="radio" name="dostavka" value="female">
                                        Под заказ</label>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <span class="htot" for="radio">Обозначение по ГОСТу</span>
                                    <label for="male" class="lab-for samovivoz">
                                        <input placeholder='Введите' name="filter_Price[]" class="catalog__filter-range-input hist w-100" type="text" id="amount1">
                                </div>
                                <div class="w-100"></div><br>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <span class="htot">Диаметр D, мм</span>
                                    <div class="catalog__filter-range">
                                        <div class="catalog__filter-range-price">
                                            <span class="catalog__filter-range-input-t">от</span>
                                            <input name="filter_Price[]" class="catalog__filter-range-input hist" type="text" id="amount3">
                                            <span class="catalog__filter-range-input-t">до</span>
                                            <input name="filter_Price[]" class="catalog__filter-range-input hist" type="text" id="amount4">
                                        </div>
                                        <div class="catalog__filter-range-line" id="slider-range4"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <span class="htot">Длина общая L, мм</span>
                                    <div class="catalog__filter-range">
                                        <div class="catalog__filter-range-price">
                                            <span class="catalog__filter-range-input-t">от</span>
                                            <input name="filter_Price[]" class="catalog__filter-range-input hist" type="text" id="dlina-obshaya1">
                                            <span class="catalog__filter-range-input-t">до</span>
                                            <input name="filter_Price[]" class="catalog__filter-range-input hist" type="text" id="dlina-obshaya2">
                                        </div>
                                        <div class="catalog__filter-range-line" id="dlina-obshaya"></div>
                                    </div>
                                </div>
                                <div class="w-100"></div><br>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <span class="htot">Длина режущей части I, мм</span>
                                    <div class="catalog__filter-range">
                                        <div class="catalog__filter-range-price">
                                            <span class="catalog__filter-range-input-t">от</span>
                                            <input name="filter_Price[]" class="catalog__filter-range-input hist" type="text" id="dlina-rej-chasti1">
                                            <span class="catalog__filter-range-input-t">до</span>
                                            <input name="filter_Price[]" class="catalog__filter-range-input hist" type="text" id="dlina-rej-chasti2">
                                        </div>
                                        <div class="catalog__filter-range-line" id="dlina-rej-chasti"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <span class="htot" for="radio">Материал</span>
                                    <select class="custom-select hist catalog__filter-range-input w-100">
                                        <option selected="">Выберите</option>
                                        <option value="1">Boots</option>
                                        <option value="2">Shoes</option>
                                        <option value="3">Feet</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <span class="htot" for="radio">Тип (<i>класс точности</i>)</span>
                                    <select class="custom-select hist catalog__filter-range-input w-100">
                                        <option selected="">Выберите</option>
                                        <option value="1">Boots</option>
                                        <option value="2">Shoes</option>
                                        <option value="3">Feet</option>
                                    </select>
                                </div>
                                <div class="w-100"></div><br>
                                <div class="col-12 charka-bott">
                                    <button type="button" class="btn btn-light filtr-butt filtr-butt-light">Отмена</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button type="submit" class="btn btn-danger red_butt filtr-butt">Применить</button>
                                </div>

                            </div>
                        </div>


                        <form method="get" class="form-inline my-lg-0">
                            <input class="form-control" type="search" placeholder="Поиск по каталогу" aria-label="Поиск" value="">
                            <img id="fikus_top2" class="dugru2" src="img/lupa.png" alt="img">
                        </form>
                        

                    </div>

                    <table class="red-korz-1">
                        <thead>
                            <tr class="red-korz">
                                <th><img src="img/minikorz.png" alt="img"></th>
                                <th>Артикул</th>
                                <th>Товар</th>
                                <th>Цена без <br>НДС в &#8381;</th>
                                <th>Остаток</th>
                                <th>Заказать</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class='nadcharks'>
                                <td>
                                    <label class="dop-check">
                                        <input type="checkbox" autocomplete="off" checked="">
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </label>
                                </td>
                                <td>29000029</td>
                                <td class='vscrit'><a class='peit-arr procent'>Фреза дисковая 3-х стор.</a></td>
                                <td>3 000</td>
                                <td>12 000</td>
                                <td class="qty">
                                    <div class="number">
                                        <img class="minus" src="img/minus.png" alt="img">
                                        <input type="text" name="cart[33][83]" value="1" class="qty83">
                                        <img class="plus" src="img/plus.png" alt="img">
                                    </div>
                                    <a class="a-ud" href=""><img src="img/red-korzina.png" alt=""></a>
                                </td>
                            </tr>
                            <tr class='tr-charks'>
                                <td colspan="6">
                                    <div class="row pl3">
                                        <div class="col-3">
                                            <img src="http://dummyimage.com/100x100/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                                        </div>
                                        <div class="col-9">
                                            <div class="harki">
                                                <div class="row">
                                                    <div class="col-6 charka"><span class='tire-start'>ГОСТ:</span>
                                                        <span class='tire-center'>...........................................................................................................</span>
                                                        <span class='tire-end'>456</span>
                                                    </div>
                                                    <div class="col-6 charka"><span class='tire-start'>ГОСТ:</span>
                                                        <span class='tire-center'>...........................................................................................................</span>
                                                        <span class='tire-end'>456</span>
                                                    </div>
                                                    <div class="col-6 charka"><span class='tire-start'>ГОСТ:</span>
                                                        <span class='tire-center'>...........................................................................................................</span>
                                                        <span class='tire-end'>456</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--  Корзина менее 992  -->
                <div class="d-lg-none">
                    <div class="row korz-min ">
                        <div class="col-11">
                            <div class="grey-sm">Арт.: 29000029</div>
                            <div class="raspord">Распродажа</div>
                            <a href='' class="turl">Фреза дисковая 3-х стор. фреза.</a>
                            <div class="grey-sm">Остаток: <span class="korz-t">300 000</span></div>
                            <div class="grey-sm color-27">Цена без НДС в &#8381; :
                                <span class="korz-t float-right t16">3 000</span>
                            </div>
                            <div class="row">
                                <div class="qty qty-min col-7">
                                    <div class="number">
                                        <img class="minus" src="img/minus2.png" alt="img">
                                        <input type="text" name="cart[33][83]" value="1" class="qty83">
                                        <img class="plus" src="img/plus2.png" alt="img">
                                    </div>
                                    <span class="a-udal clear-input" href=""></span>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="col-1 raspord-h h100"></div>
                        <div class="tr-charks py-3">
                            <div class="row text-center">
                                <div class="col-3">
                                    <img src="http://dummyimage.com/100x100/4d494d/686a82.gif&amp;text=placeholder+image" alt="placeholder+image">
                                </div>
                                <div class="col-9">
                                    <div class="harki harki-min">
                                        <div class="row">
                                            <div class="col-12 charka"><span class="tire-start">ГОСТ:</span>
                                                <span class="tire-center">...........................................................................................................</span>
                                                <span class="tire-end">456</span>
                                            </div>
                                            <div class="col-12 charka"><span class="tire-start">Диаметр,D:</span>
                                                <span class="tire-center">...........................................................................................................</span>
                                                <span class="tire-end">456</span>
                                            </div>
                                            <div class="col-12 charka"><span class="tire-start">Длина:</span>
                                                <span class="tire-center">...........................................................................................................</span>
                                                <span class="tire-end">456</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row korz-min">
                        <div class="col-11">
                            <div class="grey-sm">Арт.: 29000029</div>
                            <div class="raspord">Распродажа</div>
                            <a href='' class="turl">Фреза дисковая 3-х стор. фреза.</a>
                            <div class="grey-sm">Остаток: <span class="korz-t">300 000</span></div>
                            <div class="grey-sm color-27">Цена без НДС в &#8381; :
                                <span class="korz-t float-right t16">3 000</span>
                            </div>
                            <div class="row">
                                <div class="qty qty-min col-7">
                                    <div class="number">
                                        <img class="minus" src="img/minus2.png" alt="img">
                                        <input type="text" name="cart[33][83]" value="1" class="qty83">
                                        <img class="plus" src="img/plus2.png" alt="img">
                                    </div>
                                    <span class="a-udal clear-input" href=""></span>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="col-1 raspord-h h100"></div>
                        <div class="tr-charks py-3">
                            <div class="row text-center">
                                <div class="col-3">
                                    <img src="http://dummyimage.com/100x100/4d494d/686a82.gif&amp;text=placeholder+image" alt="placeholder+image">
                                </div>
                                <div class="col-9">
                                    <div class="harki harki-min">
                                        <div class="row">
                                            <div class="col-12 charka"><span class="tire-start">ГОСТ:</span>
                                                <span class="tire-center">...........................................................................................................</span>
                                                <span class="tire-end">456</span>
                                            </div>
                                            <div class="col-12 charka"><span class="tire-start">Диаметр,D:</span>
                                                <span class="tire-center">...........................................................................................................</span>
                                                <span class="tire-end">456</span>
                                            </div>
                                            <div class="col-12 charka"><span class="tire-start">Длина:</span>
                                                <span class="tire-center">...........................................................................................................</span>
                                                <span class="tire-end">456</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--  Корзина менее 992  -->

                <div class="row">
                    <div class="col-12 charka-bott">
                        <span class="tire-start-bott">Количество товаров в наличии:</span>
                        <span class="tire-end-bott">5 шт.</span>
                    </div>
                    <div class="col-12 charka-bott">
                        <span class="tire-start-bott">Количество товаров под заказ:</span>
                        <span class="tire-end-bott">5 шт.</span>
                    </div>
                    <div class="col-12 charka-bott">
                        <span class="tire-start-bott t18">Итого к оплате:</span>
                        <span class="tire-end-bott t30">35 000 <span class="tire-rub">руб</span></span>
                    </div>
                    <div class="col-12 charka-bott-gray">
                        <span class="tire-start-bott t-smal-gray">*Стоимость указана без учета доставки</span>
                    </div>
                    <div class="col-12 charka-bott">
                        <button type="submit" class="btn btn-danger red_butt">Оформить заказ</button>
                    </div>
                </div>

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
    <script type="text/javascript" src="js/jquery-1.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
                                $( function() {
                $( "#slider-range" ).slider({
                  range: true,
                  min: 0,
                  max: 100000,
                  values: [ 10000, 50000 ],
                  slide: function( event, ui ) {
                    $( "#amount1" ).val(ui.values[ 0 ]);
                    $( "#amount2" ).val(ui.values[ 1 ]);
                  }
                });
                $( "#amount1" ).val($( "#slider-range" ).slider( "values", 0 ));
                $( "#amount2" ).val($( "#slider-range" ).slider( "values", 1 ));
            });
            $( function() {
                $( "#slider-range4" ).slider({
                  range: true,
                  min: 0,
                  max: 1000,
                  values: [ 100, 500 ],
                  slide: function( event, ui ) {
                    $( "#amount3" ).val(ui.values[ 0 ]);
                    $( "#amount4" ).val(ui.values[ 1 ]);
                  }
                });
                $( "#amount3" ).val($( "#slider-range4" ).slider( "values", 0 ));
                $( "#amount4" ).val($( "#slider-range4" ).slider( "values", 1 ));
            });
            $( function() {
                $( "#dlina-obshaya" ).slider({
                  range: true,
                  min: 0,
                  max: 1000,
                  values: [ 100, 500 ],
                  slide: function( event, ui ) {
                    $( "#dlina-obshaya1" ).val(ui.values[ 0 ]);
                    $( "#dlina-obshaya2" ).val(ui.values[ 1 ]);
                  }
                });
                $( "#dlina-obshaya1" ).val($( "#dlina-obshaya" ).slider( "values", 0 ));
                $( "#dlina-obshaya2" ).val($( "#dlina-obshaya" ).slider( "values", 1 ));
            });
            $( function() {
                $( "#dlina-rej-chasti" ).slider({
                  range: true,
                  min: 0,
                  max: 1000,
                  values: [ 100, 500 ],
                  slide: function( event, ui ) {
                    $( "#dlina-rej-chasti1" ).val(ui.values[ 0 ]);
                    $( "#dlina-rej-chasti2" ).val(ui.values[ 1 ]);
                  }
                });
                $( "#dlina-rej-chasti1" ).val($( "#dlina-rej-chasti" ).slider( "values", 0 ));
                $( "#dlina-rej-chasti2" ).val($( "#dlina-rej-chasti" ).slider( "values", 1 ));
            });
        </script>


    <script>
     //   document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
    </script>


</body>

</html>