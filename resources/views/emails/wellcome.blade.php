<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Письмо регистрация</title>
    <style>
        /* Shrink Wrap Layout Pattern CSS */
        @media only screen and (max-width: 599px) {
            td[class="hero"] img {
                width: 100%;
                height: auto !important;
            }
            td[class="pattern"] td{
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <table cellpadding="0" cellspacing="0" align="center" style="max-width: 620px;">
        <tr>
            <td class="pattern" width="600">
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="hero">
                            <img src="{{asset('img/fba_base.jpg')}}" alt="" style="display: block; border: 0;" />
                        </td>
                    </tr>
                    <tr>
                        <td align="left" style="font-family: arial,sans-serif; color: #333;">
                            <h1>Здравствуйте, {{$application->name}}</h1>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" style="font-family: arial,sans-serif; font-size: 14px; line-height: 20px !important; color: #666; padding-bottom: 20px;">
                            Поздравляем с успешной регистрацией на семинар "Дорожная карта открытия бизнеса". Если у Вас есть дополнительные вопросы или уточнения, позвоните нам по номеру телефона: 8 (812) 627-6754. Наши менеджеры Вас проконсультируют.
                            или напишите нам: sale@fba-training.ru.
                        </td>
                    </tr>
                    <tr>
                        <td align="left">
                            <a href="#"><img src="http://placehold.it/200x50/333&text=CTA+»" alt="CTA" style="display: block; border: 0;" /></a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>