<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Антибюджет или бюджет на коленке</title>
    <meta title="Антибюджет или бюджет на коленке">
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

<div class="parallax-container main darken-div">
    <div class="section no-pad-bot">
        <div class="container">
            <br>
            <br>
            <h6 class="header center white-text">Дорожная карта открытия бизнеса</h6>
            <div class="row center">
                <h1 class="header white-text col s12">Анти Бюджетирование <br> или <br> Бюджет на коленках</h1>
            </div>
            <br>
            <br>
            <br>
            <div class="row center">
                <a href="#modal1" class="btn-large waves-effect red accent-4">Записаться на курс!</a>
            </div>
        </div>
    </div>
    <div class="parallax"><img class="sharpen-img responsive-img" src="{{asset('img/marketing-sem-seo3.jpg')}}" ></div>
</div>
<!--first block   -->
<div class="row">
    <div class="container">
        <div class="col s12">
            <h3><i class="mdi-content-send brown-text"></i></h3>
            <h2 class="header center black-text darken-4">Ловушки бюджетирования</h2>
            <h4 class="header center black-text darken-4">Бюджетирование, которое добросовестно работало на финансовых директоров многие годы, сегодня беспомощно</h4>
            <div class="section">
                <blockquote class="left-align">
                    <p style="font-size: 1.1rem; padding: 25px 0 0 0;">  управление цифрами в отчетах, а не бизнесом как таковым</p>


                    <p style="font-size: 1.1rem; padding: 25px 0 0 0;">торг и переговоры в отношении цифр, а не целей как таковых и способа их достижения</p>

                    <p style="font-size: 1.1rem; padding: 25px 0 0 0;">приоритет разделить ресурсы, а не достигнуть результатов
                    </p>
                    <p style="font-size: 1.1rem; padding: 25px 0 0 0;">отсутствие внимания к нематериальным активам <br> (креативность, силу бренда, навыки персонала – заложить в бюджет невозможно)
                    </p>
                    <p style="font-size: 1.1rem; padding: 25px 0 0 0;">клиент и клиентоориентированность не имеют большего по отношению к целевым ориентирам значения
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
                    <h2 class="header white-text darken-4" style="padding-bottom: 50px;">Преимущества жизни без бюджетирования</h2>
                    <blockquote class="left-align white-text">
                        <p style="font-size: 1.1rem; padding: 10px 0 0 0;">скорость и гибкость к изменениям рыночной среды </p>
                        <p style="font-size: 1.1rem; padding: 10px 0 0 0;">согласовать цели подразделений, выступив в качестве инструмента коммуникации внутри компании </p>
                        <p style="font-size: 1.1rem; padding: 10px 0 0 0;">сделать достижения измеримыми </p>
                        <p style="font-size: 1.1rem; padding: 10px 0 0 0;">обеспечивает прогресс относительно уже достигнутого </p>
                        <p style="font-size: 1.1rem; padding: 10px 0 0 0;">позволяет построить прозрачную систему стимулирования </p>
                        <p style="font-size: 1.1rem; padding: 10px 0 0 0;">выразить реализацию стратегии в виде финансового документа, пронизывающего всю компанию </p>

                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax"><img class="sharpen-img responsive-img" src="{{asset('img/why-us4.jpg')}}" alt=""></div>
</div>

<!--second block        -->
<div class="container inner-block">
    <div class="row">
        <h2 id="programm" class="header center black-text darken-4">Содержание курса</h2>
        <br>
        <br>
        <div class="col l4 s12">
            <div class="card" style="min-height: 600px;">
                <div class="card-content flow-text">
                    <div class="card-image">
                        <img src="{{asset('img/budget1.jpg')}}" class="responsive-img" style="height: 200px;" alt="">
                    </div>

                    <p class="card-text" style="padding: 30px 0 0 0;">- Определение бюджетирования – сегодня</p>
                    <p class="card-text" style="padding: 30px 0 0 0;">- Рассмотрение плюсов и минусов бюджетного управления</p>

                </div>
            </div>
        </div>
<div class="col l4 s12">
    <div class="card" style="min-height: 600px;">
        <div class="card-content flow-text">
            <div class="card-image">
                <img src="{{asset('img/budget2.jpg')}}" class="responsive-img" style="height: 200px;" alt="">
            </div>

            <p class="card-text" style="padding: 30px 0 0 0;">- Без бюджетирования или Вне бюджетное управление в компании </p>
            <p class="card-text" style="padding: 20px 0 20px 0;">- Рассмотрение плюсов и минусов без бюджетного управления
            </p>
        </div>
    </div>
</div>
<div class="col l4 s12">
    <div class="card" style="min-height: 600px;">
        <div class="card-content flow-text">
            <div class="card-image">
                <img src="{{asset('img/smart.jpg')}}" class="responsive-img" style="height: 200px;" alt="">
            </div>

            <p class="card-text" style="padding: 30px 0 0 0;">- SMART принципы моделирования </p>
            <p class="card-text" style="padding: 30px 0 0 0;">- «Воронка шагов» и «Веер возможностей» </p>
            <p class="card-text" style="padding: 30px 0 0 0;">- Система управления Balance Scorecard
            </p>
        </div>
    </div>
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
                            <img class="activator img-responsive" src="{{asset('img/photo/sergey1.jpg')}}" style="padding: 15px;" alt="">
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
                            <img class="activator img-responsive" src="{{asset('img/photo/natalia.jpg')}}" style="padding: 15px;" alt="">
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
                            <img class="activator img-responsive" src="{{asset('img/photo/lilia.jpg')}}" style="padding: 15px;" alt="">
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
            <div class="col s12 center">
                <h3><i class="mdi-content-send brown-text"></i></h3>

                <p class="left-align light flow-text center">Жизнь без бюджета возможна, в том случае если менеджеры на всех уровнях понимают, как работает предприятие его стратеги, цели и задачи. Когда каждый сотрудник осознает, что каждый рубль потраченных средств должен быть не просто расходами, в рамках утвержденных бюджетов, а  и приносящий дополнительную прибыль затратами. <br>

                    Так же необходимо наличие принятой и налаженной эффективной системы оперативного учета в компании. Это позволит  держать руку на пульсе компании, отслеживая ключевые показатели и в случае появления потенциальных рисков и угроз заблаговременно предпринять соответствующие меры.
                    <br>
                    И в итоге, такая система должна быть скоординирована общими компонентами: целями, ценностями и менеджерами проектов. Из чего следует, что полученная финансовая информация обеспечивать бизнес полной информацией о текущем положении дел и возможном их развитии. При этом в компании создана система скоординированных показателей эффективности для менеджеров и их проектов и повышать уровень финансово-экономической образованности персонала.
                    <br>
                    Посетив этот семинар, вы сможете самостоятельно расставить цели задачи и  определить какой метод бюджетирования или планирования вам подходит. <br>
                    Так же участники получат шаблоны регламентных документов и прототип системы бюджетирования и управленческого учета  в Excel, которые смогут легко адаптировать к своей деятельности.
                </p>
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
                    <img src="{{asset('img/icons/001-social-3.png')}}" alt="" style="margin-right: 10px;">
                </a>
                <a href="https://www.facebook.com/Finbfa/" target="_blank">
                    <img src="{{asset('img/icons/004-social.png')}}" alt="" style="margin-left: 10px;">
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