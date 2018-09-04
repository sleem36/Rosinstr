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
            <div class="col in_sopl"><a href="" class="asvw">Главная</a> / <span>услуги</span></div>
        </div>
        <div class="zag">
            Доставка и оплата
        </div>
        <div class="text">


            <div id="accordion" class="accordion vi_dostav s992 d-sm-none ">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#collapse1">
                        <div class="sr1 stab" onclick="">Этапы покупки</div>
                    </div>
                    <div id="collapse1" class="card-body collapse" data-parent="#accordion">
                        <div class='dd11 tad1'><br>
                            <div class="text14 text-center ">Вы можете очень просто совершить покупку в нашем интернет-магазине, для этого:</div><br><br>
                            <div class="row frozen justify-content-center">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <div class="card-body">
                                        <img src="img/im2/vibor.png" class='stoder' alt="img">
                                        <p class="card-text">Выберите нужный Вам товар в нашем интернет магазине</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-1 align-self-center text-center">
                                    <img class='dirtim' src="img/caru_right.png" alt="img">
                                </div>
                                <div class="col-12  col-md-4 col-lg-2">
                                    <div class="card-body">
                                        <img src="img/im2/korz.png" class='stoder' alt="img">
                                        <p class="card-text">Выбранный товар положите в корзину и внесите необходимые данные для оформления заказа</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-1 align-self-center text-center d-md-none d-lg-block">
                                    <img src="img/im2/slice-1.png" alt="img" class='vertik d-none d-lg-block'>
                                    <img src="img/goriz.png" alt="img" class='goriz-vertik m-auto d-block d-md-none pb-5'>
                                </div>
                                <div class="col-12 col-md-4 col-lg-2">
                                    <div class="card-body">
                                        <img src="img/im2/phone.png" class='stoder' alt="img">
                                        <p class="card-text">Позвоните нам по телефону:
                                            <span class="tbol">+7 (900) 140-70-20</span>
                                            Или оставьте заявку и мы свяжемся с Вами в ближайшее время</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-1 align-self-center text-center">
                                    <img class='dirtim' src="img/caru_right.png" alt="img">
                                </div>
                                <div class="col-12 col-md-4 col-lg-2">
                                    <div class="card-body">
                                        <img src="img/im2/man.png" class='stoder' alt="img">
                                        <p class="card-text">Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа</p>
                                    </div>
                                </div>
<div class="strond p-3">Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа. Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа. Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа . Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа.</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                        <div class="sr1 stab">Способы оплаты</div>
                    </div>
                    <div id="collapse2" class="card-body collapse" data-parent="#accordion">
                        <div class='dd12 tad2'>
                            <br><br><br>
                            <div class="row frozen justify-content-center">
                                <div class="col-12 col-md-2">
                                    <div class="card-body">
                                        <img src="img/im2/den.png" class='stoder' alt="img">
                                        <p class="card-text">Вы можете выбрать способ оплаты – наличные</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-1 align-self-center text-center">
                                    <img class='dirtim' src="img/caru_right.png" alt="img">
                                </div>
                                <div class="col-12 col-md-2">
                                    <div class="card-body">
                                        <img src="img/im2/dom.png" class='stoder' alt="img">
                                        <p class="card-text">Оплата наличными производится в офисе компании.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-1 align-self-center text-center">
                                    <img src="img/im2/slice-1.png" alt="img" class='vertik d-none d-lg-block'>
                                    <img src="img/goriz.png" alt="img" class='goriz-vertik m-auto d-block d-lg-none pb-5'>
                                </div>
                                <div class="col-12 col-md-2">
                                    <div class="card-body">
                                        <img src="img/im2/bezn.png" class='stoder' alt="img">
                                        <p class="card-text">Вы можете выбрать способ оплаты – банковская карта:
                                            <span class="tbol2">– VISA;</span>
                                            <span class="tbol2">– VISA electron;</span>
                                            <span class="tbol2">– Maestro;</span>
                                            <span class="tbol2">– MaestroCard.</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-1 align-self-center text-center">
                                    <img class='dirtim' src="img/caru_right.png" alt="img">
                                </div>
                                <div class="col-12 col-md-2">
                                    <div class="card-body">
                                        <img src="img/im2/map.png" class='stoder' alt="img">
                                        <p class="card-text">Оплата банковской картой дествует во всех регионах, кроме;</p>
                                    </div>
                                </div>
                            </div>
