<?//if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//?>
<?$ElementID = $APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"successDetail",
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

<!---->
<!--<div class="popup-header">-->
<!--    <div class="popup-header-pic"><img src="files/story-popup-header-1.jpg"/></div>-->
<!--    <div class="popup-header-title">-->
<!--        <div class="popup-header-title-l">-->
<!--            <div class="h2">Назарова надежда</div>-->
<!--            <div class="popup-header-post">-->
<!--                <p>Территориальный операционный менеджер, Киев</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="popup-header-title-r">-->
<!--            <div class="popup-soclinks"><a class="popup-soclink" href="#"><img class="svg-inline" src="images/ico-vk-big.svg"/></a></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="popup-body">-->
<!--    <div class="story-info">-->
<!--        <div class="story-info-item">-->
<!--            <div class="story-info-item-ttl">-->
<!--                <p>Образование</p>-->
<!--            </div>-->
<!--            <div class="story-info-item-descr">-->
<!--                <p>Рэу Имени Г.&nbsp;В.&nbsp;Плеханова</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="story-info-item">-->
<!--            <div class="story-info-item-ttl">-->
<!--                <p>Возраст, с которого работает</p>-->
<!--            </div>-->
<!--            <div class="story-info-item-descr">-->
<!--                <p class="big">19</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <blockquote class="blockquote-story">-->
<!--        <div class="blockquote-content">-->
<!--            <p><strong>компания дала мне не&nbsp;только карьерные возможности,</strong><br/> но&nbsp;и&nbsp;шанс реализовать себя в&nbsp;спорте и&nbsp;стать лучшей версией себя</p>-->
<!--        </div>-->
<!--    </blockquote>-->
<!--    <div class="h3">Как я попала в компанию</div>-->
<!--    <p>adidas Group — это моё первое место работы. После собеседования меня направили в один из ключевых магазинов Москвы – Reebok Манеж. С первых дней работы я старалась оказывать лучший сервис в магазине, а также брала на себя дополнительные обязанности. Мои успехи и старания были замечены, и через 2 месяца я стала Капитаном. Спустя год я стала Директором, а еще через 1.5 года получила назначение на Локального Операционного Менеджера, одновременно сдав диплом в институте на отлично! Тогда я поняла, что любую ситуацию можно разрешить, главное – желание.</p>-->
<!--    <p>Сейчас у меня в подчинении более десятка магазинов, в том числе уникальный проект: магазины Reebok внутри фитнес-клубов World class. Я открыла их с нуля, и аналогов этому проекту нет в других странах.</p>-->
<!--    <div class="block-popup-wide">-->
<!--        <div class="popup-pics">-->
<!--            <div class="row">-->
<!--                <div class="col-6"><img src="files/story-popup-pic-1.jpg"/></div>-->
<!--                <div class="col-6"><img src="files/story-popup-pic-2.jpg"/></div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="h3">Почему я люблю свою работу?</div>-->
<!--    <p>Компания дала мне не только карьерные возможности, но и шанс реализовать себя в спорте и стать лучшей версией себя. Сейчас я усердно занимаюсь Crossfit, на который меня вдохновил бренд Reebok. Мы с командой моих магазинов активно тренируемся вместе и ставим перед собой цели. Спорт помогает нам сплотиться и вдохновлять нашего покупателя на спорт личным примером.</p>-->
<!--</div>-->
<!--<div class="popup-footer"><a class="next-story-link" href="#">-->
<!--        <div class="next-story-link-arrow"><img class="svg-inline" src="images/next-arrow.svg"/></div>-->
<!--        <div class="next-story-link-pic" style="background-image:url(files/next-story-tmb-1.jpg)"></div>-->
<!--        <div class="next-story-link-descr">-->
<!--            <div class="next-story-link-descr-top">-->
<!--                <div class="next-story-link-ttl">Следующая история</div>-->
<!--            </div>-->
<!--            <div class="next-story-link-descr-bottom">-->
<!--                <div class="next-story-link-name">-->
<!--                    <p>Дроздов роман</p>-->
<!--                </div>-->
<!--                <div class="next-story-link-post">-->
<!--                    <p>Территориальный операционный менеджер</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div></a></div>-->