<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


    <main>
        <div class="page-header">
            <div class="row">
                <div class="col-6">
                    <div class="page-header-bg" style="background-image: url(/layout/files/page-header-bg-typography-l.jpg)"></div>
                </div>
                <div class="col-6">
                    <div class="page-header-bg" style="background-image: url(/layout/files/page-header-bg-typography-r.jpg)"></div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="page-sidebar">
                            <ul class="page-menu">
                                <li><a href="#">Пункт плавающего меню</a></li>
                                <li><a href="#">Пункт плавающего меню в&nbsp;две строки</a></li>
                                <li><a href="#">Очень длинный Пункт плавающего меню, который может быть в&nbsp;три строки</a></li>
                                <li><a href="#">Пункт меню при наведении</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 offset-md-1">
                        <div class="page-content-wrapper">
                            <ul class="breadcrumb">
                                <li><a href="#">Adidas</a></li>
                                <li><a href="#">Бренды</a></li>
                                <li><span>Adidas</span></li>
                            </ul>
                            <div class="page-title">
                                <h1>Заголовок h1 страницы, который может быть длиной в&nbsp;несколько строк</h1>
                            </div>
                            <div class="page-content">
                                <p>В течение семи десятилетий мы смотрели на то, как одеваются люди на кортах, дорожках и игровых площадках. Мы неустанно работали, чтобы улучшить это. Это то, что волнует нас каждый день по-новому: менять и формировать будущее спорта. Потому что мы верим, что спорт меняет жизнь к лучшему.</p>
                                <p><a class="btn btn-1" href="#"><span>Заполнить анкету</span></a></p>
                                <h2>Заголовок h2</h2>
                                <p>В течение семи десятилетий мы смотрели на то, как одеваются люди на кортах, дорожках и игровых площадках. Мы неустанно работали, чтобы улучшить это. Это то, что волнует нас каждый день по-новому: менять и формировать будущее спорта. Потому что мы верим, что спорт меняет жизнь к лучшему.</p>
                                <h3>Заголовок h3</h3>
                                <p>В течение семи десятилетий мы смотрели на то, как одеваются люди на кортах, дорожках и игровых площадках. Мы неустанно работали, чтобы улучшить это. Это то, что волнует нас каждый день по-новому: менять и формировать будущее спорта. Потому что мы верим, что спорт меняет жизнь к лучшему.</p>
                                <h4>Заголовок h4</h4>
                                <p>В течение семи десятилетий мы смотрели на то, как одеваются люди на кортах, дорожках и игровых площадках. Мы неустанно работали, чтобы улучшить это. Это то, что волнует нас каждый день по-новому: менять и формировать будущее спорта. Потому что мы верим, что спорт меняет жизнь к лучшему.</p>
                                <h3>Текст со ссылками и с выделением ключевой информации</h3>
                                <p>Ади Дасслер, уроженец <a href="#">Херцогенаураха</a>, начал настоящую революцию в спорте в 1948 году, когда мир был разломан. Он начал с видения и превратил его в бизнес. Сегодня <a class="popup-link" href="#">миллионы спортсменов</a> и любителей моды по всему миру объединяются. Наша цель — удовлетворить и улучшить их потребности, создавая для них лучшие продукты.</p>
                                <div class="block-hl">
                                    <p>Ади Дасслер, уроженец Херцогенаураха, начал настоящую революцию в спорте в 1948 году, когда мир был разломан. Он начал с видения и превратил его в бизнес. Сегодня миллионы спортсменов и любителей моды по всему миру объединяются. Наша цель — удовлетворить и улучшить их потребности, создавая для них лучшие продукты.</p>
                                </div>
                                <p>Ади Дасслер, уроженец Херцогенаураха, начал настоящую революцию в спорте в 1948 году, когда мир был разломан. Он начал с видения и превратил его в бизнес. Сегодня миллионы спортсменов и любителей моды по всему миру объединяются. Наша цель — удовлетворить и улучшить их потребности, создавая для них лучшие продукты.</p>
                                <h3>Текст с фото внутри</h3>
                                <div class="article-pic article-pic-r">
                                    <div class="article-pic-pic"><img src="/layout/files/article-pic-1.jpg"></div>
                                    <div class="article-pic-caption">
                                        <p>меняем жизнь через спорт</p>
                                    </div>
                                </div>
                                <p>Наши сотрудники по всему миру — творцы, производители и продавцы. Но что более важно, все они являются создателями — это лучшая инвестиция в инновации, которую мы можем себе представить. Мы движимы эмоциями и функциональностью. Мы исследуем, выполняем и разрабатываем. И мы оказываем влияние, развивая предыдущее, какой бы ни была спортивная дисциплина, будь то передовое подразделение Performance или подразделение модного стиля. Наши сотрудники по всему миру — творцы, производители и продавцы. Но что более важно, все они являются создателями — это лучшая инвестиция в инновации, которую мы можем себе представить. Мы движимы эмоциями и функциональностью. Мы исследуем, выполняем и разрабатываем. И мы оказываем влияние, развивая предыдущее, какой бы ни была спортивная дисциплина, будь то передовое подразделение Performance или подразделение модного стиля.</p>
                                <div class="article-pic article-pic-l">
                                    <div class="article-pic-pic"><img src="/layout/files/article-pic-1.jpg"></div>
                                    <div class="article-pic-caption">
                                        <p>меняем жизнь через спорт</p>
                                    </div>
                                </div>
                                <p>Наши сотрудники по всему миру — творцы, производители и продавцы. Но что более важно, все они являются создателями — это лучшая инвестиция в инновации, которую мы можем себе представить. Мы движимы эмоциями и функциональностью. Мы исследуем, выполняем и разрабатываем. И мы оказываем влияние, развивая предыдущее, какой бы ни была спортивная дисциплина, будь то передовое подразделение Performance или подразделение модного стиля. Наши сотрудники по всему миру — творцы, производители и продавцы. Но что более важно, все они являются создателями — это лучшая инвестиция в инновации, которую мы можем себе представить. Мы движимы эмоциями и функциональностью. Мы исследуем, выполняем и разрабатываем. И мы оказываем влияние, развивая предыдущее, какой бы ни была спортивная дисциплина, будь то передовое подразделение Performance или подразделение модного стиля.</p>
                                <h3>Видео в тексте</h3>
                                <h3>Текст со списком</h3>
                                <ul>
                                    <li>В процессе адаптации (Fast Track) сотрудник при поддержке наставника понимает свою роль в магазине, подробно знакомится с условиями работы, основными обязанностями, проходит обязательные курсы на портале обучения.</li>
                                    <li>По истечению месяца проводится итоговая встреча с руководителем, где разбираются успехи сотрудника в и сложные моменты период адаптации.</li>
                                    <li>В процессе адаптации (Fast Track) сотрудник при поддержке наставника понимает свою роль в магазине, подробно знакомится с условиями работы, основными обязанностями, проходит обязательные курсы на портале обучения.</li>
                                </ul>
                                <h3>Текст с нумерованным списком</h3>
                                <ol>
                                    <li>
                                        <h4>Заголовок h4</h4>
                                        <ol>
                                            <li>В процессе адаптации (Fast Track) сотрудник при поддержке наставника понимает свою роль в магазине, подробно знакомится с условиями работы, основными обязанностями, проходит обязательные курсы на портале обучения.</li>
                                            <li>По истечению месяца проводится итоговая встреча с руководителем, где разбираются успехи сотрудника в и сложные моменты период адаптации.</li>
                                            <li>В процессе адаптации (Fast Track) сотрудник при поддержке наставника понимает свою роль в магазине, подробно знакомится с условиями работы, основными обязанностями, проходит обязательные курсы на портале обучения.</li>
                                        </ol>
                                    </li>
                                </ol>
                                <blockquote>
                                    <div class="blockquote-content">
                                        <p><strong>компания дала мне не&nbsp;только карьерные возможности,</strong><br> но&nbsp;и&nbsp;шанс реализовать себя в&nbsp;спорте и&nbsp;стать лучшей версией себя</p>
                                    </div>
                                </blockquote>
                                <h3>Список с картинками</h3>
                                <div class="features-list">
                                    <div class="feature-tmb">
                                        <div class="feature-tmb-pic"><img src="/layout/files/feature-tmb-1.jpg"></div>
                                        <div class="feature-tmb-descr">
                                            <h4>Меняем жизнь через спорт</h4>
                                            <p>Сегодня миллионы спортсменов и любителей моды по всему миру объединяются. Наша цель — удовлетворить и улучшить их потребности, создавая для них лучшие продукты.</p>
                                        </div>
                                    </div>
                                    <div class="feature-tmb">
                                        <div class="feature-tmb-pic"><img src="/layout/files/feature-tmb-2.jpg"></div>
                                        <div class="feature-tmb-descr">
                                            <h4>Меняем жизнь через спорт</h4>
                                            <p>Сегодня миллионы спортсменов и любителей моды по всему миру объединяются. Наша цель — удовлетворить и улучшить их потребности, создавая для них лучшие продукты.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-wide">
                                    <div class="blockquote-alt-wrapper">
                                        <div class="blockquote-alt-pics">
                                            <div class="row">
                                                <div class="col-6"><img src="/layout/files/blockquote-pic-1.jpg"></div>
                                                <div class="col-6"><img src="/layout/files/blockquote-pic-2.jpg"></div>
                                            </div>
                                        </div>
                                        <blockquote class="blockquote-alt">
                                            <div class="blockquote-alt-content">
                                                <div class="blockquote-alt-text">
                                                    <p>Ключевое для меня&nbsp;&mdash; то, что я&nbsp;работаю с&nbsp;людьми. Я&nbsp;вижу, как они растут и&nbsp;развиваются. С&nbsp;запуском новой стратегии все больше вдохновляет&nbsp;то, что я&nbsp;могу помочь другим людям изменить свою жизнь через спорт.</p>
                                                </div>
                                                <div class="blockquote-alt-author">
                                                    <p><strong>Дроздов Роман,</strong> территориальный операционный менеджер, г. Киев</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="block-wide">
                                    <div class="section section-reasons">
                                        <div class="section-content">
                                            <div class="h2">6&nbsp;причин работать с&nbsp;нами</div>
                                            <div class="reasons-slider-tabs">
                                                <div class="reasons-slider-tabs-item">
                                                    <div class="num">1</div>
                                                    <div class="ttl">Перемены</div>
                                                </div>
                                                <div class="reasons-slider-tabs-item">
                                                    <div class="num">2</div>
                                                    <div class="ttl">Карьера</div>
                                                </div>
                                                <div class="reasons-slider-tabs-item">
                                                    <div class="num">3</div>
                                                    <div class="ttl">Пространство</div>
                                                </div>
                                                <div class="reasons-slider-tabs-item">
                                                    <div class="num">4</div>
                                                    <div class="ttl">Многогранность</div>
                                                </div>
                                                <div class="reasons-slider-tabs-item">
                                                    <div class="num">5</div>
                                                    <div class="ttl">Забота</div>
                                                </div>
                                                <div class="reasons-slider-tabs-item">
                                                    <div class="num">6</div>
                                                    <div class="ttl">Окружение</div>
                                                </div>
                                            </div>
                                            <div class="reasons-slider-wrapper">
                                                <div class="reasons-slider">
                                                    <div class="slide">
                                                        <div class="reasons-item">
                                                            <div class="row">
                                                                <div class="col-12 col-md-7">
                                                                    <div class="reasons-item-pic">
                                                                        <div class="reasons-item-pic-back"><img src="/layout/files/reason-1-back.jpg"></div>
                                                                        <div class="reasons-item-pic-front"><img src="/layout/files/reason-1-front.jpg"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-md-5">
                                                                    <div class="reasons-item-descr">
                                                                        <div class="h3"><strong>Меняем жизнь</strong><br>через спорт</div>
                                                                        <p>Мы&nbsp;формируем будущее спорта, потому что верим, что спорт способен изменить жизнь к&nbsp;лучшему. Спорт дает силу, уверенность и&nbsp;позволяет найти друзей на&nbsp;всю жизнь. Он&nbsp;помогает бороться с&nbsp;болезнями и&nbsp;депрессией, делает нас сильнее.</p>
                                                                        <p>Мы&nbsp;видим будущее там, где спорт и&nbsp;фитнес помогают получать удовольствие от&nbsp;жизни, раскрывать свой потенциал и&nbsp;достигать поставленных целей. Если ты&nbsp;хочешь помочь людям изменить жизнь через спорт, то&nbsp;мы&nbsp;ждем тебя!</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slide">
                                                        <div class="reasons-item">
                                                            <div class="row">
                                                                <div class="col-12 col-md-7">
                                                                    <div class="reasons-item-pic">
                                                                        <div class="reasons-item-pic-back"><img src="/layout/files/reason-2-back.jpg"></div>
                                                                        <div class="reasons-item-pic-front"><img src="/layout/files/reason-2-front.jpg"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-md-5">
                                                                    <div class="reasons-item-descr">
                                                                        <div class="h3"><strong>Карьера</strong><br>через спорт</div>
                                                                        <p>Мы&nbsp;формируем будущее спорта, потому что верим, что спорт способен изменить жизнь к&nbsp;лучшему. Спорт дает силу, уверенность и&nbsp;позволяет найти друзей на&nbsp;всю жизнь. Он&nbsp;помогает бороться с&nbsp;болезнями и&nbsp;депрессией, делает нас сильнее.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slide">
                                                        <div class="reasons-item">
                                                            <div class="row">
                                                                <div class="col-12 col-md-7">
                                                                    <div class="reasons-item-pic">
                                                                        <div class="reasons-item-pic-back"><img src="/layout/files/reason-1-back.jpg"></div>
                                                                        <div class="reasons-item-pic-front"><img src="/layout/files/reason-1-front.jpg"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-md-5">
                                                                    <div class="reasons-item-descr">
                                                                        <div class="h3"><strong>Пространство</strong><br>через спорт</div>
                                                                        <p>Мы&nbsp;формируем будущее спорта, потому что верим, что спорт способен изменить жизнь к&nbsp;лучшему. Спорт дает силу, уверенность и&nbsp;позволяет найти друзей на&nbsp;всю жизнь. Он&nbsp;помогает бороться с&nbsp;болезнями и&nbsp;депрессией, делает нас сильнее.</p>
                                                                        <p>Мы&nbsp;видим будущее там, где спорт и&nbsp;фитнес помогают получать удовольствие от&nbsp;жизни, раскрывать свой потенциал и&nbsp;достигать поставленных целей. Если ты&nbsp;хочешь помочь людям изменить жизнь через спорт, то&nbsp;мы&nbsp;ждем тебя!</p>
                                                                        <p>Мы&nbsp;видим будущее там, где спорт и&nbsp;фитнес помогают получать удовольствие от&nbsp;жизни, раскрывать свой потенциал и&nbsp;достигать поставленных целей. Если ты&nbsp;хочешь помочь людям изменить жизнь через спорт, то&nbsp;мы&nbsp;ждем тебя!</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slide">
                                                        <div class="reasons-item">
                                                            <div class="row">
                                                                <div class="col-12 col-md-7">
                                                                    <div class="reasons-item-pic">
                                                                        <div class="reasons-item-pic-back"><img src="/layout/files/reason-2-back.jpg"></div>
                                                                        <div class="reasons-item-pic-front"><img src="/layout/files/reason-2-front.jpg"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-md-5">
                                                                    <div class="reasons-item-descr">
                                                                        <div class="h3"><strong>Многогранность</strong><br>через спорт</div>
                                                                        <p>Мы&nbsp;формируем будущее спорта, потому что верим, что спорт способен изменить жизнь к&nbsp;лучшему. Спорт дает силу, уверенность и&nbsp;позволяет найти друзей на&nbsp;всю жизнь. Он&nbsp;помогает бороться с&nbsp;болезнями и&nbsp;депрессией, делает нас сильнее.</p>
                                                                        <p>Мы&nbsp;видим будущее там, где спорт и&nbsp;фитнес помогают получать удовольствие от&nbsp;жизни, раскрывать свой потенциал и&nbsp;достигать поставленных целей. Если ты&nbsp;хочешь помочь людям изменить жизнь через спорт, то&nbsp;мы&nbsp;ждем тебя!</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slide">
                                                        <div class="reasons-item">
                                                            <div class="row">
                                                                <div class="col-12 col-md-7">
                                                                    <div class="reasons-item-pic">
                                                                        <div class="reasons-item-pic-back"><img src="/layout/files/reason-1-back.jpg"></div>
                                                                        <div class="reasons-item-pic-front"><img src="/layout/files/reason-1-front.jpg"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-md-5">
                                                                    <div class="reasons-item-descr">
                                                                        <div class="h3"><strong>Забота</strong><br>через спорт</div>
                                                                        <p>Мы&nbsp;формируем будущее спорта, потому что верим, что спорт способен изменить жизнь к&nbsp;лучшему. Спорт дает силу, уверенность и&nbsp;позволяет найти друзей на&nbsp;всю жизнь. Он&nbsp;помогает бороться с&nbsp;болезнями и&nbsp;депрессией, делает нас сильнее.</p>
                                                                        <p>Мы&nbsp;видим будущее там, где спорт и&nbsp;фитнес помогают получать удовольствие от&nbsp;жизни, раскрывать свой потенциал и&nbsp;достигать поставленных целей. Если ты&nbsp;хочешь помочь людям изменить жизнь через спорт, то&nbsp;мы&nbsp;ждем тебя!</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slide">
                                                        <div class="reasons-item">
                                                            <div class="row">
                                                                <div class="col-12 col-md-7">
                                                                    <div class="reasons-item-pic">
                                                                        <div class="reasons-item-pic-back"><img src="/layout/files/reason-2-back.jpg"></div>
                                                                        <div class="reasons-item-pic-front"><img src="/layout/files/reason-2-front.jpg"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-md-5">
                                                                    <div class="reasons-item-descr">
                                                                        <div class="h3"><strong>Окружение</strong><br>через спорт</div>
                                                                        <p>Мы&nbsp;формируем будущее спорта, потому что верим, что спорт способен изменить жизнь к&nbsp;лучшему. Спорт дает силу, уверенность и&nbsp;позволяет найти друзей на&nbsp;всю жизнь. Он&nbsp;помогает бороться с&nbsp;болезнями и&nbsp;депрессией, делает нас сильнее.</p>
                                                                        <p>Мы&nbsp;видим будущее там, где спорт и&nbsp;фитнес помогают получать удовольствие от&nbsp;жизни, раскрывать свой потенциал и&nbsp;достигать поставленных целей. Если ты&nbsp;хочешь помочь людям изменить жизнь через спорт, то&nbsp;мы&nbsp;ждем тебя!</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="reasons-slider-nav">
                                                    <div class="reasons-slider-arrows">
                                                        <div class="reasons-slider-prev">
                                                            <div class="arrow-tip"><img class="svg-inline" src="/layout/images/arrow-tip-prev.svg"></div>
                                                        </div>
                                                        <div class="reasons-slider-next">
                                                            <div class="arrow-tip"><img class="svg-inline" src="/layout/images/arrow-tip-next.svg"></div>
                                                        </div>
                                                    </div>
                                                    <div class="reasons-slider-nav-count"><span class="cur"></span>/<span class="total"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-grey">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-12 col-md-8 offset-md-4">
                                <div class="h2">Элементы интерфейса</div>
                                <div class="h3">Формы</div>
                                <div class="block-white">
                                    <form>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="input_1">Текстовое поле</label>
                                                    <input type="text" name="input_1" id="input_1" placeholder=" " required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input_2">Текстовое поле с плейсхолдером</label>
                                                    <input type="text" name="input_2" id="input_2" placeholder="Иванов Иван Иванович" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input_3">Телефон</label>
                                                    <input class="input-phone" type="text" name="input_3" id="input_3" placeholder="+7 (___) ___-__-__" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input_4">Неактивное текстовое поле</label>
                                                    <input type="text" name="input_4" id="input_4" placeholder="Иванов Иван Иванович" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="select_1">Выпадающий список</label>
                                                    <select name="select_1" id="select_1" required>
                                                        <option value="1">Пункт выпадающего списка 1</option>
                                                        <option value="2">Пункт выпадающего списка 2</option>
                                                        <option value="3">Пункт выпадающего списка, занимающий две строки</option>
                                                        <option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>
                                                        <option value="5">Пункт выпадающего списка 1</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="select_2">Выпадающий список с названием</label>
                                                    <select name="select_2" id="select_2" title="Выберите значение" required>
                                                        <option value="1">Пункт выпадающего списка 1</option>
                                                        <option value="2">Пункт выпадающего списка 2</option>
                                                        <option value="3">Пункт выпадающего списка, занимающий две строки</option>
                                                        <option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>
                                                        <option value="5">Пункт выпадающего списка 1</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="select_3">Неактивный выпадающий список</label>
                                                    <select name="select_3" id="select_3" title="Выберите значение" disabled>
                                                        <option value="1">Пункт выпадающего списка 1</option>
                                                        <option value="2">Пункт выпадающего списка 2</option>
                                                        <option value="3">Пункт выпадающего списка, занимающий две строки</option>
                                                        <option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>
                                                        <option value="5">Пункт выпадающего списка 1</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-footer">
                                            <button class="btn btn-2" type="submit">Отправить</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="h3">Формы на сером фоне</div>
                                <div class="form-alt">
                                    <form>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="input_2_1">Текстовое поле</label>
                                                    <input type="text" name="input_2_1" id="input_2_1" placeholder=" " required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input_2_2">Текстовое поле с плейсхолдером</label>
                                                    <input type="text" name="input_2_2" id="input_2_2" placeholder="Иванов Иван Иванович" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input_2_3">Телефон</label>
                                                    <input class="input-phone" type="text" name="input_2_3" id="input_2_3" placeholder="+7 (___) ___-__-__" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input_2_4">Неактивное текстовое поле</label>
                                                    <input type="text" name="input_2_4" id="input_2_4" placeholder="Иванов Иван Иванович" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="select_2_1">Выпадающий список</label>
                                                    <select name="select_2_1" id="select_2_1" required>
                                                        <option value="1">Пункт выпадающего списка 1</option>
                                                        <option value="2">Пункт выпадающего списка 2</option>
                                                        <option value="3">Пункт выпадающего списка, занимающий две строки</option>
                                                        <option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>
                                                        <option value="5">Пункт выпадающего списка 1</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="select_2_2">Выпадающий список с названием</label>
                                                    <select name="select_2_2" id="select_2_2" title="Выберите значение" required>
                                                        <option value="1">Пункт выпадающего списка 1</option>
                                                        <option value="2">Пункт выпадающего списка 2</option>
                                                        <option value="3">Пункт выпадающего списка, занимающий две строки</option>
                                                        <option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>
                                                        <option value="5">Пункт выпадающего списка 1</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="select_2_3">Неактивный выпадающий список</label>
                                                    <select name="select_2_3" id="select_2_3" title="Выберите значение" disabled>
                                                        <option value="1">Пункт выпадающего списка 1</option>
                                                        <option value="2">Пункт выпадающего списка 2</option>
                                                        <option value="3">Пункт выпадающего списка, занимающий две строки</option>
                                                        <option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>
                                                        <option value="5">Пункт выпадающего списка 1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label>Радиокнопки</label>
                                                    <div class="form-radios">
                                                        <div class="form-radio">
                                                            <input type="radio" name="radio_1" id="radio_1_1" checked>
                                                            <label for="radio_1_1">Радиокнопка</label>
                                                        </div>
                                                        <div class="form-radio">
                                                            <input type="radio" name="radio_1" id="radio_1_2">
                                                            <label for="radio_1_2">Радиокнопка с невероятно длинным текстом, в котором очень подробно все описано</label>
                                                        </div>
                                                        <div class="form-radio">
                                                            <input type="radio" name="radio_1" id="radio_1_3" disabled>
                                                            <label for="radio_1_3">Радиокнопка неактивная</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Чекбоксы</label>
                                                    <div class="form-checkboxes">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox" name="checkbox_1_1" id="checkbox_1_1" checked>
                                                            <label for="checkbox_1_1">Чекбокс</label>
                                                        </div>
                                                        <div class="form-checkbox">
                                                            <input type="checkbox" name="checkbox_1_2" id="checkbox_1_2" required>
                                                            <label for="checkbox_1_2">Обязательный чекбокс</label>
                                                        </div>
                                                        <div class="form-checkbox">
                                                            <input type="checkbox" name="checkbox_1_3" id="checkbox_1_3" disabled>
                                                            <label for="checkbox_1_3">Неактивный чекбокс</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Сортировка</label>
                                                    <div class="form-item-sort">
                                                        <div class="select-sort-name">Сортировка:</div>
                                                        <select class="select-sort" name="controls_sort" id="controls_sort">
                                                            <option value="1">По умолчанию</option>
                                                            <option value="2">Сначала новые</option>
                                                            <option value="3">Сначала старые</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-footer">
                                            <button class="btn btn-2" type="submit">Отправить</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>




