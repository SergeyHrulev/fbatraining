<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Дорожная карта открытия бизнеса</title>
    <meta title="Дорожная карта открытия бизнеса">
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

            <h5 class="header center white-text"></h5>
            <div class="row center">
                <h1 class="header white-text col s12">Дорожная карта открытия бизнеса</h1>
                <h3 class="header white-text col s12">Первые шаги<br>на пути в большой бизнес</h3>
                <iframe width="854" height="480" src="https://www.youtube.com/embed/HXS370zCg00" frameborder="0" allowfullscreen></iframe>
            </div>
            <br>
            <div class="row center">
                <a href="#form" class="btn-large waves-effect red accent-4">Записаться на курс!</a>
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
            <h2 class="header center black-text darken-4">Для кого этот курс</h2>
            <div class="section">
                <blockquote class="left-align">
                    <p style="font-size: 2rem; line-height: 3.5rem;">
                        Вы хотите заняться своим делом, но боитесь бюрократической рутины? <br>
                        Вас пугает не знание законов и ответственность? <br>
                        Вы хотите минимизировать расходы, но не знаете как? <br>
                        Не знаете как правильно оформлять договора? <br>
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
                    <h2 class="header white-text darken-4" style="padding-top: 150px;">Если вы хотите минимизировать свои затраты и время занимаясь бизнесом - мы поможем вам в этом</h2>
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
                    1. ООО или ИП, что лучше? Алгоритм выбора формы собственности. <br>
                    2. Обзор законодательства РФ за 2017 год. <br>
                    3. Какие налоги платить и можем ли мы выбирать? <br>
                    4. Открываем счет в банке, как нам выбрать надежный банк? <br>
                    5. Сделки с контрагентами, какие договора нам необходимы? <br>
                    6. Работа с кассой, кому она нужна? Что такое он-лайн касса? <br>
                    7. Работа с персоналом. Нужно ли нам нанимать персонал? Что такое аутсорсинг? <br>
                    8. Бюджет на коленке, как не финансисту эффективно управлять бюджетом? <br>
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
                        Практические решения по открытию бизнеса <br>
                        Простой и понятный материал, только практика, ни какой воды <br>
                        Научитесь ориентироваться в законах и налоговой системе <br>
                        Узнаете как избежать типичных ошибок, с которыми сталкиваются 90% начинающих предпринимателей <br>
                        Комплект документов, необходимый каждому бизнесу <br>
                        Научитесь практическим приемам профессиональных финансистов, кадровиков, необходимым каждому предпринимателю
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
                    <h2 class="header white-text darken-4" style="padding-top: 150px;">Если вы хотите минимизировать свои затраты и время занимаясь бизнесом - мы поможем вам в этом</h2>
                    <blockquote class="left-align white-text">

                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax"><img class="sharpen-img responsive-img" src="{{asset('img/hr/hr4.jpg')}}" alt=""></div>
</div>

<div class="container inner-block">
    <div class="section">
        <div class="row">
            <div id="participate" class="col s12 center">
                <h3><i class="mdi-content-send brown-text"></i></h3>
                <h2 class="header center black-text darken-4" style="margin-bottom: 50px;">Участие в тренинге - бесплатное</h2>
                <h3 class="header center black-text darken-4">Количество мест ограничено,</h3>
                <h4 class="header center black-text darken-4">чтобы принять участие заполните форму</h4>
            </div>
            <div id="form" class="valign-wrapper col s12">
                <form action="http://fba-training.ru/save" class="valign col s12" method="post">
                    <div class="row">
                        <div class="input-field col s12 valign">
                            <input name="name" v-model="formUser.name" class="input-field col s6" type="text">
                            <label for="name">Ваше имя</label>
                        </div>
                        <div class="col s6 red-text" v-show="!formValidation.name">
                            Укажите имя
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 valign">
                            <input id="email" v-model="formUser.email" name="email" class="input-field col s6" type="text">
                            <label for="email">Ваш email</label>
                        </div>
                        <div class="col s6 red-text" v-show="!formValidation.email">
                            Введите корректный email
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 valign">
                            <input id="phone" name="phone" class="input-field col s6" type="text">
                            <label for="phone">Ваш телефон</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 valign">
                            <button type="submit" v-show="formIsValid"
                                    class="white-text waves-effect red btn-flat">
                                Отправить
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal Structure -->
<div id="modal1" class="modal">
    <form id="pos" action="{{url('save')}}" method="post">
        {{ csrf_field() }}
        <div class="modal-content">
            <h5 class="header center light-blue-text darken-4">Отправить заявку</h5>

            <div class="input-field col s6">
                <input name="name" v-model="newUser.name" class="input-field col s6" type="text">
                <label for="name">Ваше имя</label>
            </div>
            <div class="col s6 red-text" v-show="!validation.name1">
                Укажите имя
            </div>
            <div class="input-field col s6">
                <input id="email" v-model="newUser.email1" name="email" class="input-field col s6" type="text">
                <label for="email">Ваш email</label>
            </div>
            <div class="col s6 red-text" v-show="!validation.email">
                Введите корректный email
            </div>
            <div class="input-field col s6">
                <input id="phone1" name="phone" class="input-field col s6" type="text">
                <label for="phone1">Ваш телефон</label>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" v-show="isValid"
                    class="modal-action modal-close white-text waves-effect waves-green btn-flat">
                Отправить
            </button>
        </div>
    </form>
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

<!--Scripts-->
<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<script src="{{asset('js/jquery.maskedinput.min.js')}}"></script>
<script src="{{asset('js/vue.js')}}"></script>
<script src="{{asset('js/validate.js')}}"></script>
<script>
    (function($){
        $(function(){

            $('.button-collapse').sideNav();
            $('.parallax').parallax();
            $('#modal1').modal();
        }); // end of document ready
    })(jQuery); // end of jQuery name space

    jQuery(function ($) {
       $('#phone').mask("(999)-999-99-99");
        $('#phone1').mask("(999)-999-99-99");
    });
</script>
</body>
</html>