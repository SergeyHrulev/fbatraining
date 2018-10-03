<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Cache-Control" content="no-cache">
    <title>Управление персоналом малого предприятия</title>
    <meta title="Управление персоналом малого предприятия">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
<!--header-->
<!--   nav-->
<nav class="blue lighten-3" role="navigation">
    <div class="nav-wrapper container">
        <a href="#" class="brand-logo right">FBA</a>
        <ul class="left hide-on-med-and-down">
            <li><a href="#who">О нас</a></li>
            <li><a href="#programm">Программа</a></li>
            <li><a href="#usefull">Полезное</a></li>
            <li><a href="#preimushestva">Преимущества</a></li>
        </ul>
        {{--mobile nav--}}
        <ul id="nav-mobile" class="side-nav" style="width:150px; transform: translateX(-100%);">
            <li><a href="#who">О нас</a></li>
            <li><a href="#programm">Программа</a></li>
            <li><a href="#usefull">Полезное</a></li>
            <li><a href="#preimushestva">Преимущества</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>

<!--  parallax main-->

<div class="parallax-container main">
    <div class="section no-pad-bot">
        <div class="container">
            <h3 class="header center deep-purple-text darken-4" style="font-style: italic;font-size: 2rem;">Дорожная карта открытия бизнеса</h3>
            <h1 class="header center deep-purple-text darken-4">Управление персоналом малого предприятия</h1>
            <div class="row center">
                <h2 class="header deep-purple-text accent-3 col s12" style="font-size: 3rem; font-style: italic;">Все, что вы должны знать<br>о работе с персоналом</h2>
            </div>
            <div class="row center">
                <a href="#modal1" class="btn-large waves-effect red accent-4">Записаться на курс!</a>
            </div>
        </div>
    </div>
    <div class="parallax"><img class="sharpen-img responsive-img" src="{{asset('img/hr/hr1.jpg')}}" ></div>
</div>
<!--first block   -->
<div class="row">
    <div class="container inner-block">
        <div id="preimushestva" class="col s12">
            <h3><i class="mdi-content-send brown-text"></i></h3>
            <h2 class="header center deep-purple-text darken-4">Что должны знать предприниматели об управлении персоналом</h2>

            <div class="section">
                <blockquote class="left-align light flow-text">
                    <p style="font-size: 2rem; line-height: 3.5rem;">
                        Специфика малого предприятия требует от руководителя компании профессионализма и знаний в области HR (управление персоналом).
                        Как наладить взаимоотношения с сотрудниками, увеличить их защищенность, стимулировать, научить самостоятельно решать проблемы, затратив на это минимум энергии и ресурсов?
                        Ответ на этот и многие другие вопросы в нашем курсе:
                        «HR малое предприятие».
                    </p>
                </blockquote>
            </div>

        </div>
    </div>
</div>

<div class="parallax-container main">
    <div class="section">
        <div class="container">
            <div class="row center">
                <div id="preimushestva" class="col s12">


                </div>
            </div>
        </div>
    </div>
    <div class="parallax"><img class="sharpen-img responsive-img" src="{{asset('img/hr/hr2.jpg')}}" alt=""></div>
</div>

<!--second block        -->
<div class="row">
    <div class="container inner-block">
        <div id="programm" class="col s12">
            <h3><i class="mdi-content-send brown-text"></i></h3>
            <h2 class="header center deep-purple-text darken-4" style="margin-bottom: 50px;">Содержание курса</h2>

            <div class="section">
                <blockquote class="left-align light flow-text">
                    <p style="font-size: 2rem; line-height: 3.5rem;">
                        1. Изучаем особенности HR малого предприятия <br>
                        2. Поэтапно построение работы. Структурирование задач <br>
                        3. Документооборот, отчетность <br>
                        4. Обучаем, как сделать HR экономически эффективным (уменьшаем расходы) <br>
                        5. Настраиваем взаимоотношения с персоналом <br>
                    </p>
                </blockquote>
            </div>

        </div>
    </div>
</div>

<div class="parallax-container">
    <div class="section">
        <div class="container">
            <div class="row center">
                <h2 id="who" class="header col s12 blue-text darken-1">Спикеры курса</h2>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="{{asset('img/2.jpg')}}" class="responsive-img" alt=""></div>
</div>
<div class="container inner-block">
    <div class="section">
        <div class="row">
            <div id="usefull" class="col s12 center">
                <h3><i class="mdi-content-send brown-text"></i></h3>
                <h2 class="header center deep-purple-text darken-4" style="margin-bottom: 50px;">Что вы получите от данного курса</h2>
                <p class="left-align light flow-text" style="line-height: 3.5rem;">
                    1. Профессиональные знания в области HR <br>
                    2. Ознакомитесь с техническими и правовыми основами работы с персоналом <br>
                    3. Научитесь эффективно покупать ресурс «труд» <br>
                    4. Внедрите в работу полезные инструменты для работы с персоналом <br>
                    5. Узнаете, как минимизировать бюрократическую сторону <br>
                </p>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer blue lighten-3">
    <div class="container">
        <div class="row">
            <div class="col l6 s12 center">
                <h3>Контакты</h3>
                <p>телефон: (812) 627-6754</p>
                <p>email: antibudget@intelifin.ru</p>
            </div>
            <div class="col l6 s12 center">
                <h3>Мы в соцсетях</h3>
            </div>
        </div>
    </div>

</footer>
<!-- Modal Structure -->
<div id="modal1" class="modal">
    <form action="index.html" method="get">
        <div class="modal-content">
            <h5 class="header center deep-purple-text darken-4">Отправить заявку</h5>

            <div class="input-field col s6">
                <input name="name" class="input-field col s6" type="text">
                <label for="name">Ваше имя</label>
            </div>
            <div class="input-field col s6">
                <input name="email" class="input-field col s6" type="text">
                <label for="email">Ваш email</label>
            </div>
            <div class="input-field col s6">
                <input name="phone" class="input-field col s6" type="text">
                <label for="phone">Ваш телефон</label>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="modal-action modal-close waves-effect waves-green btn-flat">Отправить</button>
        </div>
    </form>
</div>
<!--Scripts-->
<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        $(".button-collapse").sideNav();
        $('.parallax').parallax();
        $('#modal1').modal();
    });
    (function($){
        $(function(){

            $('.button-collapse').sideNav();
            $('.parallax').parallax();

        }); // end of document ready
    })(jQuery); // end of jQuery name space
</script>
</body>
</html>