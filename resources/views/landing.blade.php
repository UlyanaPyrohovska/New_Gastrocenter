@extends('welcome')
@section('content')
    <link href="{{ asset ('css/landing.css') }}" rel="stylesheet"/>
<div class="bigphoto">
    <img class="doctors" src="images/DSC_0391%201.jpg">
    <div class="mask">
        <span class="lable1">КИЇВСЬКИЙ</span>
        <span class="lable2">ГАСТРОЦЕНТР</span>
        <div class="search_wrap">
            <form method="get" action="{{ route('search_form') }}" class="wrap_wrap">
                <input type="text" placeholder="Пошук..." name="search_str" autocomplete="off" class="search">
                <button class="icon-loupe" ><img src="images\search.svg" style="height: 15px;width: 15px; padding: 0px"></button>
            </form>
        </div>
    </div>
</div>
<div class="bigdiv">
    <div class="about">
        <img class="str1" src="images/strelka.png">
        <div class="wrap_about">
            <div class="h1">НАПРЯМКИ ДІЯЛЬНОСТІ</div>
            <div class="show-image">
                <img class="swow" src="images/swow.jpg">
                <div class="text">
                    <span class="endoscopy">Ендоскопія</span>
                    <span class="description">Технічне оснащення нашого відділення проктології КОКЛ
                            дозволяє забезпечити високий рівень виявлення доброякісних
                            поліпів кишечника та розширити спектр діагностичних і
                            оперативних маніпуляцій з приводу пухлин і поліпів кишечника
                            (хромоколоноскопіі, мукозектоміі, поліпектомія, туморектоміі
                            та ін.). Крім того, лікарі проктологи нашого відділення
                            виконують і інші операції по усуненню поліпів кишечника і
                            ворсинчастих пухлин, в т.ч. поліпектомію за допомогою
                            ректоскопа...</span>
                    <div class="more">
                        <span>ДЕТАЛЬНІШЕ</span>
                    </div>
                </div>
            </div>
            <div class="wrap_bub">
                <div class="bubbles">
                    <img src="images/Ellipse%201.svg">
                    <img src="images/Ellipse%202.svg">
                    <img src="images/Ellipse%202.svg">
                    <img src="images/Ellipse%202.svg">
                    <img src="images/Ellipse%202.svg">
                </div>
            </div>
        </div>
        <img class="str2" src="images/strelka2.png">
    </div>
    <div class="pryyom">
        <span class="h2">КОНСУЛЬТАЦІЯ ГАСТРОЕНТЕРОЛОГА  В КИЄВІ</span>
        <div class="pryyom_text">
            <div class="a1">
                <a>Гастроцентр Київської обласної клінічної лікарні надає послуги діагностики та лікування захворювань кишечника.</a>
            </div>
            <div>
                <a>Наші лікарі готові:</a>
            </div>
            <div class="a2">
                <ul class="list">
                    <li><a>Надати діагностику захворювань товстої кишки і всього шлунково-кишкового тракту</a></li>
                    <li><a>Провести терміновий або плановий огляд</a></li>
                    <li><a>Видати рекомендації з лікування і профілактики наявного захворювання.</a></li>
                </ul>
            </div>
            <div class="a3">
                <a>Вартість послуг  можна переглянути в розділі ціни.</a>
            </div>
            <div class="a4">
                <a>Зволікання з візитом до лікаря має серйозні наслідки для здоров'я — як фізичного, так і психічного.</a>
            </div>
            <div class="a5">
                <a>Рішення проблеми — це консультація лікаря, який розуміє ваші проблеми і потреби, сучасна діагностика, профілактика та ефективне лікування.</a>
            </div>
        </div>
        <button class="zapys_div"><span>ЗАПИС НА ПРИЙОМ</span></button>
    </div>
    <div class="vidguky">
        <hr class="line">
        <div class="vid_wrap">
            <span class="header3">ВІДГУКИ ПРО КЛІНІКУ</span>
            <div class="vid">
                <img class="s1" src="images/strelka.png">
                <div class="v1"> <span class="da1">Перебуваючи у  відділенні відмічаю чуйне ставлення як лікарів так і всього персоналу. Висококваліфіковані, добре знаючі свою справу, лікарі підібрані в колектив ідеально. Особливу подяку анестезіологам та лікарям задорожньому С.П., та завідуючому Пироговському В.Ю.</span>
                    <div class="div_a1"><span>З повагою Лавнюк С.І.</span></div></div>
                <div class="v2"><span class="da2">Щиро дякую всьому колективу гастроентерологічного віддлення за професійне ставлення, увагу теплоту, дбайливе відношення. Здоров’я всім. </span>
                    <div class="div_a2"><span>З повагою Лазаренко В.П. 8 палата</span></div></div>
                <div class="v3"><span class="da3">Щиро дякую всьому персоналу гастроентерологічного відділення хірургічного корпусу №2 за високий професіоналізм, оперативність, відповідальність, за увагу, чистоту та порядок. Бажаю всім здоров’я, процвітання та достойної оплати праці. Так тримати!</span>
                    <div class="div_a3"><span>З повагою Лавнюк С.І.</span></div></div>
                <img class="s2" src="images/strelka2.png">
            </div>
        </div>
        <hr class="line2">
    </div>
    <div class="question_answer">
        <span class="quest_head">ЗАПИТАННЯ - ВІДПОВІДЬ</span>
        <div class="blocks">
            <div class="b1">
                <div class="wrap_b1">
                    <span class="quest_head1">Питання №34 Обстеження кишківника</span>
                    <span class="aaa">Валерій, Чернівці 2018-01-18</span>
                    <hr class="l_b1">
                    <span class="b1_question">Мета: Відеоколоноскопія Перешкоди: невдачна спроба
                        колоноскопії у івано-франківську зважаючи на фізіологічні
                        особливості сигмовидної кишки, огляд припинено зважаючи на
                        ризик перфорації. Потрібно: спеціаліст який зможе провести
                        відеоколоноскопію з врахуванням вказаних особливостей.</span>
                    <div class="wrap_answer">
                        <hr class="line_answer">
                        <div class="answer_text">
                            <span class="answer_t1">КОНСУЛЬТАНТ: ПИРОГОВСЬКИЙ ВОЛОДИМИР ЮРІЙОВИЧ</span>
                            <span class="answer_info">Головний проктолог Київської області.</span>
                            <div class="answer_container">
                                <img class="doctor_avatar"src="images/volodymyr.jpg">
                                <span class="ans">Добрий день, Валерій,
                                    Ми проводимо відеоколоноскопії різної складності на сучасному обладнанні. Запис на експрес обстеження за тел (044)3833822
                                    З повагою, Володимир Пироговський</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="b2">
                <div class="wrap_b1">
                    <span class="quest_head1">Питання №33 Капсульна ендоскопія</span>
                    <span class="aaa">Марина, Брест 2013-09-29</span>
                    <hr class="l_b1">
                    <span class="b1_question">Здравствуйте!Я сама из Беларуси могу ли я у Вас сделать
                        капсульную эндоскопию? Проблемы с кишечником уже 5 лет,
                        точный диагноз не ставят...постоянно жидкий стул, делали
                        колоноскопию...ничего не показала только в сигмовидной
                        воссполительный процесс, но у меня он не проходит уже столько
                        лет! а со временем всё хуже и хуже!</span>
                    <div class="wrap_answer2">
                        <hr class="line_answer2">
                        <div class="answer_text">
                            <span class="answer_t1">КОНСУЛЬТАНТ: ПЛЕМ’ЯНИК СЕРГІЙ ВІТАЛІЄВИЧ</span>
                            <span class="answer_info">Завідуючий відділенням ендоскопії Київської обласної клінічної лікарні</span>
                            <div class="answer_container">
                                <img class="doctor_avatar"src="images/pleminnyk.jpg">
                                <span class="ans">Добрый день, Марина. Да, мы обследуем пациентов из
                                    других стран. На обследование, постановку точного
                                    диагноза и назначения лечения нужно 2-3 дня. Запись
                                    на обследование по тел. (044)3616002, (044)3833822. С
                                    собой желательно взять свежий анализ кала на
                                    дисбактериоз с посевом на антибиотикочувствительность.
                                    За 2 дня до приезда пациент находится на специальной
                                    диете "прозрачные жидкости" (смотрите на сайте
                                    подготовку к капсульной эндоскопии) и уже в условиях
                                    клиники накануне обследования проходит подготовку
                                    препаратом Фортранс.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="view_more">Показати ще</span>
        <button class="ask_quest"><span>Поставити запитання спеціалісту</span></button>
    </div>
    <div class="news">
        <img class="news_str1" src="images/strelka.png">
        <div class="news_block">
            <span class="news_head">ОСТАННІ НОВИНИ</span>
            <div class="news_blocks">
                <div class="block_news1" background="images/5f9ee703c46a8.jpg">
                    <div class="news1_about">
                        <span>Конференція за міжнародною участю "Запальні та функціональні захворювання кишечника"</span>
                    </div>
                </div>
                <div class="block_news2">
                    <div class="news2_about">
                        <span>UEG Week 2019</span>
                    </div>
                </div>
                <div class="block_news3">
                    <div class="news3_about">
                        <span>Capsule Endoscopy Global Summit 2019</span>
                    </div>
                </div>
            </div>
        </div>
        <img class="news_str2" src="images/strelka2.png">
    </div>
</div>
@endsection
