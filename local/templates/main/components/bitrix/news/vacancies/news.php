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
                <div class="page-header-bg" style="background-image: url(/layout/files/page-header-bg-vacancies-l.jpg)"></div>
            </div>
            <div class="col-6">
                <div class="page-header-bg" style="background-image: url(/layout/files/page-header-bg-vacancies-r.jpg)"></div>
            </div>
        </div>
    </div>
    <div class="page-body page-body-grey">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="page-sidebar">
                        <div class="filter">
                            <div class="filter-search-form form-alt">
<!--                                --><?//pr($arResult["URL_TEMPLATES"])?>
								<?if($arParams["USE_SEARCH"]=="Y"):?>
									<?=GetMessage("SEARCH_LABEL")?><?$APPLICATION->IncludeComponent(
										"bitrix:search.form",
										"flat",
										Array(
											"PAGE" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["search"]
										),
										$component
									);?>
                                    <br />
								<?endif?>
                            </div>
                            <div class="filter-form form-alt" id="filter_vacancies" data-filter="<?=$str = getFiltersSTR($_REQUEST["arrFilter_pf"])?>">
								<?if($arParams["USE_FILTER"]=="Y"):?>
									<?$APPLICATION->IncludeComponent(
										"bitrix:catalog.filter",
										"",
										Array(
											"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
											"IBLOCK_ID" => $arParams["IBLOCK_ID"],
											"FILTER_NAME" => $arParams["FILTER_NAME"],
											"FIELD_CODE" => $arParams["FILTER_FIELD_CODE"],
											"PROPERTY_CODE" => $arParams["FILTER_PROPERTY_CODE"],
											"CACHE_TYPE" => $arParams["CACHE_TYPE"],
											"CACHE_TIME" => $arParams["CACHE_TIME"],
											"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
											"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
										),
										$component
									);
									?>
                                    <br />
								<?endif?>
<!--                                <form>-->
<!--                                    <div class="form-group">-->
<!--                                        <label for="vac_city">Город</label>-->
<!--                                        <select class="select-alt" name="vac_city" id="vac_city">-->
<!--                                            <option value="1">Все города</option>-->
<!--                                            <option value="2">Москва</option>-->
<!--                                            <option value="3">Санкт-Петербург</option>-->
<!--                                            <option value="4">Екатеринбург</option>-->
<!--                                            <option value="5">Казань</option>-->
<!--                                            <option value="6">Новосибирск</option>-->
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label>Направление</label>-->
<!--                                        <div class="form-radios">-->
<!--                                            <div class="form-radio">-->
<!--                                                <input type="radio" name="vac_direction" id="vac_direction_1" value="1" checked>-->
<!--                                                <label for="vac_direction_1">Все направления</label>-->
<!--                                            </div>-->
<!--                                            <div class="form-radio">-->
<!--                                                <input type="radio" name="vac_direction" id="vac_direction_2" value="2">-->
<!--                                                <label for="vac_direction_2">Фирменные магазины</label>-->
<!--                                            </div>-->
<!--                                            <div class="form-radio">-->
<!--                                                <input type="radio" name="vac_direction" id="vac_direction_3" value="3">-->
<!--                                                <label for="vac_direction_3">Офис</label>-->
<!--                                            </div>-->
<!--                                            <div class="form-radio">-->
<!--                                                <input type="radio" name="vac_direction" id="vac_direction_4" value="4">-->
<!--                                                <label for="vac_direction_4">Центр дистрибуции</label>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label>Тип занаятости</label>-->
<!--                                        <div class="form-radios">-->
<!--                                            <div class="form-radio">-->
<!--                                                <input type="radio" name="vac_type" id="vac_type_1" value="1" checked>-->
<!--                                                <label for="vac_type_1">Все типы занятости</label>-->
<!--                                            </div>-->
<!--                                            <div class="form-radio">-->
<!--                                                <input type="radio" name="vac_type" id="vac_type_2" value="2">-->
<!--                                                <label for="vac_type_2">Полная занятость</label>-->
<!--                                            </div>-->
<!--                                            <div class="form-radio">-->
<!--                                                <input type="radio" name="vac_type" id="vac_type_3" value="3">-->
<!--                                                <label for="vac_type_3">Частичная  занятость</label>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label>Бренд</label>-->
<!--                                        <div class="form-radios">-->
<!--                                            <div class="form-radio">-->
<!--                                                <input type="radio" name="vac_brand" id="vac_brand_1" value="1" checked>-->
<!--                                                <label for="vac_brand_1">Все бренды</label>-->
<!--                                            </div>-->
<!--                                            <div class="form-radio">-->
<!--                                                <input type="radio" name="vac_brand" id="vac_brand_2" value="2">-->
<!--                                                <label for="vac_brand_2">Adidas</label>-->
<!--                                            </div>-->
<!--                                            <div class="form-radio">-->
<!--                                                <input type="radio" name="vac_brand" id="vac_brand_3" value="3">-->
<!--                                                <label for="vac_brand_3">Reebok</label>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </form>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 offset-md-1">
                    <div class="page-content-wrapper page-content-wrapper-grey">
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
                        <div class="page-title page-title-alt page-title-grey">
                            <h1><?$APPLICATION->ShowTitle(false);?></h1>
                        </div>
                        <div class="vac-wrapper">
                            <div class="vac-l" data-perpage="<?=$_REQUEST["per_page"]?>" data-sort-num="<?=$_REQUEST["sort_num"]?>">
                                <div class="list-controls form-alt">
                                    <div class="list-controls-l">
                                        <div class="form-group">
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
                                    <div class="list-controls-r">
                                        <div class="show-num">
                                            <div class="show-num-ttl">Показать по</div>
                                            <div class="show-num-buttons">
                                                <div class="show-num-buttons-item">
                                                    <button class="active">12</button>
                                                </div>
                                                <div class="show-num-buttons-item">
                                                    <button>24</button>
                                                </div>
                                                <div class="show-num-buttons-item">
                                                    <button>36</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <?$sort = getSortVacancies($_REQUEST["sort_num"]);?>
                                    <?pr($_REQUEST)?>