<?/*
<?$ElementID = $APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"",
	Array(
		"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
		"DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
		"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
		"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"FIELD_CODE" => $arParams["DETAIL_FIELD_CODE"],
		"PROPERTY_CODE" => $arParams["DETAIL_PROPERTY_CODE"],
		"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"META_KEYWORDS" => $arParams["META_KEYWORDS"],
		"META_DESCRIPTION" => $arParams["META_DESCRIPTION"],
		"BROWSER_TITLE" => $arParams["BROWSER_TITLE"],
		"SET_CANONICAL_URL" => $arParams["DETAIL_SET_CANONICAL_URL"],
		"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
		"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
		"SET_TITLE" => $arParams["SET_TITLE"],
		"MESSAGE_404" => $arParams["MESSAGE_404"],
		"SET_STATUS_404" => $arParams["SET_STATUS_404"],
		"SHOW_404" => $arParams["SHOW_404"],
		"FILE_404" => $arParams["FILE_404"],
		"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
		"ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
		"ACTIVE_DATE_FORMAT" => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
		"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
		"DISPLAY_TOP_PAGER" => $arParams["DETAIL_DISPLAY_TOP_PAGER"],
		"DISPLAY_BOTTOM_PAGER" => $arParams["DETAIL_DISPLAY_BOTTOM_PAGER"],
		"PAGER_TITLE" => $arParams["DETAIL_PAGER_TITLE"],
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => $arParams["DETAIL_PAGER_TEMPLATE"],
		"PAGER_SHOW_ALL" => $arParams["DETAIL_PAGER_SHOW_ALL"],
		"CHECK_DATES" => $arParams["CHECK_DATES"],
		"ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
		"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
		"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
		"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
		"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
		"USE_SHARE" => $arParams["USE_SHARE"],
		"SHARE_HIDE" => $arParams["SHARE_HIDE"],
		"SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
		"SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
		"SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
		"SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
		"ADD_ELEMENT_CHAIN" => (isset($arParams["ADD_ELEMENT_CHAIN"]) ? $arParams["ADD_ELEMENT_CHAIN"] : ''),
		'STRICT_SECTION_CHECK' => (isset($arParams['STRICT_SECTION_CHECK']) ? $arParams['STRICT_SECTION_CHECK'] : ''),
	),
	$component
);?>
<p><a href="<?=$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"]?>"><?=GetMessage("T_NEWS_DETAIL_BACK")?></a></p>
<?if($arParams["USE_RATING"]=="Y" && $ElementID):?>
<?$APPLICATION->IncludeComponent(
	"bitrix:iblock.vote",
	"",
	Array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"ELEMENT_ID" => $ElementID,
		"MAX_VOTE" => $arParams["MAX_VOTE"],
		"VOTE_NAMES" => $arParams["VOTE_NAMES"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
	),
	$component
);?>
<?endif?>
<?if($arParams["USE_CATEGORIES"]=="Y" && $ElementID):
	global $arCategoryFilter;
	$obCache = new CPHPCache;
	$strCacheID = $componentPath.LANG.$arParams["IBLOCK_ID"].$ElementID.$arParams["CATEGORY_CODE"];
	if(($tzOffset = CTimeZone::GetOffset()) <> 0)
		$strCacheID .= "_".$tzOffset;
	if($arParams["CACHE_TYPE"] == "N" || $arParams["CACHE_TYPE"] == "A" && COption::GetOptionString("main", "component_cache_on", "Y") == "N")
		$CACHE_TIME = 0;
	else
		$CACHE_TIME = $arParams["CACHE_TIME"];
	if($obCache->StartDataCache($CACHE_TIME, $strCacheID, $componentPath))
	{
		$rsProperties = CIBlockElement::GetProperty($arParams["IBLOCK_ID"], $ElementID, "sort", "asc", array("ACTIVE"=>"Y","CODE"=>$arParams["CATEGORY_CODE"]));
		$arCategoryFilter = array();
		while($arProperty = $rsProperties->Fetch())
		{
			if(is_array($arProperty["VALUE"]) && count($arProperty["VALUE"])>0)
			{
				foreach($arProperty["VALUE"] as $value)
					$arCategoryFilter[$value]=true;
			}
			elseif(!is_array($arProperty["VALUE"]) && strlen($arProperty["VALUE"])>0)
				$arCategoryFilter[$arProperty["VALUE"]]=true;
		}
		$obCache->EndDataCache($arCategoryFilter);
	}
	else
	{
		$arCategoryFilter = $obCache->GetVars();
	}
	if(count($arCategoryFilter)>0):
		$arCategoryFilter = array(
			"PROPERTY_".$arParams["CATEGORY_CODE"] => array_keys($arCategoryFilter),
			"!"."ID" => $ElementID,
		);
		?>
		<hr /><h3><?=GetMessage("CATEGORIES")?></h3>
		<?foreach($arParams["CATEGORY_IBLOCK"] as $iblock_id):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				$arParams["CATEGORY_THEME_".$iblock_id],
				Array(
					"IBLOCK_ID" => $iblock_id,
					"NEWS_COUNT" => $arParams["CATEGORY_ITEMS_COUNT"],
					"SET_TITLE" => "N",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"CACHE_TYPE" => $arParams["CACHE_TYPE"],
					"CACHE_TIME" => $arParams["CACHE_TIME"],
					"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
					"FILTER_NAME" => "arCategoryFilter",
					"CACHE_FILTER" => "Y",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "N",
				),
				$component
			);?>
		<?endforeach?>
	<?endif?>
<?endif?>
<?if($arParams["USE_REVIEW"]=="Y" && IsModuleInstalled("forum") && $ElementID):?>
<hr />
<?$APPLICATION->IncludeComponent(
	"bitrix:forum.topic.reviews",
	"",
	Array(
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"MESSAGES_PER_PAGE" => $arParams["MESSAGES_PER_PAGE"],
		"USE_CAPTCHA" => $arParams["USE_CAPTCHA"],
		"PATH_TO_SMILE" => $arParams["PATH_TO_SMILE"],
		"FORUM_ID" => $arParams["FORUM_ID"],
		"URL_TEMPLATES_READ" => $arParams["URL_TEMPLATES_READ"],
		"SHOW_LINK_TO_FORUM" => $arParams["SHOW_LINK_TO_FORUM"],
		"DATE_TIME_FORMAT" => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
		"ELEMENT_ID" => $ElementID,
		"AJAX_POST" => $arParams["REVIEW_AJAX_POST"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"URL_TEMPLATES_DETAIL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
	),
	$component
);?>
<?endif?>