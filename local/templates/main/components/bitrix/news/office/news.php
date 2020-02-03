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
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.detail",
            "jobBackground",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_ELEMENT_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "BROWSER_TITLE" => "-",
                "CACHE_GROUPS" => "N",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "COMPONENT_TEMPLATE" => "mainBackground",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "ELEMENT_CODE" => "",
                "ELEMENT_ID" => "34",
                "FIELD_CODE" => array(0=>"",1=>"",),
                "IBLOCK_ID" => "8",
                "IBLOCK_TYPE" => "main",
                "IBLOCK_URL" => "",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "MESSAGE_404" => "",
                "META_DESCRIPTION" => "-",
                "META_KEYWORDS" => "-",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Страница",
				"PROPERTY_CODE" => array(0=>"LEFT_IMG_HEADER",1=>"RIGHT_IMG_HEADER",),
                "SET_BROWSER_TITLE" => "N",
                "SET_CANONICAL_URL" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "STRICT_SECTION_CHECK" => "N",
                "USE_PERMISSIONS" => "N",
                "USE_SHARE" => "N"
            ),
            false,
            array('HIDE_ICONS' => "Y")
        );?>
    </div>
    <div class="page-body">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="page-sidebar">
                        
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "jobMenu",
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
                                "COMPONENT_TEMPLATE" => "jobMenu",
                                "DETAIL_URL" => "",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                "DISPLAY_TOP_PAGER" => "N",
                                "FIELD_CODE" => array(0=>"",1=>"",),
                                "FILTER_NAME" => "",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "IBLOCK_ID" => "11",
                                "IBLOCK_TYPE" => "office",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                "INCLUDE_SUBSECTIONS" => "N",
                                "MESSAGE_404" => "",
                                "NEWS_COUNT" => "100",
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
                                "PROPERTY_CODE" => array(0=>"TITLE_FOR_MENU",1=>"LINK_FOR_MENU",),
                                "SET_BROWSER_TITLE" => "N",
                                "SET_LAST_MODIFIED" => "N",
                                "SET_META_DESCRIPTION" => "N",
                                "SET_META_KEYWORDS" => "N",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "N",
                                "SHOW_404" => "N",
                                "SORT_BY1" => "SORT",
                                "SORT_BY2" => "SORT",
                                "SORT_ORDER1" => "ASC",
                                "SORT_ORDER2" => "ASC",
                                "STRICT_SECTION_CHECK" => "N"
                            )
                        );?>
                        
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
                        
                        
                        <div class="page-title">
                            <div class="h1"><?$APPLICATION->ShowTitle(false);?></div>
                        </div>
                        <div class="page-content">
							<?$APPLICATION->IncludeComponent(
								"bitrix:news.detail",
								"jobSubtitleAndBtnProfile",
								Array(
									"ACTIVE_DATE_FORMAT" => "d.m.Y",
									"ADD_ELEMENT_CHAIN" => "N",
									"ADD_SECTIONS_CHAIN" => "N",
									"AJAX_MODE" => "N",
									"AJAX_OPTION_ADDITIONAL" => "",
									"AJAX_OPTION_HISTORY" => "N",
									"AJAX_OPTION_JUMP" => "N",
									"AJAX_OPTION_STYLE" => "N",
									"BROWSER_TITLE" => "-",
									"CACHE_GROUPS" => "N",
									"CACHE_TIME" => "36000000",
									"CACHE_TYPE" => "A",
									"CHECK_DATES" => "Y",
									"COMPONENT_TEMPLATE" => "mainBackground",
									"DETAIL_URL" => "",
									"DISPLAY_BOTTOM_PAGER" => "N",
									"DISPLAY_DATE" => "Y",
									"DISPLAY_NAME" => "Y",
									"DISPLAY_PICTURE" => "Y",
									"DISPLAY_PREVIEW_TEXT" => "Y",
									"DISPLAY_TOP_PAGER" => "N",
									"ELEMENT_CODE" => "",
									"ELEMENT_ID" => "35",
									"FIELD_CODE" => array(0=>"",1=>"",),
									"IBLOCK_ID" => "9",
									"IBLOCK_TYPE" => "main",
									"IBLOCK_URL" => "",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"MESSAGE_404" => "",
									"META_DESCRIPTION" => "-",
									"META_KEYWORDS" => "-",
									"PAGER_BASE_LINK_ENABLE" => "N",
									"PAGER_SHOW_ALL" => "N",
									"PAGER_TEMPLATE" => ".default",
									"PAGER_TITLE" => "Страница",
									"PROPERTY_CODE" => array(0=>"",1=>"LEFT_IMG",2=>"RIGHT_IMG",),
									"SET_BROWSER_TITLE" => "N",
									"SET_CANONICAL_URL" => "N",
									"SET_LAST_MODIFIED" => "N",
									"SET_META_DESCRIPTION" => "N",
									"SET_META_KEYWORDS" => "N",
									"SET_STATUS_404" => "N",
									"SET_TITLE" => "N",
									"SHOW_404" => "N",
									"STRICT_SECTION_CHECK" => "N",
									"USE_PERMISSIONS" => "N",
									"USE_SHARE" => "N"
								)
							);?>
                            
                            <a name="why"></a>
                            
							<?$APPLICATION->IncludeComponent(
								"bitrix:news.detail",
								"jobTitleH2",
								Array(
									"ACTIVE_DATE_FORMAT" => "d.m.Y",
									"ADD_ELEMENT_CHAIN" => "N",
									"ADD_SECTIONS_CHAIN" => "N",
									"AJAX_MODE" => "N",
									"AJAX_OPTION_ADDITIONAL" => "",
									"AJAX_OPTION_HISTORY" => "N",
									"AJAX_OPTION_JUMP" => "N",
									"AJAX_OPTION_STYLE" => "N",
									"BROWSER_TITLE" => "-",
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
									"ELEMENT_CODE" => "",
									"ELEMENT_ID" => "40",
									"FIELD_CODE" => array("",""),
									"IBLOCK_ID" => "11",
									"IBLOCK_TYPE" => "office",
									"IBLOCK_URL" => "",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"MESSAGE_404" => "",
									"META_DESCRIPTION" => "-",
									"META_KEYWORDS" => "-",
									"PAGER_BASE_LINK_ENABLE" => "N",
									"PAGER_SHOW_ALL" => "N",
									"PAGER_TEMPLATE" => ".default",
									"PAGER_TITLE" => "Страница",
									"PROPERTY_CODE" => array("",""),
									"SET_BROWSER_TITLE" => "N",
									"SET_CANONICAL_URL" => "N",
									"SET_LAST_MODIFIED" => "N",
									"SET_META_DESCRIPTION" => "N",
									"SET_META_KEYWORDS" => "N",
									"SET_STATUS_404" => "N",
									"SET_TITLE" => "N",
									"SHOW_404" => "N",
									"STRICT_SECTION_CHECK" => "N",
									"USE_PERMISSIONS" => "N",
									"USE_SHARE" => "N"
								),
								false,
								array('HIDE_ICONS' => "Y")
							);?>
                            
                            <div class="why-list">
                                <div class="row">
	
									<?$APPLICATION->IncludeComponent(
										"bitrix:news.list",
										"jobWhyAdidas",
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
											"IBLOCK_ID" => "10",
											"IBLOCK_TYPE" => "office",
											"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
											"INCLUDE_SUBSECTIONS" => "N",
											"MESSAGE_404" => "",
											"NEWS_COUNT" => "20",
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
                            
							<?$APPLICATION->IncludeComponent(
								"bitrix:news.detail",
								"jobTitleH3",
								Array(
									"ACTIVE_DATE_FORMAT" => "d.m.Y",
									"ADD_ELEMENT_CHAIN" => "N",
									"ADD_SECTIONS_CHAIN" => "N",
									"AJAX_MODE" => "N",
									"AJAX_OPTION_ADDITIONAL" => "",
									"AJAX_OPTION_HISTORY" => "N",
									"AJAX_OPTION_JUMP" => "N",
									"AJAX_OPTION_STYLE" => "N",
									"BROWSER_TITLE" => "-",
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
									"ELEMENT_CODE" => "",
									"ELEMENT_ID" => "41",
									"FIELD_CODE" => array("",""),
									"IBLOCK_ID" => "11",
									"IBLOCK_TYPE" => "office",
									"IBLOCK_URL" => "",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"MESSAGE_404" => "",
									"META_DESCRIPTION" => "-",
									"META_KEYWORDS" => "-",
									"PAGER_BASE_LINK_ENABLE" => "N",
									"PAGER_SHOW_ALL" => "N",
									"PAGER_TEMPLATE" => ".default",
									"PAGER_TITLE" => "Страница",
									"PROPERTY_CODE" => array("",""),
									"SET_BROWSER_TITLE" => "N",
									"SET_CANONICAL_URL" => "N",
									"SET_LAST_MODIFIED" => "N",
									"SET_META_DESCRIPTION" => "N",
									"SET_META_KEYWORDS" => "N",
									"SET_STATUS_404" => "N",
									"SET_TITLE" => "N",
									"SHOW_404" => "N",
									"STRICT_SECTION_CHECK" => "N",
									"USE_PERMISSIONS" => "N",
									"USE_SHARE" => "N"
								),
								false,
								array('HIDE_ICONS' => "Y")
							);?>
	
							<?$APPLICATION->IncludeComponent(
								"bitrix:news.detail",
								"jobBlockWithQuote",
								Array(
									"ACTIVE_DATE_FORMAT" => "d.m.Y",
									"ADD_ELEMENT_CHAIN" => "N",
									"ADD_SECTIONS_CHAIN" => "N",
									"AJAX_MODE" => "N",
									"AJAX_OPTION_ADDITIONAL" => "",
									"AJAX_OPTION_HISTORY" => "N",
									"AJAX_OPTION_JUMP" => "N",
									"AJAX_OPTION_STYLE" => "N",
									"BROWSER_TITLE" => "-",
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
									"ELEMENT_CODE" => "",
									"ELEMENT_ID" => "49",
									"FIELD_CODE" => array("",""),
									"IBLOCK_ID" => "12",
									"IBLOCK_TYPE" => "office",
									"IBLOCK_URL" => "",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"MESSAGE_404" => "",
									"META_DESCRIPTION" => "-",
									"META_KEYWORDS" => "-",
									"PAGER_BASE_LINK_ENABLE" => "N",
									"PAGER_SHOW_ALL" => "N",
									"PAGER_TEMPLATE" => ".default",
									"PAGER_TITLE" => "Страница",
									"PROPERTY_CODE" => array("AUTHOR","POSITION_AND_CITY","TITLE","DESCRIPTION","QUOTE",""),
									"SET_BROWSER_TITLE" => "N",
									"SET_CANONICAL_URL" => "N",
									"SET_LAST_MODIFIED" => "N",
									"SET_META_DESCRIPTION" => "N",
									"SET_META_KEYWORDS" => "N",
									"SET_STATUS_404" => "N",
									"SET_TITLE" => "N",
									"SHOW_404" => "N",
									"STRICT_SECTION_CHECK" => "N",
									"USE_PERMISSIONS" => "N",
									"USE_SHARE" => "N"
								)
							);?>
                            
                            <a name="departments"></a>
                            
							<?$APPLICATION->IncludeComponent(
								"bitrix:news.detail",
								"jobTitleH2",
								Array(
									"ACTIVE_DATE_FORMAT" => "d.m.Y",
									"ADD_ELEMENT_CHAIN" => "N",
									"ADD_SECTIONS_CHAIN" => "N",
									"AJAX_MODE" => "N",
									"AJAX_OPTION_ADDITIONAL" => "",
									"AJAX_OPTION_HISTORY" => "N",
									"AJAX_OPTION_JUMP" => "N",
									"AJAX_OPTION_STYLE" => "N",
									"BROWSER_TITLE" => "-",
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
									"ELEMENT_CODE" => "",
									"ELEMENT_ID" => "48",
									"FIELD_CODE" => array("",""),
									"IBLOCK_ID" => "11",
									"IBLOCK_TYPE" => "office",
									"IBLOCK_URL" => "",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"MESSAGE_404" => "",
									"META_DESCRIPTION" => "-",
									"META_KEYWORDS" => "-",
									"PAGER_BASE_LINK_ENABLE" => "N",
									"PAGER_SHOW_ALL" => "N",
									"PAGER_TEMPLATE" => ".default",
									"PAGER_TITLE" => "Страница",
									"PROPERTY_CODE" => array("",""),
									"SET_BROWSER_TITLE" => "N",
									"SET_CANONICAL_URL" => "N",
									"SET_LAST_MODIFIED" => "N",
									"SET_META_DESCRIPTION" => "N",
									"SET_META_KEYWORDS" => "N",
									"SET_STATUS_404" => "N",
									"SET_TITLE" => "N",
									"SHOW_404" => "N",
									"STRICT_SECTION_CHECK" => "N",
									"USE_PERMISSIONS" => "N",
									"USE_SHARE" => "N"
								),
								false,
								array('HIDE_ICONS' => "Y")
							);?>
                            
                            <div class="dept-list">
                                <?$GLOBALS['arrFilter']["ID"] = $arResult["ELEMENTS_ID"]?>
								<?$APPLICATION->IncludeComponent(
									"bitrix:news.list",
									"",
									Array(
										"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
										"IBLOCK_ID" => $arParams["IBLOCK_ID"],
										"NEWS_COUNT" => $arParams["NEWS_COUNT"],
										"SORT_BY1" => $arParams["SORT_BY1"],
										"SORT_ORDER1" => $arParams["SORT_ORDER1"],
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
										"FILTER_NAME" => "arrFilter",
										"HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
										"CHECK_DATES" => $arParams["CHECK_DATES"],
									),
									$component
								);?>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-group section-group-grey">
            <div class="section section-vacancies">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-12 col-md-8 offset-md-4">
                                <a name="vacancies"></a>
                                
								<?$APPLICATION->IncludeComponent(
									"bitrix:news.detail",
									"jobTitleH2",
									Array(
										"ACTIVE_DATE_FORMAT" => "d.m.Y",
										"ADD_ELEMENT_CHAIN" => "N",
										"ADD_SECTIONS_CHAIN" => "N",
										"AJAX_MODE" => "N",
										"AJAX_OPTION_ADDITIONAL" => "",
										"AJAX_OPTION_HISTORY" => "N",
										"AJAX_OPTION_JUMP" => "N",
										"AJAX_OPTION_STYLE" => "N",
										"BROWSER_TITLE" => "-",
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
										"ELEMENT_CODE" => "",
										"ELEMENT_ID" => "42",
										"FIELD_CODE" => array("",""),
										"IBLOCK_ID" => "11",
										"IBLOCK_TYPE" => "office",
										"IBLOCK_URL" => "",
										"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
										"MESSAGE_404" => "",
										"META_DESCRIPTION" => "-",
										"META_KEYWORDS" => "-",
										"PAGER_BASE_LINK_ENABLE" => "N",
										"PAGER_SHOW_ALL" => "N",
										"PAGER_TEMPLATE" => ".default",
										"PAGER_TITLE" => "Страница",
										"PROPERTY_CODE" => array("",""),
										"SET_BROWSER_TITLE" => "N",
										"SET_CANONICAL_URL" => "N",
										"SET_LAST_MODIFIED" => "N",
										"SET_META_DESCRIPTION" => "N",
										"SET_META_KEYWORDS" => "N",
										"SET_STATUS_404" => "N",
										"SET_TITLE" => "N",
										"SHOW_404" => "N",
										"STRICT_SECTION_CHECK" => "N",
										"USE_PERMISSIONS" => "N",
										"USE_SHARE" => "N"
									),
									false,
									array('HIDE_ICONS' => "Y")
								);?>
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
        <div class="section-group section-group-dark-grey">
            <div class="section section-career">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-12 col-md-8 offset-md-4">
                                <div class="career-list">
                                    <a name="adaptation"></a>
	
									<?$APPLICATION->IncludeComponent(
										"bitrix:news.detail",
										"jobAdaptation",
										Array(
											"ACTIVE_DATE_FORMAT" => "d.m.Y",
											"ADD_ELEMENT_CHAIN" => "N",
											"ADD_SECTIONS_CHAIN" => "N",
											"AJAX_MODE" => "N",
											"AJAX_OPTION_ADDITIONAL" => "",
											"AJAX_OPTION_HISTORY" => "N",
											"AJAX_OPTION_JUMP" => "N",
											"AJAX_OPTION_STYLE" => "N",
											"BROWSER_TITLE" => "-",
											"CACHE_GROUPS" => "N",
											"CACHE_TIME" => "36000000",
											"CACHE_TYPE" => "A",
											"CHECK_DATES" => "Y",
											"COMPONENT_TEMPLATE" => "jobAdaptation",
											"DETAIL_URL" => "",
											"DISPLAY_BOTTOM_PAGER" => "N",
											"DISPLAY_DATE" => "Y",
											"DISPLAY_NAME" => "Y",
											"DISPLAY_PICTURE" => "Y",
											"DISPLAY_PREVIEW_TEXT" => "Y",
											"DISPLAY_TOP_PAGER" => "N",
											"ELEMENT_CODE" => "",
											"ELEMENT_ID" => "50",
											"FIELD_CODE" => array(0=>"PREVIEW_PICTURE",1=>"",),
											"IBLOCK_ID" => "13",
											"IBLOCK_TYPE" => "office",
											"IBLOCK_URL" => "",
											"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
											"MESSAGE_404" => "",
											"META_DESCRIPTION" => "-",
											"META_KEYWORDS" => "-",
											"PAGER_BASE_LINK_ENABLE" => "N",
											"PAGER_SHOW_ALL" => "N",
											"PAGER_TEMPLATE" => ".default",
											"PAGER_TITLE" => "Страница",
											"PROPERTY_CODE" => array(0=>"TITLE_BTN",1=>"LINK_BTN",2=>"",),
											"SET_BROWSER_TITLE" => "N",
											"SET_CANONICAL_URL" => "N",
											"SET_LAST_MODIFIED" => "N",
											"SET_META_DESCRIPTION" => "N",
											"SET_META_KEYWORDS" => "N",
											"SET_STATUS_404" => "N",
											"SET_TITLE" => "N",
											"SHOW_404" => "N",
											"STRICT_SECTION_CHECK" => "N",
											"USE_PERMISSIONS" => "N",
											"USE_SHARE" => "N"
										)
									);?>
                                    
                                    <a name="career"></a>
	
									<?$APPLICATION->IncludeComponent(
										"bitrix:news.detail",
										"jobAdaptation",
										Array(
											"ACTIVE_DATE_FORMAT" => "d.m.Y",
											"ADD_ELEMENT_CHAIN" => "N",
											"ADD_SECTIONS_CHAIN" => "N",
											"AJAX_MODE" => "N",
											"AJAX_OPTION_ADDITIONAL" => "",
											"AJAX_OPTION_HISTORY" => "N",
											"AJAX_OPTION_JUMP" => "N",
											"AJAX_OPTION_STYLE" => "N",
											"BROWSER_TITLE" => "-",
											"CACHE_GROUPS" => "N",
											"CACHE_TIME" => "36000000",
											"CACHE_TYPE" => "A",
											"CHECK_DATES" => "Y",
											"COMPONENT_TEMPLATE" => "jobAdaptation",
											"DETAIL_URL" => "",
											"DISPLAY_BOTTOM_PAGER" => "N",
											"DISPLAY_DATE" => "Y",
											"DISPLAY_NAME" => "Y",
											"DISPLAY_PICTURE" => "Y",
											"DISPLAY_PREVIEW_TEXT" => "Y",
											"DISPLAY_TOP_PAGER" => "N",
											"ELEMENT_CODE" => "",
											"ELEMENT_ID" => "51",
											"FIELD_CODE" => array(0=>"PREVIEW_PICTURE",1=>"",),
											"IBLOCK_ID" => "13",
											"IBLOCK_TYPE" => "office",
											"IBLOCK_URL" => "",
											"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
											"MESSAGE_404" => "",
											"META_DESCRIPTION" => "-",
											"META_KEYWORDS" => "-",
											"PAGER_BASE_LINK_ENABLE" => "N",
											"PAGER_SHOW_ALL" => "N",
											"PAGER_TEMPLATE" => ".default",
											"PAGER_TITLE" => "Страница",
											"PROPERTY_CODE" => array(0=>"TITLE_BTN",1=>"LINK_BTN",2=>"",),
											"SET_BROWSER_TITLE" => "N",
											"SET_CANONICAL_URL" => "N",
											"SET_LAST_MODIFIED" => "N",
											"SET_META_DESCRIPTION" => "N",
											"SET_META_KEYWORDS" => "N",
											"SET_STATUS_404" => "N",
											"SET_TITLE" => "N",
											"SHOW_404" => "N",
											"STRICT_SECTION_CHECK" => "N",
											"USE_PERMISSIONS" => "N",
											"USE_SHARE" => "N"
										)
									);?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-success">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-12 col-md-8 offset-md-4">
                                <a name="success"></a>
                                
								<?$APPLICATION->IncludeComponent(
									"bitrix:news.detail",
									"jobTitleH2",
									Array(
										"ACTIVE_DATE_FORMAT" => "d.m.Y",
										"ADD_ELEMENT_CHAIN" => "N",
										"ADD_SECTIONS_CHAIN" => "N",
										"AJAX_MODE" => "N",
										"AJAX_OPTION_ADDITIONAL" => "",
										"AJAX_OPTION_HISTORY" => "N",
										"AJAX_OPTION_JUMP" => "N",
										"AJAX_OPTION_STYLE" => "N",
										"BROWSER_TITLE" => "-",
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
										"ELEMENT_CODE" => "",
										"ELEMENT_ID" => "45",
										"FIELD_CODE" => array("",""),
										"IBLOCK_ID" => "11",
										"IBLOCK_TYPE" => "office",
										"IBLOCK_URL" => "",
										"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
										"MESSAGE_404" => "",
										"META_DESCRIPTION" => "-",
										"META_KEYWORDS" => "-",
										"PAGER_BASE_LINK_ENABLE" => "N",
										"PAGER_SHOW_ALL" => "N",
										"PAGER_TEMPLATE" => ".default",
										"PAGER_TITLE" => "Страница",
										"PROPERTY_CODE" => array("",""),
										"SET_BROWSER_TITLE" => "N",
										"SET_CANONICAL_URL" => "N",
										"SET_LAST_MODIFIED" => "N",
										"SET_META_DESCRIPTION" => "N",
										"SET_META_KEYWORDS" => "N",
										"SET_STATUS_404" => "N",
										"SET_TITLE" => "N",
										"SHOW_404" => "N",
										"STRICT_SECTION_CHECK" => "N",
										"USE_PERMISSIONS" => "N",
										"USE_SHARE" => "N"
									),
									false,
									array('HIDE_ICONS' => "Y")
								);?>
                                
                                <div class="success-list">
                                    <div class="row">
										<?$APPLICATION->IncludeComponent(
											"bitrix:news.list",
											"jobHistorySuccess",
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
												"COMPONENT_TEMPLATE" => "jobHistorySuccess",
												"DETAIL_URL" => "",
												"DISPLAY_BOTTOM_PAGER" => "N",
												"DISPLAY_DATE" => "Y",
												"DISPLAY_NAME" => "Y",
												"DISPLAY_PICTURE" => "Y",
												"DISPLAY_PREVIEW_TEXT" => "Y",
												"DISPLAY_TOP_PAGER" => "N",
												"FIELD_CODE" => array(0=>"PREVIEW_TEXT",1=>"",),
												"FILTER_NAME" => "",
												"HIDE_LINK_WHEN_NO_DETAIL" => "N",
												"IBLOCK_ID" => "14",
												"IBLOCK_TYPE" => "history_success",
												"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
												"INCLUDE_SUBSECTIONS" => "Y",
												"MESSAGE_404" => "",
												"NEWS_COUNT" => "3",
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
												"PROPERTY_CODE" => array(0=>"CITY",1=>"POSITION",2=>"QUOTE",3=>"",),
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
                                <div class="all-link-wrapper">
									<?$APPLICATION->IncludeComponent(
										"bitrix:news.detail",
										"jobButtonSuccess",
										Array(
											"ACTIVE_DATE_FORMAT" => "d.m.Y",
											"ADD_ELEMENT_CHAIN" => "N",
											"ADD_SECTIONS_CHAIN" => "N",
											"AJAX_MODE" => "N",
											"AJAX_OPTION_ADDITIONAL" => "",
											"AJAX_OPTION_HISTORY" => "N",
											"AJAX_OPTION_JUMP" => "N",
											"AJAX_OPTION_STYLE" => "N",
											"BROWSER_TITLE" => "-",
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
											"ELEMENT_CODE" => "",
											"ELEMENT_ID" => "55",
											"FIELD_CODE" => array("",""),
											"IBLOCK_ID" => "15",
											"IBLOCK_TYPE" => "office",
											"IBLOCK_URL" => "",
											"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
											"MESSAGE_404" => "",
											"META_DESCRIPTION" => "-",
											"META_KEYWORDS" => "-",
											"PAGER_BASE_LINK_ENABLE" => "N",
											"PAGER_SHOW_ALL" => "N",
											"PAGER_TEMPLATE" => ".default",
											"PAGER_TITLE" => "Страница",
											"PROPERTY_CODE" => array("LINK",""),
											"SET_BROWSER_TITLE" => "N",
											"SET_CANONICAL_URL" => "N",
											"SET_LAST_MODIFIED" => "N",
											"SET_META_DESCRIPTION" => "N",
											"SET_META_KEYWORDS" => "N",
											"SET_STATUS_404" => "N",
											"SET_TITLE" => "N",
											"SHOW_404" => "N",
											"STRICT_SECTION_CHECK" => "N",
											"USE_PERMISSIONS" => "N",
											"USE_SHARE" => "N"
										)
									);?>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-excursion">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-12 col-md-8 offset-md-4"><a name="excursion"></a>
								<?$APPLICATION->IncludeComponent(
									"bitrix:news.detail",
									"jobTitleH2",
									Array(
										"ACTIVE_DATE_FORMAT" => "d.m.Y",
										"ADD_ELEMENT_CHAIN" => "N",
										"ADD_SECTIONS_CHAIN" => "N",
										"AJAX_MODE" => "N",
										"AJAX_OPTION_ADDITIONAL" => "",
										"AJAX_OPTION_HISTORY" => "N",
										"AJAX_OPTION_JUMP" => "N",
										"AJAX_OPTION_STYLE" => "N",
										"BROWSER_TITLE" => "-",
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
										"ELEMENT_CODE" => "",
										"ELEMENT_ID" => "46",
										"FIELD_CODE" => array("",""),
										"IBLOCK_ID" => "11",
										"IBLOCK_TYPE" => "office",
										"IBLOCK_URL" => "",
										"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
										"MESSAGE_404" => "",
										"META_DESCRIPTION" => "-",
										"META_KEYWORDS" => "-",
										"PAGER_BASE_LINK_ENABLE" => "N",
										"PAGER_SHOW_ALL" => "N",
										"PAGER_TEMPLATE" => ".default",
										"PAGER_TITLE" => "Страница",
										"PROPERTY_CODE" => array("",""),
										"SET_BROWSER_TITLE" => "N",
										"SET_CANONICAL_URL" => "N",
										"SET_LAST_MODIFIED" => "N",
										"SET_META_DESCRIPTION" => "N",
										"SET_META_KEYWORDS" => "N",
										"SET_STATUS_404" => "N",
										"SET_TITLE" => "N",
										"SHOW_404" => "N",
										"STRICT_SECTION_CHECK" => "N",
										"USE_PERMISSIONS" => "N",
										"USE_SHARE" => "N"
									),
									false,
									array('HIDE_ICONS' => "Y")
								);?>
                                <div class="block-wide">
                                
										<?$APPLICATION->IncludeComponent(
											"bitrix:news.detail",
											"jobSliderAtEnd",
											Array(
												"ACTIVE_DATE_FORMAT" => "d.m.Y",
												"ADD_ELEMENT_CHAIN" => "N",
												"ADD_SECTIONS_CHAIN" => "N",
												"AJAX_MODE" => "N",
												"AJAX_OPTION_ADDITIONAL" => "",
												"AJAX_OPTION_HISTORY" => "N",
												"AJAX_OPTION_JUMP" => "N",
												"AJAX_OPTION_STYLE" => "N",
												"BROWSER_TITLE" => "-",
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
												"ELEMENT_CODE" => "",
												"ELEMENT_ID" => "56",
												"FIELD_CODE" => array("",""),
												"IBLOCK_ID" => "16",
												"IBLOCK_TYPE" => "office",
												"IBLOCK_URL" => "",
												"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
												"MESSAGE_404" => "",
												"META_DESCRIPTION" => "-",
												"META_KEYWORDS" => "-",
												"PAGER_BASE_LINK_ENABLE" => "N",
												"PAGER_SHOW_ALL" => "N",
												"PAGER_TEMPLATE" => ".default",
												"PAGER_TITLE" => "Страница",
												"PROPERTY_CODE" => array("","SLIDER",""),
												"SET_BROWSER_TITLE" => "N",
												"SET_CANONICAL_URL" => "N",
												"SET_LAST_MODIFIED" => "N",
												"SET_META_DESCRIPTION" => "N",
												"SET_META_KEYWORDS" => "N",
												"SET_STATUS_404" => "N",
												"SET_TITLE" => "N",
												"SHOW_404" => "N",
												"STRICT_SECTION_CHECK" => "N",
												"USE_PERMISSIONS" => "N",
												"USE_SHARE" => "N"
											),
											false,
											array('HIDE_ICONS' => "Y")
										);?>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-group section-group-grey">
            <div class="section section-faq">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-12 col-md-8 offset-md-4"><a name="faq"></a>
								<?$APPLICATION->IncludeComponent(
									"bitrix:news.detail",
									"jobTitleH2",
									Array(
										"ACTIVE_DATE_FORMAT" => "d.m.Y",
										"ADD_ELEMENT_CHAIN" => "N",
										"ADD_SECTIONS_CHAIN" => "N",
										"AJAX_MODE" => "N",
										"AJAX_OPTION_ADDITIONAL" => "",
										"AJAX_OPTION_HISTORY" => "N",
										"AJAX_OPTION_JUMP" => "N",
										"AJAX_OPTION_STYLE" => "N",
										"BROWSER_TITLE" => "-",
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
										"ELEMENT_CODE" => "",
										"ELEMENT_ID" => "47",
										"FIELD_CODE" => array("",""),
										"IBLOCK_ID" => "11",
										"IBLOCK_TYPE" => "office",
										"IBLOCK_URL" => "",
										"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
										"MESSAGE_404" => "",
										"META_DESCRIPTION" => "-",
										"META_KEYWORDS" => "-",
										"PAGER_BASE_LINK_ENABLE" => "N",
										"PAGER_SHOW_ALL" => "N",
										"PAGER_TEMPLATE" => ".default",
										"PAGER_TITLE" => "Страница",
										"PROPERTY_CODE" => array("",""),
										"SET_BROWSER_TITLE" => "N",
										"SET_CANONICAL_URL" => "N",
										"SET_LAST_MODIFIED" => "N",
										"SET_META_DESCRIPTION" => "N",
										"SET_META_KEYWORDS" => "N",
										"SET_STATUS_404" => "N",
										"SET_TITLE" => "N",
										"SHOW_404" => "N",
										"STRICT_SECTION_CHECK" => "N",
										"USE_PERMISSIONS" => "N",
										"USE_SHARE" => "N"
									),
									false,
									array('HIDE_ICONS' => "Y")
								);?>
                                <div class="faq-list">
									<?$APPLICATION->IncludeComponent(
										"bitrix:news.list",
										"jobQuoteAnswer",
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
											"FIELD_CODE" => array("", ""),
											"FILTER_NAME" => "",
											"HIDE_LINK_WHEN_NO_DETAIL" => "N",
											"IBLOCK_ID" => "17",
											"IBLOCK_TYPE" => "office",
											"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
											"INCLUDE_SUBSECTIONS" => "N",
											"MESSAGE_404" => "",
											"NEWS_COUNT" => "1000",
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
											"PROPERTY_CODE" => array("ANSWER", ""),
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
										)
									);?>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?/*
<?if($arParams["USE_RSS"]=="Y"):?>
	<?
	if(method_exists($APPLICATION, 'addheadstring'))
		$APPLICATION->AddHeadString('<link rel="alternate" type="application/rss+xml" title="'.$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["rss"].'" href="'.$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["rss"].'" />');
	?>
	<a href="<?=$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["rss"]?>" title="rss" target="_self"><img alt="RSS" src="<?=$templateFolder?>/images/gif-light/feed-icon-16x16.gif" border="0" align="right" /></a>
<?endif?>

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

