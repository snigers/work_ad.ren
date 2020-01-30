<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<main>
    <div class="page-header">
        <div class="row">
            <div class="col-6">
				<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["LEFT_IMG_HEADER"]["VALUE"], Array("width" => 800, "height" => 420), BX_RESIZE_IMAGE_EXACT);?>
                <div class="page-header-bg" style="background-image: url(<?=($img["src"]) ? $img["src"] : "/layout/files/page-header-bg-typography-l.jpg"?>)"></div>
            </div>
            <div class="col-6">
				<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["RIGHT_IMG_HEADER"]["VALUE"], Array("width" => 800, "height" => 420), BX_RESIZE_IMAGE_EXACT);?>
                <div class="page-header-bg" style="background-image: url(<?=($img["src"]) ? $img["src"] : "/layout/files/page-header-bg-typography-r.jpg"?>)"></div>
            </div>
        </div>
    </div>
    
    <?
//    pr($arResult);
    ?>
    <div class="page-body">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="page-sidebar">
                        <ul class="page-menu">
                            <?if ($arResult["PROPERTIES"]["FIRST_MENU_ITEM"]["VALUE"]):?>
                                <li><a href="why"><?=$arResult["PROPERTIES"]["FIRST_MENU_ITEM"]["VALUE"]?></a></li>
                            <?endif;?>
							<?if ($arResult["PROPERTIES"]["TWO_MENU_ITEM"]["VALUE"]):?>
                                <li><a href="vacancies"><?=$arResult["PROPERTIES"]["TWO_MENU_ITEM"]["VALUE"]?></a></li>
							<?endif;?>
							<?if ($arResult["PROPERTIES"]["THREE_MENU_ITEM"]["VALUE"]):?>
                                <li><a href="excursion"><?=$arResult["PROPERTIES"]["THREE_MENU_ITEM"]["VALUE"]?></a></li>
							<?endif;?>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-8 offset-md-1">
                    <div class="page-content-wrapper">
						<?$APPLICATION->IncludeComponent(
							"bitrix:breadcrumb",
							"jobBreadcrumb",
							Array(
								"START_FROM" => "0",
								"PATH" => "",
								"SITE_ID" => "-"
							),
							false
						);?>
<!--                        <ul class="breadcrumb">-->
<!--                            <li><a href="#">Adidas</a></li>-->
<!--                            <li><a href="#">Бренды</a></li>-->
<!--                            <li><span>Adidas</span></li>-->
<!--                        </ul>-->
                        <div class="page-title">
                            <h1><?=$arResult["NAME"]?></h1>
                        </div>

                        <div class="page-content">
                            <?=$arResult["PROPERTIES"]["SUBTITLE"]["~VALUE"]["TEXT"]?>
                            <div class="article-button-wrapper"><a class="btn btn-1" href="<?=($arResult["PROPERTIES"]["LINK_BTN_ANKET"]["VALUE"]) ? $arResult["PROPERTIES"]["LINK_BTN_ANKET"]["VALUE"] : "/profile_office/"?>">
                                    <span><?=($arResult["PROPERTIES"]["BTN_ANKET"]["VALUE"]) ? $arResult["PROPERTIES"]["BTN_ANKET"]["VALUE"] : "Заполнить анкету"?></span></a></div>
                            <a name="why"></a>
                            <div class="h2"><?=($arResult["PROPERTIES"]["TITLE_WHY_ADIDAS"]["VALUE"]) ? $arResult["PROPERTIES"]["TITLE_WHY_ADIDAS"]["VALUE"] : "Почему Adidas"?></div>
                            <div class="why-list">
                                <div class="row">
                                    <?foreach($arResult["PROPERTIES"]["ELEMENT_WHY_ADIDAS"]["VALUE"] as $arItem):?>
                                        <div class="col-12 col-md-6">
                                            <div class="why-tmb">
	
												<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 800, "height" => 420), BX_RESIZE_IMAGE_EXACT);?>
                                                <div class="why-tmb-pic" style="background-image:url(<?=$img["src"]?>)"></div>
                                                <div class="why-tmb-descr">
                                                    <div class="why-tmb-num"><?=$arItem["PROPERTY_INDICATOR_VALUE"]?></div>
                                                    <div class="why-tmb-text">
                                                        <p><?=$arItem["NAME"]?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?endforeach;?>
                                </div>
                            </div>
                            
                            <?if ($arResult["PROPERTIES"]["TITLE_VIDEO"]["VALUE"] && $arResult["PROPERTIES"]["LINK_VIDEO"]["VALUE"]):?>
                                <div class="h3"><?=$arResult["PROPERTIES"]["TITLE_VIDEO"]["VALUE"]?></div>
                                <?=$arResult["PROPERTIES"]["LINK_VIDEO"]["VALUE"]?>
                            <?endif;?>
                            
                            <div class="block-wide">
                                <div class="blockquote-alt-wrapper">
                                    <div class="blockquote-alt-pics">
                                        <div class="row">
                                            <?foreach($arResult["PROPERTIES"]["IMG_QUOTE"]["VALUE"] as $arImg):?>
                                                <div class="col-6"><img src="<?=CFile::GetPath($arImg)?>"></div>
                                            <?endforeach;?>
                                        </div>
                                    </div>
                                    <blockquote class="blockquote-alt">
                                        <div class="blockquote-alt-content">
                                            <div class="blockquote-alt-text">
                                                <?=$arResult["PROPERTIES"]["QUOTE"]["~VALUE"]["TEXT"]?>
                                            </div>
                                            <div class="blockquote-alt-author">
                                                <?if ($arResult["PROPERTIES"]["QUOTE_AUTHOR"]["VALUE"] && $arResult["PROPERTIES"]["POSITION"]["VALUE"] && $arResult["PROPERTIES"]["CITY"]["VALUE"]):?>
                                                    <p><strong><?=$arResult["PROPERTIES"]["QUOTE_AUTHOR"]["VALUE"]?>,</strong> <?=$arResult["PROPERTIES"]["POSITION"]["VALUE"]?>, г. <?=$arResult["PROPERTIES"]["CITY"]["VALUE"]?></p>
                                                <?endif;?>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
	
							<?if ($arResult["PROPERTIES"]["SUBTITLE_QUOTE"]["VALUE"]):?>
                                <div class="h4"><?=$arResult["PROPERTIES"]["SUBTITLE_QUOTE"]["VALUE"]?></div>
							<?endif;?>
       
							<?=$arResult["PROPERTIES"]["DESCRIPTION_QUOTE"]["~VALUE"]["TEXT"]?>


                        
                        
                        </div>
