<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "Центр дистрибуции");
$APPLICATION->SetTitle("Работай в центре дистрибуции adidas");
?>
<main>
	<div class="page-header">
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.detail",
			"distributionBackground",
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
				"ELEMENT_ID" => "219",
				"FIELD_CODE" => array(0=>"",1=>"",),
				"IBLOCK_ID" => "40",
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
							"bitrix:news.detail",
							"distributionMenu",
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
								"ELEMENT_ID" => "220",
								"FIELD_CODE" => array(0=>"",1=>"",),
								"IBLOCK_ID" => "41",
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
							),
							false,
							array('HIDE_ICONS' => "Y")
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
							<div class="h1"><?$APPLICATION->ShowTitle(false)?></div>
						</div>
						<div class="page-content">
							<?$APPLICATION->IncludeComponent(
								"bitrix:news.detail",
								"distributionSubtitle",
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
									"ELEMENT_ID" => "221",
									"FIELD_CODE" => array(0=>"",1=>"",),
									"IBLOCK_ID" => "42",
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
								),
								false,
								array('HIDE_ICONS' => "Y")
							);?>
							<div class="why-list">
								<div class="row">
									<?$APPLICATION->IncludeComponent(
										"bitrix:news.list",
										"distributionWhy",
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
											"IBLOCK_ID" => "43",
											"IBLOCK_TYPE" => "distribution",
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
								"distributionVideo",
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
									"ELEMENT_ID" => "226",
									"FIELD_CODE" => array(0=>"",1=>"",),
									"IBLOCK_ID" => "44",
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
								),
								false,
								array('HIDE_ICONS' => "Y")
							);?>
							
							
							
							<?$APPLICATION->IncludeComponent(
								"bitrix:news.detail",
								"distributionQuote",
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
									"ELEMENT_ID" => "227",
									"FIELD_CODE" => array(0=>"",1=>"",),
									"IBLOCK_ID" => "45",
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
									"PROPERTY_CODE" => array(
										0=>"IMG",
										1=>"AUTHOR",
										2=>"POSITION",
										3=>"CITY",
										4=>"QUOTE",
										5=>"TITLE_H4",
										6=>"TEXT",
										),
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
							<a name="departments"></a>
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
                            <div class="col-12 col-md-8 offset-md-4"><a name="vacancies"></a>
								<?$APPLICATION->IncludeComponent(
									"bitrix:news.detail",
									"distributionTitleH2",
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
										"ELEMENT_ID" => "228",
										"FIELD_CODE" => array("",""),
										"IBLOCK_ID" => "46",
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
<!--                                <div class="h2">--><?//=($arResult["PROPERTIES"]["TITLE_BLOCK"]["~VALUE"]) ? $arResult["PROPERTIES"]["TITLE_BLOCK"]["~VALUE"] : "Последние вакансии"?><!--</div>-->
                                <div class="vac-list vac-list-alt">
                                    <div class="row">
                            
                            
                                        <?$APPLICATION->IncludeComponent(
                                            "bitrix:news.list",
                                            "retailLastVac",
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
								<?$APPLICATION->IncludeComponent(
									"bitrix:news.detail",
									"distributionBtnLastVac",
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
										"ELEMENT_ID" => "228",
										"FIELD_CODE" => array("",""),
										"IBLOCK_ID" => "46",
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
								<div class="career-list"><a name="adaptation"></a>
									<?$APPLICATION->IncludeComponent(
										"bitrix:news.detail",
										"distributionCareer",
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
											"ELEMENT_ID" => "229",
											"FIELD_CODE" => array(0=>"PREVIEW_PICTURE",1=>"",),
											"IBLOCK_ID" => "47",
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
											"PROPERTY_CODE" => array(
												0=>"TITLE_BTN",
												1=>"TITLE_BLOCK",
											),
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
									
									<a name="career"></a>
									<?$APPLICATION->IncludeComponent(
										"bitrix:news.detail",
										"distributionCareer",
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
									"ELEMENT_ID" => "230",
									"FIELD_CODE" => array(0=>"PREVIEW_PICTURE",1=>"",),
									"IBLOCK_ID" => "47",
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
									"PROPERTY_CODE" => array(
									0=>"TITLE_BTN",
									1=>"TITLE_BLOCK",
									),
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
									
									<a name="success"></a>
									<?$APPLICATION->IncludeComponent(
										"bitrix:news.detail",
										"distributionCareer",
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
											"ELEMENT_ID" => "231",
											"FIELD_CODE" => array(0=>"PREVIEW_PICTURE",1=>"",),
											"IBLOCK_ID" => "47",
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
											"PROPERTY_CODE" => array(
												0=>"TITLE_BTN",
												1=>"TITLE_BLOCK",
											),
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
			<div class="section section-excursion">
				<div class="container">
					<div class="section-content">
						<div class="row">
							<?$APPLICATION->IncludeComponent(
								"bitrix:news.detail",
								"distributionSlider",
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
									"ELEMENT_ID" => "232",
									"FIELD_CODE" => array(0=>"",1=>"",),
									"IBLOCK_ID" => "48",
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
									"PROPERTY_CODE" => array(
										0=>"SLIDER",
									),
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
		<div class="section-group section-group-grey">
			<div class="section section-faq">
				<div class="container">
					<div class="section-content">
						<div class="row">
							<div class="col-12 col-md-8 offset-md-4"><a name="faq"></a>
								<div class="h2">Вопросы и ответы</div>
								<div class="faq-list">
									<?$APPLICATION->IncludeComponent(
										"bitrix:news.list",
										"distributionFAQ",
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
											"IBLOCK_ID" => "49",
											"IBLOCK_TYPE" => "distribution",
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
											"PROPERTY_CODE" => array("",""),
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>



<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>