<!--                                    --><?//pr($arParams["PAGER_PARAMS_NAME"])?>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:news.list",
                                        "vacanciesList",
                                        Array(
                                            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                                            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                                            "NEWS_COUNT" => ($_REQUEST["per_page"])?$_REQUEST["per_page"]:$arParams["NEWS_COUNT"],
                                            "SORT_BY1" => ($sort["sort_by"])?$sort["sort_by"]:$arParams["SORT_BY1"],
                                            "SORT_ORDER1" => ($sort["sort_order"])?$sort["sort_order"]:$arParams["SORT_ORDER1"],
                                            "SORT_BY2" => $arParams["SORT_BY2"],
                                            "SORT_ORDER2" => $arParams["SORT_ORDER2"],
                                            "FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
                                            "PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
                                            "DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
                                            "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
                                            "IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
                                            "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
                                            "SET_TITLE" => $arParams["SET_TITLE"],
                                            "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
                                            "MESSAGE_404" => $arParams["MESSAGE_404"],
                                            "SET_STATUS_404" => $arParams["SET_STATUS_404"],
                                            "SHOW_404" => $arParams["SHOW_404"],
                                            "FILE_404" => $arParams["FILE_404"],
                                            "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
                                            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                                            "CACHE_TIME" => $arParams["CACHE_TIME"],
                                            "CACHE_FILTER" => $arParams["CACHE_FILTER"],
                                            "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                                            "DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
                                            "DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
                                            "PAGER_TITLE" => $arParams["PAGER_TITLE"],
                                            "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
                                            "PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
                                            "PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
                                            "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
                                            "PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
                                            "PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
                                            "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
                                            "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
                                            "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
                                            "DISPLAY_NAME" => "Y",
                                            "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
                                            "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
                                            "PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
                                            "ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
                                            "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
                                            "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
                                            "FILTER_NAME" => $arParams["FILTER_NAME"],
                                            "HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
                                            "CHECK_DATES" => $arParams["CHECK_DATES"],
                                        ),
                                        $component
                                    );?>
                                    

                            </div>
                            <div class="vac-r">
                                <div class="vac-num">
                                    <div class="vac-num-inner">963</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>












<?//if($arParams["USE_RSS"]=="Y"):?>
<!--	--><?//
//	if(method_exists($APPLICATION, 'addheadstring'))
//		$APPLICATION->AddHeadString('<link rel="alternate" type="application/rss+xml" title="'.$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["rss"].'" href="'.$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["rss"].'" />');
//	?>
<!--	<a href="--><?//=$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["rss"]?><!--" title="rss" target="_self"><img alt="RSS" src="--><?//=$templateFolder?><!--/images/gif-light/feed-icon-16x16.gif" border="0" align="right" /></a>-->
<?//endif?>
<!---->
<?//if($arParams["USE_SEARCH"]=="Y"):?>
<?//=GetMessage("SEARCH_LABEL")?><!----><?//$APPLICATION->IncludeComponent(
//	"bitrix:search.form",
//	"flat",
//	Array(
//		"PAGE" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["search"]
//	),
//	$component
//);?>
<!--<br />-->
<?//endif?>
<?//if($arParams["USE_FILTER"]=="Y"):?>
<?//$APPLICATION->IncludeComponent(
//	"bitrix:catalog.filter",
//	"",
//	Array(
//		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
//		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
//		"FILTER_NAME" => $arParams["FILTER_NAME"],
//		"FIELD_CODE" => $arParams["FILTER_FIELD_CODE"],
//		"PROPERTY_CODE" => $arParams["FILTER_PROPERTY_CODE"],
//		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
//		"CACHE_TIME" => $arParams["CACHE_TIME"],
//		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
//		"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
//	),
//	$component
//);
//?>
<!--<br />-->
<?//endif?>