<!--                        <div class="page-content">-->
<!--							--><?//=$arResult["PROPERTIES"]["CONTENT"]["~VALUE"]["TEXT"]?>
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>

        <?if ($arResult["PROPERTIES"]["OPEN_LAST_VAC"]["VALUE"] == "Y"):?>
            <div class="section-group section-group-grey">
                <div class="section section-vacancies">
                    <div class="container">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-12 col-md-8 offset-md-4">
                                    <a name="vacancies"></a>
                                    <div class="h2"><?=($arResult["PROPERTIES"]["TITLE_LAST_VAC"]["VALUE"]) ? $arResult["PROPERTIES"]["TITLE_LAST_VAC"]["VALUE"] : "Последние вакансии"?></div>
                                    <div class="vac-list vac-list-alt">
                                        <div class="row">
                                            <?$APPLICATION->IncludeComponent(
                                                "bitrix:news.list",
                                                "jobLastVac",
                                                Array(
                                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                                    "ADD_SECTIONS_CHAIN" => "N",
                                                    "AJAX_MODE" => "N",
                                                    "AJAX_OPTION_ADDITIONAL" => "",
                                                    "AJAX_OPTION_HISTORY" => "N",
                                                    "AJAX_OPTION_JUMP" => "N",
                                                    "AJAX_OPTION_STYLE" => "N",
                                                    "CACHE_FILTER" => "N",
                                                    "CACHE_GROUPS" => "N",
                                                    "CACHE_TIME" => "36000000",
                                                    "CACHE_TYPE" => "A",
                                                    "CHECK_DATES" => "Y",
                                                    "DETAIL_URL" => "",
                                                    "DISPLAY_BOTTOM_PAGER" => "N",
                                                    "DISPLAY_DATE" => "Y",
                                                    "DISPLAY_NAME" => "Y",
                                                    "DISPLAY_PICTURE" => "Y",
                                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                                    "DISPLAY_TOP_PAGER" => "N",
                                                    "FIELD_CODE" => array("",""),
                                                    "FILTER_NAME" => "",
                                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                                    "IBLOCK_ID" => "27",
                                                    "IBLOCK_TYPE" => "office",
                                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                                    "INCLUDE_SUBSECTIONS" => "N",
                                                    "MESSAGE_404" => "",
                                                    "NEWS_COUNT" => "10000",
                                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                                    "PAGER_DESC_NUMBERING" => "N",
                                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                                    "PAGER_SHOW_ALL" => "N",
                                                    "PAGER_SHOW_ALWAYS" => "N",
                                                    "PAGER_TEMPLATE" => ".default",
                                                    "PAGER_TITLE" => "Новости",
                                                    "PARENT_SECTION" => "",
                                                    "PARENT_SECTION_CODE" => "",
                                                    "PREVIEW_TRUNCATE_LEN" => "",
                                                    "PROPERTY_CODE" => array("INDICATOR",""),
                                                    "SET_BROWSER_TITLE" => "N",
                                                    "SET_LAST_MODIFIED" => "N",
                                                    "SET_META_DESCRIPTION" => "N",
                                                    "SET_META_KEYWORDS" => "N",
                                                    "SET_STATUS_404" => "N",
                                                    "SET_TITLE" => "N",
                                                    "SHOW_404" => "N",
                                                    "SORT_BY1" => "ID",
                                                    "SORT_BY2" => "SORT",
                                                    "SORT_ORDER1" => "ASC",
                                                    "SORT_ORDER2" => "ASC",
                                                    "STRICT_SECTION_CHECK" => "N"
                                                ),
                                                false,
                                                array('HIDE_ICONS' => "Y")
                                            );?>
                                        </div>
                                    </div>
                                    <div class="all-link-wrapper"><a class="btn btn-2" href="/vacancies/">Все вакансии</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?endif;?>