<div class="strond p-3">Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа. Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа. Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа . Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа.</div>
                        </div>
                    </div>
                    <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                        <div class="sr1 stab">Способы доставки</div>
                    </div>
                    <div id="collapse3" class="collapse" data-parent="#accordion">

                        <div class='dd13 tad3'>
                            <br><br><br>
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-2">
                                    <div class="card-body">
                                        <img src="img/im2/hand.png" class='stoder' alt="img">
                                        <p class="card-text">Вы можете забрать заказ самостоятельно по адресу Декабристов 20А.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-1 align-self-center text-center">
                                    <img src="img/im2/slice-1.png" alt="img" class='vertik d-none d-lg-block'>
                                    <img src="img/goriz.png" alt="img" class='goriz-vertik m-auto d-block d-lg-none pb-5'>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="card-body">
                                        <img src="img/im2/car.png" class='stoder' alt="img">
                                        <p class="card-text">Доставка груза осуществляется автотранспортными компаниями:
                                            <span class="tbol2">– "Деловые линии";</span>
                                            <span class="tbol2">– "Автотрейдинг", </span>
                                            <span class="tbol2">– "Экспресс-Авто", </span>
                                            <span class="tbol2">– "Первая экспедиционная компания" и др. </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-1 align-self-center text-center">
                                    <img class='dirtim' src="img/caru_right.png" alt="img">
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="card-body">
                                        <img src="img/im2/man.png" class='stoder' alt="img">
                                        <p class="card-text">При необходимости, Вы можете узнать у менеджера нашей компании, на каком этапе доставки находится ваш груз.</p>
                                    </div>
                                </div>
                            </div>
<div class="strond p-3">Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа. Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа. Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа . Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа.</div>
                        </div>
                    </div>
                </div>
            </div>
         

        <div class="w992 d-none d-sm-block">
 
        <div class="container-fluid2">
            <div class="container2">
                <div class="vi_dostav2">
                    <div class='dd11 '><br>
                        <div class="text14 text-center ">Вы можете очень просто совершить покупку в нашем интернет-магазине, для этого:</div><br><br>
                        <div class="row frozen justify-content-center">
                            <div class="col-12 col-md-4 col-lg-2">
                                <div class="card-body">
                                    <img src="img/im2/vibor.png" class='stoder' alt="img">
                                    <p class="card-text">Выберите нужный Вам товар в нашем интернет магазине</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 align-self-center text-center">
                                <img class='dirtim' src="img/caru_right.png" alt="img">
                            </div>
                            <div class="col-12  col-md-4 col-lg-2">
                                <div class="card-body">
                                    <img src="img/im2/korz.png" class='stoder' alt="img">
                                    <p class="card-text">Выбранный товар положите в корзину и внесите необходимые данные для оформления заказа</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 align-self-center text-center d-md-none d-lg-block">
                                <img src="img/im2/slice-1.png" alt="img" class='vertik d-none d-lg-block'>
                                <img src="img/goriz.png" alt="img" class='goriz-vertik m-auto d-block d-md-none pb-5'>
                            </div>
                            <div class="col-12 col-md-4 col-lg-2">
                                <div class="card-body">
                                    <img src="img/im2/phone.png" class='stoder' alt="img">
                                    <p class="card-text">Позвоните нам по телефону:
                                        <span class="tbol">+7 (900) 140-70-20</span>
                                        Или оставьте заявку и мы свяжемся с Вами в ближайшее время</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 align-self-center text-center">
                                <img class='dirtim' src="img/caru_right.png" alt="img">
                            </div>
                            <div class="col-12 col-md-4 col-lg-2">
                                <div class="card-body">
                                    <img src="img/im2/man.png" class='stoder' alt="img">
                                    <p class="card-text">Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа</p>
                                </div>
                            </div>
