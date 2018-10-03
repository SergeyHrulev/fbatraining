<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
<nav class="light-blue" role="navigation">
    <div class="nav-wrapper container">
        <a href="{{url('/hr')}}" class="brand-logo right">FBA</a>
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

<div class="parallax-container main darken-div">
    <div class="section no-pad-bot">
        <div class="container">

            <h5 class="header center white-text">Дорожная карта открытия бизнеса</h5>
            <div class="row center">
                <h1 class="header white-text col s12">Управление персоналом малого предприятия</h1>
                <h3 class="header white-text col s12">Все, что вы должны знать<br>о работе с персоналом</h3>
            </div>
               <br>
            <div class="row center">
                <a href="#modal1" class="btn-large waves-effect red accent-4">Записаться на курс!</a>
            </div>
        </div>
    </div>
    <div class="parallax"><img class="sharpen-img responsive-img" src="{{asset('img/hr/hr5.jpg')}}" ></div>
</div>
<!--first block   -->
<div class="row">
    <div class="container">
        <div class="col s12">
            <h3><i class="mdi-content-send brown-text"></i></h3>
            <br>
            <h2 class="header center black-text darken-4">Что должны знать предприниматели об управлении персоналом</h2>
            <div class="section">
                <blockquote class="left-align">
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

<div class="parallax-container main darken-div">
    <div class="section">
        <div class="container">
            <div class="row center">
                <div id="preimushestva" class="col s12">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h2 class="header white-text darken-4" style="padding-bottom: 50px;"></h2>
                    <blockquote class="left-align white-text">


                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax"><img class="sharpen-img responsive-img" src="{{asset('img/hr/hr4.jpg')}}" alt=""></div>
</div>

<!--second block        -->
<div class="container inner-block">
    <div class="row">
        <h2 id="programm" class="header center black-text darken-4">Содержание курса</h2>
        <br>
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

<div class="parallax-container light-blue darken-div main">
    <div class="section">
        <div class="container">
            <div class="row center">
                <h2 id="who" class="header col s12 white-text">Спикеры курса</h2>
                <br>
                <div class="col m4 s12">
                    <div class="card">

                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="{{asset('img/photo/sergey1.jpg')}}" style="padding: 15px;" alt="">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator speakers-text">
                                Хрулев Сергей
                                <i class="material-icons right">more_vert</i>
                            </span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title">
                                <i class="material-icons right">close</i>
                            </span>
                            <p>
                                Свыше десяти лет работал финансовым директором в крупных российских компаниях.
                                С 2015 года независимый фианансовый консультант. Более десяти лет занимается
                                производственным консалтингом, анализом производственных процессов и экономикой производства,
                                а также финансовым аудитом и аутсорсингом. Основные интересы: методология анализа больших
                                данных в финансах (Big Data Finance), разарботка систем автоматизации финансовых процессов,
                                моделирование процессов в финансах.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card">

                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="{{asset('img/photo/natalia.jpg')}}" style="padding: 15px;" alt="">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator speakers-text">
                                Наталия
                                <i class="material-icons right">more_vert</i>
                            </span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title">
                                <i class="material-icons right">close</i>
                            </span>
                            <p>
                                Более 5 лет работала главным бухгалтером и руководила HR-отделом. В настоящее время занимается аутсорсингом (малый и средний бизнес), продолжает исследовать область кадрового делопроизводства и бизнес-процессов. Основная специализация: торговля, маркетинг. Цель: вывести бизнес на высший уровень за счет грамотного управления персоналом.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card">

                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="{{asset('img/photo/lilia.jpg')}}" style="padding: 15px;" alt="">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator speakers-text">
                                Людницкая Лилия
                                <i class="material-icons right">more_vert</i>
                            </span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title">
                                <i class="material-icons right">close</i>
                            </span>
                            <p>


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax"></div>
</div>
<div class="container inner-block">
    <div class="section">
        <div class="row">
            <div id="usefull" class="col s12 center">
                <h3><i class="mdi-content-send brown-text"></i></h3>
                <h2 class="header center black-text darken-4" style="margin-bottom: 50px;">Что вы получите от курса</h2>
                <blockquote class="left-align light flow-text">
                <p class="left-align light flow-text" style="line-height: 3.5rem;">
                     Профессиональные знания в области HR <br>
                     Ознакомитесь с техническими и правовыми основами работы с персоналом <br>
                     Научитесь эффективно покупать ресурс «труд» <br>
                     Внедрите в работу полезные инструменты для работы с персоналом <br>
                     Узнаете, как минимизировать бюрократическую сторону <br>
                </p>
                </blockquote>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer light-blue">
    <div class="container">
        <div class="row" style="margin-bottom: -20px;">
            <div class="col l6 s12 center">
                <h5>Контакты</h5>
                <p>телефон: (812) 627-6754</p>
                <p>email: sale@fba-training.ru</p>
            </div>
            <div class="col l6 s12 center">
                <h5>Мы в соцсетях</h5>
                <a href="https://vk.com/finba" target="_blank">
                    <img src="{{asset('img/icosoc/010-social-4.png')}}" alt="" style="margin-right: 10px;">
                </a>
                <a href="https://www.facebook.com/Finbfa/" target="_blank">
                    <img src="{{asset('img/icosoc/012-social-2.png')}}" alt="" style="margin-left: 10px;">
                </a>
            </div>
        </div>
    </div>
</footer>
<!-- Modal Structure -->
<div id="modal1" class="modal">
    <form action="{{url('save')}}" method="post">
        {{ csrf_field() }}
        <div class="modal-content">
            <h5 class="header center light-blue-text darken-4">Отправить заявку</h5>

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
            <button type="submit" class="modal-action modal-close white-text waves-effect waves-green btn-flat">Отправить</button>
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