<!--        <div class="section section-grey">-->
<!--            <div class="container">-->
<!--                <div class="section-content">-->
<!--                    <div class="row">-->
<!--                        <div class="col-12 col-md-8 offset-md-4">-->
<!--                            <div class="h2">Элементы интерфейса</div>-->
<!--                            <div class="h3">Формы</div>-->
<!--                            <div class="block-white">-->
<!--                                <form>-->
<!--                                    <div class="row">-->
<!--                                        <div class="col-12 col-md-6">-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="input_1">Текстовое поле</label>-->
<!--                                                <input type="text" name="input_1" id="input_1" placeholder=" " required>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="input_2">Текстовое поле с плейсхолдером</label>-->
<!--                                                <input type="text" name="input_2" id="input_2" placeholder="Иванов Иван Иванович" required>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="input_3">Телефон</label>-->
<!--                                                <input class="input-phone" type="text" name="input_3" id="input_3" placeholder="+7 (___) ___-__-__" required>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="input_4">Неактивное текстовое поле</label>-->
<!--                                                <input type="text" name="input_4" id="input_4" placeholder="Иванов Иван Иванович" disabled>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="select_1">Выпадающий список</label>-->
<!--                                                <select name="select_1" id="select_1" required>-->
<!--                                                    <option value="1">Пункт выпадающего списка 1</option>-->
<!--                                                    <option value="2">Пункт выпадающего списка 2</option>-->
<!--                                                    <option value="3">Пункт выпадающего списка, занимающий две строки</option>-->
<!--                                                    <option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>-->
<!--                                                    <option value="5">Пункт выпадающего списка 1</option>-->
<!--                                                </select>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="select_2">Выпадающий список с названием</label>-->
<!--                                                <select name="select_2" id="select_2" title="Выберите значение" required>-->
<!--                                                    <option value="1">Пункт выпадающего списка 1</option>-->
<!--                                                    <option value="2">Пункт выпадающего списка 2</option>-->
<!--                                                    <option value="3">Пункт выпадающего списка, занимающий две строки</option>-->
<!--                                                    <option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>-->
<!--                                                    <option value="5">Пункт выпадающего списка 1</option>-->
<!--                                                </select>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="select_3">Неактивный выпадающий список</label>-->
<!--                                                <select name="select_3" id="select_3" title="Выберите значение" disabled>-->
<!--                                                    <option value="1">Пункт выпадающего списка 1</option>-->
<!--                                                    <option value="2">Пункт выпадающего списка 2</option>-->
<!--                                                    <option value="3">Пункт выпадающего списка, занимающий две строки</option>-->
<!--                                                    <option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>-->
<!--                                                    <option value="5">Пункт выпадающего списка 1</option>-->
<!--                                                </select>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-footer">-->
<!--                                        <button class="btn btn-2" type="submit">Отправить</button>-->
<!--                                    </div>-->
<!--                                </form>-->
<!--                            </div>-->
<!--                            <div class="h3">Формы на сером фоне</div>-->
<!--                            <div class="form-alt">-->
<!--                                <form>-->
<!--                                    <div class="row">-->
<!--                                        <div class="col-12 col-md-6">-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="input_2_1">Текстовое поле</label>-->
<!--                                                <input type="text" name="input_2_1" id="input_2_1" placeholder=" " required>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="input_2_2">Текстовое поле с плейсхолдером</label>-->
<!--                                                <input type="text" name="input_2_2" id="input_2_2" placeholder="Иванов Иван Иванович" required>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="input_2_3">Телефон</label>-->
<!--                                                <input class="input-phone" type="text" name="input_2_3" id="input_2_3" placeholder="+7 (___) ___-__-__" required>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="input_2_4">Неактивное текстовое поле</label>-->
<!--                                                <input type="text" name="input_2_4" id="input_2_4" placeholder="Иванов Иван Иванович" disabled>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="select_2_1">Выпадающий список</label>-->
<!--                                                <select name="select_2_1" id="select_2_1" required>-->
<!--                                                    <option value="1">Пункт выпадающего списка 1</option>-->
<!--                                                    <option value="2">Пункт выпадающего списка 2</option>-->
<!--                                                    <option value="3">Пункт выпадающего списка, занимающий две строки</option>-->
<!--                                                    <option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>-->
<!--                                                    <option value="5">Пункт выпадающего списка 1</option>-->
<!--                                                </select>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="select_2_2">Выпадающий список с названием</label>-->
<!--                                                <select name="select_2_2" id="select_2_2" title="Выберите значение" required>-->
<!--                                                    <option value="1">Пункт выпадающего списка 1</option>-->
<!--                                                    <option value="2">Пункт выпадающего списка 2</option>-->
<!--                                                    <option value="3">Пункт выпадающего списка, занимающий две строки</option>-->
<!--                                                    <option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>-->
<!--                                                    <option value="5">Пункт выпадающего списка 1</option>-->
<!--                                                </select>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="select_2_3">Неактивный выпадающий список</label>-->
<!--                                                <select name="select_2_3" id="select_2_3" title="Выберите значение" disabled>-->
<!--                                                    <option value="1">Пункт выпадающего списка 1</option>-->
<!--                                                    <option value="2">Пункт выпадающего списка 2</option>-->
<!--                                                    <option value="3">Пункт выпадающего списка, занимающий две строки</option>-->
<!--                                                    <option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>-->
<!--                                                    <option value="5">Пункт выпадающего списка 1</option>-->
<!--                                                </select>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="col-12 col-md-6">-->
<!--                                            <div class="form-group">-->
<!--                                                <label>Радиокнопки</label>-->
<!--                                                <div class="form-radios">-->
<!--                                                    <div class="form-radio">-->
<!--                                                        <input type="radio" name="radio_1" id="radio_1_1" checked>-->
<!--                                                        <label for="radio_1_1">Радиокнопка</label>-->
<!--                                                    </div>-->
<!--                                                    <div class="form-radio">-->
<!--                                                        <input type="radio" name="radio_1" id="radio_1_2">-->
<!--                                                        <label for="radio_1_2">Радиокнопка с невероятно длинным текстом, в котором очень подробно все описано</label>-->
<!--                                                    </div>-->
<!--                                                    <div class="form-radio">-->
<!--                                                        <input type="radio" name="radio_1" id="radio_1_3" disabled>-->
<!--                                                        <label for="radio_1_3">Радиокнопка неактивная</label>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label>Чекбоксы</label>-->
<!--                                                <div class="form-checkboxes">-->
<!--                                                    <div class="form-checkbox">-->
<!--                                                        <input type="checkbox" name="checkbox_1_1" id="checkbox_1_1" checked>-->
<!--                                                        <label for="checkbox_1_1">Чекбокс</label>-->
<!--                                                    </div>-->
<!--                                                    <div class="form-checkbox">-->
<!--                                                        <input type="checkbox" name="checkbox_1_2" id="checkbox_1_2" required>-->
<!--                                                        <label for="checkbox_1_2">Обязательный чекбокс</label>-->
<!--                                                    </div>-->
<!--                                                    <div class="form-checkbox">-->
<!--                                                        <input type="checkbox" name="checkbox_1_3" id="checkbox_1_3" disabled>-->
<!--                                                        <label for="checkbox_1_3">Неактивный чекбокс</label>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label>Сортировка</label>-->
<!--                                                <div class="form-item-sort">-->
<!--                                                    <div class="select-sort-name">Сортировка:</div>-->
<!--                                                    <select class="select-sort" name="controls_sort" id="controls_sort">-->
<!--                                                        <option value="1">По умолчанию</option>-->
<!--                                                        <option value="2">Сначала новые</option>-->
<!--                                                        <option value="3">Сначала старые</option>-->
<!--                                                    </select>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-footer">-->
<!--                                        <button class="btn btn-2" type="submit">Отправить</button>-->
<!--                                    </div>-->
<!--                                </form>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</main>