<div class="strond px-5">Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа. Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа. Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа . Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа.</div>
                        </div>
                    </div>
                    <div class='dd12 '>
                        <br><br><br>
                        <div class="row frozen justify-content-center">
                            <div class="col-12 col-md-2">
                                <div class="card-body">
                                    <img src="img/im2/den.png" class='stoder' alt="img">
                                    <p class="card-text">Вы можете выбрать способ оплаты – наличные</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 align-self-center text-center">
                                <img class='dirtim' src="img/caru_right.png" alt="img">
                            </div>
                            <div class="col-12 col-md-2">
                                <div class="card-body">
                                    <img src="img/im2/dom.png" class='stoder' alt="img">
                                    <p class="card-text">Оплата наличными производится в офисе компании.</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 align-self-center text-center">
                                <img src="img/im2/slice-1.png" alt="img" class='vertik d-none d-lg-block'>
                                <img src="img/goriz.png" alt="img" class='goriz-vertik m-auto d-block d-lg-none pb-5'>
                            </div>
                            <div class="col-12 col-md-2">
                                <div class="card-body">
                                    <img src="img/im2/bezn.png" class='stoder' alt="img">
                                    <p class="card-text">Вы можете выбрать способ оплаты – банковская карта:
                                        <span class="tbol2">– VISA;</span>
                                        <span class="tbol2">– VISA electron;</span>
                                        <span class="tbol2">– Maestro;</span>
                                        <span class="tbol2">– MaestroCard.</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 align-self-center text-center">
                                <img class='dirtim' src="img/caru_right.png" alt="img">
                            </div>
                            <div class="col-12 col-md-2">
                                <div class="card-body">
                                    <img src="img/im2/map.png" class='stoder' alt="img">
                                    <p class="card-text">Оплата банковской картой дествует во всех регионах, кроме;</p>
                                </div>
                            </div>
<div class="strond px-5">Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа. Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа. Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа . Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа.</div>
                        </div>
                    </div>
                    <div class='dd13 '>
                        <br><br><br>
                        <div class="row frozen justify-content-center">
                            <div class="col-12 col-md-3">
                                <div class="card-body">
                                    <img src="img/im2/hand.png" class='stoder' alt="img">
                                    <p class="card-text">Вы можете забрать заказ самостоятельно по адресу Декабристов 20А.</p>
                                </div>
                            </div>


                            <div class="col-12 col-md-1 align-self-center text-center">
                                <img src="img/im2/slice-1.png" alt="img" class='vertik d-none d-lg-block'>
                                <img src="img/goriz.png" alt="img" class='goriz-vertik m-auto d-block d-lg-none pb-5'>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="card-body">
                                    <img src="img/im2/car.png" class='stoder' alt="img">
                                    <p class="card-text">Доставка груза осуществляется автотранспортными компаниями:
                                        <span class="tbol2">– "Деловые линии";</span>
                                        <span class="tbol2">– "Автотрейдинг", </span>
                                        <span class="tbol2">– "Экспресс-Авто", </span>
                                        <span class="tbol2">– "Первая экспедиционная компания" и др. </span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 align-self-center text-center">
                                <img class='dirtim' src="img/caru_right.png" alt="img">
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="card-body">
                                    <img src="img/im2/man.png" class='stoder' alt="img">
                                    <p class="card-text">При необходимости, Вы можете узнать у менеджера нашей компании, на каком этапе доставки находится ваш груз.</p>
                                </div>
                            </div>
<div class="strond px-5">Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа. Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа. Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа . Менеджер проверит наличие выбранного Вами товара и свяжется с Вами для оформления заказа.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










        </div>
    </div>
    <!-- конец main -->

    <div class="cont">
        <div class="container-fluid d-lg-none px-0">
            <div id="accordion" class="accordion">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                        <a class="card-title">
                            Навигация
                        </a>
                    </div>
                    <div id="collapseOne" class="card-body collapse" data-parent="#accordion">
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
                    <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
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
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="dopnik col">
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
                    </div>

                    <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                        <a class="card-title">
                            Время работы
                        </a>
                    </div>
                    <div class="collapse" data-parent="#accordion" id="collapseFour">
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